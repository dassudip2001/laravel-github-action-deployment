<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /* This code is creating a new database table named "authers" with four columns: "id"
        (auto-incrementing primary key), "name" (string with a maximum length of 128 characters),
        "description" (text field that can be nullable), and "timestamps" (which will automatically
        add "created_at" and "updated_at" columns to the table). This is a migration file in
        Laravel, which means it is used to manage database schema changes. */
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authers');
    }
};
