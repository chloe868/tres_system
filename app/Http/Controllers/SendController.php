<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;

class SendController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->all();
        $firstname = ['first_name' => $data['first_name']];
        $message =['message' => $data['message']];

        \Mail ::to($data['email'])->send(new TestEmail($data));
    
        return redirect()->back()->with('success','Email sent successfully!');
    }
}
