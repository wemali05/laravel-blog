<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=[];


    public function owner(){
     return   $this->belongsTo(User::class);
    }

    public function tasks()
    {
     return   $this-> hasMany(Task::class);
    }

    public function addTask($description)
    {
       $this->tasks()->create(compact('description'));
    }
}
 