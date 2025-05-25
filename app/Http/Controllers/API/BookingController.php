<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\CoursreRequest;
use App\Model\booking;
use App\Http\Resources\BookingResource;

class BookingController extends Controller {
    // show all booking function

    public function index(): JsonResponse {
        $Booking = BookingResource::collection( booking::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all  of Bookings retrived',
            'date'=>$Booking

        ], 201 );
    }
    //  booking function

    public function booking( bookingRequest $request ) {

        //make sure he book before that
        $book = booking::all();
        $user_id = auth()->user()->id;
        foreach ( $book as $item ) {
            if ( $item->course == $request->course && $item->book_id == $user_id ) {
                return response()->json( [
                    'success'=>false,
                    'massage'=>'you booked this course please book ather course
                     or wait manger of acadmy',
                    'date'=>null
                ], 404 );
            }
        }

        //create booking
        $booking =  booking::create( [
            'name' => $request->name,
            'phone' => $request->phone,
            'course' => $request->course,
            'book_id' => $user_id,
        ] );

        return response()->json( [
            'success'=>true,
            'massage'=>'you booked this course ',
            'date'=>new BookingResource( $booking )
        ], 404 );

    }

    public function sent( $id ) {
        $book = booking::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this booking is not found',
                'date'=>null
            ], 404 );
        }

        $book->status = 'sent';
        $book->save();

        // 2. تجهيز رقم الهاتف بصيغة واتساب الصحيحة
        $rawPhone = $book->phone;
        $cleanedPhone = ltrim( $rawPhone, '0' );
        // حذف الصفر الأول فقط
        $phone = '20' . $cleanedPhone;
        // غيّر '20' حسب كود دولتك

        $message = "Mr: {$book->name}, you have booked  course {$book->course} . Your booking is confirmed. Thank you for choosing us.";

        // تنسيق الرسالة لتكون صالحة في URL
        $message = urlencode( $message );

        // توليد الرابط
        $link = "https://api.whatsapp.com/send?phone={$phone}&text={$message}";

        // إعادة توجيه المستخدم إلى رابط واتساب
        return redirect()->away( $link );
    }


    public function show( $id ) {
        $book = booking::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this booking is not found',
                'date'=>null
            ], 404 );
        }
        if ( $book->status == 'sent' ) {
            $book->status = 'sent';
        } else {
            $book->status = 'showed';
        }
        $book->save();
        return response()->json( [
            'success'=>true,
            'massage'=>' booked is showed',
            'date'=>new BookingResource( $book )

        ], 201 );
    }


    public function delete(Request $request, $id ) {
        $book = booking::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this booking is not found',
                'date'=>null
            ], 404 );
        }

        $book->delete();
         return response()->json( [
                'success'=>true,
                'massage'=>'this booking is deleted',
                'date'=>null
            ], 201 );
    }
}
