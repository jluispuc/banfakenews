<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "urgencies".
 *
 * @property integer $urgency_id
 * @property integer $zone_id
 * @property string $level
 * @property string $need_brigade
 * @property string $supplies_required
 * @property string $supplies_accept
 * @property string $supplies_not_required
 * @property string $address
 * @property string $detail_source
 * @property string $last_updated
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Zones $zone
 */
class Urgencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urgencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id', 'created_at', 'updated_at'], 'integer'],
            [['level', 'need_brigade', 'supplies_required', 'supplies_accept', 'supplies_not_required'], 'string'],
            [['address', 'detail_source'], 'string', 'max' => 250]
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at'
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urgency_id' => 'Urgency ID',
            'zone_id' => 'Zone ID',
            'level' => 'Level',
            'need_brigade' => 'Need Brigade',
            'supplies_required' => 'Supplies Required',
            'supplies_accept' => 'Supplies Accept',
            'supplies_not_required' => 'Supplies Not Required',
            'address' => 'Address',
            'detail_source' => 'Detail Source',
            'last_updated' => 'Last Updated',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZone()
    {
        return $this->hasOne(Zones::className(), ['zone_id' => 'zone_id']);
    }
}
