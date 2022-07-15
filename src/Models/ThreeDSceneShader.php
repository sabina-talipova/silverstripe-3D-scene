<?php

namespace ThreeDScene\Models;

use Silverstripe\ORM\DataObject;

class ThreeDSceneShader extends DataObject
{
    private static $table_name = 'ThreeDSceneShader';

    private static $db = [
        'Title' => 'Varchar'
    ];
}