<?php
// app/Events/BookCourseSubmitted.php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\BookCourse;

class BookCourseSubmitted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $bookCourse;

    public function __construct($name, $phone)
    {
        $this->bookCourse = [
            'name' => $name,
            'phone' => $phone,
        ];
    }

    public function broadcastOn()
    {
        return new Channel('admin-notifications');
    }
}
