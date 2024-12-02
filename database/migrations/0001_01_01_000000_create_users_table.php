<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type', ['official', 'resident']); // Add user_type column
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        // Seed the users table with default data
        DB::table('users')->insert([
            [
                'name' => 'Admin Official',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Default password
                'user_type' => 'official',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resident John',
                'email' => 'resident.john@example.com',
                'password' => Hash::make('password'), // Default password
                'user_type' => 'resident',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resident Jane',
                'email' => 'resident.jane@example.com',
                'password' => Hash::make('password'), // Default password
                'user_type' => 'resident',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Create the password_reset_tokens table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Create the sessions table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
