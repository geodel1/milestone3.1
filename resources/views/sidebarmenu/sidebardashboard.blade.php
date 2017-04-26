@extends('layouts.admin_menu')

@section('content')

<div class="row">
  <div class="col-md-4">
     <div class="panel panel-box clearfix">
       <div class="panel-icon pull-left bg-green">
        <i class="glyphicon glyphicon-user"></i>
      </div>
      <div class="panel-value pull-right">
        <h2 class="margin-top"> {{count($users)}} </h2>
        <p class="text-muted">Users </p>
      </div>
     </div>
  </div>
  <div class="col-md-4">
     <div class="panel panel-box clearfix">
       <div class="panel-icon pull-left bg-yellow">
        <i class="glyphicon glyphicon-th-large"></i>
      </div>
      <div class="panel-value pull-right">
        <h2 class="margin-top"> {{count($items)}}  </h2>
        <p class="text-muted text-center">Items</p>
      </div>
     </div>
  </div>
  <div class="col-md-4">
     <div class="panel panel-box clearfix">
       <div class="panel-icon pull-left bg-blue">
        <i class="glyphicon glyphicon-list"></i>
      </div>
      <div class="panel-value pull-right">
        <h2 class="margin-top"> {{count($suppliers)}} </h2>
        <p class="text-muted ">Suppliers</p>
      </div>
     </div>
  </div>
  
</div>
<div class="row">
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1></h1>
        

      </div>
    </div>
 </div>
</div>

	


@endsection