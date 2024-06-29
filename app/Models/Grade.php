<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    protected $table = 'grades';
    use HasFactory;

    public function subjects() //: BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
