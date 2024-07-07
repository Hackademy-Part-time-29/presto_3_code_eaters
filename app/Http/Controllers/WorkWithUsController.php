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
            'first_name.required' => __('ui.namerequired'),
            'last_name.required' => 'Il campo Cognome è obbligatorio.',
            'age.required' => 'Il campo Età è obbligatorio.',
            'age.integer' => 'Il campo Età deve essere un numero intero.',
            'age.min' => 'Devi avere almeno 18 anni per poter procedere.',
            'email.required' => 'Il campo Email è obbligatorio.',
            'email.email' => 'Inserisci un indirizzo email valido.',
            'cover_letter.required' => 'Il campo Lettera di presentazione è obbligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  // Passa gli errori alla view
                ->withInput();          // Mantiene i dati inseriti nel form
        }

        // Invio email all'admin
        Mail::send('mail.workwithus', ['data' => $request->all()], function ($message) {
            $message->to('admin@presto.it')
                ->subject('Richiesta per diventare revisore');
        });

        return redirect()->route('welcome')->with('success', __('ui.congratulation'));
    }
}
