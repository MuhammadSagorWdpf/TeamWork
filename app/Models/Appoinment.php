<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    protected $fillable = [
        "age",
        "date",
        "fees",
        "client_id",
        "status",
    ];


}
