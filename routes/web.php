<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Artisan;



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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('clear-compiled');
    $exitCode = Artisan::call('optimize:clear');

    return 'All caches have been cleared!';
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('dashboard');

Route::get('/login', [AuthController::class, 'loginpage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signuppage'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/forgotpassword',[AuthController::class, 'forgotpasswordpage'])->name('forgotpassword');
Route::post('/forgotpassword', [AuthController::class, 'forgotPassword']);

// dont forget to change it into a post 
// <form action="{{ route('logout') }}" method="post">
// @csrf
// <button type="submit">Logout</button>
// </form>

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware("auth:agent")->name('agent.')->prefix('agent')->group(function(){

    Route::get('/',[AgentController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile',[AgentController::class, 'profilepage'])->name('profile');
    Route::put('/profile',[AgentController::class, 'profile']);

    Route::name('clients.')->prefix('clients')->group(function(){
        
        Route::get('/add', [AgentController::class, 'addclient_page'])->name('add');
        Route::post('/add', [AgentController::class, 'addclient']);

        Route::get('/edit', [AgentController::class, 'editclient_page'])->name('edit');
        Route::get('/edit/{id}', [AgentController::class, 'editclient_form'])->name('update');
        Route::put('/edit/{id}', [AgentController::class, 'editclient']);

        Route::get('/show', [AgentController::class, 'showclients'])->name('show');
        Route::get('/show/{id}', [AgentController::class, 'showclient'])->name('display');

    });

    Route::name('contracts.')->prefix('contracts')->group(function(){

        Route::get('/add', [AgentController::class, 'addcontract_page'])->name('add');
        Route::post('/add', [AgentController::class, 'addcontract']);

        Route::get('/edit', [AgentController::class, 'editcontract_page'])->name('edit');
        Route::get('/edit/{id}', [AgentController::class, 'editcontract_form'])->name('update');
        Route::put('/edit/{id}', [AgentController::class, 'editcontract']);


        Route::get('/show', [AgentController::class, 'showcontracts'])->name('show');
        Route::get('/show/{id}', [AgentController::class, 'showcontract'])->name('display');

    });

    
});

Route::middleware("auth:admin")->name('admin.')->prefix('admin')->group(function(){

    Route::get('/',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile',[AdminController::class, 'profilepage'])->name('profile');
    Route::put('/profile',[AdminController::class, 'profile']);

    Route::name('companies.')->prefix('companies')->group(function(){
        
        Route::get('/add', [AdminController::class, 'addcompany_page'])->name('add');
        Route::post('/add', [AdminController::class, 'addcompany']);

        Route::get('/edit', [AdminController::class, 'editcompany_page'])->name('edit');
        Route::get('/edit/{id}', [AdminController::class, 'editcompany_form'])->name('update');
        Route::put('/edit/{id}', [AdminController::class, 'editcompany']);

        Route::get('/show', [AdminController::class, 'showcompanies'])->name('show');
        Route::get('/show/{id}', [AdminController::class, 'showcompany'])->name('display');

    });

    Route::name('services.')->prefix('services')->group(function(){

        Route::get('/add', [AdminController::class, 'addservice_page'])->name('add');
        Route::post('/add', [AdminController::class, 'addservice']);

        Route::get('/edit', [AdminController::class, 'editservice_page'])->name('edit');
        Route::get('/edit/{id}', [AdminController::class, 'editservice_form'])->name('update');
        Route::put('/edit/{id}', [AdminController::class, 'editservice']);

        Route::get('/show', [AdminController::class, 'showservices'])->name('show');
        Route::get('/show/{id}', [AdminController::class, 'showservice'])->name('display');

    });
    
});

