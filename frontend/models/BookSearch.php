<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Book;

/**
 * BookSearch represents the model behind the search form of `frontend\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookId'], 'integer'],
            [['bookName', 'referenceNo', 'publisher'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'bookId' => $this->bookId,
        ]);

        $query->andFilterWhere(['like', 'bookName', $this->bookName])
            ->andFilterWhere(['like', 'referenceNo', $this->referenceNo])
            ->andFilterWhere(['like', 'publisher', $this->publisher]);

        return $dataProvider;
    }
}
