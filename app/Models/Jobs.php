<?php

namespace App\Models;

use Illuminate\Support\Arr;

class jobs{
    public static function all(){
        return [["id"=> 1,"title" => 'Developer', "Salary" =>'40,000$', "location" => 'USA'],["id"=> 2,"title" => 'Designer', "Salary" =>'20,000$', "location" => 'USA'],["id"=> 3,"title" => 'Manager', "Salary" =>'140,000$', "location" => 'USA']];
    }
    public static function find($id): array{
        $job=Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if(! $job){
            abort(404);
        }else{
            return $job;
        }
    }
}