<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreContactMessageRequest;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendContactForm(StoreContactMessageRequest $request)
    {
       DB::beginTransaction();
       try {
           $customer = new Customer();
           $customer = $customer->create([
               'name' => $request['name'],
               'email' => $request['email'],
           ]);

           $message = new Message();
           $message->create([
               'subject' => $request['subject'],
               'body' => $request['body'],
               'customer_id' => $customer->id
           ]);

           DB::commit();

           return response()->json([
               'message' => 'Thank you, your message was sent successfully'
           ]);

           //{message: ""jhfkljdfl}

       }catch (\Exception $e) {
           DB::rollBack();

           return response()->json([
               'message' => $e->getMessage()
           ]);
       }
    }
}
