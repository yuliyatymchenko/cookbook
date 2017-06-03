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

    public function category()
    {
        return $this->hasOne(Category::class, 'idCategory', 'idCategory');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'idReceipt');
    }

    public function scopeLatest($query, $limit)
    {
        return $query->orderBy('idReceipt', 'DESC')->limit($limit);
    }
}