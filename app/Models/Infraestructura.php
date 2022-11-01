<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_infraestructura
 * @property string $tipo
 * @property InstInfra[] $instInfras
 */
class Infraestructura extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_infraestructura';

    /**
     * @var array
     */
    protected $fillable = ['tipo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instInfras()
    {
        return $this->hasMany('App\Models\InstInfra', 'id_infraestructura', 'id_infraestructura');
    }
}
