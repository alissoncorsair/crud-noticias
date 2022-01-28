<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Detalhes da notícia</title>
</head>
<body>

   <div class="container mt-5">


        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['post_title'];?></h1>
                <p class="my-3"><?php echo $q['post_description'];?></p>
                <br><br><br>
            <h1><?php echo $q['post_content'];?></h1>
                <br>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="edit.php?post_slug=<?php echo $q['post_slug']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['post_slug']?>' name="post_slug">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>

                <em><pre class="text-white my-5"><?php echo $q['post_keyword'];?></pre></em>
            </div>
        <?php } ?>

        <a href="index.php" class="btn btn-outline-dark my-3">Voltar ao portal de notícias</a>
   </div>

</body>
</html>