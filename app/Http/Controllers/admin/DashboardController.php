<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DemoForm;
use App\Models\SamirForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function test()
    {
        return view('admin.test');
    }

    public function view_form()
    {
        return view('admin.view_form');
    }

    public function view_form_insert(Request $request)
    {
        //VALIDATION START
        $rules = array(
            'name'  => 'required',
            'email'  => 'required|email',
            'mobile'  => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            $error = json_decode($validator->errors());
            return response()->json(['status' => 401, 'error1' => $error]);
        }
		//VALIDATION END

        $formData = new DemoForm();
        $formData->name     = $request->name;
        $formData->mobile   = $request->mobile;
        $formData->email    = $request->email;
        $formData->save();

        $redirect = route('dashboard');
        return response()->json(['status' => 1, 'message' => 'Data added successfully', 'redirect' => $redirect]);
    }

    public function view_data()
    {
        $data = DemoForm::get();
        return view('admin.view_data')->with(['data' => $data]);
    }


    public function samir_view_form()
    {
        return view('admin.samir_view_form');
    }


    public function samir_view_form_insert(Request $request)
    {
        // dd($request->all());
        //VALIDATION START
        $rules = array(
            'name'  => 'required',
            'email'  => 'required|email',
            'mobile'  => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            $error = json_decode($validator->errors());
            return response()->json(['status' => 401, 'error1' => $error]);
        }
        //VALIDATION END

        $formData = new SamirForm();
        $formData->name     = $request->name;
        $formData->mobile   = $request->mobile;
        $formData->email    = $request->email;
        $formData->save();

        $redirect = route('samir_list_view_form');
        return response()->json(['status' => 1, 'message' => 'Data added successfully', 'redirect' => $redirect]);

    }
    public function samir_list_view_form()
    {
        $data = SamirForm::get();
        // dd($data);
        return view('admin.samir_list_view_form')->with(['data' => $data]);

    }


}
