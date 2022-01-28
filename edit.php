<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Editar notícia</title>
</head>
<body>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['post_id']?>' name="post_id">

                <input type="text" placeholder="Título da notícia" class="form-control my-3 bg-dark text-white text-center" name="post_title" value="<?= $q['post_title'] ?>">

                <input type="text" placeholder="Slug" class="form-control my-3 bg-dark text-white text-center" name="post_slug" value="<?=$q['post_slug']?>">

                <textarea placeholder="descrição" class="form-control my-3 bg-dark text-white" cols="30" rows="2" name="post_description"><?=$q['post_description']?></textarea>

                <input type="text" placeholder="Palavras-chave" class="form-control my-3 bg-dark text-white text-center" name="post_keyword" value="<?=$q['post_keyword']?>">

                <textarea placeholder="conteúdo" class="form-control my-3 bg-dark text-white" cols="30" rows="5" name="post_content"><?=$q['post_content']?></textarea>

                <button class="btn btn-dark" name="update">Atualizar</button>
            </form>
        <?php } ?>    
   </div>


</body>
</html>
