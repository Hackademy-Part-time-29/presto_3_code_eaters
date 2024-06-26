<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'surname' => ['required','string','max:255'],
            'age'=>['required','integer'], 
            'password' => $this->passwordRules(),
        ],[
            'name.required' => 'Il nome è obbligatorio.',
            'surname.required' => 'Il cognome è obbligatorio.',
            'age.required' => 'L\'età è obbligatoria.',
            'age.integer' => 'L\'età deve essere un numero intero.',
            'email.required' => 'L\'email è obbligatoria.',
            'email.email' => 'L\'email deve essere un indirizzo email valido.',
            'email.unique' => 'L\'email è già stata presa.',
            'password.required' => 'La password è obbligatoria.',
            'password.min' => 'La password deve essere lunga almeno 8 caratteri.',
            'password.confirmed' => 'La conferma della password non corrisponde.',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'surname' => $input['surname'],
            'age' => $input['age'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
