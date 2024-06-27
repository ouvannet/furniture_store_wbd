<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'includes/header.php'; ?>
    <?php if($_GET['look']=='home'){ ?>
        <?php include ('webpage/home.php'); ?>
    <?php } elseif($_GET['look']=='category'){ ?>
        <?php include ('webpage/category.php'); ?>
    <?php } elseif($_GET['look']=='service'){ ?>
        <?php include ('webpage/service.php'); ?>
    <?php } elseif($_GET['look']=='blog'){ ?>
        <?php include ('webpage/blog.php'); ?>
    <?php } elseif($_GET['look']=='contact'){ ?>
        <?php include ('webpage/contact.php'); ?>
    <?php } elseif($_GET['look']=='about'){ ?>
        <?php include ('webpage/about.php'); ?>
    <?php } ?>
    <?php include 'includes/footer.php'; ?>
</body>
</html>



