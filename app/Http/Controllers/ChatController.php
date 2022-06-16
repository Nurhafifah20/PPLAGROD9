<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index(){
        $pesan = DB::table('chats')
        ->join('users', 'users.id', '=', 'chats.user_id')
        ->get();
    
        return view("chat.index", ["pesan" => $pesan]);
    }

    public function send(Request $request){
        $data = $request->all();
        Chat::create([
            "user_id" => Auth::user()->id,
            "pesan" => $data['pesan']
        ]);
        return back();
    }
}
