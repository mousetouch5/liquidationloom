<?php

namespace App\Http\Controllers;
use App\Models\SurveyLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

use Illuminate\Support\Facades\DB;

class SurveyLikeController extends Controller
{
public function storeLikeUnlike(Request $request)
{
    // Log the incoming request data for debugging purposes
    Log::info('Received request to store like/unlike:', [
        'user_id' => $request->user_id,
        'event_id' => $request->event_id,
        'liked' => $request->liked,
    ]);

    try {
        // Validate the incoming request
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'liked' => 'required|boolean',
        ]);

        // Check if a like/unlike record already exists for this user and event
        $existingRecord = SurveyLike::where('user_id', $validated['user_id'])
                                    ->where('event_id', $validated['event_id'])
                                    ->exists();

        if ($existingRecord) {
            // Log that the user has already submitted a response
            Log::info('User has already submitted a response for this event.', [
                'user_id' => $validated['user_id'],
                'event_id' => $validated['event_id'],
            ]);

            // Return a response indicating that resubmission is not allowed
            return response()->json(['error' => 'You have already submitted your response.'], 403);
        }

        // Log that we're creating a new record
        Log::info('Creating new like/unlike record:', [
            'user_id' => $validated['user_id'],
            'event_id' => $validated['event_id'],
            'liked' => $validated['liked'],
        ]);

        // Create a new record
        SurveyLike::create([
            'user_id' => $validated['user_id'],
            'event_id' => $validated['event_id'],
            'liked' => $validated['liked'],
        ]);

        // Log success
        Log::info('Successfully processed like/unlike request.');

        // Return a success response
        return response()->json(['success' => true]);

    } catch (\Exception $e) {
        // Log the error
        Log::error('Error processing like/unlike request:', [
            'error' => $e->getMessage(),
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
            'liked' => $request->liked,
        ]);

        // Return an error response
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}

public function getSurveyCounts(Request $request)
{
    $eventId = $request->input('event_id');

    // Validate the eventId
    if (!$eventId) {
        return response()->json([
            'success' => false,
            'message' => 'Event ID is required'
        ], 400);
    }

    // Fetch the counts for the specific event
    $likeCount = SurveyLike::where('event_id', $eventId)->where('liked', true)->count();
    $unlikeCount = SurveyLike::where('event_id', $eventId)->where('liked', false)->count();
    $totalCount = $likeCount + $unlikeCount;

    // Return the counts as JSON
    return response()->json([
        'likeCount' => $likeCount,
        'unlikeCount' => $unlikeCount,
        'totalCount' => $totalCount,
        'success' => true
    ]);
}







public function getSurveyData()
{
    // Fetch likes and unlikes grouped by event with event details
  $data = DB::table('surveys')
    ->select(
        'events.eventName as event_name', // Use the correct column name
        DB::raw('SUM(CASE WHEN surveys.liked = 1 THEN 1 ELSE 0 END) as total_likes'),
        DB::raw('SUM(CASE WHEN surveys.liked = 0 THEN 1 ELSE 0 END) as total_unlikes')
    )
    ->join('events', 'surveys.event_id', '=', 'events.id') // Ensure this join is correct
    ->groupBy('surveys.event_id', 'events.eventName') // Group by the correct column
    ->get();

    // Format and calculate like percentages
    $formattedData = $data->map(function ($item) {
        $total = $item->total_likes + $item->total_unlikes;
        $likesPercentage = $total > 0 ? round(($item->total_likes / $total) * 100, 2) : 0;

        return [
            'event_name' => $item->event_name,
            'likes_percentage' => $likesPercentage,
            'unlikes_percentage' => 100 - $likesPercentage,
        ];
    });

    return response()->json($formattedData);
}









}
