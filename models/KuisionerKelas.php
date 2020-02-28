<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuisioner_kelas".
 *
 * @property int $id
 * @property string $nim
 * @property int $kelas_id
 * @property int $pertanyaan_id
 * @property int $jawaban_id
 * @property string $jawaban_text
 *
 * @property Kelas $kelas
 * @property JawabanKuisioner $jawaban
 * @property KuisionerDosen $pertanyaan
 */
class KuisionerKelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuisioner_kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'kelas_id', 'pertanyaan_id', 'jawaban_id', 'jawaban_text'], 'required'],
            [['id', 'kelas_id', 'pertanyaan_id', 'jawaban_id'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['jawaban_text'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['kelas_id' => 'id']],
            [['jawaban_id'], 'exist', 'skipOnError' => true, 'targetClass' => JawabanKuisioner::className(), 'targetAttribute' => ['jawaban_id' => 'id']],
            [['pertanyaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KuisionerDosen::className(), 'targetAttribute' => ['pertanyaan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'kelas_id' => 'Kelas ID',
            'pertanyaan_id' => 'Pertanyaan ID',
            'jawaban_id' => 'Jawaban ID',
            'jawaban_text' => 'Jawaban Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id.kode.semester' => 'kelas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawaban()
    {
        return $this->hasOne(JawabanKuisioner::className(), ['id.jawaban' => 'jawaban_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaan()
    {
        return $this->hasOne(KuisionerDosen::className(), ['id.pertanyaan.aktif.choices' => 'pertanyaan_id']);
    }
}

$link = mysqli_connect("localhost","root","","DosenAis");

//connection check
if($link === false) {
    die("ERROR: could not connect." . mysqli_connect_error());
}

//attemp select query execution
$sql = "SELECT * FROM kusioner_kelas WHERE 'pertanyaan' = 'apakah perkuliahaan dimulai & diakhiri tepat waktu' AND 'id' = 1 ";
$sql = "SELECT * FROM kusioner_kelas WHERE 'pertanyaan' = 'apakah dosen menguasai materi' AND 'id' = 2 ";
$sql = "SELECT * FROM kusioner_kelas WHERE 'pertanyaan' = 'apakah dosen memberikan feedback' AND 'id' = 3 ";

$sql = "SELECT * FROM kuisioner_kelas WHERE 'jawaban' = 'setuju' ";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>jawaban</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
                echo"<td>" . $row['id'] . "</td>";
                echo"<td>" . $row['jawaban'] . "</td>";
            echo "</tr>";
        }    

        echo "</table>";

        //close result set
        mysqli_free_result($result);
    }else{
        echo "No record mathcing your query were found";
    }
}

mysqli_close($link);
?>
