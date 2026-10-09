<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teas', function () {
    $teas = [
        ["name"=>"Green Tea", "id"=>1],
        ["name"=>"Black Tea", "id"=>2],
        ["name"=>"Oolong Tea", "id"=>3],
        ["name"=>"White Tea", "id"=>4],
        ["name"=>"Herbal Tea", "id"=>5],

    ];
    return view('teas.teas', ['teas'=>$teas]);
});
Route::get('/teas/{id}', function ($id) {
    $teas = [
        ["name"=>"Green Tea", "id"=>1],
        ["name"=>"Black Tea", "id"=>2],
        ["name"=>"Oolong Tea", "id"=>3],
        ["name"=>"White Tea", "id"=>4],
        ["name"=>"Herbal Tea", "id"=>5],

    ];
    return view('teas.teaDetails', ['tea'=>$teas[$id-1]]);
});