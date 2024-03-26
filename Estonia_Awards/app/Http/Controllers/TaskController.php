<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
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

private function sortNews($categoryId, $sort)
{
    $query = Task::query();

    if ($categoryId != "0") {
        $query->where('category_id', $categoryId);
    }

    switch ($sort) {
        case 'date_asc':
            $query->orderBy('updated_at', 'asc');
            break;
        case 'date_desc':
            $query->orderBy('updated_at', 'desc');
            break;
        case 'title_asc':
            $query->orderBy('title', 'asc');
            break;
        case 'title_desc':
            $query->orderBy('title', 'desc');
            break;
        default:
            $query->orderBy('updated_at', 'desc');
            break;
    }

    return $query->get();
}

    
    public function listLimit()
    {
        $tasks = Task::orderBy('created_at', 'desc')->take(3)->get();
        return view('startMainPage', compact('tasks'));
    }
    
    public function search(Request $request)
    {
        $searchQuery = $request->input('searchQuery');
    
        $categories = Category::orderBy('name', 'asc')->get();
        $sortinglist = ['all', 'date asc', 'date desc', 'title asc', 'title desc'];
    
        $tasks = Task::where('title', 'like', "%$searchQuery%")
                      ->orWhere('description', 'like', "%$searchQuery%")
                      ->orWhere('updated_at', 'like', "%$searchQuery%")
                      ->orderBy('created_at', 'desc')
                      ->get();
    
        return view('tasks.news', compact('tasks', 'categories', 'searchQuery', 'sortinglist'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::orderBy('name','asc')->get();
        return view('tasks.create', compact('categories'));
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

    /**
     * Show the form for editing the specified resource.
     */

public function edit(Task $task)
{
    $categories = Category::orderBy('name', 'asc')->get();
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/productlist');
    }
}