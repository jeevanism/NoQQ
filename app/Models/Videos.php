<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
     /**
     * The attributes those are mass assignable
     * @var array
     */

    
    public $table='videos';
    protected $fillable = [
        'name',
        'url',
        'descr',
        'cat'
    ];
}
