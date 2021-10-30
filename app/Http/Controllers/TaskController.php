<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Task::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TaskResource $request)
    {
        $data = $request->validated();
        return response()->json(Task::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Task $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TaskResource $request, Task $task)
    {
        $data = $request->validated();
        $task->update($data);
        return response()->json('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Task $task): \Illuminate\Http\JsonResponse
    {
        $task->delete();
        return response()->json(['end' => true]);
    }

    public function search(TaskResource $request)
    {
        $request->validated();
        $filtered = Task::byName($request->name);
        if ($request->completed) {
            $filtered = $filtered->where('completed', boolval($request->completed));
        }
        return response()->json($filtered->get());
    }
}
