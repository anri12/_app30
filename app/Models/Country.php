<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Country extends Model
{
    protected $fillable = [
        'id',
        'country',
    ];
    public function customers(){
        return $this->hasMany(Customer::class, 'country_id', 'id');
    }
}
