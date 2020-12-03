<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Дратути">
    <title> Последние 2 статьи </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <?php foreach ($data2 as $data) { ?>
            <div class="thumbnail">
                <img src="https://upload.wikimedia.org/wikipedia/ru/5/59/Pok%C3%A9mon_Squirtle_art.png" alt="...">
                <div class="caption">
                    <h3> <?php echo $data->title; ?> </h3>
                    <p> <?php echo $data->content ?> </p>
                    <p><a href="/index.php?id=<?php echo $data->id; ?>" class="btn btn-primary" role="button">Открыть статью</a></p>
                </div>
            </div>\
        <?php } ?>
    </div>
</div>


</div>
</body>
</html>