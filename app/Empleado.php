<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Empleado extends Model
{
	use Sortable;
    //
    protected $table = 'empleados';

    protected $fillable = [
    	'id','nombre','appaterno','apmaterno','rfc','telefono','movil','email','nss','curp','infonavit','fnac','cp','calle','numext','numint','colonia','municipio','estado','calles','referencia'
    ];
    public $sortable = [
    	'id','nombre','appaterno','apmaterno','rfc'
    ];

    protected $hidden=[
    	'created_at','updated_at'
    ];
    public function datosLab(){
        return $this->hasOne('App\EmpleadoDatosLab');
    }
    public function estudios(){
        return $this->hasOne('App\EmpleadosEstudios');
    }
}
