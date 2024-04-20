@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/table.css') }}">



 <h1>READY MIX BETON, Dubai</h1>
       

 <div style="display: flex; justify-content: space-between; align-items: center;">
    <h3>{{$maintlbs->name }}</h3>


    <a href="{{ url('tables/create/'.$maintlbs->id) }}" class="btn btn-success btn-md" title="Add New Row">
        <i class="fa fa-plus" aria-hidden="true"></i> New Row
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
    </a>

</div>




<div class="container" > 
    @if(session('success'))
    <div id="flash-message" class="alert alert-success">
        {{ session('success') }}
    </div>
    
    <script>
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            flashMessage.style.transition = 'opacity 1s';
            flashMessage.style.opacity = '0';
    
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 1000); // 1000 milliseconds 
        }, 2000); // 5000 milliseconds
    </script>
    @endif
</div> 




      <br>

     {{-- <h3>{{$maintlbs->name }} </h3> --}}
    <table class="styled-table table-responsive"  >
        
        <tr>
             <td colspan="12" id="onlyTD">
                <span class="left-content"><strong>  AREA : {{$maintlbs->area }} </strong></span>
                <span class="center-content"><strong>  Equip.Code: {{$maintlbs->equipeCode }}</strong></span>
                <span class="right-variable" style=" font-style: italic;"><strong>From Date:</strong> <span>{{$maintlbs->from_date }} </span>&nbsp; <strong>to</strong>&nbsp; <span> {{$maintlbs->to_date }}</span></span>
             </td>
        </tr>
       
        <tr>
            <th style="width:100%">Date </th>
            <th>Time</th>
            <th>KiloMeter Current</th>
            <th>KiloMeter Consumed</th>
            <th>Hour Meter Current</th>
            <th>Hour Meter Consumed</th>
            <th>Diesel Quantity</th>
            <th>Concrete Qty. m3</th>
            <th>Trips</th>
            <th>Trip per Gal</th>
            <th>Concrete m3 / Gal</th>
            <th>Action</th>
        </tr>
      
        @foreach($maintlbs->tables as $table)
        <tr>
            <td>{{$table->date}}</td>
            <td>{{$table->time}}</td>
            <td>{{$table->kilo_current}}</td>
            <td>{{$table->kilo_consumed}}</td>
            <td>{{$table->hour_current}}</td>
            <td>{{$table->hour_consumed}}</td>
            <td>{{$table->dieselQty}}</td>
            <td>{{$table->concreteQtyM3}}</td>
            <td>{{$table->trips}}</td>
            <td>{{$table->tripPerGal}}</td>
            <td>{{$table->concreteM3PerGal}}</td>
            <td>
               
                <div class="d-flex">
                    <a href="{{ route('table.edit', $table->id) }}" class="btn btn-info btn-sm" title="Edit">
                        <i class="fa fa-edit" aria-hidden="true">Edit</i>
                    </a>
                    
                    <form action="{{ route('table.destroy', $table->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger btn-sm ml-2" title="Delete Row" onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash" aria-hidden="true">Delete </i>
                        </button>
                        
                    </form>
                </div>


                {{-- <a href="{{ route('table.destroy', $table->id) }}" class="btn btn-danger btn-sm" title="Delete">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a> --}}

            </td>
        </tr>
        
        @endforeach
       
        <tr>
            <td colspan="4"><strong> {{$maintlbs->equipeCode }}</strong><span class="right-variable"><strong> {{ $sumKiloSum }}</strong> </span></td>
            <td colspan="2"><strong> <span class="right-variable"> {{ $sumHourSum }} </span></strong></td>
            
            <td><strong>{{ $sumDieselQty }}</strong></td>
            <td><strong>{{ $sumConcreteQty }}</strong></td>
            <td><strong>{{ $sumTrips }}</strong></td>
            <td><strong>{{ $sumTripsPerGal }}</strong></td>
            <td><strong>{{ $sumConcretePerGal }}</strong></td>
        </tr>
    </table>
    <style>
        /* ... (your existing styles) */
        .btn-sm {
            padding: 7px 11px; /* Adjust padding to make buttons smaller */
        }

.container{
    padding: 0;
}
        #flash-message-container {
        position: relative;
        height: 30px; /* Set a fixed height based on your design */
        overflow: hidden; /* Hide content that exceeds the fixed height */
        transition: height 1s ease-out; /* Smooth transition for height changes */
        margin-bottom: 0px !important; /* Add some margin to separate it from the table */
    }
/* sss */
    
        #flash-message {
            position: absolute;
            margin:4% 30% !important ;
            top: 0;
            left: 0;           
            width: 20%;
            z-index: 1; /* Ensure the flash message appears above other content */
        }
    </style>
@endsection