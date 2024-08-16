<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // Specify the table if it differs from the model name
    protected $table = 'cities';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'name_np',
        'latitude',
        'longitude',
        'district_id',
    ];

    // Relationships
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
