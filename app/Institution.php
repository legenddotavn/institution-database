<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function sars(){
    	return $this->hasMany(Sar::class);
    }

    public function sarPrimaryDataValue() {
    	return $this->hasManyThrough(SarPrimaryDataValue::class, Sar::class);
    }
}
