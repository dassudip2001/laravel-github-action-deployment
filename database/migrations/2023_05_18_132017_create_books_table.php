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
        /* This code is creating a migration for a database table named "books". The table has columns
       for "id" (auto-incrementing primary key), "title" (a unique string with a maximum length of
       128 characters), "author_id" (an unsigned big integer that references the "id" column of the
       "authors" table), and "timestamps" (created_at and updated_at columns). The foreign key
       constraint is also added to ensure that when an author is deleted, all associated books are
       also deleted (cascade delete). */
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128)->unique()->index();
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
            // $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
