<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'id',
        'name',
        'country_id',
        'date',

    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    
}
