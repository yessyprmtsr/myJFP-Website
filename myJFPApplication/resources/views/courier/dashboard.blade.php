@extends('courier.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Dashboard
                  </h1>									
  </div>
      <div id="page-inner">

      <div class="dashboard-cards"> 
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
              
                  <div class="card horizontal cardIcon waves-effect waves-dark">
                  <div class="card-image red">
                  <i class="material-icons dp48">import_export</i>
                  </div>
                  <div class="card-stacked red">
                  <div class="card-content">
                  <h3>Delivery List</h3> 
                  </div>
                  <div class="card-action">
                  {{-- <strong>{{$tracks}}</strong> --}}
                  </div>
                  </div>
                  </div>

              </div>
          </div>
         </div>
          
         <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large red">
<i class="material-icons">menu</i>
</a>
<ul>
<li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
</ul>
</div>
@endsection