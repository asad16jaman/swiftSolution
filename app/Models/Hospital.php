<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }

   
    protected static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->uid = (string) Str::uuid();
        });
    }
    
    
}
