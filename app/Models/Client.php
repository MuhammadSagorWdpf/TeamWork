<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Notifiable;

    protected $table ='clients';
    protected $fillable = [
        "user_id",
        "email",
        "password",
        "state",
        "city",
        "postal_code",
        "therapy_type",
        "area_of_focus",
        "first_name",
        "last_name",
        "dob",
        "phone_number",
        "gender",
        "image",
    ];
}
