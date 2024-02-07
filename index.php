<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatotkaca | Search Engine Karya Anak Bangsa</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><img src="assets/images/logo.png" alt="Gatotkaca">Gatotkaca</h1>
    </header>
    <form action="index.php" method="post">
        <input type="text" name="gatotkaca" placeholder="Masukkan Username">
        <button type="submit">Cari</button>
    </form>
    <div class="footer">
      <p>No Copyright 2024 by <a href="http://kominfo.go.id">Unknown</a></p>
      <p>Database free; AI free; Security free; APBN friendly</p>
    </div>

<?php
  if (isset($_POST["gatotkaca"])) {
    $gatotkaca = $_POST["gatotkaca"];

    // Ubah seluruh input menjadi huruf kecil
    $lowerCaseInput = strtolower($gatotkaca);

    switch ($lowerCaseInput) {
      case "kominfo":
        header("Location: komintod.php");
        break;
      case "joni g piring":
        header("Location: joni.php");
        break;
      case "sam abrakadabra":
        header("Location: hayolo.php");
        break;
      default:
        $warna = array(
          "red",
          "green",
          "blue",
          "magenta",
          "orange",
          "purple"
        );
        $text = "Yo Ndak Tau Kok Tanya Saya!";
        $coloredText = "";
        for ($i = 0; $i < strlen($text); $i++) {
          $randomColor = $warna[rand(0, 5)];
          $coloredText .= "<span id='char-$i' style='color: $randomColor'>" . $text[$i] . "</span>";
        }
        echo $coloredText;
        ?>
        <script>
          setInterval(function() {
            for (let i = 0; i < <?php echo strlen($text); ?>; i++) {
              let char = document.getElementById('char-' + i);
              let randomColor = "<?php echo implode(',', $warna); ?>".split(',')[Math.floor(Math.random() * 6)];
              char.style.color = randomColor;
            }
          }, 500);
        </script>
        <?php
    }
  }
?>

</body>
</html>
