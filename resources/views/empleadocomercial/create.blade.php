@extends('layouts.blank')
@section('content')

<div class="container">
	<div role="application" class="panel panel-group">
		<div class="panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<label class="control-label">
							<h4>Datos del Empleado: <small><i class="fa fa-asterisk" aria-hidden="true"></i> Campos Requeridos</small></h4>
						</label>
					</div>
					<div class="col-sm-4 text-center">
						<a href="{{ route('empleadoc.index') }}"><button class="btn btn-primary">Ver Empleados</button></a>
					</div>
				</div>
			</div>
			<form role="form" id="form-empleado" method="POST" action="{{ route('empleadoc.store') }}" name="form">
			{{ csrf_field()}}
				<div class="panel-body">
					<div class="row">
						<div class="form-group col-sm-3">
							<label class="control-label" for="appaterno"><i class="fa fa-asterisk" aria-hidden="true"></i> Apellido Paterno:</label>
							<input type="text" class="form-control" id="appaterno" name="appaterno" required="required" value="">
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label" for="apmaterno"><i class="fa fa-asterisk" aria-hidden="true"></i> Apellido Materno:</label>
							<input type="text" id="apmaterno" class="form-control" name="apmaterno" required="required" value="">
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label" for="nombre"><i class="fa fa-asterisk" aria-hidden="true"></i> Nombre(s):</label>
							<input type="text" class="form-control" id="nombre" name="nombre" required="required" value="">
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label" for="rfc"><i class="fa fa-asterisk" aria-hidden="true"></i>RFC:</label>
							<input type="text" class="form-control" id="rfc" name="rfc" value="">
						</div>
					</div>
				</div>
				<div>
					<ul class="nav nav-pills nav-justified">
					</ul>
				</div>
				<div class="panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-4">
								<label class="control-label">
									<h5>Datos Generales: <small><i class="fa fa-asterisk" aria-hidden="true"></i> Campos Requeridos</small></h5>
								</label>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-sm-3">
								<label class="control-label" for="telefono">Teléfono:</label>
								<input type="text" class="form-control" name="telefono" id="telefono" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="movil">Celular:</label>
								<input type="text" class="form-control" name="movil" id="movil" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="email">Correo electrónico:</label>
								<input type="text" class="form-control" name="email" id="email" value="">
							</div><div class="form-group col-sm-3">
								<label class="control-label" for="nss">IMMS:</label>
								<input type="text" class="form-control" name="nss" id="nss" value="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-3">
								<label class="control-label" for="curp">CURP:</label>
								<input type="text" class="form-control" name="curp" id="curp" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="infonavit">INFONAVIT:</label>
								<input type="text" class="form-control" name="infonavit" id="infonavit" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="fnac">Fecha de nacimiento:</label>
								<input type="date" class="form-control" name="fnac" id="fnac" value="" disabled="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="cp">Código Postal:</label>
								<input type="text" class="form-control" name="cp" id="cp" value="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-3">
								<label class="control-label" for="calle">Calle:</label>
								<input type="text" class="form-control" name="calle" id="calle" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="numext">Número Exterior:</label>
								<input type="text" class="form-control" name="numext" id="numext" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="numint">Número Interior:</label>
								<input type="text" class="form-control" name="numint" id="numint" value="">
							</div><div class="form-group col-sm-3">
								<label class="control-label" for="colonia">Colonia:</label>
								<input type="text" class="form-control" name="colonia" id="colonia" value="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-3">
								<label class="control-label" for="municipio">Municipio:</label>
								<input type="text" class="form-control" name="municipio" id="municipio" value="">
							</div>
							<div class="form-group col-sm-3">
								<label class="control-label" for="estado">Estado:</label>
								<select class="form-control" name="estado" id="estado">
									<option selected="">Seleccionar</option>
									@foreach($estados as $estado)
									<option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label" for="referencia">Referencia:</label>
								<textarea class="form-control" name="referencia" id="referencia" rows="4"></textarea> 
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4 text-center">
								<button type="submit" class="btn btn-success">
									<strong>Guardar</strong>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection