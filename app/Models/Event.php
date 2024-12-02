<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'eventName',
        'eventDescription',
        'eventDate',
        'eventImage',
        'eventSpent',
        'eventTime',
        'budget',
        'organizer',
        'eventLocation',
        'eventType'
    ];

    protected $casts = [
        'eventDate' => 'date', // Ensure eventDate is cast to a date format
        'budget' => 'decimal:2', // Ensure budget is cast to a decimal with 2 places
        'eventSpent' => 'decimal:2',
    ];

    // Example of an accessor for formatted budget
    public function getFormattedBudgetAttribute()
    {
        return '$' . number_format($this->budget, 2);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'event_id'); // Correct relationship
    }

}