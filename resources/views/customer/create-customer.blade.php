@extends('layouts.app')

@section('title', 'Datos de Cliente')

@section('content_header')
    <h1>Creación de Cliente</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Default Card Example</h3>
        </div>
                <!-- @if($errors->all())
                <div class="alert alert-error" role="alert">
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif -->
                <!-- /.box-header -->
                <!-- form start -->
                <form action= "" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nit">NIT</label>
                            <input type="text" class="form-control" name="nit" id="nit" placeholder="Ingresar NIT" required>
                        </div>
                        <div class="form-group">
                            <label for="nombreCliente">Nombre de Cliente</label>
                            <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" placeholder="Ingresar Nombre Cliente" required>
                        </div>
                        <div class="form-group">
                            <label for="grupoEmpresarial">Grupo Empresarial</label>
                            <input type="grupoEmpresarial" class="form-control" id="grupoEmpresarial" name="grupoEmpresarial" placeholder="Ingresar Grupo Empresarial">
                        </div>

                        <div class="form-group">
                            <label for="holding">Holding</label>
                            <input type="holding" class="form-control" id="holding" name="holding" placeholder="Ingresar Holding">
                        </div>

                        <div class="form-group">
                            <label for="empleados">Cantidad Empleados</label>
                            <input type="empleados" class="form-control" id="empleados" name="empleados" placeholder="Ingresar Empleados">
                        </div>

                        <div class="form-group">
                            <label for="ejecutivos">Ejecutivos</label>
                            <input type="ejecutivos" class="form-control" id="ejecutivos" name="ejecutivos" placeholder="Ingresar Ejecutivos">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción de Negocio</label>
                            <input type="descripcion" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresar Descripción de Negocio">
                        </div>
                        
                        <div class="form-group">
                            <label for="ejecutivos">Ejecutivos</label>
                            <input type="ejecutivos" class="form-control" id="ejecutivos" name="ejecutivos" placeholder="Ingresar Ejecutivos">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop