<?php

namespace ThreeDScene\Models;

use Silverstripe\ORM\DataObject;

class ThreeDSceneCamera extends DataObject
{
    private static $table_name = 'ThreeDSceneCamera';

    private static $db = [
        'Title' => 'Varchar'
    ];
}