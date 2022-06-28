<?php

namespace ThreeDScene\Admins;

use SilverStripe\Admin\ModelAdmin;
use ThreeDScene\Models\ThreeDScene;

class ThreeDSceneAdmin extends ModelAdmin
{

    private static string $url_segment = 'threed-scene-admin';

    private static string $menu_title = '3D Scene';

    private static string $menu_icon_class = 'font-icon-block-banner';

    private static array $managed_models = [
        ThreeDScene::class,
    ];
}