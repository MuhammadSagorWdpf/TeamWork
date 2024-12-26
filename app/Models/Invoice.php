<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        "invoice_number",
        "client_id",
        "phone",
        "amount",
        "payment_date",
        "status",
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
