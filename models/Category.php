<?php
/**
 * Created by PhpStorm.
 * User: SawHo
 * Date: 07.02.2019
 * Time: 0:25
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

}