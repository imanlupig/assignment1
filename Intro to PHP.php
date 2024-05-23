<?php

/*******w******** 
    
    Name: Ian Manlupig 
    Date: 2024-05-19
    Description: Intro to PHP Assignment 1

****************/

$config = [

    'gallery_name' => 'Ian\'s Gallery',
 
    'unsplash_categories' => ['Dogs','Birds','Bikes','City','Nature','Food'],
 
    'local_images' => [
                        ['file'=> 'david-dvoracek-tQk3y00flv4-unsplash.jpg', 'name' => 'David Dvořáček', 'url' => 'https://unsplash.com/@dafidvor' ],
                        ['file'=> 'izuddin-helmi-adnan-4gLtZI213Dk-unsplash.jpg', 'name' => 'Yuheng Ouyang', 'url' => 'https://unsplash.com/@govizlora'],
                        ['file'=> 'yuheng-ouyang-9GG6wZK26Ig-unsplash.jpg', 'name' => 'Izuddin Helmi Adnan', 'url' => 'https://unsplash.com/@izuddinhelmi'],
                        ['file'=> 'luke-miller-MeOiJDDq4qA-unsplash.jpg', 'name' => 'Luke Miller ', 'url' => 'https://unsplash.com/@bylukemiller']
                    ]
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <!-- Part 1: title -->
    <h1><?= $config['gallery_name']?></h1>

    <!-- Part 2: Display categories and random images -->
    <?php foreach($config['unsplash_categories'] as $category): ?>
    <h2> <?= $category ?> </h2>
    <img <?=" src='https://source.unsplash.com/300x200/? $category' alt='$category image' "?> >
    <?php endforeach ?>

    <!-- Part 3: Display Local images -->
    <h1> <?= count($config['local_images']) . " Large Images" ?> </h1>
    
    <?php foreach($config['local_images'] as $image => $info): ?>
    <img <?=" src='./images/{$info['file']}' "?> <?=" alt='Image by {$info['name']}' "?>>

    <h3> <a href="<?= $info['url'] ?>"> <?= $info['name'] ?> </a> </h3>
    <?php endforeach ?>

</body>
</html>