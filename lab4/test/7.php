<?php
session_start();
$seventh = '';
if (!empty($_GET))
    $_SESSION['test']['seventh'] = $_GET['seventh'];
if (isset($_SESSION['test']['seventh']))
    $seventh = $_SESSION['test']['seventh'];
?>

<!DOCTYPE HTML>

<html lang="en">

<head>
    <title>phpLab4</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/lab1.css">
    <link rel="stylesheet" href="../../styles/lab2.css">
    <link rel="stylesheet" href="../../styles/lab3.css">
    <link rel="stylesheet" href="../../styles/lab4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
</head>

<body>
<header>
    <div class="divHeader">
        <a href="../../index.php"><img class="menuImg" src="../../images/greenBlockMenu.png" alt="menu img"></a>
        <div class="title">
            <span class="FIO">Emelyanov Sergey Igorevich</span>
            <span class="option">Option16</span>
        </div>
        <form id="searchBox" action="" method="get">
            <input id="searchText" type="search" name="searchText" placeholder="Search for labs!" autofocus>
            <button id="searchBtn" type="button" value="search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <nav class="navHeader">
        <ul class="mainMenu">
            <li><a href="../../lab1/form1.php">Form</a></li>
            <li><a href="../../lab2/add.php">Text file</a></li>
            <li><a href="../../lab3/cookies.php">Cookies</a></li>
            <li class="active"><a href="../shop.php">Session</a></li>
            <li><a href="../../lab5/regular.html">Regular</a></li>
            <li><a href="../../lab6/add.php">Authorization</a></li>
            <li><a href="../../lab7/add.php">Database</a></li>
            <li><a href="../../lab8/lab8.php">Registration and database</a></li>
        </ul>
    </nav>
</header>

<nav class="subNav">
    <p>TEST</p>
    <ul class="subMenu">
        <li><a href="../shop.php">ТОВАРЫ</a></li>
        <li><a href="../bin.php">КОРЗИНА</a></li>
        <li><a href="../utils.php">ВРЕМЯ СЧЕТЧИК EMAIL</a></li>
        <li><a href="../form1.php">ФОРМЫ</a></li>
        <li><a href="../logout.php">РАЗРУШИТЬ СЕССИЮ</a></li>
        <li class="active2"><a href="1.php">ТЕСТ</a></li>
    </ul>
</nav>

<main>

    <div class="forms">
        <form name="test7">
            <fieldset>
                <legend>Вопрос №7</legend>

                <label for="seventh">
                    Запишите результат выполнения<br>
                    следующего кода:<br>
                    $one = 1;<br>
                    $zero = 0;<br>
                    if($one == "") echo $one;<br>
                    else echo $zero;
                </label>
                <input id="seventh" name="seventh" type="text" placeholder="01" value="<?php echo $seventh; ?>" required>

            </fieldset>
            <input type="submit" value="Сохранить">
            <input type="reset" value="Очистить">
        </form>
    </div>
    <div class="npBtn">
        <a href="6.php">Preview</a>
        <a href="8.php">Next</a>
    </div>
</main>

<!--<aside>

</aside>-->

<footer>
    <span>Emelyanov Sergey ITS-21<sup>&#169;</sup></span>
    <span>
            E-mail:
            <a href="mailto: emelyanovsergeyofficial@gmail.com" target="_blank" title="Emelyanov Sergey">
                emelyanovsergeyofficial@gmail.com
            </a>
        </span>
</footer>

<script src="../../scripts/main.js" type="text/javascript" language="JavaScript"></script>
<script src="../../scripts/jquery-3.4.0.js" type="text/javascript" language="JavaScript"></script>
<script src="../../scripts/navigation.js" type="text/javascript" language="JavaScript"></script>

</body>

</html>
