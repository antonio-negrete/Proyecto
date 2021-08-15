<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $observacion
 * @property $fecha
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'observacion' => 'required',
		'fecha' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['observacion','fecha','estatus'];



}
