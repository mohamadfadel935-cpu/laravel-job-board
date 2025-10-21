<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobModel 
{
    public static function all(){
        return [
            ['title'=>'Softwear Engin','Salary'=>'$1000'],
            ['title'=>'free lancer ','Salary'=>'$1000000']
        ];//dsdsdf
    }
}
