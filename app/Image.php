<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    protected $table = 'images';

    public static function saveImages($images, $object_name, $object_id) {

        foreach ($images as $key => $image_json) {

            $image = new Image();
            $image->filename = $image_json->filename;
            $image->absolute_path = $image_json->filepath;
            $image->uri = $image_json->uri;
            $image->object_name = $object_name;
            $image->object_id = $object_id;

            $image->save();
        }
    }

}