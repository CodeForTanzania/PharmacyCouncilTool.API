<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['gender', 'location', 'pharmacy_registration_number', 'message'];
}