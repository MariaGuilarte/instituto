<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
  public function index()
  {
    $grades = Grade::all();
    return view('grades.index', ['grades' => $grades]);
  }

  public function create()
  {
    return view('grades.create');
  }

  public function store(Request $request)
  {
    $grade = Grade::create([
      'name' => $reques->name
    ]);
    
    if( !$grade ){
      $request->session()->flash('fail', 'Creation was failure!');
      return back()->withInput();
    }
    
    $request->session()->flash('success', 'Creation was successful!');
    return view('grades.show', ['grade' => $grade]);
  }

  public function show(Grade $grade)
  {
    return view('grades.show', ['grade' => $grade]);
  }

  public function edit(Grade $grade)
  {
    return view('grades.edit', ['grade' => $grade]);
  }

  public function update(Request $request, Grade $grade)
  {
    $grade = ( $request->name ) ? $request->name : $grade->name;
    
    if( !$grade->save() ){
      $request->session()->flash('fail', 'Edition was failure!');
      return back()->withInput();
    }
    
    $request->session()->flash('success', 'Edition was successful!');
    return view('grades.show', ['grade' => $grade]);
  }

  public function destroy(Grade $grade)
  {
    if( !$grade->delete() ){
      $request->session()->flash('fail', 'Deletion was failure!');
      return back();
    }
    
    $request->session()->flash('success', 'Deletion was successful!');
    return redirect()->route('grades.index');
  }
}
