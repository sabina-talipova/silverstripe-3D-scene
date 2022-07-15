<?php

namespace ThreeDScene\Models;

use Silverstripe\ORM\DataObject;

class ThreeDSceneLight extends DataObject
{
    private static $table_name = 'ThreeDSceneLight';

    private static $db = [
        'Title' => 'Varchar'
    ];
}