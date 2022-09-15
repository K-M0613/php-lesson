<?php require '../header.php'; ?>
<form action="price-output.php" method="post">
  単価<input type="text" name="price">円
  ×
  個数<input type="text" name="count">個
  <input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>