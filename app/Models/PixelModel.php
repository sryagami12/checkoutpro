<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PixelModel extends Model
{
    use HasFactory;

    protected $table = 'pixel_code';
    protected $primaryKey = 'pixel_id';

    protected $fillable = [
        'pixeel'
    ];
}
