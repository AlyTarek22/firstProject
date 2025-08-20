<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WillLearn extends Model
{
    use HasFactory;
        protected $fillable = ['course_id', 'topic'];
        protected $table = 'will_learn';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
