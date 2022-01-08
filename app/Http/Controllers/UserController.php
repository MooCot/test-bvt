<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;

class UserController extends Controller
{
    public function getUsersByCountry(Request $request)
    {
        return User::get()->company()->where('company', 'GR');
    }
}