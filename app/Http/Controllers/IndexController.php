<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class IndexController extends Controller
{
    public function home(){
        $ticket = Ticket::orderBy('id','DESC')->get();
        return view('pages.home')->with(compact('ticket'));
    }

    public function sukien(){
        return view('pages.event');
    }

    public function lienhe(){
        return view('pages.contact');
    }
}
