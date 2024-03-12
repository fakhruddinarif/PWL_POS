<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' =>  'Manager 3',
            'password' => Hash::make('12345')
        ];*/
//        UserModel::insert($data);
//        UserModel::where('username', 'customer-1')->update($data);
//        UserModel::create($data);
//        $user = UserModel::all();

//        $user = UserModel::find(1);
//        $user = UserModel::where('level_id', 1)->first();
//        $user = UserModel::firstWhere('level_id', 1);
        /*$user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });*/
//        $user = UserModel::findOrFail(1);
//        $user = UserModel::where('username', 'manager9')->firstOrFail();
//        $user = UserModel::where('level_id', 2)->count();
//        dd($user);
        /*$user = UserModel::firstOrNew(
            [
                'username' => 'manager',
                'nama' => 'Manager'
            ]
            [
                'username' => 'manager33',
                'nama' => 'Manager tiga tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );
        $user->save();*/

        /*$user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        $user->username = 'manager12';*/

        /*$user->isdirty();
        $user->isdirty('username');
        $user->isdirty('nama');
        $user->isdirty(['nama', 'username']);

        $user->isClean();
        $user->isClean('username');
        $user->isClean('nama');
        $user->isClean(['nama', 'username']);*/
//        $user->save();

       /* $user->isDirty();
        $user->isClean();*/
        /*$user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'level_id']);
        $user->wasChanged('nama');
        dd($user->wasChanged(['nama', 'username']));*/

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
