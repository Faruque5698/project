<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name'   => ['required', 'string', 'max:255'],
            'number' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name'             => $input['name'],
            'email'            => $input['email'],
            'number'           => $input['number'],
            'job_description'  => $input['job_description'],
            'joining_form'     => $input['joining_form'],
            'job_designation'  => $input['job_designation'],
            'retired_at'       => $input['retired_at'],
            'age'              => $input['age'],
            'speciality'       => $input['speciality'],
            'password'         => Hash::make($input['password']),
        ]);
    }
}
