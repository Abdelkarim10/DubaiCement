<?php

namespace App\Http\Controllers;

use App\Models\Maintlbs;
use App\Http\Requests\StoreMaintlbsRequest;
use App\Http\Requests\UpdateMaintlbsRequest;
use Illuminate\Http\Request;
class MaintlbsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintlbs = Maintlbs::all();

        return view('maintlbs.index',[
            'maintlbs' => $maintlbs
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maintlbs.create');
        
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaintlbsRequest $request)
    {    
        // $validatedData = $request->validate([
        //     'from_date' => 'required|date',
        //     'to_date' => 'required|date',
        //     'name'  => 'required|string',
        //     'equipeCode'  => 'required|string',
        //     'area'  => 'required|string',
        // ]);
        Maintlbs::create($request->all());
        return redirect()->route('maintlbs.index')->with('success', 'Table created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Maintlbs $maintlbs)
    {
        $maintlbs = Maintlbs::all();

        return view('maintlbs.index',[
            'maintlbs' => $maintlbs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $maintlbs = Maintlbs::findOrFail($id);
        return view('maintlbs.edit', compact('maintlbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $maintlbs = Maintlbs::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'area' => 'required|string',
            'equipeCode' => 'required|string',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
            // Add validation rules for other fields
        ]);

        // Update the model with the validated data
        $maintlbs->update($validatedData);

        return redirect()->route('maintlbs.index')->with('success', 'Table updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $maintlbs = Maintlbs::findOrFail($id);

        $maintlbs->delete();

        
        return redirect()->route('maintlbs.index')->with('success', 'Table deleted!');

    }
}
