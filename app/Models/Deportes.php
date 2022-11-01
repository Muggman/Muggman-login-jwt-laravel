<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_deportes
 * @property string $nombre
 * @property InstDep[] $instDeps
 */
class Deportes extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_deportes';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instDeps()
    {
        return $this->hasMany('App\Models\InstDep', 'id_deportes', 'id_deportes');
    }
}
