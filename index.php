<?php
include('./config/link.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loading</title>
<!-- <link rel="stylesheet" href="app/css/c.css"> -->
<link rel="stylesheet" href="<?= $common_css ?>">

</head>
<body>
  <div class="loading"></div>
</body>
<script>
setTimeout(function(){
  window.location.href = "<?=$main?>"; 
}, 4000);

</script>
</html>