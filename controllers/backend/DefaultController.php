<?php

namespace kouosl\timetable\controllers\backend;

use kouosl\timetable\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $timetable = new TimeTable();
        return $this->render('index', [
            'timetable' => $timetable,
        ]);
    }
}
