<?php

namespace SabinaTalipova\ThreeDScene\Models;

use SilverStripe\Assets\File;
use SilverStripe\Forms\FieldList;
use Silverstripe\ORM\DataObject;

class ThreeDSceneAudio extends DataObject
{
    private static $table_name = 'ThreeDSceneAudio';

    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $has_one = [
        'Scene' => ThreeDScene::class,
        'Audio' => File::class,
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('SceneID');

        return $fields;
    }

}