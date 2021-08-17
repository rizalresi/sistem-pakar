<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_hp', 'checkin', 'checkout', 'qrcode'];
}
