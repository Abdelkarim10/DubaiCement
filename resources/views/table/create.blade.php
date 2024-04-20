@extends('layouts.app')
@section('content')

<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container mt-5" >
    <!-- resources/views/data_rows/create.blade.php -->
    <form action="{{ route('table.store') }}" method="post" style="margin-top: 110px">
        @csrf

        <!-- Add hidden input for maintlbs_id -->
      
        <input type="hidden" name="maintlbs_id" value="{{ $maintlbs->id }}">
        

        <!-- Second Row -->
        <div class="row mt-3">
           
   
            <!-- Time -->
            <div class="col-md-6">
                <label for="time">Time:</label>
                <input type="time" class="form-control" name="time" id="time" required>
            </div>

            <!-- Date -->
            <div class="col-md-6">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
        </div>

        <!-- Third Row -->
         <!-- Concrete M3 per Gallon -->
        <div class="row mt-3">
          

            <!-- Kilo Current -->
            <div class="col-md-6">
                <label for="kilo_current">KiloMeter Current:</label>
                <input type="number" class="form-control" name="kilo_current" id="kilo_current" step="0.1">
            </div>

            <!-- Kilo Consumed -->
            <div class="col-md-6">
                <label for="kilo_consumed">KiloMeter Consumed:</label>
                <input type="number" class="form-control" name="kilo_consumed" id="kilo_consumed" step="0.1">
            </div>

        </div>

   <!-- Fourth Row -->
<div class="row mt-3">
   

            <!-- Hour Current -->
            <div class="col-md-6">
                <label for="hour_current">HourMeter Current:</label>
                <input type="number" class="form-control" name="hour_current" id="hour_current" step="0.1">
            </div>
       

        <!-- Hour Consumed -->
        <div class="col-md-6">
            <label for="hour_consumed">HourMeter Consumed:</label>
            <input type="number" class="form-control" name="hour_consumed" id="hour_consumed" step="0.1">
        </div>
</div>
<!-- Fifth Row -->
<div class="row mt-3">
   

    <!-- Diesel Quantity -->
    <div class="col-md-6">
        <label for="dieselQty">Diesel Quantity:</label>
        <input type="number" class="form-control" name="dieselQty" id="dieselQty" step="0.1" required>
    </div>
  <!-- Concrete Quantity (M3) -->
  <div class="col-md-6">
    <label for="concreteQtyM3">Concrete Quantity (M3):</label>
    <input type="number" class="form-control" name="concreteQtyM3" id="concreteQtyM3" step="0.1" required>
</div>


</div>

<!-- Sixth Row -->
<div class="row mt-3">
  
    <!-- Trips -->
    <div class="col-md-6">
        <label for="trips">Trips:</label>
        <input type="number" class="form-control" name="trips" id="trips" required>
    </div>

       <!-- Trips per Gallon -->
       <div class="col-md-6">
        <label for="tripPerGal">Trips per Gallon:</label>
        <input type="number" class="form-control" name="tripPerGal" id="tripPerGal" step="0.1" required>
    </div>

</div>

<!-- Seventh Row -->
<div class="row mt-3">
 

    <div class="col-md-6">
        <label for="concreteM3PerGal">Concrete M3 per Gallon:</label>
        <input type="number" class="form-control" name="concreteM3PerGal" id="concreteM3PerGal" step="0.1" required>
    </div>
   
</div>

<!-- Continue adding rows as needed -->

<!-- Submit Button -->
<div class="mt-3">
    <button type="submit" class="btn btn-primary">Create Row</button>
</div>
