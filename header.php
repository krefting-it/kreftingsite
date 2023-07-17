<!DOCTYPE html>
<html lang="de">
    <head>
        <?php
        include "metadata.php";
        ?>
        <title>Programmierenlernen - <?php
        echo $title;
        ?></title>
        <?php
        include "cssandscript.php";
        ?>
    </head>
    <body>
        <header>
            <select onchange="window.location.href=this.value">
            <option>Menü</option>
            <?php
            include "links.php";
            ?>
            </select>
        </header>