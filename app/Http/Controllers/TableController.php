<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Models\Maintlbs;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        
        // $tables = \App\Models\Table::all();
        $maintlbs = Maintlbs::findOrFail($id);
        // $sumDieselQty = Table::sumDieselQty($maintlbs);
        $tables = $maintlbs->tables()->orderBy('date')->get();

        $sumKiloSum = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.kilo_consumed');

        $sumHourSum = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.hour_consumed');

        $sumDieselQty = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.dieselQty');
       
        $sumConcreteQty = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.concreteQtyM3');
         
        $sumTrips = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.trips');
        
        $sumTripsPerGal = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.tripPerGal');

        $sumConcretePerGal = DB::table('tables')
        ->join('maintlbs', 'tables.maintlbs_id', '=', 'maintlbs.id')
        ->where('maintlbs_id', $maintlbs->id)
        ->sum('tables.concreteM3PerGal');

        return view('table.index',[
          'tables'   => $tables,
          'maintlbs' => $maintlbs,
          'sumKiloSum'=> $sumKiloSum,
          'sumHourSum'=> $sumHourSum,
          'sumDieselQty'=> $sumDieselQty,
          'sumConcreteQty'=> $sumConcreteQty,
          'sumTrips'=> $sumTrips,
          'sumTripsPerGal'=> $sumTripsPerGal,
          'sumConcretePerGal'=> $sumConcretePerGal,
    ]);
        
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

        // You might need to pass any necessary data to the view (e.g., $dataTables)
        $tables = Table::all();
        $maintlbs = Maintlbs::findOrFail($id);
        return view('table.create',[
            'tables' => $tables,
            'maintlbs' => $maintlbs,

        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTableRequest $request)
    {
             // Validate the request data
           // Validate the request data
    $validatedData = $request->validate([
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'kilo_current' => 'nullable|numeric',
        'kilo_consumed' => 'nullable|numeric',
        'hour_current' => 'nullable|numeric',
        'hour_consumed' => 'nullable|numeric',
        'dieselQty' => 'required|numeric',
        'concreteQtyM3' => 'required|numeric',
        'trips' => 'required|numeric',
        'tripPerGal' => 'required|numeric',
        'concreteM3PerGal' => 'required|numeric',
        'maintlbs_id' => 'required|exists:maintlbs,id',
    ]);

    // Set 'maintlbs_id' in the data array
    $validatedData['maintlbs_id'] = $request->maintlbs_id;
    // dd($request->all());
    // Create a new record in the 'tables' table
    Table::create($validatedData);

    return redirect()->route('table.index', ['id' => $request->maintlbs_id])->with('success', 'Row added successfully!');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      // You might need to pass any necessary data to the view (e.g., $dataTables)
     
      $table = Table::findOrFail($id);
      return view('table.edit',[
          'table' => $table,
      

      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTableRequest $request, $id)
    {
        $table = Table::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'kilo_current' => 'nullable|numeric',
        'kilo_consumed' => 'nullable|numeric',
        'hour_current' => 'nullable|numeric',
        'hour_consumed' => 'nullable|numeric',
        'dieselQty' => 'required|numeric',
        'concreteQtyM3' => 'required|numeric',
        'trips' => 'required|numeric',
        'tripPerGal' => 'required|numeric',
        'concreteM3PerGal' => 'required|numeric',
        'maintlbs_id' => 'required|exists:maintlbs,id',
        ]);

        // Update the model with the validated data
        $table->update($validatedData);

        return redirect()->route('table.index', ['id' => $table->maintlbs_id])->with('success', 'Table updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        $tables = Table::findOrFail($id);    
        $maintlbs_id= $tables->maintlbs_id; 
        
        $tables->delete();

        return redirect()->route ('table.index', ['id' => $maintlbs_id])->with('success', 'Row deleted!');
    }
}
