<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Validators\UserRequest;

class UserController extends Controller
{
    public function getUsersByCountry(UserRequest $request)
    {
        $country = Country::findCountryByName($request->company_name);
        
        $users = User::whereHas('companies', function (Builder $query) use ($country) {
            $query->where('country_id', $country->id);
        })
        ->select('user_name as name', 'id')->with(['companies' => function ($query) {
            $query->select('company_name as name', 'date_at');
        }])->get();

        return ['users' => $users];
    }
}