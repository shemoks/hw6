<?php
/**
 * Created by PhpStorm.
 * User: oksana
 * Date: 15.11.15
 * Time: 11:40
 */

namespace frontend\models;

use yii\base\Model;

class Example extends Model
{
    public $name;

    /**
     * Example constructor.
     *
     */
    public function __construct()
    {
        $this->name = "Оксана";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}