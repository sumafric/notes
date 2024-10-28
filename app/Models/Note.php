<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    use  HasFactory, HasUuids;
    
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];
/**
* Get the user that owns the note.
*/
    public function user()
    {
        return $this -> belongsTo(User::class);  
    }
}