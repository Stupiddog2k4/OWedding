<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\User;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = session('user');
        $title =$request->input('title');
        $filter =$request->input('filter','');

        $tasks = Task::when($title, fn($query, $title)=> $query->title($title));
        $tasks = Task::task($user['id'])->get();
        // $tasks = match($filter) {
        //     'TRƯỚC NGÀY CƯỚI 9 - 12 THÁNG' => $tasks->popularLastMonth(),
        //     'TRƯỚC NGÀY CƯỚI 6 THÁNG' => $tasks->popularLast6Months(),
        //     'TRƯỚC NGÀY CƯỚI 3 THÁNG' => $tasks->highestRatedLastMonth(),
        //     'TRƯỚC NGÀY CƯỚI 2 THÁNG' => $tasks->highestRatedLast6Months(),
        //     'TRƯỚC NGÀY CƯỚI 1 THÁNG' => $tasks->popularLast7Months(),
        //     'TRƯỚC NGÀY CƯỚI 1 NGÀY'=> $tasks->popularLast8Months(),
        //     'NGÀY ĐÁM CƯỚI'=> $tasks->popularLast9Months(),
        //     default => $tasks->latest()
        // };
        
        return view('task.index',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request, User $user)
    {
        $user = session('user');
        $data = $request->validated();
        $data['user_id'] = $user['id'];
        $user->tasks()->create($data);

        return redirect()->route('tasks.index')
        ->with('success','Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('show', [
              "task"=>$task
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('edit', [
                 "task"=>$task
               ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.show', ['task'=> $task->id])
            ->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }

    //Toggle complete
    public function toggleComplete(Task $task){
        $task->toggleComplete();
        return redirect()->back()->with('success', 'Task updated successfully!');
    }
}