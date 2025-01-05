<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Psychologist extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'psychologists';

    protected $guarded=[];

    public function appointments()
    {
        return $this->hasMany(Appoinment::class);
    }

}
