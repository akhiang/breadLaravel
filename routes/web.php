<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('welcome');
    // $user = auth()->user();
    
    // $role = Role::find(1);
    // dd($role);
    // $user->givePermissionTo('delete post');
    // $user->revokePermissionTo('edit post');
    // $role->syncPermissions(['add post','edit post','delete post','view post']);

    // dd($user->can('delete post'));

    // dd($role->hasPermissionTo('delete post'));
    // auth()->user()->syncRoles('user');
    // auth()->user()->assignRole('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home');
