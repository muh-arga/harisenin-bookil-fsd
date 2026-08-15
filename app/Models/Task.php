<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Only these fields may be filled with Task::create() or $task->update().
    protected $fillable = ['title', 'description', 'is_done'];

    protected function casts(): array
    {
        return [
            'is_done' => 'boolean',
        ];
    }
}
