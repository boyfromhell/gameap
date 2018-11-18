<?php

namespace Gameap\Models;

use Illuminate\Database\Eloquent\Model;

class ServerSetting extends Model
{
    public $table = 'servers_settings';
    public $timestamps = false;

    protected $casts = [
        'value' => 'array',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }
}
