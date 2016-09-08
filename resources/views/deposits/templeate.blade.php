@extends('layouts.adminLayout')
@section('titlePage', 'Depositos')
@section('content')
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ isset($deposit) ? "Crear" : "Editar" }} Deposito</h2>
          @include('includes.headerContainer')
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        @if( isset($deposit) ) 
          {!! Form::open(['route' => ['sysfile.deposits.update', $deposit], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
        @else
        {!! Form::open(['route' => 'sysfile.deposits.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
          
        @endif
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" name="name" value="{{ isset($deposit) ? $deposit->name : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="address" name="address" value="{{ isset($deposit) ? $deposit->address : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observaciones <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="observation" name="observation" value="{{ isset($deposit) ? $deposit->observation : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
            </div>
          </div>      
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!-- /page content -->
@endsection

@section('scripts')
<!-- validator -->
<script src="{{ asset('vendors/validator/validator.js')}}"></script>
@include('includes.scriptValidation')

@endsection