<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class sampleController extends Controller
{
    public function getUser($id)
    {
        
        // $users = User::find($id);

        // if (!$users) {
        //     return response()->json(['message' => 'User not found'], 404);
        // }

        // $userData = [
        //     'id' => $users->id,
        //     'name' => $users->name,
        //     'cityName' => $users->city_name,
        //     'Email' => $users->email,
        // ];

        // return response()->json($userData);
    }
    public function showGet($id)
    {
        echo "yes";
    }
    
    public function showPost($id)
    {
        echo "no";
    }
}
