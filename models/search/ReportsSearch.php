<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reports;

/**
 * ReportsSearch represents the model behind the search form about `app\models\Reports`.
 */
class ReportsSearch extends Reports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_report'], 'integer'],
            [['fake_news_title', 'possible_text_fake_news', 'url_source_fake_news', 'url_refute', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Reports::find();

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
            'id_report' => $this->id_report,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fake_news_title', $this->fake_news_title])
            ->andFilterWhere(['like', 'possible_text_fake_news', $this->possible_text_fake_news])
            ->andFilterWhere(['like', 'url_source_fake_news', $this->url_source_fake_news]);

        return $dataProvider;
    }
}
