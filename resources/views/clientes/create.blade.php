@extends('layouts.blank')
@section('content')

<div class="container">
	<div class="panel panel-group">
		<div class="panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<h4>
							Datos del Cliente: <small><i class="fa fa-asterisk" aria-hidden="true"></i>Campos Requeridos</small>
						</h4>
					</div>
				</div>
			</div>
			<form role="form" id="form-cliente" method="POST" action="{{ route('clientes.store') }}" >
				{{ csrf_field() }}
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3 form-group">
							<label class="control-label" for="tipopersona">Tipo de Persona:</label>
							<select type="select" name="tipopersona" class="form-control" id="tipopersona" onchange="persona(this)">
								<option id="Fisica" value="Fisica">Fisica</option>
								<option id="Moral" value="Moral">Moral</option>
							</select>
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="identificador"><i class="fa fa-asterisk" aria-hidden="true"></i>ID:</label>
							<input type="text" class="form-control" id="identificador" name="identificador" placeholder="Identificador" required>
						</div>
						<div class="col-sm-3 form-group" id="rfcf">
							<label class="control-label" for="rfc"><i class="fa fa-asterisk" aria-hidden="true"></i> RFC: (Automático)</label>
							<input type="text" class="form-control" id="rfc" name="rfc"  readonly>
						</div>
						<div class="col-sm-3 form-group" id="rfcm" style="display: none;">
							<label class="control-label" for="rfc2"><i class="fa fa-asterisk" aria-hidden="true"></i> RFC: (Persona Moral)</label>
							<input type="text" class="form-control" id="rfc2" name="Moral">
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="fecha_nacimiento"><i class="fa fa-asterisk" aria-hidden="true"></i>Fecha de Nacimiento:</label>
							<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
						</div>
					</div>
					<div class="row" id="perfisica">
						<div class="col-sm-3 form-group">
							<label class="control-label" for="nombre"><i class="fa fa-asterisk" aria-hidden="true"></i> Nombre(s):</label>
							<input type="text" class="form-control" id="idnombre" name="nombre">
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="apellidopaterno"><i class="fa fa-asterisk" aria-hidden="true"></i> Apellido Paterno:</label>
							<input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno">
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="apellidomaterno">Apellido Materno:</label>
							<input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno">
						</div>
					</div>
					<div class="row" id="permoral" style="display:none;">
						<div class="col-sm-3 form-group">
							<label class="control-label" for="razonsocial"><i class="fa fa-asterisk" aria-hidden="true"></i> Razon Social:</label>
							<input type="text" class="form-control" id="razonsocial" name="razonsocial">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 form-group">
							<label class="control-label" for="mail"><i class="fa fa-asterisk" aria-hidden="true"></i> Correo:</label>
							<input type="email" class="form-control" id="mail" name="mail"  placeholder="E-mail" required>
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="telefono">Telèfono:</label>
							<input type="number" class="form-control" id="telefono" name="telefono" pattern="+[0-9]">
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="telefonocel"><i class="fa fa-asterisk" aria-hidden="true"></i>Telèfono Celular:</label>
							<input type="number" class="form-control" id="telefonocel" name="telefonocel" pattern="+[0-9]" required>
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="cp"><i class="fa fa-asterisk" aria-hidden="true"></i>Código Postal:</label>
							<input type="number" class="form-control" id="cp" name="cp" pattern="+[0-9]" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 form-group">
							<label class="control-label" for="canal_ventas"><i class="fa fa-asterisk" aria-hidden="true"></i>Canal de Ventas:</label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon3" onclick='getCanales()'><i class="fa fa-refresh" aria-hidden="true"></i></span>
		    					<select type="select" name="canal_ventas" class="form-control" id="canal_ventas" required>
		    						<option  value="">Seleccionar</option>
		    						@foreach($canal_ventas as $canal)
		    						<option  value="{{$canal->nombre}}">{{$canal->nombre}}</option>
		    						@endforeach
		    					</select>
						   </div>
						</div>
						<div class="col-sm-3 form-group">
							<label class="control-label" for="fecha_actual"><i class="fa fa-asterisk" aria-hidden="true"></i>Fecha Actual:</label>
							<input type="date" class="form-control" id="fecha_actual" name="fecha_actual" value="{{date('Y-m-d')}}" readonly>
						</div>
						<div class="col-sm-6 form-group">
							<label class="control-label" for="comentarios"><i class="fa fa-asterisk" aria-hidden="true"></i>Comentarios:</label>
							<textarea class="form-control" name="comentarios"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-success">
								<strong>Guardar</strong>
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection