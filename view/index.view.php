<!doctype html>
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
use \MokApp\Mokiniai;

$mokinys1 = new Mokiniai("5b","Kelmas", "Kelmuotas", [5, 7, 9]);
$mokinys2 = new Mokiniai("5b","Jonas", "Jonaitis", [5, 7, 9]);
$mokinys3 = new Mokiniai("5b","Petras", "Petraitis", [5, 7, 9]);
$mokinys4 = new Mokiniai("5b","Haris", "Haroldas", [5, 7, 9]);
$mokinys5 = new Mokiniai("5b","Papartis", "Gele", [5, 7, 9]);
$mokinys6 = new Mokiniai("5b","Simas", "Simonas", [5, 7, 9]);
$mokinys7 = new Mokiniai("5b","Giedrius", "Giedraitis", [5, 7, 9]);
$mokinys8 = new Mokiniai("5b","Aiste", "Aistuota", [5, 7, 9]);
$mokinys9 = new Mokiniai("5b","Mc", "Purvinis", [5, 7, 9]);
$mokinys10 = new Mokiniai("5b","Renata", "Varnas", [5, 7, 9]);
?>
<table>
    <tr>
        <td>Klase</td>
        <td>Vardas</td>
        <td>Pavarde</td>
        <td>Id</td>
        <td>Data</td>
        <td>Average</td>
    </tr>
    <tr>
        <?php foreach($mokinys1->showStud() as $item):?>
        <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys2->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys3->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys4->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys5->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys6->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys7->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys8->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys9->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mokinys10->showStud() as $item):?>
            <td><?=$item?></td>
        <?php endforeach;?>
    </tr>
</table>
</body>
</html>