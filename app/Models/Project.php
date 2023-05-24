<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type_id',
        'start_date',
        'end_date',
        'description',
        'slug'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
