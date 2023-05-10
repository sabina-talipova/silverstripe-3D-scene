<?php

namespace SabinaTalipova\ThreeDScene\Models\Object;

use SabinaTalipova\ThreeDScene\Models\Shape\Geometry;
use SabinaTalipova\ThreeDScene\Models\Material\ThreeDSceneMaterial;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use Silverstripe\ORM\DataObject;

class ThreeDSceneMesh extends DataObject
{
    private static $table_name = 'ThreeDSceneMesh';

    private static $db = [
        'Title' => 'Varchar',
        'Type' => "Enum(array('Geometry', 'File'), 'Geometry')",
        'Geometry' => 'Varchar',
    ];

    private static $has_one = [
        'Object' => ThreeDSceneObject::class,
        'Material' => ThreeDSceneMaterial::class,
        'File' => File::class,
    ];

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('ObjectID');
        $fields->removeByName('MaterialID');
        $fields->removeByName('GeometryID');

        $fields->addFieldsToTab("Root.Main", array(
            $geometryField = DropdownField::create(
                "Geometry",
                "Select primitive",
                array(
                    'Box'=> 'Box',
                    'Cylinder' => 'Cylinder',
                    'Sphere' => 'Sphere'
                )
            ),
            $objectField = UploadField::create("File","3D Object")
        ));

        $geometryField->displayIf("Type")->isEqualTo("Geometry");
        $objectField->displayIf("Type")->isEqualTo("File");

        return $fields;
    }

    // public function canCreate($member = null, $context = [])
    // {
    //     return $this->canEdit($member);
    // }

    // public function canEdit($member = null)
    // {
    //     return $this->canEdit($member);
    // }

    // public function canDelete($member = null)
    // {
    //     return $this->canDelete($member);
    // }

    // public function canView($member = null)
    // {
    //     return $this->canView($member);
    // }

}