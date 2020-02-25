<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KuisionerKelas;

/**
 * KuisionerKelasSearch represents the model behind the search form of `app\models\KuisionerKelas`.
 */
class KuisionerKelasSearch extends KuisionerKelas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kelas_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['nim', 'jawaban_text'], 'safe'],
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
        $query = KuisionerKelas::find();

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
            'id' => $this->id,
            'kelas_id' => $this->kelas_id,
            'pertanyaan_id' => $this->pertanyaan_id,
            'jawaban_id' => $this->jawaban_id,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'jawaban_text', $this->jawaban_text]);

        return $dataProvider;
    }
}
