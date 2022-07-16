<?php

namespace ThreeDScene\Models;

use SilverStripe\Control\Controller;
use SilverStripe\ORM\CMSPreviewable;
use SilverStripe\ORM\DataObject;
use ThreeDScene\Admins\ThreeDSceneAdmin;

class ThreeDScene extends DataObject implements CMSPreviewable
{
    private static $table_name = 'ThreeDScene';

    private static $db = [
        'Title' => 'Varchar'
    ];

    private static $has_many = [
        'Object' => ThreeDSceneObject::class,
        'Light' => ThreeDSceneLight::class,
        'Camera' => ThreeDSceneCamera::class,
    ];

    public function PreviewLink($action = null)
    {
        return $this->Link($action = null);
    }

    public function CMSEditLink()
    {
        $admin = ThreeDSceneAdmin::singleton();
        $sanitisedClassname = str_replace('\\', '-', $this->ClassName);
        return Controller::join_links(
            $admin->Link($sanitisedClassname),
            'EditForm/field/',
            $sanitisedClassname,
            'item',
            $this->ID,
        );
    }

    public function getMimeType()
    {
        return 'text/html';
    }
}