<?php
echo CHtml::beginForm();

echo CHtml::label('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu :','Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu'). "<br/>";
echo CHtml::radioButton('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu', true) . "Sangat Tidak Setuju";
echo CHtml::radioButton('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu') . "Tidak Setuju";
echo CHtml::radioButton('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu') . "Agak Setuju";
echo CHtml::radioButton('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu') . "Setuju";
echo CHtml::radioButton('Apakah dosen Apakah kuliah selalu dimulai & diakhiri tepat waktu') . "Sangat Setuju";
echo "<br/><br/>";

echo CHtml::label('menguasai & membagikan ilmunya dengan baik :','menguasai & membagikan ilmunya dengan baik'). "<br/>";
echo CHtml::radioButton('menguasai & membagikan ilmunya dengan baik', true) . "Sangat Tidak Setuju";
echo CHtml::radioButton('menguasai & membagikan ilmunya dengan baik') . "Tidak Setuju";
echo CHtml::radioButton('menguasai & membagikan ilmunya dengan baik') . "Agak Setuju";
echo CHtml::radioButton('menguasai & membagikan ilmunya dengan baik') . "Setuju";
echo CHtml::radioButton('menguasai & membagikan ilmunya dengan baik') . "Sangat Setuju";
echo "<br/><br/>";

$data = array ('ya','tidak');
echo CHtml::label('Diskusi & pembahasan materi tugas/ujian berjalan baik, di dalam/luar kelas.', 'jawaban'). "<br/>";
echo CHtml::radioButtonList('jawaban',0,$data);
echo "<br/><br/>";

echo CHtml::submitButton('Kirim');

echo CHtml::endForm();
?>