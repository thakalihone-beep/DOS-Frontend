<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Website extends Model
{
    protected $fillable = [
        'domain',
        'name',
        'icon',
    ];

    public function activityLogs(): HasMany
    {
        return $this->hasMany(ActivityLog::class);
    }
}
