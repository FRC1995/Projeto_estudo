<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {

    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos',  function(){ return 'Produtos'; })->name('app.produtos');

});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

/*Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
*/
//Route::redirect('/rota2', '/rota1');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'"> Clique aqui</a> para ir para página inicial';
});

//Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem não informada'){
 //   echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";

    Route::get(
        '/contato/{nome}/{categoria_id}',
        function(
            string $nome = 'Desconhecido',
            int $categoria_id = 1 // 1 - 'Informação'
     ){
             echo "Estamos aqui: $nome - $categoria_id";
        }
    )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

/*
Route::get('/sobre-nos', function () {
    return 'Sobre-nos';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/

