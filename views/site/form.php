
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $apakah_perkuiahaan_dimulai_tepat_waktuErr = $penguasaan_materiErr = $pemberian_feedbackErr = "";
$name = $apakah_perkuiahaan_dimulai_tepat_waktu = $penguasaan_materi = $pemberian_feedback =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /*if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }*/

  if (empty($_POST["apakah_perkuiahaan_dimulai_tepat_waktu"])) {
    $apakah_perkuiahaan_dimulai_tepat_waktuErr = "apakah_perkuiahaan_dimulai_tepat_waktu is required";
  } else {
    $apakah_perkuiahaan_dimulai_tepat_waktu = test_input($_POST["apakah_perkuiahaan_dimulai_tepat_waktu"]);
  }

  if (empty($_POST["penguasaan_materi"])) {
    $penguasaan_materiErr = "penguasaan_materi is required";
  } else {
    $penguasaan_materi= test_input($_POST["penguasaan_materi"]);
  }

  if (empty($_POST["pemberian_feedback "])) {
    $pemberian_feedbackErr = "pemberian_feedback";
  } else {
    $pemberian_feedback = test_input($_POST["pemberian_feedback"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Modul Evaluasi Dosen</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="modules/views/jawaban-kuisioner/create">  
apakah perkuiahaan dimulai tepat waktu:
  <br><br>
  <input type="radio" name="apakah_perkuiahaan_dimulai_tepat_waktu" <?php if (isset($apakah_perkuiahaan_dimulai_tepat_waktu) && $apakah_perkuiahaan_dimulai_tepat_waktu=="sangat tidak setuju") echo "checked";?> value="sangat tidak setuju">sangat tidak setuju
  <input type="radio" name="apakah_perkuiahaan_dimulai_tepat_waktu" <?php if (isset($apakah_perkuiahaan_dimulai_tepat_waktu) && $apakah_perkuiahaan_dimulai_tepat_waktu=="tidak setuju") echo "checked";?> value="tidak setuju">tidak setuju
  <input type="radio" name="apakah_perkuiahaan_dimulai_tepat_waktu" <?php if (isset($apakah_perkuiahaan_dimulai_tepat_waktu) && $apakah_perkuiahaan_dimulai_tepat_waktu=="agak setuju") echo "checked";?> value="agak setuju">agak setuju
  <input type="radio" name="apakah_perkuiahaan_dimulai_tepat_waktu" <?php if (isset($apakah_perkuiahaan_dimulai_tepat_waktu) && $apakah_perkuiahaan_dimulai_tepat_waktu=="setuju") echo "checked";?> value="setuju">setuju 
  <input type="radio" name="apakah_perkuiahaan_dimulai_tepat_waktu" <?php if (isset($apakah_perkuiahaan_dimulai_tepat_waktu) && $apakah_perkuiahaan_dimulai_tepat_waktu=="sangatsetuju") echo "checked";?> value="sangat setuju">sangat setuju     
  <span class="error">* <?php echo $apakah_perkuiahaan_dimulai_tepat_waktuErr;?></span>
  <br><br>

  penguasaan materi:
  <br><br>
  <input type="radio" name="penguasaan_materi" <?php if (isset($penguasaan_materi) && $penguasaan_materi=="sangat tidak setuju") echo "checked";?> value="sangat tidak setuju">sangat tidak setuju
  <input type="radio" name="penguasaan_materi" <?php if (isset($penguasaan_materi) && $penguasaan_materi=="tidak setuju") echo "checked";?> value="tidak setuju">tidak setuju
  <input type="radio" name="penguasaan_materi" <?php if (isset($penguasaan_materi) && $penguasaan_materi=="agak setuju") echo "checked";?> value="agak setuju">agak setuju
  <input type="radio" name="penguasaan_materi" <?php if (isset($penguasaan_materi) && $penguasaan_materi=="setuju") echo "checked";?> value="setuju">setuju 
  <input type="radio" name="penguasaan_materi" <?php if (isset($penguasaan_materi) && $penguasaan_materi=="sangatsetuju") echo "checked";?> value="sangat setuju">sangat setuju     
  <span class="error">* <?php echo $penguasaan_materiErr;?></span>
  <br><br>

  pemberian feedback:
  <br><br>
  <input type="radio" name="pemberian_feedback" <?php if (isset($pemberian_feedback) && $pemberian_feedback=="sangat tidak setuju") echo "checked";?> value="sangat tidak setuju">sangat tidak setuju
  <input type="radio" name="pemberian_feedback" <?php if (isset($pemberian_feedback) && $pemberian_feedback=="tidak setuju") echo "checked";?> value="tidak setuju">tidak setuju
  <input type="radio" name="pemberian_feedback" <?php if (isset($pemberian_feedback) && $pemberian_feedback=="agak setuju") echo "checked";?> value="agak setuju">agak setuju
  <input type="radio" name="pemberian_feedback" <?php if (isset($pemberian_feedback) && $pemberian_feedback=="setuju") echo "checked";?> value="setuju">setuju 
  <input type="radio" name="pemberian_feedback" <?php if (isset($pemberian_feedback) && $pemberian_feedback=="sangatsetuju") echo "checked";?> value="sangat setuju">sangat setuju     
  <span class="error">* <?php echo $pemberian_feedbackErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
/*echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";*/
echo $apakah_perkuiahaan_dimulai_tepat_waktu;
echo "<br>";
echo $penguasaan_materi;
echo "<br>";
echo $pemberian_feedback;
?>

</body>
</html>
