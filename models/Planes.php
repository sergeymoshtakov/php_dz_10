<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planes".
 *
 * @property int $id
 * @property string $name
 * @property string $manufacturer
 * @property int|null $capacity
 */
class Planes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'manufacturer'], 'required'],
            [['capacity'], 'integer'],
            [['name', 'manufacturer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'manufacturer' => 'Manufacturer',
            'capacity' => 'Capacity',
        ];
    }
}
