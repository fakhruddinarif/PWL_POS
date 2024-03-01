<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'username' => 'Customer-1',
            'nama' => 'Pelanggan Pertama',
            'password' => Hash::make('12345'),
            'level_id' => 3
        ];
//        UserModel::insert($data);
        UserModel::where('username', 'customer-1')->update($data);
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
