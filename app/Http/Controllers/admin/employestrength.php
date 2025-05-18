<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\empstrength;
use Illuminate\Http\Request;

class employestrength extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$data = empstrength::where('status', '=', 1)->orderBy('created_at')->get();
return view('admin.Empstrength.show',compact("data"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.Empstrength.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          $request->validate([
        'strength' => 'required|string|max:255|unique:empstrength,strength',
    ]);

    empstrength::create([
        'strength' => $request->strength,
    ]);
        return redirect()->route('empstrength.index')->with('success', 'Updated successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
                // return $id;
                $data=empstrength::where("id","=",$id)->first();
return view('admin.Empstrength.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'strength' => 'required',
    ]);

    $empStrength = EmpStrength::findOrFail($id);
    $empStrength->strength = $request->strength;
    $empStrength->save();

    return redirect()->route('empstrength.index')->with('success', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $delete = empstrength::findOrFail($id);
    $delete->delete();

    return redirect()->back()->with('success', 'Strength deleted successfully.');
    }
}
