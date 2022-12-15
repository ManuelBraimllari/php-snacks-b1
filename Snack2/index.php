<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $pos_at = strpos($mail, '@');
            $boolMail = is_numeric($pos_at) && is_numeric(strpos($mail, '.', $pos_at));
            $age = $_GET['age'];
            if (strlen($name) > 3 && $boolMail && is_numeric($age)) {
                $message = "Utente Verificato";
            } else {
                $message = "Utente non Verificato";
            }
        } 
        
    ?>
    <h1>ISERISCI CREDENZIALI UTENTE</h1>
    <form action="" method="GET">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">
        <label for="mail">E-mail</label>
        <input type="text" id="mail" name="mail">
        <label for="age">Età</label>
        <input type="number" id="age" name="age">
        <button>Accedi</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>