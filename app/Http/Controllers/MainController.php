<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function home()
    {
      $tasks = [
        ['task' => 'Learning Laravel', 'completed' => true],
        ['task' => 'Learning React', 'completed' => true],
        ['task' => 'Learning Vue', 'completed' => false],
        ['task' => 'Learning Postgres', 'completed' => false],
        ['task' => 'Learning modern HTML/CSS', 'completed' => true]
      ];
      return view('home', ['tasks' => $tasks]);
    }
    public function about()
    {
      return view('about');
    }
    public function contact()
    {
      return view('contact');
    }
}