<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_legales
 * @property integer $id_instituto
 * @property string $ult_asamblea
 * @property string $estado
 * @property string $hasta
 * @property string $actualizada
 * @property string $regularizado
 * @property Instituciones $instituciones
 */
class Legales extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_legales';

    /**
     * @var array
     */
    protected $fillable = ['id_instituto', 'ult_asamblea', 'estado', 'hasta', 'actualizada', 'regularizado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\Models\Instituciones', 'id_instituto', 'id_instituciones');
    }
}
