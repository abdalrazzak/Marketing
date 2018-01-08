<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 07/12/17
 * Time: 11:34 م
 */

namespace App\Http\Controllers\admin;


use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyMessageRequest;
use App\Http\Requests\StoreContactMessageRequest;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index(){
        $customers=Customer::all();
        $messages=Message::all();
        return view('admin.customer.index',compact('messages','customers'));
    }
    public function sendContactForm(StoreContactMessageRequest $request)
    {
        DB::beginTransaction();

        try{
            $customer=new Customer();
            $customer= $customer->create([
                'name'=>$request['name'],
                'email'=>$request['email']
            ]);
            $message=new Message();
            $message->create([
                'subject'=>$request['subject'],
                'body'=>$request['body'],
                'customer_id'=>$customer->id
            ]);
            DB::commit();
            return  response()->json(['message'=>'thank you , your message was sent successfully']);

        }catch (\Exception $e)
        {
            DB::rollBack();
            return  response()->json(['message'=>$e->getMessage()]);
        }


    }
    public function readMail($id)
    {

        $message=Message::find($id);
        $messageCustomer=$message->customer_id;
        $customer=Customer::find($messageCustomer);

        return view('admin.customer.mail',compact('message','customer'));
    }
    public function delete($id)
    {
        $message=Message::find($id);
        $message->delete();

        return redirect()->route('admin.customer.index')
            ->with('success', 'You have successfully delete the message');
    }

    public function deleteMany(Request $request)
    {
        $ids = $request['messages'];
        dd($ids);
        foreach ($ids as $id) {
            $message=Message::find($id);
            $message->delete();
        }

        return redirect()->route('admin.customer.index')
            ->with('success', 'You have successfully delete the message');
    }

    public function send(ReplyMessageRequest $request)
    {
        DB::beginTransaction();
        try {
            $parentMsg = Message::find($request['parent_id']);
            $customer = $parentMsg->customer;
            $message=new Message();
            $message = $message->create([
                'subject' => '',
                'body' => $request['body'],
                'customer_id' => $customer->id,
                'parent_id' => $parentMsg->id,
                'user_id' => Auth::user()->id
            ]);

            $data = [
                'replyMsg' => $message
            ];

            Mail::send('admin.emails.reply-msg', $data, function ($msg) use ($customer) {
                $msg->to($customer->email);
                $msg->from('info@marketing.com', 'Marketing');
                $msg->subject('Re:');
            });
            DB::commit();

            return redirect()->route('admin.customer.mail', [$parentMsg->id])
                ->with('success', 'Your message was successfully sent');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}