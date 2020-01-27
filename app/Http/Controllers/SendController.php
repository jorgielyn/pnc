<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;


class SendController extends Controller
{
    public function sendEmail()
    {
        $data = ['message' => 'This is a test'];

        \Mail::to('jdpotrido@student.passerellesnumeriques.org')->send(new TestEmail($data));

        return redirect()->back()->with('success', 'Email sent successfully. Check your email.');
    }
}
