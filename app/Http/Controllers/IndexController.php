<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;

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
}
