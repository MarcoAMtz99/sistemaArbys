@extends('layouts.blank')
@section('content')

<div class="container">
	<div class="panel panel-group">
		<div class="panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4 col-4">
						<h4>Datos del Punto de Venta:</h4>
					</div>
					@foreach(Auth::user()->perfil->componentes as $componente)
					@if($componente->nombre == "indice puntos")
					<div class="col-sm-4 text-center">
						<a href="{{ route('puntoDeVenta.index') }}"><button class="btn btn-primary"><strong><i class="fa fa-eye" aria-hidden="true"></i> Ver Puntos de Venta</strong></button></a>
					</div>
					@endif
					@endforeach
				</div>
			</div>
			<form action="{{ route('puntoDeVenta.store') }}" method="post">
			{{ csrf_field() }}
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="row">
								<div class="form-group col-sm-12">
									<label for="nombre" class="control-label">Nombre:</label>
									<input type="text" name="nombre" class="form-control" id="nombre">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-3">
									<label for="abreviatura" class="control-label">Abreviatura:</label>
									<input type="text" name="abreviatura" maxlength="3" class="form-control" id="abreviatura">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="form-group col-sm-12">
									<label for="responsable" class="control-label">Responsable:</label>
									<input type="text" name="responsable" maxlength="" class="form-control" id="responsable">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12">
									<label for="oficina" class="control-label">Oficina a la que pertenece:</label>
									<select class="form-control" name="oficina_id" id="oficina">
										<option selected="selected" value="0">Seleccionar</option>
										@foreach($oficinas as $oficina)
										<option value="{{ $oficina->id }}">{{ $oficina->nombre }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row" style="height: auto;">
								<div class="form-group col-sm-12">
									<label for="descripcion" class="control-label">Descripción:</label>
									<textarea class="form-control" maxlength="500" rows="4" name="descripcion"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-1 col-sm-offset-8">
					        <input type="radio" name="tipo" value="oficina" id="tipo1">
							<label for="tipo1" class="control-label">Oficina</label>
						</div>
						<div class="form-group col-sm-1">
			        		<input type="radio" name="tipo" value="kiosko" id="tipo2">
							<label for="tipo2" class="control-label">Kiosko</label>
						</div>
					</div>
				</div>
				<div class="panel-default">
					<div class="panel-heading">
						<h4>Dirección:</h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-sm-4">
								<label for="calle" class="control-label">Calle:</label>
								<input type="text" class="form-control" id="calle" name="calle">
							</div>
							<div class="form-group col-sm-4">
								<label for="exterior" class="control-label">Número Exterior:</label>
								<input type="text" class="form-control" id="exterior" name="numext">
							</div>
							<div class="form-group col-sm-4">
								<label for="interior" class="control-label">Número Interior:</label>
								<input type="text" class="form-control" id="interior" name="numint">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-4">
								<label for="colonia" class="control-label">Colonia:</label>
								<input type="text" class="form-control" id="colonia" name="colonia">
							</div>
							<div class="form-group col-sm-4">
								<label for="cp" class="control-label">CP:</label>
								<input type="text" class="form-control" id="cp" name="cp">
							</div>
							<div class="form-group col-sm-4">
								<label for="ciudad" class="control-label">Ciudad:</label>
								<input type="text" class="form-control" id="ciudad" name="ciudad">
							</div>
						</div>
					</div>
				</div>
				<div class="panel-default">
					<div class="panel-heading">
						<h4>Plaza Comercial:</h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-4">
								<div class="row">
									<div class="form-group col-sm-12">
										<label for="nombre" class="control-label">Nombre de la Plaza:</label>
										<input type="text" name="nombre_plaza" class="form-control" id="nombre">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<label for="inicio" class="control-label">Fecha de inicio:</label>
										<input type="date" name="fecha_inicio" class="form-control" id="inicio">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="row">
									<div class="form-group col-sm-12">
										<label for="stand" class="control-label">Número de Stand:</label>
										<input type="text" name="numero_stand" class="form-control" id="stand">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<label for="fin" class="control-label">Fecha de fin:</label>
										<input type="date" name="fecha_fin" class="form-control" id="fin">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="row" style="height: auto;">
									<div class="form-group col-sm-12">
										<label for="descripcion" class="control-label">Ubicación en la Plaza:</label>
										<textarea class="form-control" maxlength="500" rows="4" name="ubicacion"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4 text-center">
								<button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Guardar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection