<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminControler;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Residence;
use App\Models\Block;
use App\Models\Chambre;
use App\Models\Reservation;
use App\Models\Filiere;
use App\Models\Niveau; 
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PdfController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|forgot
*/

Route::get('/', function (Request $request) {
 return view('welcome');
});


Route::get('/etudiant', function (Request $request) {
 $user = $request->session()->get('user');
 $route = 'home';  
 $user = $request->session()->get('user');  
        $route = 'chambre';
        $res = Residence::all();  
        $blocks = Block::all();  
        $chambres = Chambre::leftJoin('block',"block.id","=","chambre.block")
         ->leftJoin('residences',"residences.id","=","block.residence")
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","residences.id as id_residence","chambre.prix as chambre_prix"]);  
    return view('user.index',compact('user','route',"chambres","res","blocks"));
})->middleware('checkSession');

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/admin2', function (Request $request) {
     $user = $request->session()->get('user');
        $route = 'reservation'; 
        $users = User::all();  
         $reservations = Chambre::Join('block',"block.id","=","chambre.block")
         ->Join('residences',"residences.id","=","block.residence")
         ->Join('reservations',"chambre.id","=","reservations.room")
         ->Join('users',"users.id","=","reservations.studentId")
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","reservations.isApproved as status","users.photo as photo","users.name as name","reservations.montant as montant","reservations.date as date","reservations.expire as expire","reservations.isApproved as status","reservations.id as idr"]);
    return view('admin.index',compact('reservations'));
})->name('admin2')->middleware('checkSession');

Route::get('/forgot', function () {
    return view('forgot');
}); 

Route::get('/register', function () {
    $filieres = Filiere::all();
    $niveaus = Niveau::all();
    return view('register',compact("filieres","niveaus"));
}); 

Route::get('/residence',[UserController::class,'residence'])->name('residence')->middleware('checkSession');

Route::get('/detail-block/{idr}',[UserController::class,'detail_block'])->name('detail-block')->middleware('checkSession');
Route::post('/add_reservation',[UserController::class,'add_reservation'])->name('add_reservation')->middleware('checkSession');

Route::get('/chambre',[UserController::class,'chambre'])->name('chambre')->middleware('checkSession');

/*detail-chambre detail-block/{{$r->id}} */

Route::post('register',[UserController::class,'store'])->name('register');
Route::post('show_block_residence',[UserController::class,'show_block_residence'])->name('show_block_residence');
Route::post('show_block_chambre',[UserController::class,'show_block_chambre'])->name('show_block_chambre');

Route::get('block',[UserController::class,'block'])->name('block')->middleware('checkSession');
Route::get('blocks',[UserController::class,'blocks'])->name('blocks')->middleware('checkSession');

Route::get('detail_chambre/{id}',[UserController::class,'detail_chambre'])->name('detail_chambre')->middleware('checkSession');

Route::post('login',[UserController::class,'login'])->name('login');
Route::post('uploadFile',[UserController::class,'uploadFile'])->name('uploadFile');
Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware('checkSession');

Route::get('reservation',[UserController::class,'reservation'])->name('reservation')->middleware('checkSession');

Route::post('select_residence_chambre',[UserController::class,'select_residence_chambre'])->name('select_residence_chambre');

Route::get('search_room/{idr}/{idb}',[UserController::class,'search_room'])->name('search_room')->middleware('checkSession');
Route::post('/select_block',[UserController::class,'selectblock'])->name('select_block')->middleware('checkSession');
Route::post('/valider_residence',[AdminControler::class,'valider_residence'])->name('valider_residence')->middleware('checkSession');

// routes/web.php
Route::delete('/element/{id}', [UserController::class, 'destroy'])->name('element.destroy');
// routes/web.php
Route::get('/element/{id}/edit', [UserController::class, 'edit'])->name('element.edit');

Route::get('update_r', [UserController::class, 'update_r'])->name('update_r');
Route::get('update_c', [UserController::class, 'update_r'])->name('update_c');

// routes/web.php
Route::delete('/block/{id}', [UserController::class, 'destroy_block'])->name('block.destroy');
// routes/web.php
Route::get('/block/{id}/edit', [UserController::class, 'edit_block'])->name('block.edit');
Route::get('update_b', [UserController::class, 'update_b'])->name('update_b');
Route::post('/valider_block',[AdminControler::class,'valider_block'])->name('valider_block');


Route::post('/valider_chambre',[AdminControler::class,'valider_chambre'])->name('valider_chambre')->middleware('checkSession');

// routes/web.php
Route::delete('/chambre/{id}', [UserController::class, 'destroy_chambre'])->name('chambre.destroy');
// routes/web.php
Route::get('/chambre/{id}/edit', [UserController::class, 'edit_chambre'])->name('chambre.edit');

Route::get('show_block/{id}', [UserController::class, 'show_block'])->name('show_block');
Route::get('show_block2/{id}', [UserController::class, 'show_block2'])->name('show_block2');

Route::get('show_chambre/{id}', [UserController::class, 'show_chambre'])->name('show_chambre');
Route::get('show_chambre2/{id}', [UserController::class, 'show_chambre2'])->name('show_chambre2');

Route::get('room/{id}', [UserController::class, 'room'])->middleware('checkSession')->name('room');

Route::get('/payement/{montant}/{debut}/{room}', [UserController::class, 'payement']);

Route::get("/payement_confir", [UserController::class, 'success']);
Route::get("payement_cancel", [UserController::class, 'cancel']);

Route::get('/reserver/{montant}/{debut}/{room}', [UserController::class, 'reserver']);

Route::get('/autocomplete', [UserController::class, 'search'])->name('autocomplete.search');
Route::get('/autocomplete2', [UserController::class, 'search2'])->name('autocomplete.search2');

 Route::post('/save-signature', [UserController::class, 'signature'])->name('save-signature');

 Route::get('/annuler', [UserController::class, 'annuler'])->name('annuler');
 Route::get('/residences', [UserController::class, 'residences'])->name('residences');
 Route::get('/search', [UserController::class, 'search_chambre'])->name('search');

 Route::get('/reservation2', function (Request $request) {
     $user = $request->session()->get('user');
        $route = 'reservation'; 
        $users = User::all();  
         $reservations = Chambre::Join('block',"block.id","=","chambre.block")
         ->Join('residences',"residences.id","=","block.residence")
         ->Join('reservations',"chambre.id","=","reservations.room")
         ->Join('users',"users.id","=","reservations.studentId")
         ->where('reservations.studentId',$user->id)
         ->get(["chambre.name as nom_chambre","residences.name as nom_residence","block.name as num_block","chambre.capacite as chambre_capacite","chambre.photo as chambre_photo","block.id as id_block","chambre.id as id_chambre","reservations.isApproved as status","users.photo as photo","users.name as name","reservations.montant as montant","reservations.date as date","reservations.expire as expire","reservations.isApproved as status","reservations.id as idr"]);
    return view('user.reservation',compact('reservations',"user"));
})->name('reservation2')->middleware('checkSession');

 Route::get('/mail', [UserController::class, 'envoyerEmail'])->name('mail');
 Route::get('/generate-pdf', [PdfController::class, 'generatePdf']);
 Route::get('/search_date', [PdfController::class, 'search'])->name('search_date');