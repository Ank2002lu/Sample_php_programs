<style>
body {
  background-image: url(https://www.pexels.com/photo/green-grass-in-forest-45491/);
  background-size: cover;
  background-repeat: no-repeat;
}

h3 {
  color: #333;
  font-size: 24px;
  margin-top: 0;
}

p {
  margin-bottom: 10px;
}

.counter {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
  background-color: #FAFAD2;
}
</style>

<?php
$name = "counter.txt";
$file = fopen($name, "r");
$hits = fscanf($file, "%d");
fclose($file);
$hits[0]++;
$file = fopen($name, "w");
fprintf($file, "%d", $hits[0]);
fclose($file);
?>

<h3>REFRESH PAGE</h3>

<div class="counter">
  <p>Total number of views: <?php echo $hits[0]; ?></p>
</div>
