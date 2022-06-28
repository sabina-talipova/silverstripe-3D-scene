<?php

namespace ThreeDScene\Models;

use Silverstripe\ORM\DataObject;

class ThreeDSceneMaterial extends DataObject
{
    private static $table_name = 'ThreeDSceneMaterial';

    private static $db = [
        'Title' => 'Varchar'
    ];
}