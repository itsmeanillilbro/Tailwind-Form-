<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    // Specify the table if it differs from the model name
    protected $table = 'districts';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'name_np',
        'state_id',
    ];

    // Relationships
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'district_id');
    }
}
