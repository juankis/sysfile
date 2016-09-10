@extends('layouts.adminLayout')
@section('titlePage', 'Referetes')
@section('content')
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ isset($referent) ? "Editar" : "Crear" }} Referente</h2>
          @include('includes.headerContainer')
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        @if( isset($referent) ) 
          {!! Form::open(['route' => ['sysfile.referents.update', $referent], 'id'=>'formCategory', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
        @else
        {!! Form::open(['route' => 'sysfile.referents.store', 'id'=>'formCategory', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
          
        @endif
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" name="name" value="{{ isset($referent) ? $referent->name : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="Nombre Completo" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Telefono
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone" name="phone" value="{{ isset($referent) ? $referent->phone : null }}" data-validate-minmax="4,10" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">CI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="ci" name="ci" value="{{ isset($referent) ? $referent->ci : null }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="3,255" data-validate-words="1" placeholder="Cedula de Identidad" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" value="{{ isset($referent) ? $referent->email : null }}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Autorizacion
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="autorization" name="autorization" value="{{ isset($referent) ? $referent->autorization : null }}" data-validate-minmax="1,1" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Departamentos </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::select('department_id', $departments,  isset($referent) ? $referent->department_id : null, ['id'=>'clientes', 'data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Cliente', 'required']) !!} 
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