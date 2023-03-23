<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup', function () {
    $credentials = [
       'email' => 'admin@example.com',
       'password' => 'pa55word!'
    ];

    $user = new User();
    $user->name = 'admin';
    $user->email = $credentials['email'];
    $user->password = \Illuminate\Support\Facades\Hash::make($credentials['password']);

    $user->save();

    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        $user = \Illuminate\Support\Facades\Auth::user();
        $adminToken = $user->createToken('admin-token',['create', 'update', 'delete']);
        $updateToken = $user->createToken('update-token',['create', 'update']);
        $basicToken = $user->createToken('basic-token');

        return [
            'admin' => $adminToken->plainTextToken,
            'update' => $updateToken->plainTextToken,
            'basic' => $basicToken->plainTextToken
        ];
    }





});
