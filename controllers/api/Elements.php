<?php namespace Acte\ContentManager\Controllers\Api;

use Backend\Classes\Controller;
use Response;
use Acte\ContentManager\Models\Element;
use Acte\ContentManager\Models\Field;


class Elements extends Controller
{
    public function index(){

      $elements = Element::
        with('related_fields', 'related_fields.images', 'related_fields.image')
        ->get();

      // pluck related_fields
      foreach ($elements as $key => $element) {
        if($element->related_fields){

          $array = [];
          foreach ($element->related_fields as $key => $item) {
            $array[$item->code] = $item->content;
          }

          $element->fields = $array;
          unset($element->related_fields);
        }
      }

      //pluck elements


      return Response::json($elements->pluck('fields', 'code'))->setEncodingOptions(JSON_NUMERIC_CHECK);
    }


    /*
    TEST
    */
    public function getFields(){

      $fields = Field::with('image', 'images')->get();

      $array = [];
      foreach ($fields as $key => $item) {
        $array[$item->code] = $item->content;
      }

      return $array;

    }




}
