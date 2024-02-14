<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function ticket(){
        $ticket = Ticket::all();
        return view('backend.Ticket.message',compact('ticket'));
    }

    public function ticket_store(Request $request){
        $this->validate($request,[
            'message' => ['required']
        ]);

        $data = Ticket::create([
            'user_id' => Auth::guard('admin')->user()->id,
            'message' => $request->message
        ]);

        return redirect()->back();

    }


}
