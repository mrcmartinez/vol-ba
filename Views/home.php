<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page'];?></title>
</head>
<body>
    <section id="<?php echo $data['page_id'];?>">
    <!-- <h1>Sistema de gestion de voluntaraiado para el banco de alimemtos de leon </h1> -->
    <h1><?php echo $data['page_title'];?></h1>
    <h1><?php echo $data['page_content'];?></h1>
    <?php print_r($data);?>
    </section>
</body>
</html>