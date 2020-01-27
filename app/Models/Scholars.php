<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholars extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'batch',
        'phone_number',
        'email'];
}
