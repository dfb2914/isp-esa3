<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mein Wunschzettel</title>
        <link rel="stylesheet" href="app/css/main.css">
    </head>
    <body>
        <div class="container error">
            <ul>
                <?php foreach($errors as $error) {
                    echo "<li>$error</li>";
                } ?>
            </ul>
        </div>
        
