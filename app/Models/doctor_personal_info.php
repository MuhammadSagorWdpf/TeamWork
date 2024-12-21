<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class doctor_personal_info extends Model
{
    use HasFactory, Notifiable;

    protected $table = "doctor_personal_infos";
    protected $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "dob",
        "gender",
        "phone_number",
        "language",
        "email",
        "password",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
