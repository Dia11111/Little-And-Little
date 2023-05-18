<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Payment;

class IndexController extends Controller
{
    public function home(){
        $ticket = Ticket::orderBy('id','DESC')->get();
        return view('pages.home')->with(compact('ticket'));
    }

    public function sukien(){
        $event = Event::orderBy('id','DESC')->where('kichhoat', 0)->get();
        return view('pages.event')->with(compact('event'));
    }

    public function lienhe(){
        return view('pages.contact');
    }

    public function sendEmail(Request $req){
        $details = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address'=> $req->address,
            'msg' => $req->msg
        ];

        Mail::to('thocongnghe@gmail.com')->send(new ContactMail($details));
        return back()->with('status','Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!');
    }

    public function xemsukien($slug){
        $event = Event::where('slug_sukien', $slug)->first();
        return view('pages.details')->with(compact('event'));
    }

    public function pay(){
        $customer = Customer::latest('created_at')->first();
        $ticketId = $customer->ve_id;
        $ticket = Ticket::find($ticketId);

        $ticket_name = $ticket->tenve;

        $totalAmount = $ticket->giave * $customer->soluongve;

        return view('pages.pay',['customer' => $customer, 'totalAmount' => $totalAmount, 'ticket_name' => $ticket_name]);   
    }

    public function successpay(){

        return view('pages.success_pay');   
    }

    public function checkout(Request $request){

        $data = new Customer;
        // dd($request->all());
        $data->hoten = $request->hoten;
        $data->soluongve=$request->soluongve;
        $data->diachi = $request->diachi;
        $data->sodienthoai=$request->sodienthoai;
        $data->ngaysudung=$request->ngaysudung;
        $data->ve_id = $request->ve_id;

        $data->save();

        return redirect()->route('pay');
    }

    public function checkout_success(Request $request){

        $data = new Payment();
        // dd($request->all());
        $data->sothe = $request->sothe;
        $data->hotenthe=$request->hotenthe;
        $data->ngayhethan = $request->ngayhethan;
        $data->cvv=$request->cvv;
        $data->order_code=$request->order_code;
        $data->tongtien = $request->tongtien;
        $data->customer_id = $request->customer_id;

        $data->save();

        return redirect()->route('successpay');
    }
}
