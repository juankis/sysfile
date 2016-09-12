@extends('layouts.adminLayout')
@section('titlePage', 'Operadores')
@section('content')
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ isset($operator) ? "Editar" : "Crear" }} Operador</h2>
          @include('includes.headerContainer')
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        @if( isset($operator) ) 
          {!! Form::open(['route' => ['sysfile.operators.update', $operator], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
        @else
        {!! Form::open(['route' => 'sysfile.operators.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
          
        @endif
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" name="name" value="{{ isset($operator) ? $operator->name : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Minimo 3 caracteres ..." required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellido <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="second_name" name="second_name" value="{{ isset($operator) ? $operator->second_name : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Minimo 3 caracteres ..." required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Telefono
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" value="{{ isset($operator) ? $operator->phone : null }}" data-validate-minmax="4,10" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="address" name="address" value="{{ isset($operator) ? $operator->address : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" placeholder="Minimo 3 caracteres ..." required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre de Usuario <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="username" name="username" value="{{ isset($operator) ? $operator->user->username : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6,255" placeholder="Minimo 6 caracteres ..." required="required" type="text" data-validate-words="1">
            </div>
          </div>
          @if( isset($operator) ) 
           <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="checkbox">
                <label>
                  <input id="passwords_check" type="checkbox" name="passwords_check" class="flat"> Cambiar Password
                </label>
              </div>
            </div>
          </div>
          <div id="passwords" style="display: none">
            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" type="password" name="password" data-validate-length="7,50" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>
            <div class="item form-group">
              <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" rdata-validate-length="7,50" equired="required">
              </div>
            </div>
          </div>
          @endif
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
<!-- iCheck -->
<script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Saltimanmia -->
<script src="{{asset('production/js/saltinmania.js')}}"></script>
@include('includes.scriptForms')

@endsection

@section('css')
<!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
@endsection