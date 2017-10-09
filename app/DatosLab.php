<?php

namespace App;

use App\Cliente;
use App\Personal;
use Illuminate\Database\Eloquent\Model;

class DatosLab extends Model
{
	protected $table = 'datoslab';
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    	'id','clientes_id','nombreempresa', 'calleempresa', 'numextempresa', 'numinterempresa', 'cpempresa', 'coloniaempresa', 'municipioempresa', 'ciudadempresa', 'estadoempresa', 'giroempresa','puestoempresa','antiguedadempresa','telefonoempresa', 'ingresosmesempresa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function clientes(){
    	return $this->belongsTo(Cliente::class);
    }
}
