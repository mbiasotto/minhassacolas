<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'app_users';

    protected $fillable = [
                            'nome',
                            'email',
                            'user',
                            'senha',
                            'senhamd5',
                            'nivel',
                            'perfil',
                            'status',
                            'senha_key',
                            'senha_key_data',
    ];

    public function permissions()
    {
       return $this->hasOne('App\Models\UserPermission','user_id');
    }

}

