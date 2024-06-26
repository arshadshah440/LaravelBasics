<?php

use App\Models\job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\jobs;


Route::get('/', function () {
    return view('welcome');
});

// example route for about page

Route::get("/about", function () {
    return view("about");
});

// example route for contact page

Route::get("/contact", function () {
    return view('contact');
});

Route::get("/jobs", function () {
    return view('jobs',[
        'jobs' =>job::all(),
    ]);
});

// route for single jobs

Route::get("/job/{id}", function ($id) { 
    // $jobs=jobs::all();
    //using Arr::first
    $job= job::find($id);

    return view('job',['job'=>$job]);
});