<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ipsum ut augue ornare, id dapibus lectus porttitor. Sed ornare nulla ac velit venenatis scelerisque. Nam semper ornare volutpat. Vestibulum hendrerit purus sed dui lobortis interdum. Aliquam dictum risus luctus ligula aliquet convallis. Vestibulum condimentum enim ac lacus luctus dignissim. Nunc non mi at turpis faucibus pretium at a est. Nulla magna odio, mollis sit amet tortor id, tincidunt auctor ligula. Aenean in dolor tincidunt, cursus odio vel, fermentum eros. Quisque non ipsum justo. Cras facilisis velit lectus, id convallis elit commodo non. Praesent condimentum convallis ex vel placerat. Quisque lacinia turpis lorem, ac semper augue accumsan non. Donec felis erat, varius id dignissim sit amet, dignissim eu nunc.';
$badword = $_GET['badword'];
$paragraphCensored = str_replace(lcfirst($badword), '***', $paragraph);
$paragraphCensored = str_replace(ucfirst($badword), '***', $paragraphCensored);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP Badwords</title>
</head>

<body>
    <p> <strong>Paragrafo:</strong> <?php echo $paragraph ?> </p>
    <p> <strong>Lunghezza:</strong> <?php echo strlen($paragraph) ?> </p>

    <form>
        <label for="badword"></label>
        <input type="text" name="badword" id="badword">
        <button type="submit">Censura</button>
    </form>

    <p> <strong>Paragrafo censurato:</strong> <?php echo $paragraphCensored ?> </p>
    <p> <strong>Lunghezza paragrafo censurato:</strong> <?php echo strlen($paragraphCensored) ?> </p>
</body>

</html>