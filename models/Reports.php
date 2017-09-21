<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "reports".
 *
 * @property integer $id_report
 * @property string $fake_news_title
 * @property string $possible_text_fake_news
 * @property string $url_source_fake_news
 * @property string $created_at
 * @property string $updated_at
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fake_news_title', 'url_source_fake_news'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['fake_news_title'], 'string', 'max' => 300],
            [['possible_text_fake_news'], 'string', 'max' => 255],
            [['url_source_fake_news', 'url_refute'], 'string', 'max' => 500],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_report' => 'Id Report',
            'fake_news_title' => 'Fake News Title',
            'possible_text_fake_news' => 'Possible Text Fake News',
            'url_source_fake_news' => 'Url Source Fake News',
            'url_source_fake_news' => 'Url Refute Fake News',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
