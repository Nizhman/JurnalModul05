<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';

    protected $fillable = ['nama','nomor_kamar','tanggal_checkin','tanggal_checkout','status_pembayaran'];
}
