<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $tasks = Task::paginate();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTaskRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTaskRequest $request): RedirectResponse
    {
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('message', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $taskId
     * @return Application|Factory|View
     */
    public function show(int $taskId)
    {
        return view('tasks.show', ['task' => Task::findOrFail($taskId)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return Application|Factory|View
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTaskRequest $request
     * @param Task $task
     * @return RedirectResponse
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('message', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Task::destroy($id);
        return redirect()->route('tasks.index')->with('message', 'Task deleted successfully');
    }

    public function invitation(User $user)
    {
        if (!request()->hasValidSignature()) {
    abort(401);
        }
        auth()->login($user);
        return redirect()->route('dashboard');
    }
}
