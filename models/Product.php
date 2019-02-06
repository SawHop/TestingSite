<?php
/**
 * Created by PhpStorm.
 * User: SawHo
 * Date: 07.02.2019
 * Time: 0:25
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}