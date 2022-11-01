<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_banco
 * @property string $nombre
 * @property Instituciones[] $instituciones
 */
class Bancos extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_banco';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instituciones()
    {
        return $this->hasMany('App\Models\Instituciones', 'banco', 'id_banco');
    }
}
