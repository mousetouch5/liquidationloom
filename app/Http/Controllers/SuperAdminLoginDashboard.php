<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class SuperAdminLoginDashboard extends Controller
{
    //
    public function index(){
        return view('superadmin.dashboard');
    }


public function listPendingApprovals()
{
    $pendingUsers = User::where('is_approved', 0)->get();

    // Transform and fix the image path
    $pendingUsers->transform(function ($user) {
        if ($user->id_picture_path) {
            // Remove leading slash and correct the path to public/resources/id_pictures
            $relativePath = ltrim($user->id_picture_path, '/');
            $user->id_picture_path = asset($relativePath);
        } else {
            $user->id_picture_path = null;
        }
        return $user;
    });

    return response()->json($pendingUsers);
}


    public function approveUser($id){
     $user = User::find($id);
        if ($user) {
        // Set the 'is_approved' field to 1 when the user is approved
        $user->is_approved = 1;
        $user->save();
        return response()->json(['success' => true, 'message' => 'User approved successfully!']);
        }
     return response()->json(['success' => false, 'message' => 'User not found!']);
     }

    public function rejectUser($id)
        {
    $user = User::find($id);
    if ($user) {
        // Set the status to 'rejected'
        $user->status = 'rejected';
        
        // Delete the user
        $user->delete();
        
        // Return a success response
        return response()->json(['success' => true, 'message' => 'User rejected and deleted successfully!']);
    }
    
    // Return an error response if the user was not found
    return response()->json(['success' => false, 'message' => 'User not found!']);
    }


}
