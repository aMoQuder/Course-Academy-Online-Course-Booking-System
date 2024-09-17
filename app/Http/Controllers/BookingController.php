<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookingRequest;
use App\Model\booking;
use App\Model\course;
use App\Model\instructor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(bookingRequest $request)
    {
        $book = booking::all();
        foreach ($book as $item) {
            if ($item->course == $request->course&&$item->book_id == $request->book_id) {
                return redirect()->back()->with("massege", "you booked this course please book ather course
                 or wait manger of acadmy");
            }
        }
        $bookid=$request->user_id;
        booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'course' => $request->course,
            'nafigation' => 0,
            'book_id' => $bookid,
        ]);
        return redirect()->back()->with("massege", "success booking ");
    }

    public function looking($id)
    {

        $book1 = booking::FindOrfail($id);
        if ($book1->nafigation ==3) {
            return redirect()->route('booking');
        }
        $book1->nafigation = 2;
        $book1->save();
        return redirect()->route('booking');
    }
    public function show($id)
    {
        $instruct = instructor::all();
        $courses = course::all();
        $book = booking::FindOrfail($id);
        $book->nafigation = 1;
        $book->save();
        return view('showBook', ['result' => $book, 'course' => $courses, 'instructores' => $instruct]);
    }
    public function delet($id)
    {
        $book = booking::FindOrfail($id);
        $book->delete();
        return redirect()->route('booking')->with("massege", "success booking delete");
    }
    public function index()
    {
        $instruct = instructor::all();
        $courses = course::all();
        $book = booking::all();
        return view('bookcourse', ['book' => $book, 'result' => $courses, 'instructores' => $instruct]);
    }
}
