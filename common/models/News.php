<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $preview
 * @property string $author
 * @property string $created_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'author', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            [['title', 'preview', 'author'], 'string', 'max' => 50],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Контент',
            'preview' => 'Краткая новость',
            'author' => 'Автор',
            'created_at' => 'Дата публикации',
        ];
    }
}
