<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'lease_agreement_file',
        'property_id',
        'unit_id',
    ];
}
