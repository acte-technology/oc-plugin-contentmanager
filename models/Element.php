<?php namespace Acte\ContentManager\Models;

use Model;

/**
 * Model
 */
class Element extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    public $timestamps = false;

    public $visible = ['code', 'name', 'fields', 'children'];

    public $table = 'acte_contentmanager_elements';

    public $hasMany = [
      'related_fields' => ['Acte\ContentManager\Models\Field', 'key' => 'element_id']
    ];

    public $rules = [
      'name' => 'required',
      'code' => 'required|unique:acte_contentmanager_elements,code'
    ];

    public function setCodeAttribute($value){
        $this->attributes['code'] = strtolower($value);
    }

}
