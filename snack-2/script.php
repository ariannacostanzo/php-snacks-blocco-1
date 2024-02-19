<?php 

$name = $_GET['name'] ?? '';
$email = $_GET['email']?? '';
$age = intval($_GET['age'])?? '';

$is_name_right = strlen($name) > 3;
$is_email_right = filter_var($email, FILTER_VALIDATE_EMAIL);
$is_age_right = is_int($age);

var_dump( $is_name_right,$is_email_right, $is_age_right, );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina d'accesso</title>
</head>
<body>
    <?php if($is_name_right && $is_email_right && $is_age_right): ?>
        <h3>Accesso riuscito</h3>
    <?php else: ?>
        <h3>Accesso negato</h3>
    <?php endif ?>
</body>
</html>