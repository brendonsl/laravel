<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    use HasFactory;
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    public $incrementing = true;
}
