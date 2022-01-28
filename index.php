<?php

    include "logic.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Notícias</title>
</head>
<body>

    <div class="container mt-5">

        <?php if(isset($_REQUEST['news'])){ ?>
            <?php if($_REQUEST['news'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Uma nova notícia foi adicionada!
                </div>
            <?php }?>
        <?php } ?>

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Criar nova postagem de notícia </a>
        </div>

        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['post_title'];?></h5>
                            <p class="card-text"><?php echo substr($q['post_slug'], 0, 50);?>...</p>
                            <p class="card-text"><?php echo substr($q['post_description'], 0, 50);?>...</p>
                            <p class="card-text"><?php echo substr($q['post_keyword'], 0, 50);?>...</p>
                            <p class="card-text"><?php echo substr($q['post_content'], 0, 50);?>...</p>
                            <a href="view.php?post_slug=<?= $q['post_slug']?>" class="btn btn-light">Abrir notícia<span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

    </div>

</body>
</html>


