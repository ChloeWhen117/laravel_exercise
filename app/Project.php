<?php

namespace App;

use App\Events\ProjectCreated;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    public function tasks()
    {
        return $this->hasMany(ProjectTask::class);
    }

    public function addTask($attributes)
    {
        return $this->tasks()->create($attributes);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
