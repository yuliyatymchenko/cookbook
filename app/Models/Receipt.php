<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    public $timestamps = false;
    protected $table = 'receipt';
    protected $primaryKey = 'idReceipt';

    public function components()
    {
        return $this->hasMany(Component::class, 'idReceipt');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'idReceipt');
    }
}