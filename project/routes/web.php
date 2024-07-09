<?php

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
    return view('homepage');
});

Route::get('/members_area', function () {
    return view('members_area');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profileAdministrator', function () {
    return view('profile_administrator');
});

use App\Http\Controllers\RegisterController;

Route::post('/login', [RegisterController::class, 'login']);

Route::post('/register', [RegisterController::class, 'register']);

use App\Http\Controllers\ProfileController;

Route::get('/profile/{userID}', [ProfileController::class, 'showProfile'])->name('profile');

Route::get('/profileAdministrator/{userID}', [ProfileController::class, 'showProfileAdministrator'])->name('profileAdministrator');

use App\Helpers\DatabaseHelper;

Route::post('/updatePassword', [DatabaseHelper::class, 'updateUserPassword']);

Route::post('/isertpracticedata', [DatabaseHelper::class, 'isertPracticeData']);

Route::post('/deletepracticedata', [DatabaseHelper::class, 'deletePracticeData']);

Route::post('/repairorder', [DatabaseHelper::class, 'isertRepairOrder']);

Route::post('/submitabsencereason', [DatabaseHelper::class, 'submitAbsenceReason']);

Route::post('/applyevent', [DatabaseHelper::class, 'applyEvent']);

use App\Http\Controllers\UpdateFileController;

Route::post('/updateFile', [UpdateFileController::class, 'updateFilePost']);



Route::post('/deletemember', [DatabaseHelper::class, 'deleteMember']);

Route::post('/updatemememberpermission', [DatabaseHelper::class, 'updateMememberPermission']);

Route::post('/deletetool', [DatabaseHelper::class, 'deleteTool']);

Route::post('/updaterepairorderrepair', [DatabaseHelper::class, 'updateRepairOrderRepair']);