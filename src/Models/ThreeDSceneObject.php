<?php

namespace ThreeDScene\Models;

use Silverstripe\ORM\DataObject;

class ThreeDSceneObject extends DataObject
{
    private static $table_name = 'ThreeDSceneObject';

    private static $db = [
        'Title' => 'Varchar'
    ];

    private static $has_one = [
        'Scene' => ThreeDScene::class,
    ];
}