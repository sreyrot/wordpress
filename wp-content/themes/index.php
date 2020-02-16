<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <?php bloginfo('name');?>

                <span><?php bloginfo('description') ?></span>
            </h1>
        </div>
    </header>
   
<div class="container">
    <div class="row">
    <div class="col-6">
    <?php if(have_posts()){ ;?>
    <?php the_post();?>

    <div class="title">
        <h3><?php the_title(); ?></h3>
    </div>
    <div class="main">
        <p><?php the_content(); ?></p>
    </div>
<?php }else{
    echo "the post is not found";
} 
    
    ?>
    </div>
    <div class="col-6">
    
    </div>
    </div>
</div>

</body>
</html>
