<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    // Specify the table if it differs from the model name
    protected $table = 'states';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'name_np',
    ];

    // Relationships
    public function districts()
    {
        return $this->hasMany(District::class, 'state_id');
    }
}
