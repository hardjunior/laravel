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
Route::get('/login', function () { //para parametros
    return "Página de Login";
})->name('login');

// Route::middleware([])->group(function(){//'auth'
//     Route::prefix('admin')->group(function(){
//          Route::get('/dashboard', function () { //para parametros
//             return "Página do dashboard";
//         });
//         Route::namespace('Admin')->group(function(){
//             Route::name('Admin.')->group(function(){
//                 Route::get('/','TesteController@teste')->name('home');
//                 Route::get('/financeiro',function(){
//                     return 'Financeiro';
//                 })->name('financeiro');
//             });
//         });
//     });
// });
    // Route::get('/admin/dashboard', function () { //para parametros
    //     return "Página de Login";
    // })->middleware('auth');

    Route::group([
'middleware'=>[],
'prefix'=>'admin',
'namespace'=>'admin',
'name'=>'admin.'
    ],function(){
        Route::get('/','TesteController@teste')->name('home');
        Route::get('/financeiro',function(){
            return 'Financeiro';
        })->name('financeiro');
    });
// Route::get('/admin/dashboard', function () { //para parametros
//     return "Página de Login";
// })->middleware('auth');


// Route::post('/contacto', function () {
//     return "contacto Nao funcionará pois nao é um method post inserido na url";
// });

// Route::any('/any', function () {
//     return "any Para qualquer method get ou put";
// });

// Route::match(["get","post"],'/match', function () {
//     return "match Para escolher qual será o method get ou put";
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/','welcome',['id'=>'teste']);
Route::view('/','welcome');

// Route::get('/direcao1', function () { //para parametros
//     return redirect('/direcao2');
// });
Route::get('/direcao1', function () { //para parametros
    return redirect()->route('nomedadirecao');
});
//or Route::redirect('/direcao1','/direcao2');

Route::get('/direcao2', function () {//para parametros
    return "direcao2";
})->name('nomedadirecao');

Route::get('/produto/{flag}/podetertambem', function ($flag) {//para parametros
    return "Testando parametros ".$flag;
});

Route::get('/produtos/{flag?}', function ($flag='caso seja vazio') {//para parametros
    return "Testando parametros ".$flag;
});

Route::get('/categorias/{flag}', function ($flag) {//para parametros
    return "Testando parametros ".$flag;
});

