@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <!-- Add Task Form -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0"><i class="bi bi-plus-circle"></i> Tambah Task Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('tasks.store') }}" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Task</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                               id="title" name="title"
                               value="{{ old('title') }}" placeholder="Contoh: Belajar Laravel" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi (Opsional)</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                                  id="description" name="description"
                                  rows="2" placeholder="Detail task...">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i> Tambah
                    </button>
                </form>
            </div>
        </div>

        <!-- Task List -->
        <div class="card shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-list-task"></i> Daftar Task</h5>
                <span class="badge bg-secondary">{{ $tasks->count() }} total</span>
            </div>
            <div class="card-body">
                @if ($tasks->isEmpty())
                    <div class="text-center py-4 text-muted">
                        <i class="bi bi-inbox" style="font-size: 2rem;"></i>
                        <p class="mt-2">Belum ada task. Tambah task pertamamu di atas!</p>
                    </div>
                @else
                    <div class="list-group">
                        @foreach ($tasks as $task)
                            <div class="list-group-item d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!-- Toggle Done -->
                                    <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="me-3">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-sm p-0 border-0 bg-transparent">
                                            @if ($task->is_done)
                                                <i class="bi bi-check-circle-fill text-success" style="font-size: 1.3rem;"></i>
                                            @else
                                                <i class="bi bi-circle text-muted" style="font-size: 1.3rem;"></i>
                                            @endif
                                        </button>
                                    </form>
                                    <div class="ms-2 {{ $task->is_done ? 'task-done' : '' }}">
                                        <strong>{{ $task->title }}</strong>
                                        @if ($task->description)
                                            <br><small class="text-muted">{{ $task->description }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex gap-2 ms-3">
                                    <a href="{{ route('tasks.edit', $task) }}"
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Hapus task ini?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
@endsection
