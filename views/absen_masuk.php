<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projek PKL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="card" style="width: 20rem;">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <div id="my_camera" style="width:320px; height:240px;"></div>
      <div id="my_result"></div>
      <script language="JavaScript">
        Webcam.attach('#my_camera');

        function take_snapshot() {
          Webcam.snap(function(data_uri) {
            document.getElementById('my_result').innerHTML = '<img src="' + data_uri + '"/>';
            document.querySelector('input[name="image"]').value = data_uri;
          });
        }
      </script>
      <form action="/proses_absen" method="post">
        <input type="text" name="image" value="">
        <div class="text-center">
          <button type="submit" class="btn btn-primary" onclick="take_snapshot()">Absen masuk</button>
        </div>
      </form>
      <div class="text-center">
        <a href="/proses_logout">logout</a>
      </div>
    </div>
  </div>
  <?php
  echo "hallo," . $_SESSION["user"]["username"] . "!";
  print_r($_SESSION);
  ?>
</body>
</html>