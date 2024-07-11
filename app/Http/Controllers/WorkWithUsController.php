<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WorkWithUsController extends Controller
{
    public function showForm()
    {
        return view('/revisor/workwithus');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|max:255',
            'cover_letter' => 'required|string',
        ], [
            'first_name.required' =>  __('ui.namerequired'),
            'last_name.required' => __('ui.surnamerequired'),
            'age.required' => __('ui.agerequired'),
            'age.integer' => __('ui.ageinteger'),
            'age.min' => __('ui.agemin'),
            'email.required' => __('ui.emailrequired'),
            'email.email' => __('ui.emailemail'),
            'cover_letter.required' => __('ui.coverletterrequired'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mail::send('mail.workwithus', ['data' => $request->all()], function ($message) {
            $message->to('admin@presto.it')
                ->subject(__('ui.requestrevisor'));
        });

        return redirect()->route('welcome')->with('success', __('ui.congratulation'));
    }
}
