<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
   
    if ($currentPage == "coding.php") {
        $title = "Coding Examples";
    } else if ($currentPage == "about.php")  {
        $title = "About Me";
    } else if ($currentPage == "scs.php") {
        $title = "SCS Scheme";
    } else {
        $title = "Portfolio";
    }
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <?php if($currentPage == "coding.php") { ?>
        <link rel="stylesheet" href="slick/slick.css">    
        <link rel="stylesheet" href="slick/slick-theme.css">  
    <?php } ?>

    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="favicon.ico" type="image/ico">  
    
    <title> <?php echo $title ?></title>
</head>