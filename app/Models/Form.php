<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'ethnic_group',
        'province',
        'district',
        'municipality',
        'address',
        'email',
        'phone',
        'fathers_name',
        'mothers_name',
        'father_occupation',
        'father_number',
        'mother_number',
        'mother_occupation',
        'college_name',
        'percentage',
        'notes',
        'image',
        'document',
        'other_document'
    ];
}
