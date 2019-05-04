<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(ProjectTask::class);
    }

    public function addTask($attributes)
    {
        return $this->tasks()->create($attributes);
    }
}
