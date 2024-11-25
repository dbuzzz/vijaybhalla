<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function SendMail($email = '',$token = '',$username='') {
      $data['data'] = array('name'=>"Insurent",'token'=>url('/verification',$token),'username'=>$username);
   
     $ms =  Mail::send('admin.mail', $data, function($message) use($email) {
         $message->to($email, 'Verification Mail')->subject('Report');
         $message->from('xyz@gmail.com','Insurent');
      });
      return true;
   }
}
