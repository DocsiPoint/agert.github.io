<?php
$code=$_GET["url"];
echo $code;
?>
<!DOCTYPE html>
<html>
<body>

<h2>Redirect to a Webpage</h2>
<p>The replace() method replaces the current document with a new one:</p>

<button onclick="myFunction()">Replace document</button>

<script>
function myFunction() {
  location.replace("https://www.w3schools.com")
}
</script>

</body>
</html> 
