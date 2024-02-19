<?php 
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex molestiae, in explicabo nobis facere modi, amet, possimus soluta exercitationem animi unde nostrum delectus illo quisquam aliquid praesentium voluptatum! Dolore, veniam.
Laudantium facilis magnam temporibus aliquam voluptates, rerum esse impedit vel a quisquam? Modi atque distinctio magni, quis deleniti id itaque fugiat soluta omnis dolores, officiis facere corporis saepe repudiandae eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt quisquam necessitatibus eaque, consectetur rerum similique error culpa iusto a, quam atque quis reprehenderit eum. Nihil, ducimus iste? Reiciendis, ipsa.
Dolores, quae. Sed est fugit officia dignissimos corporis placeat reprehenderit. Fugiat facere harum iste excepturi, vero accusantium nisi dolores officia inventore soluta temporibus ad obcaecati totam fuga explicabo pariatur distinctio.
Cupiditate dolore ratione fuga iusto id omnis dolorem repellat suscipit, quis consequuntur ab quo. Aliquam error quam voluptatum, repudiandae ratione eligendi atque vitae quasi suscipit, corporis accusamus quod ullam vero?';

$divided_paragraphs = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
</head>
<body>
    <?php foreach($divided_paragraphs as $divided_paragraph): ?>
        <p><?= $divided_paragraph ?></p>
    <?php endforeach ?>
</body>
</html>