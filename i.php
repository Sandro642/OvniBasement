<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 404 No signal</title>
  <link rel="stylesheet" href="./404/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<h1>404</h1>

<div class="frame">
    <div></div>
    <div></div>
    <div></div>
</div>
<div class="caps"><img src="http://ademilter.com/caps.png" alt=""></div>
<canvas id="canvas"></canvas>


<!--orjinal page http://ademilter.com/asdfghjkl -->
<!-- partial -->
  <script  src="./404/script.js"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6Lcu8R4gAAAAALOaKi9CDounHn3Pg2kgC7fKvGjG"></script>
    <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lcu8R4gAAAAALOaKi9CDounHn3Pg2kgC7fKvGjG', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>

</body>
</html>
