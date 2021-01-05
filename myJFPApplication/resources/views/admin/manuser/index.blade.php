@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Management Customer
        </h1>         
    </div>
      
      <div id="page-inner">
        <br>
        @if (count($customer) <= 0)
        <?php echo 'No Data Found' ?>
        @else
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Join</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($customer as $cust)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$cust->name}}</td>
                <td>{{$cust->email}}</td>
                <td>{{$cust->created_at->diffForHumans()}}</td>
              </tr>
          @endforeach 
            </tbody>
          </table>
          @endif
          
              
    </div>

</div>
@endsection