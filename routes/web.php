<?php

use App\Entities\Attendee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendeeController;

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
    return view('welcome');
});

Route::get('attendee', [AttendeeController::class, 'index']);

Route::get('new-attendee', function (\Doctrine\ORM\EntityManagerInterface $em) {
    $attendee = new Attendee('Steve', 'Rogers', 'CONCERT-00003');

    $em->persist($attendee);
    $em->flush();

    return 'Added Attendee!';
});