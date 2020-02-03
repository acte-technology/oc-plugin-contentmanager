<?php namespace Acte\ContentManager\Models;

use Model;

/**
 * Model
 */
class FieldType extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $timestamps = false;

    public $table = 'acte_contentmanager_field_types';

    public $rules = [
      'code' => 'required|string|max:255'
    ];

    public function setCodeAttribute($value){
        $this->attributes['code'] = strtolower($value);
    }
}
