<?php

namespace App\Http\Controllers;

use App\Models\FakeTable;
use MongoDB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function save(Request $request)
    {
        $post = $request->all();
        $length = 10;
        $min = pow(10, $length - 1);
        $max = pow(10, $length) - 1;

        $randvalue = mt_rand($min, $max);

        if ($request->hasFile('profile')) {

            $extension = $request->file('profile')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            $uploadDirectory = 'uploads';

            $uploadPath = public_path($uploadDirectory);

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0777, true, true);
            }

            $request->file('profile')->move($uploadPath, $imageName);
            $imagePath = $uploadDirectory . '/' . $imageName;
        }
        else {
            echo '<pre>';
            print_r('klklk');
            die;
        }

        $response = array();
        $response['status'] = 0;
        $response['msg'] = "Something went wrong please try again.";

        $validation = Validator::make($request->all(), [
            'firstname' => 'required',
            // 'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lastname' => 'required',
            'accstyle' => 'required',
            'terms' => 'required',
        ]);

        if ($validation->fails()) {
            $response['status'] = 0;
            $response['error'] = $validation->errors()->all();
            echo json_encode($response);
            exit();
        }


        $member = new FakeTable();
        $member->firstname_text = isset($post['firstname']) ? $post['firstname'] : '';
        $member->lastname = isset($post['lastname']) ? $post['lastname'] : '';
        $member->account_style = isset($post['accstyle']) ? $post['accstyle'] : '';
        if ($post['terms'] == 'on') {
            $member->term = 1;
        } else {
            $member->term = 0;
        }
        $member->profile = isset($imageName) ? $imageName : '';
        $member->code = isset($randvalue) ? $randvalue : '';
        $response = $member->save();
      
        $resArray = array();
        $resArray['firstname_text'] = $member->firstname_text;
        $resArray['lastname'] = $member->lastname;
        $resArray['account_style'] = $member->account_style;
        $resArray['profile'] = $member->profile;
        $resArray['code'] = $member->code;

        return redirect()->route('membership.ready', ['member' => encrypt($resArray)]);
    }

    public function dropzone(Request $request){

        return view('dropzone');
        }
    public function dropzoneSave(Request $request){
        $post = $request->all();
        echo '<pre>';
        print_r($post);
        die;
         
    }
}
