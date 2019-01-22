<?php
namespace api\controllers;

use yii\rest\ActiveController;

class UserController extend extends ActiveController
{
    public $modelClass = 'common\models\User';
    
}

