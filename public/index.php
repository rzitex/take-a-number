<?php

if (isset($_GET['resourceid'])) { 
  $resource_id = $_GET['resourceid'];
} else { 
  $resource_id = time();
  header("Location: $resource_id");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Take a Number</title>
  <meta name="author" content="Donald L. Merand">
  <meta name="description" content="Get a number counter, like at the RMV">
  <meta name="keywords" content="RMV, Number, Counter">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
</head>
<body>
  <div id="top">
    <div id="number"></div>
  </div>
  <div id="bottom">
    <button id="advance">ADVANCE</button>
    <button id="reset">RESET</button>
  </div>
  <div id="resource-id" data-resource-id="<?php print $resource_id; ?>">
    Share this counter:
    <br> 
    <?php $share_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    <a href="<?php print $share_url; ?>" target="_blank">
      <?php print $share_url; ?>
    </a>
  </div>
  <script src="assets/scripts/jquery-1.7.2.min.js"></script>
  <script src="assets/scripts/jquery-ui-1.8.21.custom.min.js"></script>
  <script src="assets/scripts/takeanumber.js"></script>
</body>
</html>
