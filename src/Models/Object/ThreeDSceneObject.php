<?php

namespace SabinaTalipova\ThreeDScene\Models\Object;

use SabinaTalipova\ThreeDScene\Models\ThreeDScene;
use SilverStripe\Forms\FieldList;
use Silverstripe\ORM\DataObject;

class ThreeDSceneObject extends DataObject
{
    private static $table_name = 'ThreeDSceneObject';

    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $has_one = [
        'Scene' => ThreeDScene::class,
    ];

    private static $has_many = [
        'Mesh' => ThreeDSceneMesh::class,
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('SceneID');

        return $fields;
    }

}