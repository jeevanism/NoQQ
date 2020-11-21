<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VideoCategory extends Model
{
    use HasFactory;
    public $table='video_categories';
    protected $fillable = [
        'category_name',
        
    ];

    public function run() {
        Videos::factory(5)->create();
    }
}
