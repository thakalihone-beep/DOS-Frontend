<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    protected $fillable = [
        'name',
        'process_name',
        'icon',
    ];

    public function activityLogs(): HasMany
    {
        return $this->hasMany(ActivityLog::class);
    }
}
