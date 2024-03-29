<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table      = 'staff';
    protected $primaryKey = 'staff_id';

    public function staffSocial(){
        return $this->hasMany(StaffSocial::class, 'staff_id');
    }
}
