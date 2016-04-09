<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Http\Response;
use Validator;

class MainController extends Controller
{
    

    const AMDIN_EMAIL = 'info@geroslubos.lt';
    const FROM_EMAIL = 'admin@geroslubos.lt';

    public function getIndex(){
        
        
        return view('main.index');
    }




    public function postSendEmail(Request $request)
    {

        if($request->ajax()){

            $arrErrors = [

                'success' => true,
                'messages' => []
            ];

            $data = $request->all();

            $validator = Validator::make($data, [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);

            if($validator->fails()) {

                $arrErrors['success'] = false;

                $errors = $validator->messages();

                if (!empty($errors->messages())) {

                    foreach ($errors->messages() as $key => $error) {
                        $arrErrors['messages'][] = array_shift($error);
                    }
                }

                return response()->json($arrErrors);
            }

            //sending mail
            $custName = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $text = $request->input('message');

            //if mail admin mail exist - we are sending message , if not - just emulate it.
            if(!empty(self::AMDIN_EMAIL)) {
                $res = Mail::send('email.body', compact('custName', 'email', 'text','phone'), function ($msg)  {

                    $to = self::AMDIN_EMAIL;
                    $from = self::FROM_EMAIL;

                    $msg->from($from);
                    $msg->to($to);
                    $msg->subject("Message from your site");
                });

                $arrErrors['messages'][] = 'Email was successfuly sent!';
            }else{
                $arrErrors['messages'][] = 'Email sent failed , try to sent later';
            }



            return response()->json($arrErrors);
        }


        return redirect()->route('index_page');
    }
    
}
