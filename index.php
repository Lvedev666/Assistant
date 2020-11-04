<?php
   $text = $_POST["text"];
   if($text === "Apa kabar?"){
      $text_a = "Baik baik saja";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Assistant</title>
</head>
<body>
   <form action="" method="post">
      <input type="text" name="text" id="text" placeholder="Masukkan Teks...">
      <input type="submit" value="submit">
   </form>
   <?php echo text_a; ?>
</body>
</html>