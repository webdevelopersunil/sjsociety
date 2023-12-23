<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'father_husband_name',
        'mother_name',
        'whatsapp_number',
        'email',
        'mobile_number',
        'aadhar_number',
        'second_mobile_number',
        'qualification',
        'gender',
        'nationality',
        'father_occupation',
        'village_address',
        'post_office',
        'district',
        'pin_code',
        'state'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

}
