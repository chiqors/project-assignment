<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_m_project';
    protected $primaryKey = "project_id";

    protected $fillable = [
        'project_name',
        'client_id',
        'project_start',
        'project_end',
        'project_status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }
}
