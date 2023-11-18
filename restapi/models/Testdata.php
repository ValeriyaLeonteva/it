<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testdata".
 *
 * @property int $idtestdata
 * @property int|null $intdata
 * @property string|null $stringdata
 * @property string|null $datedata
 */
class Testdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intdata'], 'integer'],
            [['datedata'], 'safe'],
            [['stringdata'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtestdata' => 'Idtestdata',
            'intdata' => 'Intdata',
            'stringdata' => 'Stringdata',
            'datedata' => 'Datedata',
        ];
    }
}
