<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Event_user;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function myAccount()
    {
        $token = Auth::user()->createToken('my-app-token')->plainTextToken;

        return view('myaccount')->with('token', $token);
    }

    public function getEventsA($user_id)
    {
        $token = $request->user()->currentAccessToken();

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $eventIds = DB::table('event_user')->where('user_id', $user_id)->pluck('event_id');

        return response()->json($eventIds);

        // $user = User::findOrFail($user_id);
        // $eventIds = $user->events->pluck('id');

        // return response()->json($eventIds);
    }

    public function getEventsB($user_id)
    {

        $token = $request->user()->currentAccessToken();

        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $user = User::findOrFail($user_id);
        $events = $user->events()->with('topics.lessons', 'topics.instructors')->get();

        return response()->json($events);

        // $events = DB::table('events')
        //         ->join('event_user', 'events.id', '=', 'event_user.event_id')
        //         ->join('event_topic_lesson_instructor', 'events.id', '=', 'event_topic_lesson_instructor.event_id')
        //         ->join('topics', 'event_topic_lesson_instructor.topic_id', '=', 'topics.id')
        //         ->join('lessons', 'event_topic_lesson_instructor.lesson_id', '=', 'lessons.id')
        //         ->join('instructors', 'event_topic_lesson_instructor.instructor_id', '=', 'instructors.id')
        //         ->select('events.id as event_id', 'topics.id as topic_id', 'lessons.id as lesson_id', 'instructors.id as instructor_id')
        //         ->where('event_user.user_id', '=', $user_id)
        //         ->get();

        // return response()->json($events);

    }

}
