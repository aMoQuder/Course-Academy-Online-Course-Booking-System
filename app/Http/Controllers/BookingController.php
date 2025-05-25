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
        $user_id=auth()->user()->id;
        foreach ($book as $item) {
            if ($item->course == $request->course&&$item->book_id == $user_id) {
                return redirect()->back()->with("massege", "you booked this course please book ather course
                 or wait manger of acadmy");
            }
        }
        $bookid=$request->user_id;
        booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'course' => $request->course,
            'book_id' => $bookid,
        ]);
        return redirect()->back()->with("massege", "success booking ");
    }

    public function looking($id)
    {
        $book = booking::FindOrfail($id);
        $book->status = "sent";
        $book->save();

                // 2. تجهيز رقم الهاتف بصيغة واتساب الصحيحة
        $rawPhone = $book->phone;
        $cleanedPhone = ltrim($rawPhone, '0'); // حذف الصفر الأول فقط
        $phone = "20" . $cleanedPhone; // غيّر "20" حسب كود دولتك

        $message = "Mr: {$book->name}, you have booked  course {$book->course} . Your booking is confirmed. Thank you for choosing us.";

        // تنسيق الرسالة لتكون صالحة في URL
        $message = urlencode($message);

        // توليد الرابط
        $link = "https://api.whatsapp.com/send?phone={$phone}&text={$message}";

        // إعادة توجيه المستخدم إلى رابط واتساب
        return redirect()->away($link);
    }
    public function show($id)
    {
        $instruct = instructor::all();
        $courses = course::all();
        $book = booking::FindOrfail($id);
        if ($book->status =="sent") {
            return view('showBook', ['result' => $book, 'course' => $courses, 'instructores' => $instruct]);
        }
        $book->status = "showed";
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
