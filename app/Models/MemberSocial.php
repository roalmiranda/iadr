<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberSocial extends Model
{
    protected $table = 'member_social';
    protected $primaryKey = 'member_social_id';
    
    public function social(){
        return $this->belongsTo(Social::class, 'social_id');
    }
}
