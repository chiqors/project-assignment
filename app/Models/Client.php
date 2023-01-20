<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_m_client';

    protected $fillable = [
        'client_name',
        'client_address'
    ];

    public function project()
    {
        return $this->hasMany('App\Models\Project','client_id');
    }
}
