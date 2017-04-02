<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public $timestamps = false;
    protected $table = 'component';
    protected $primaryKey = 'idComponent';

    public function measure()
    {
        return $this->belongsTo(Measure::class, 'idMeasure');
    }

    public function componentType()
    {
        return $this->belongsTo(ComponentType::class, 'idComponentType');
    }
}