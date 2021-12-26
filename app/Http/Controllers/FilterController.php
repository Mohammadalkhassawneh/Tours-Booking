<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterController extends Controller
{
    //

    public function roles(Request $request) {
        $users = User::where('role_type', $request->user)->get();
        return view("admin.user",compact('users'));
    }

    public function search(Request $request) {

                $cats = Category::all();
                $trips = Trip::where('name', 'Like', '%' . $request->search. '%')->paginate(500);
        if(Auth::user() != null){
        $role = User::find(Auth::user()->id);
        } else {
            $role = "";
        }
             return view('publicSite.trips-list', compact('trips','cats','role'));
    }

}
