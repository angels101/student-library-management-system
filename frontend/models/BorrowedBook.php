<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "borrowedBook".
 *
 * @property int $bbId
 * @property int $studentId
 * @property int $bookId
 * @property string $borrowDate
 * @property string $returnDate
 *
 * @property Student $student
 * @property Book $book
 */
class BorrowedBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'borrowedBook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'bookId', 'borrowDate', 'returnDate'], 'required'],
            [['studentId', 'bookId'], 'integer'],
            [['borrowDate', 'returnDate'], 'safe'],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['studentId' => 'studentsId']],
            [['bookId'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['bookId' => 'bookId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bbId' => 'Bb ID',
            'studentId' => 'Student ID',
            'bookId' => 'Book ID',
            'borrowDate' => 'Borrow Date',
            'returnDate' => 'Return Date',
        ];
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['studentsId' => 'studentId']);
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['bookId' => 'bookId']);
    }
}
