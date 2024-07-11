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
            'surname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:18'],
            'password' => $this->passwordRules(),
        ], [
            'name.required' => __('ui.namerequired'),
            'surname.required' => __('ui.surnamerequired'),
            'age.required' =>  __('ui.agerequired'),
            'age.integer' => __('ui.agemin'),
            'email.required' => __('ui.emailrequired'),
            'email.email' => __('ui.emailemail'),
            'email.unique' => __('ui.emailunique'),
            'password.required' => __('ui.passwordrequired'),
            'password.min' => __('ui.passwordmin'),
            'password.confirmed' => __('ui.passwordconfirmed'),
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
