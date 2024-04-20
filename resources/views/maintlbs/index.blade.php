@extends('layouts.app')
@section('content')

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


    <div class="container">
        <div class="row">
            
            <div class="col-md-12"  style=" margin: 10% auto; ">
                <div class="card">
                    <div class="card-header" id="flash-message-container" >
                        <h2>Tables</h2>
<br>
              

                    </div>
                    <div class="card-body">
                        <a href="{{ url('/maintlbs/create') }}" class="btn btn-success btn-md" title="Add New Table">
                            <i class="fa fa-plus" aria-hidden="true"></i>New Table  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                              </svg>
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th >Name</th>
                                        <th>Area</th>
                                        <th>Equipe-Code</th>                          
                                        <th>From date</th>
                                        <th>To date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($maintlbs as $maintlbs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $maintlbs->name }}</td>
                                        <td>{{ $maintlbs->area }}</td>
                                        <td>{{ $maintlbs->equipeCode }}</td>
                                        <td>{{ $maintlbs->from_date }}</td>
                                        <td>{{ $maintlbs->to_date }}</td>
                                        
 
                                        <td>
                                            <a href= "{{ url('tables/'. $maintlbs->id) }}"  title="View table"><button class="btn btn-info btn-md"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            &nbsp;
                                            <a href="{{ url('maintlbs/' . $maintlbs->id . '/edit' ) }}" title="Edit table"><button class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            &nbsp;
 
                                            <form method="POST" action="{{ url('maintlbs/'. $maintlbs->id.'/delete') }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-md" title="Delete Table" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #flash-message-container {
            position: relative;
            height: 60px; /* Set a fixed height based on your design */
            overflow: hidden; /* Hide content that exceeds the fixed height */
            transition: height 1s ease-out; /* Smooth transition for height changes */
        }
    
        #flash-message {
            position: absolute;
            margin: 3% 0 0 25% !important ;"
            top: 0;
            left: 0;
            width: 40%;
            z-index: 1; 
            /* Ensure the flash message appears above other content */
        }
    </style>
@endsection