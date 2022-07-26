<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'id',
        'del_flag',
        'username',
        'password',
        'fullname',
        'is_male',
        'birthday',
        'email',
        'phone',
        'picture',
        'access_level',
        'created_by',
        'modified_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
