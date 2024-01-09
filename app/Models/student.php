<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    // jika primary key nya bukan id
    // protected $primaryKey = 'flight_id';

    // jika nama table tidak menggunakan plurel (akhirannya s)
    // protected $table = 'students';

    // jika id di table tidak auto increment
    // public $incrementing = false;

    // jika tidak menggunakan timestampt
    // public $timestamps = false;
}
