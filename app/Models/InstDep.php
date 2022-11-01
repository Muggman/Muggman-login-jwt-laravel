<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_inst_dep
 * @property integer $id_instituciones
 * @property integer $id_deportes
 * @property Instituciones $instituciones
 * @property Deportes $deporte
 */
class InstDep extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_inst_dep';

    /**
     * @var array
     */
    protected $fillable = ['id_instituciones', 'id_deportes'];

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
    public function deporte()
    {
        return $this->belongsTo('App\Models\Deportes', 'id_deportes', 'id_deportes');
    }
}
