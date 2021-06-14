<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AddContact;
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

Route::get('/', function () {
    return redirect('contacts');  //sets default route by redirecting
});

Route::get('contacts', [ContactsController::class, 'showContacts']); //displays all contacts

Route::view('addcontact', 'addcontact');
Route::post('submit', 'App\Http\Controllers\AddContact@addContact')->name('addContact'); //calling function to add a contact
Route::get('delete/{id}', 'App\Http\Controllers\DeleteContact@deleteContact')->name('deleteContact');   // calling function to delete contact
