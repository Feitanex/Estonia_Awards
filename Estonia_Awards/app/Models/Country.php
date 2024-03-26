<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'country';
    public $timetamps = true;

    protected $fillable = [
        'Code',
        'Name',
        'Continent',
        'Region',
        'IndepYear',
        'Population',
        'GovernmentForm',
        'HeadOfState',
        'Code2'
    ];
}