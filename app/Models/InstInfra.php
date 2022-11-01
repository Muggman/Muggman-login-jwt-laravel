<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_inst_infra
 * @property integer $id_instituciones
 * @property integer $id_infraestructura
 * @property Instituciones $instituciones
 * @property Infraestructura $infraestructura
 */
class InstInfra extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_inst_infra';

    /**
     * @var array
     */
    protected $fillable = ['id_instituciones', 'id_infraestructura'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institucione()
    {
        return $this->belongsTo('App\Models\Instituciones', 'id_instituciones', 'id_instituciones');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function infraestructura()
    {
        return $this->belongsTo('App\Models\Infraestructura', 'id_infraestructura', 'id_infraestructura');
    }
}
