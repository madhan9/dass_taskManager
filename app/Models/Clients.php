<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table="clients";


    protected $fillable = [
        'unique_no',
        'name',
    ];

}