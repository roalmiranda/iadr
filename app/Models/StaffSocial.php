<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffSocial extends Model
{
    protected $table = 'staff_social';
    protected $primaryKey = 'staff_social_id';
    
    public function social(){
        return $this->belongsTo(Social::class, 'social_id');
    }
}
