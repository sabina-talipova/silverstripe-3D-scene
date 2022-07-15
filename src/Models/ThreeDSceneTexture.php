<?php

namespace ThreeDScene\Models;

use SilverStripe\Assets\Image;
use Silverstripe\ORM\DataObject;

class ThreeDSceneTexture extends DataObject
{
    private static $table_name = 'ThreeDSceneTexture';

    private static $db = [
        'Title' => 'Varchar'
    ];

    private static $has_many = [
        'Texture' => Image::class,
    ];
}