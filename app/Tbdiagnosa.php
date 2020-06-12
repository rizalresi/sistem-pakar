<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbdiagnosa extends Model
{
    protected $fillable = ['kddiagnosa', 'nmdiagnosa', 'kdgejala', 'nmgejala', 'kdkerusakan', 'nmkerusakan'];
}
