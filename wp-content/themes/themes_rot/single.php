<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<header>
<h1>
 This is my title: <?php bloginfo('name');?>
        </h1>
        </header>
<br>
<br>
    <div class="container">
       
        <span><?php bloginfo("description");?></span>
        <?php if(have_posts()): ?>
            <?php the_post();?>
            <div class="title">
                <a href="<?php the_permalink();?>" class="btn btn-outline-success"><?php the_title();?></a>
            </div>
          Writen by:  <?php the_author();?>
         Date: <?php the_date();?>
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?>
                <?php else: echo "no found";?>
        <?php endif;?>
       
            <div class="main">
                <p><?php the_content();?></p>
             </div>
    <?php else: echo "The post not found";?>
<?php endif;?>


   
<div>

</div>

</body>
</html>