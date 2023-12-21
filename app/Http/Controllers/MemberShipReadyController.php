<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\FakeTable;
use MongoDB;
use Validator;
use Illuminate\Http\Request;

class MemberShipReadyController extends Controller
{
    public function index($member = null)
    {
        $memberDetails = array();
        $memberDetails = decrypt($member);
      
        return view('step2')->with(compact('memberDetails'));
    }

    public function save(Request $request){
        $post = $request->all();
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
        
        \Mail::to($post['email'])->send(new \App\Mail\MyTestMail($details));
       
        return redirect()->route('membership.unlocked');
       
      
    }

    public function unlocked(){
        return view('step3');
    }
    

}
