<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">

        <header class="header">
            <?php include './includes/header.inc.php' ?>
        </header>

        <section class="grid-item about_me">
            <div class="about_me_photo"><?php include './includes/logo.inc.php'?></div>
            <div class="about_me_text">
                <h2><?php echo $hello; ?></h2>
                <p>Меня зовут <?php echo $name . ' ' . $surname . '<br>' . 'Город ' . $myCity . '<br>' . 'Мне ' . $myAge; ?> года</p>
            </div>
        </section>

        <section class="grid-item my_knowledge">
            <div class="knowledge_title"><h2>Изучено мной:</h2></div>
            <div class="knowledge_web_server">
                <h4>
                    <a href="../web_server.php">Веб-сервере: Laravel Homestead</a>
                </h4>
            </div>
            <?php include './includes/knowledge.inc.php'?>
        </section>

        <footer class="grid-item copyright_social">
            <?php include './includes/footer.inc.php' ?>
        </footer>

    </div>

</body>
</html>