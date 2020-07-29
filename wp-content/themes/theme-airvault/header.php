<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </div>
    <?php wp_head(); ?>
</head>
<body>
    <?php
		wp_body_open();
	?>
    <header>
        <?php
        if( has_nav_menu('header')){
            ?>
            <?php
            $title = get_bloginfo( 'name' );
            $mots = explode(" ", $title);
            ?>
            <nav class="container-fluid">
                <div class="row p-2 justify-content-between align-items-center">
                    <div class="col-1 entry-header-nav">
                        <strong><?php echo $mots[0]; ?><br><?php echo $mots[1]; ?></strong><br>
                        <span><?php echo get_bloginfo( 'description' ); ?></span>
                    </div>
                    <?php  wp_nav_menu(['theme_location' => 'header',
                                        'container' => false,
                                        'menu_class' => 'col-4'
                    ]) 
                    ?>
                </div>
            </nav>
            <?php
        }else{
            ?>
            <nav class="container-fluid">
                <div class="row p-2 bg-secondary">
                    <div class="col-1 entry-header">
                        <strong class="text-primary">SEPPA</strong><br>
                        <span>agence-seppa.com</span>
                    </div>
                </div>
            </nav>
            <?php
        }
        get_template_part( 'templates-parts/header-wrapper' );
        ?>
    </header>
