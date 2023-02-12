<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptor extends Model
{
    protected $table = 'subscribe';
    protected $primaryKey = 'subscribe_id';
}
