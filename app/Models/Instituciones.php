<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_instituciones
 * @property integer $depto
 * @property integer $banco
 * @property string $nombre
 * @property string $direccion
 * @property integer $cant_deportistas
 * @property string $CBU
 * @property string $destinatario_pago
 * @property string $CUIT
 * @property string $legajo
 * @property string $año_fundacion
 * @property string $sede
 * @property integer $cant_socios
 * @property string $propietario
 * @property Deptos $depto
 * @property Bancos $banco
 * @property InstDep[] $instDeps
 * @property InstInfra[] $instInfras
 * @property Legales[] $legales
 */
class Instituciones extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_instituciones';

    /**
     * @var array
     */
    protected $fillable = ['depto', 'banco', 'nombre', 'direccion', 'cant_deportistas', 'CBU', 'destinatario_pago', 'CUIT', 'legajo', 'año_fundacion', 'sede', 'cant_socios', 'propietario'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function depto()
    {
        return $this->belongsTo('App\Models\Deptos', 'depto', 'id_deptos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function banco()
    {
        return $this->belongsTo('App\Models\Bancos', 'banco', 'id_banco');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instDeps()
    {
        return $this->hasMany('App\Models\InstDep', 'id_instituciones', 'id_instituciones');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instInfras()
    {
        return $this->hasMany('App\Models\InstInfra', 'id_instituciones', 'id_instituciones');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function legales()
    {
        return $this->hasMany('App\Models\Legales', 'id_instituto', 'id_instituciones');
    }
}
