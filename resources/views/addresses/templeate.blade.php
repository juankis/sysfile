@extends('layouts.adminLayout')
@section('titlePage', 'Addresses')
@section('content')
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ isset($address) ? "Editar" : "Crear" }} Address</h2>
          @include('includes.headerContainer')
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        @if( isset($address) ) 
          {!! Form::open(['route' => ['sysfile.addresses.update', $address], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
        @else
        {!! Form::open(['route' => 'sysfile.addresses.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
          
        @endif
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="address" name="address" value="{{ isset($address) ? $address->address : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="" placeholder="Direccion" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Telefono 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" value="{{ isset($address) ? $address->phone : null }}" data-validate-minmax="4,10" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Localidad <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="location" name="location" value="{{ isset($address) ? $address->location : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,50" data-validate-words="1" placeholder="Ingrese Localidad" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Codigo Postal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="postal_code" name="postal_code" value="{{ isset($address) ? $address->postal_code : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,10" data-validate-words="1" placeholder="Codigo Postal" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Clientes </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::select('customer_id', $customers, isset($address) ? $address->customer_id : null, ['id'=>'clientes', 'data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Cliente', 'required']) !!} 
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
<!-- Select2 -->
<script src="{{ asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
@include('includes.scriptForms')

@endsection
@section('css')
<!-- Select2 -->
    <link href="{{ asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endsection