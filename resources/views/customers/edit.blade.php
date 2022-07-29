@extends('layout.layout') @section('content')

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <b> {{ $title }} </b>
            </div>
            <div class="card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        {!! Form::model( $customer, [ 'route' => ['customers.update', $customer], 'method' => 'PUT', 'class' => 'form-horizontal form-material']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            <div class="col-md-12">
                                {!! Form::text('name', null , ['class' => 'form-control form-control-line', 'name' => 'name', 'placeholder' => 'Ej: Nombre de Cliente...', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Dirección') !!}
                            <div class="col-md-12">
                                {!! Form::text('address', null , ['class' => 'form-control form-control-line', 'name' => 'address', 'placeholder' => 'Ej: Dirección de Cliente...', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone_number', 'Teléfono') !!}
                            <div class="col-md-12">
                                {!! Form::text('phone_number', null , ['class' => 'form-control form-control-line', 'name' => 'phone_number', 'placeholder' => 'Ej: 7777-8888', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', 'Categorias') !!}
                            <div class="col-md-12">
                                {!! Form::select('category_id', $categories, null , ['class' => 'form-control form-control-line', 'name' => 'category_id', 'placeholder' => 'Seleccione una opción...', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="{{ url('/customers') }}" class="btn btn-outline-info"><i class="fa fa-arrow-left"> </i> Regresar</a>
                                <button type="submit" class="btn btn-outline-success"> <i class="fa fa-save"> </i> Guardar Cambios</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection