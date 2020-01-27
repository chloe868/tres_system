<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;

class SendController extends Controller
{
    public function sendEmail()
    {
        $data =['message' => 'this is a test'];

        \Mail ::to('jorgielyn.iran@student.passerellesnumeriques.org')->send(new TestEmail($data));

        return redirect()->back()->with('success','Email sent successfully. Check your email');
    }
}
