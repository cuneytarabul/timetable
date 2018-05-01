<?php

namespace kouosl\gallery\controllers\backend;

use kouosl\gallery\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $gallery = new Gallery();
        return $this->render('index', [
            'gallery' => $gallery,
        ]);
    }
}
