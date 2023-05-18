<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutherRequest;
use App\Models\Auther;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class AutherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* This code is retrieving all the records from the "authors" table in the database using the
        `all()` method of the `Author` model and storing them in the `` variable. Then, it is
        returning a JSON response of the `` variable using the `json()` method of the
        `response()` helper function. This will return all the authors in the database in JSON
        format. */
        $table = Auther::get();
        return response()->json($table);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AutherRequest $request)
    {
        $au = new Auther();
        $au->name = $request['name'];
        $au->description = $request['description'];
        try {
            $au->save();
            return response()->json($au);
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Auther $auther)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auther $auther)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auther $auther)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auther $auther)
    {
        //
    }
}