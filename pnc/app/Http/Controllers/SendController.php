<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;

class SendController extends Controller
{
    public function sendEmail()
    {
        $data =['message' => 'this is a test'];

       // \Mail ::to('mellynegrace.nadela@student.passerellesnumeriques.org')->send(new TestEmail($data));
       // \Mail ::to('jorgielyn.iran@student.passerellesnumeriques.org')->send(new TestEmail($data));
       // \Mail ::to('cherrymae.herrera@student.passerellesnumeriques.org')->send(new TestEmail($data));
        \Mail ::to('herreracherrymae@gmail.com')->send(new TestEmail($data));
        \Mail ::to('irangabriellef14@gmail.com')->send(new TestEmail($data));

        return redirect()->back()->with('success','Email sent successfully!');
    }
}
