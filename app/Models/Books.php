<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model
{
    use HasFactory;

    /**
     * This is a PHP function that defines a relationship between a book and its author using Laravel's
     * Eloquent ORM.
     */
    protected $table = 'books';

    /* `protected ` is an array that specifies which attributes of the model are allowed to be
    mass assignable. In this case, only the `name` attribute is allowed to be mass assignable, which
    means it can be set using an array or JSON input. This is a security measure to prevent
    unintended changes to other attributes of the model. */
    protected $fillable = [
        'name',
    ];

    /**
     * This PHP function defines a relationship between two models using the BelongsTo method.
     */
    // public function auther(): void
    // {
    //     $this->belongsTo(Auther::class);
    // }
}