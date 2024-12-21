<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class doctor_profile_description extends Model
{
    use HasFactory, Notifiable;

    protected $table = "doctor_profile_descriptions";
    protected $fillable = [
        "description",
        "profile_image",
        "doctor_personal_info_id",
        "doctor_perfessional_info_id",
    ];

    public function doctor_personal_info()
    {
        return $this->belongsTo(doctor_personal_info::class);
    }
    public function doctor_professional_info()
    {
        return $this->belongsTo(doctor_professional_info::class);
    }
}
