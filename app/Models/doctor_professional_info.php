<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class doctor_professional_info extends Model
{
    use HasFactory, Notifiable;
    protected $table = "doctor_professional_infos";
    protected $fillable = [
        "qualification",
        "registration_number",
        "practice_name",
        "practice_address",
        "therapy_type",
        "client_age_served",
        "session_length",
        "session_fee",
        "medicare_amount",
        "expert",
        "certificate",
        "certificate_image",
    ];
}
