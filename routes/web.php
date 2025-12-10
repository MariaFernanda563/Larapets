<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    //return "This is route: 🍎";
    return view('welcome');
});

Route::get('hello/{name}', function () {
    return "<h1>Hello" . request()->name . "</h1>";
});

Route::get('show/pets', function () {
    $pets = App\Models\Pet::all();
    dd($pets->toArray()); //dump and die
});

Route::get('show/pet/{id}', function () {
    $pet = App\Models\Pet::find(request()->id);
    dd($pet->toArray()); //dump and die
});

Route::get('challenge', function () {
    $users = \App\Models\User::take(20)->get();

    $html = '<table border="1" style="border-collapse: collapse; width: 50%;">
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Creación</th>
        </tr>';

    foreach ($users as $user) {
        $html .= '<tr>
            <td style="text-align: center;">' . $user->id . '</td>
            <td style="text-align: center;"><img src="' . $user->photo . '" width="100"></td>
            <td style="padding: 10px;">' . $user->fullname . '</td>
            <td style="text-align: center;">' . \Carbon\Carbon::parse($user->birthdate)->age . '</td>
            <td style="padding: 10px;">' . $user->created_at->diffForHumans() . '</td>
        </tr>';
    }

    $html .= '</table>';

    return $html;
});

Route::get('view/pets', function () {
    $pets = App\Models\Pet::all();
    return view('view-pets')->with('pets', $pets);
});

Route::get('view/pet/{id}', function () {
    $pet = App\Models\Pet::find(request()->id);
    // dd($pet->toArray());
    return view('view-pet')->with('pet', $pet);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::resources([
            'users' => UserController::class,
            'pets' => PetController::class,
            /*       'adoptions' => AdoptionController::class, */
        ]);

        //Adoptions
        Route::get('adoptions', [AdoptionController::class, 'index']);
        Route::get('adoptions/{id}', [AdoptionController::class, 'show']);
        Route::post('search/adoptions', [AdoptionController::class, 'search']);
        Route::get('export/adoptions/pdf', [AdoptionController::class, 'pdf']);
        Route::get('export/adoptions/excel', [AdoptionController::class, 'excel']);

        //Search
        Route::post('search/pets', [PetController::class, 'search']);
        // Route::post('search/pets', [PetController::class, 'search']);}

        //Export
        Route::get('export/pets/pdf', [PetController::class, 'pdf']);
        Route::get('export/pets/excel', [PetController::class, 'excel']);

        //Import
        Route::post('import/pets', [PetController::class, 'import']);

    });
}); 

    //customer 
    Route::get('myprofile/', [CustomerController::class, 'myprofile']);
    Route::put('myprofile/{id}', [CustomerController::class, 'updatemyprofile']);

    Route::get('myadoptions/', [CustomerController::class, 'myadoptions']);
    Route::get('myadoptions/{id}', [CustomerController::class, 'showadoption']);

    Route::get('makeadoption/', [CustomerController::class, 'listpets']);
    Route::get('makeadoption/{id}', [CustomerController::class, 'confirmadoption']);
    Route::post('makeadoption/{id}', [CustomerController::class, 'makeadoption']);
    Route::post('search/makeadoption', [CustomerController::class, 'search']);

//my profile 

//make adoptions/
//my adoptions/

require __DIR__ . '/auth.php';