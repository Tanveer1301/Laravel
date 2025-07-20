<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
    'flat_id', 'tenant_name', 'tenant_phone', 'rent', 'other_charges', 'description'
    ];
    public $incrementing = false;
    protected $primaryKey = 'flat_id';
    protected $keyType = 'string';

}
