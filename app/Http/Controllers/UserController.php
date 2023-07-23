<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return User::find($id);
    }
}
