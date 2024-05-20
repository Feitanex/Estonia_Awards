<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::orderBy('name','asc')->get();
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('tasks.index', compact('tasks','categories'));
    }
    public function dashboard()
    {
        $tasks = Task::all();
        return view('dashboard', compact('tasks'));
    }
    

    public function taskByCategory(Request $request){
        $data=$request->all();
        $categories=Category::orderBy('name','asc')->get();
        $selectCategory=$data['category_id'];
        
        if($data['category_id']=="0"){
            return redirect('/productlist');
        }else{
            $tasks = Task::where('category_id', $data['category_id'])-> get();
            return view('tasks.index', compact('tasks','categories','selectCategory'));
            
        }
    }
    public function listmenu()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tasks = Task::orderBy('created_at', 'desc')->get();
        $sortinglist = ['all', 'date asc', 'date desc', 'title asc', 'title desc'];
        return view('tasks.news', compact('tasks', 'categories', 'sortinglist'));
    }
    
    public function newsByCategory(Request $request)
{
    $data = $request->all();
    $categories = Category::orderBy('name', 'asc')->get();
    $selectCategory = $data['category_id'];
    $sort = $data['sort'];

    $sortinglist = ['all', 'date_asc', 'date_desc', 'title_asc', 'title_desc'];

    if ($selectCategory == "0" && $sort == "all") {
        return redirect('/news');
    } else {
        $tasks = $this->sortNews($selectCategory, $sort);
        return view('tasks.news', compact('tasks', 'categories', 'selectCategory', 'sortinglist', 'sort'));
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::orderBy('name','asc')->get();
        return view('tasks.create', compact('categories'));
    }

    public function listLimit()
    {
        $tasks = Task::orderBy('created_at', 'desc')->take(3)->get();
        return view('startMainPage', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        $data = $request->all();
        $filename = $request->file('image')->getClientOriginalName();
        $data['image'] = $filename;
        Task::create($data);
        $file = $request->file('image');
        if($filename){
            $file->move('../public/images/', $filename);
        }
        return redirect('/productlist');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.detail', compact('task'));
    }
    public function info(Task $task)
    {
        return view('tasks.info', compact('task'));
    }
    public function diplom(Task $task)
    {
        return view('tasks.diplom', compact('task'));
    }
    public function portfolio(Task $task)
    {
        $tasks = Task::with('category')->orderBy('created_at', 'desc')->take(4)->get();
        return view('Tasks.portfolio', compact('tasks'));
    }
    public function zakaz(Task $task)
    {
        return view('tasks.zakaz', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $categories = Category::all();
        return view('tasks.edit', compact('task', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        $data = $request->all();
        if($request->file('image')){
        $filename=$request->file('image')->getClientOriginalName();
        $data['image'] = $filename;
        $file = $request->file('image');
        if($filename){
            $file->move('../public/images/', $filename);
        }
    }
    $task->update($data);
    return redirect('/productlist');
    }
    public function showDashboard() {
        $tasks = Task::all(); // Или ваш метод получения данных
        return view('dashboard', compact('tasks'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/productlist');
    }
}
