<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

final class UserController
{
    public function index(Request $request): Collection
    {
        return User::search($request->query('search'))->get();
    }
}
