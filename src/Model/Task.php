<?php

namespace Whylab\Todolist\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    protected $table = 'task';

    protected $fillable = [
        'name',
    ];
}
