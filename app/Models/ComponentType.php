<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    public $timestamps = false;
    protected $table = 'componentType';
    protected $primaryKey = 'idComponentType';
}