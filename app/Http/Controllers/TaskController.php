<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validte([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task berhasil ditambahkan!');
    }

    public function edit(Task $task): View
    {
        return view('tasks.edit', compact('tasks'));
    }

    public function update(Request $request, Task $task): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($validate);

        return redirect()->route('tasks.index')->with('success', 'Task berhasil diperbarui!');
    }

    public function toggle(Task $task): RedirectResponse
    {
        $task->udpate([
            'is_done' => ! $task->is_done,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Status task diperbarui!');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->destory();

        return redirect()->route('tasks.index')->with('success', 'Task berhasil dihapus!');
    }
}
