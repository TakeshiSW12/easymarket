@extends('backend.layout.base')

@section('content')

<div class="row">
   <div class="col-xs-12">
      <h2>Register Supplier</h2>
   </div>
</div>

@include('backend.show_errors')

<div class="row">
   <form class="form-horizontal" method="POST">
      {!! csrf_field() !!}

      <div class="form-container">

         <!-- Start name -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Name</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="name" placeholder="Enter the name of the new supplier" value="{{ old('name') }}">
            </div>

         </div>
         <!-- End name -->

         <!-- Start ruc -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">RUC</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="ruc" placeholder="Enter the ruc of the new supplier" value="{{ old('ruc') }}">
            </div>

         </div>
         <!-- End ruc -->

         <!-- Start register -->
         <div class="form-group">

            <div class="col-xs-6 col-xs-offset-1">
               <button class="btn btn-primary" name="register_button" type="submit" value="register">Register</button>
            </div>

         </div>
         <!-- End register -->

      </div>

   </form>
</div>

@endsection