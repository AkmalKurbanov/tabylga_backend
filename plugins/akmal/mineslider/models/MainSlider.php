<?php namespace Akmal\Mineslider\Models;

use Model;

/**
 * Model
 */
class MainSlider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_mineslider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

     public $attachOne = [
      'img' => 'System\Models\File'
    ];
}
