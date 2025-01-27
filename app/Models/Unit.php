<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rent', 'occupied', 'user_id', 'property_id'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
