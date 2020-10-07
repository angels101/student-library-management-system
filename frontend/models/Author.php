<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $authorId
 * @property string $authorName
 *
 * @property BookAuthor[] $bookAuthors
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['authorName'], 'required'],
            [['authorName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'authorId' => 'Author ID',
            'authorName' => 'Author Name',
        ];
    }

    /**
     * Gets query for [[BookAuthors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthor::className(), ['authorId' => 'authorId']);
    }
}
