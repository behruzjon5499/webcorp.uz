<?php

namespace common\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $description_ru
 *  * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Feedback extends \yii\db\ActiveRecord
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru'], 'string'],
            [['status'], 'integer'],
            [['full_name', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }
    public function behaviors()
    {
        return [
            TimeStampBehavior::class,
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function isWait()
    {
        return $this->status === self::STATUS_WAIT;
    }
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }
}
