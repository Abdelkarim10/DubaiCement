@extends('layouts.app')

@section('content')
<div >
    <div class="container"  style="margin-top: 135px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Table') }}</div>

                    <div class="card-body">
                        <form action="{{ route('maintlbs.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Table Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="area">Area:</label>
                                <input type="text" name="area" id="area" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="equipeCode">Equipe Code:</label>
                                <input type="text" name="equipeCode" id="equipeCode" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="from_date">From Date:</label>
                                <input type="date" name="from_date" id="from_date" class="form-control customDateInput" required>
                            </div>

                            <div class="form-group">
                                <label for="to_date">To date:</label>
                                <input type="date" name="to_date" id="to_date" class="form-control" required>
                            </div>

                            <!-- Add a hidden field to store the table_id -->
                            {{-- <input type="hidden" name="table_id" id="table_id" value="{{ $tableIdFromSeeder }}"> --}}

                            <!-- ... other fields for the maintlbs table -->
<br>
                            <button type="submit" class="btn btn-success">Create Table</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Get the input element
    const dateInput = document.getElementById('customDateInput');

    // Add an event listener for when the input value changes
    dateInput.addEventListener('input', function () {
        // Parse the input value as a date
        const selectedDate = new Date(this.value);

        // Format the date as day/month/year
        const formattedDate = selectedDate.toLocaleDateString('en-GB'); // Adjust the locale as needed

        // Set the input value to the formatted date
        this.value = formattedDate;
    });
</script>
@endsection
