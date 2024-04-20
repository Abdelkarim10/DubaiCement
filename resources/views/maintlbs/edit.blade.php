@extends('layouts.app')

@section('content')
<div style="margin-top: 15%">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Table') }}</div>

                    <div class="card-body">
                        <form action="{{ route('maintlbs.update', $maintlbs->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Table Name:</label>
                                <input value="{{ $maintlbs->name }}" type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="area">Area:</label>
                                <input value="{{ $maintlbs->area }}" type="text" name="area" id="area" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="equipeCode">Equipe Code:</label>
                                <input value="{{ $maintlbs->equipeCode }}" type="text" name="equipeCode" id="equipeCode" class="form-control" required>
                            </div>

                           
                            <div class="form-group">
                                <label for="from_date">From Date:</label>
                                <input  value="{{ $maintlbs->from_date }}" type="date" name="from_date" id="from_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="to_date">To date:</label>
                                <input type="date"  value="{{ $maintlbs->to_date }}" name="to_date" id="to_date" class="form-control" required>
                            </div>

                          
                            <input type="hidden" name="table_id" value="{{ $maintlbs->table_id }}">

                           

                            <button type="submit" class="btn btn-success">Update Table</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
