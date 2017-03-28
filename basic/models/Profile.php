<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $text
 * @property string $Complete_Name
 * @property string $Nickname
 * @property string $Email_Address
 * @property string $Home_Address
 * @property string $Gender
 * @property integer $Cell_phone_number
 * @property string $Comments
 *
 * @property Trivia[] $trivias
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'text', 'Complete_Name', 'Nickname', 'Email_Address', 'Home_Address', 'Gender', 'Cell_phone_number', 'Comments'], 'required'],
            [['text'], 'string'],
            [['Cell_phone_number'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 128],
            [['Complete_Name', 'Email_Address'], 'string', 'max' => 32],
            [['Nickname'], 'string', 'max' => 8],
            [['Home_Address'], 'string', 'max' => 36],
            [['Gender'], 'string', 'max' => 2],
            [['Comments'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'text' => 'Text',
            'Complete_Name' => 'Complete  Name',
            'Nickname' => 'Nickname',
            'Email_Address' => 'Email  Address',
            'Home_Address' => 'Home  Address',
            'Gender' => 'Gender',
            'Cell_phone_number' => 'Cell Phone Number',
            'Comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrivias()
    {
        return $this->hasMany(Trivia::className(), ['Profile_ID' => 'id']);
    }
}
