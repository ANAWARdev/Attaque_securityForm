<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>commentaire:</h1>
    <!-- Zone vulnérabilité à XSS  -->
    <div id="commentaire">
        <?php echo $_GET ['commentaire']; ?>
    </div>
</body>

</html>

<!-- Il faut le mettre dans l'url, qq'un à injecter en passant par 'url'  -->
http://localhost/attaqueSecurityForm/xss.php?commentaire=<script>
alert('XSS Attack');
</script>