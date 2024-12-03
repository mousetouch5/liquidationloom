<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Add Log facade
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
        // Log the input data to track the registration process
        Log::info('Creating a new user with input: ', $input);

        // Validate user input
        try {
            Validator::make($input, [
                'first_name' => ['required', 'string', 'max:255'],
                'middle_name' => ['nullable', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'birthdate' => ['required', 'date'],
                'brgy_id' => ['required', 'string', 'max:255'],
                'lot_number' => ['nullable', 'string', 'max:255'],
                'block_number' => ['nullable', 'string', 'max:255'],
                'purok' => ['nullable', 'string', 'max:255'],
                'city' => ['required', 'string', 'max:255'],
                'brgy_city_zipcode' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'usertype' => ['required', 'string', 'in:official,resident'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            Log::info('User input validated successfully.');
        } catch (\Exception $e) {
            // Log validation failure
            Log::error('Validation failed: ' . $e->getMessage());
            throw $e;  // Re-throw the exception after logging
        }

        // Create the new user and log the creation process
        $user = User::create([
            'first_name' => $input['first_name'],
            'middle_name' => $input['middle_name'] ?? null, // Handle nullable field
            'last_name' => $input['last_name'],
            'birthdate' => $input['birthdate'],
            'brgy_id' => $input['brgy_id'],
            'lot_number' => $input['lot_number'] ?? null,
            'block_number' => $input['block_number'] ?? null,
            'purok' => $input['purok'] ?? null,
            'city' => $input['city'],
            'brgy_city_zipcode' => $input['brgy_city_zipcode'],
            'name' => $input['first_name'] . ' ' . ($input['middle_name'] ?? '') . ' ' . $input['last_name'], // Proper concatenation
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_type' => $input['usertype'], // Save user type correctly
        ]);

        // Log user creation
        Log::info('User created successfully with ID: ' . $user->id);

        return $user;
    }
}
