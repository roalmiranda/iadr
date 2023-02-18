<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table      = 'member';
    protected $primaryKey = 'member_id';

    public function memberSocial(){
        return $this->hasMany(MemberSocial::class, 'member_id');
    }
}
