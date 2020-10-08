<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
    <h4>Employee Lists</h4>
            <div class="card-body">
              @if(Session::has('success') || Session::has('alert'))
                <div class="alert {{Session::has('success') ? 'alert-success' : 'alert-danger'}} alert-dismissible show" role="alert">
                {!! session('success').session('alert') !!}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif 
              <div class="table-responsive">
              
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Employee No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Company</th>
                                <th>Salary</th>
                                <th>Start date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse($emplist as $empData)
                            <tr>
                                <td>{{$empData->id}}</td>
                                <td>{{$empData->employee_no}}</td>
                                <td>{{$empData->name}}</td>
                                <td>{{$empData->getDesignations->title}}</td>
                                <td>{{$empData->department}}</td>
                                <td>{{$empData->company}}</td>
                                <td>{{number_format($empData->salary,2)}} BDT</td>
                                <td>
                                  {{date('d-m-Y', strtotime($empData->joining_date))}}
                                </td>
                                <td>
                                  <span>
                                  <span><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateModal{{$empData->id}}">Update</button></span>
                                  <span>
                                    <form method="post" action="{{route('remove')}}">
                                      @csrf
                                      <input type="hidden" name="pk" value="{{$empData->id}}">
                                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</button></span>
                                    </form>
                                </td>
                              @include('form')
                            </tr>
                          @empty
                            <tr>
                                <td colspan="9">No Data To Show</td>
                            </tr>
                          @endforelse
                        </tbody>
                    </table>        
            </div>
        </div>

        
      </div>
 </div>


    <!-- Optional JavaScript -->
  <!-- Optional JavaScript -->
    {{-- <script src="{{ asset('public/assets/jquery/jquery-1.12.4.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    {{-- dataTables --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@if(Session::has('modalError'))
<script>
  $('#{{session("modalError")}}').modal('show');
</script>
@endif 
  </body>
</html>