<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function getUsersByCountry(Request $request)
    {
        $country = Country::select('id')->where('country_name', $request->company_name)->first();
        $countryid = $country->id;
        $users = User::whereHas('companies', function (Builder $query) use ($countryid) {
            $query->where('country_id', $countryid);
        })
        ->select('user_name as name', 'id')->with(['companies' => function ($query) {
            $query->select('company_name as name', 'date_at');
        }])->get();

        return ['users' => $users];
    }
}