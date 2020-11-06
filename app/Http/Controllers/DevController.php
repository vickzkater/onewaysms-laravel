<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// USE LIBRARIES
use App\Libraries\OnewaySms;

class DevController extends Controller
{
    public function send_sms(Request $request)
    {
        // SET THE PARAMETERS
        $mobile = $request->input('mobile_phone');
        $message = $request->input('message');
        $debug = false;

        $result = OnewaySms::send($mobile, $message, $debug);

        return $result; // Boolean
    }
}
