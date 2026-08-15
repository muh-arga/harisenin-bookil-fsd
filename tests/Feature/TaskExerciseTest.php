<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class TaskExerciseTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_form_contains_csrf_protection(): void
    {
        $this->get(route('tasks.index'))
            ->assertOk()
            ->assertSee('name="_token"', escape: false);
    }

    public function test_a_task_can_be_created_from_valid_input(): void
    {
        $this->post(route('tasks.store'), [
            'title' => 'Belajar debugging dengan AI',
            'description' => 'Baca error sebelum meminta solusi.',
        ])->assertRedirect(route('tasks.index'));

        $this->assertDatabaseHas('tasks', [
            'title' => 'Belajar debugging dengan AI',
        ]);
    }

    public function test_the_edit_page_displays_the_selected_task(): void
    {
        $task = Task::forceCreate(['title' => 'Task untuk diedit']);

        $this->get(route('tasks.edit', $task))
            ->assertOk()
            ->assertSee('Task untuk diedit');
    }

    public function test_a_task_can_be_updated(): void
    {
        $task = Task::forceCreate(['title' => 'Judul lama']);

        $this->put(route('tasks.update', $task), [
            'title' => 'Judul baru',
            'description' => 'Deskripsi baru',
        ])->assertRedirect(route('tasks.index'));

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'title' => 'Judul baru',
        ]);
    }

    public function test_a_completed_task_can_be_marked_incomplete_again(): void
    {
        $task = Task::forceCreate([
            'title' => 'Task selesai',
            'is_done' => true,
        ]);

        $this->patch(route('tasks.toggle', $task))
            ->assertRedirect(route('tasks.index'));

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'is_done' => false,
        ]);
    }

    public function test_delete_route_uses_the_delete_http_method(): void
    {
        $this->assertTrue(Route::getRoutes()->getByName('tasks.destroy')->methods() === ['DELETE']);

        $task = Task::forceCreate(['title' => 'Task untuk dihapus']);

        $this->delete(route('tasks.destroy', $task))
            ->assertRedirect(route('tasks.index'));

        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}
