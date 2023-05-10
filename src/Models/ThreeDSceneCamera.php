<?php

namespace SabinaTalipova\ThreeDScene\Models;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use Silverstripe\ORM\DataObject;

class ThreeDSceneCamera extends DataObject
{
    private static $table_name = 'ThreeDSceneCamera';

    private static $db = [
        'Title' => 'Varchar',
        'CameraType' => "Enum('PerspectiveCamera, OrthographicCamera')",
    ];

    private static $has_one = [
        'Scene' => ThreeDScene::class,
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('SceneID');

        
        $fields->addFieldsToTab("Root.Main",
            array(DropdownField::create(
                "CameraType",
                _t(__CLASS__ . '.CameraTypeDropdown', 'Camera Type'),
                singleton(ThreeDSceneCamera::class)->dbObject('CameraType')->enumValues()
            )
        ));

        return $fields;
    }
}