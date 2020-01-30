<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gps;

/**
 * GpsSearch represents the model behind the search form of `app\models\Gps`.
 */
class GpsSearch extends Gps
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dijual_ke'], 'integer'],
            [['brand', 'model', 'nama', 'garansi', 'tgl_beli', 'tgl_jual', 'deskripsi'], 'safe'],
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
        $query = Gps::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tgl_beli' => $this->tgl_beli,
            'tgl_jual' => $this->tgl_jual,
            'dijual_ke' => $this->dijual_ke,
        ]);

        $query->andFilterWhere(['ilike', 'brand', $this->brand])
            ->andFilterWhere(['ilike', 'model', $this->model])
            ->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'garansi', $this->garansi])
            ->andFilterWhere(['ilike', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
