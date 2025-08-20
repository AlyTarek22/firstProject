<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
        protected $fillable = ['course_id', 'name','number'];
        protected $table = 'levels';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
