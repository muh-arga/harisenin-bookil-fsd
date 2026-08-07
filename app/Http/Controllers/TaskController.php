<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_done' => false,
        ]);

        return redirect('/')->with('success', 'Task berhasil ditambahkan!');
    }

    // Show edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update a task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect('/')->with('success', 'Task berhasil diperbarui!');
    }

    // Toggle is_done
    public function toggle(Task $task)
    {
        $task->update([
            'is_done' => ! $task->is_done,
        ]);

        return redirect('/')->with('success', 'Status task diperbarui!');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/')->with('success', 'Task berhasil dihapus!');
    }
}
