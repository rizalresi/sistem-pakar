<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbkerusakan extends Model
{
    protected $fillable = ['kdkerusakan', 'nmkerusakan', 'kdkategori', 'nmkategori', 'keterangan'];
}
