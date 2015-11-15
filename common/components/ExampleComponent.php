<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 15.11.15
 * Time: 15:18
 */

namespace common\components;

use yii\base\Component;

class ExampleComponent extends Component
{

    public function init()
    {
        parent::init();
    }

    public function test($model = '')
    {
       echo is_object($model)  ? 'Модель получена' : 'Модель не получена';
    }
}
