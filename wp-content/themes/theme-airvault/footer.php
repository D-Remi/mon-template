<?php
    if( have_rows('logo') ) {
        while (have_rows('logo') ){
            if( have_rows('logo') ) {
                the_row();
                $image[] = get_sub_field('picture');
            }
        }
    }
    if( have_rows('footer-link') ) {
        while (have_rows('footer-link') ){
            if( have_rows('footer-link') ) {
                the_row();
                $i = -1;
                $j = -1;
                $url[] = get_sub_field('url');
                $value[] = get_sub_field('value');
                $i++;
                $j++;
                $link = '<a href="' . $url[$i] .'">' . $value[$j] . '</a>';

                var_dump($link);
            }
        }
    }
    $p = get_field('text-footer');
    $footer_background = get_field('foot-background-color');
    
?>    
    <footer class="container-fluid">
        <div class="row align-items-center p-3" style="background-color:<?php echo $footer_background; ?>">
            <div class="col-3">
                <img src="<?php echo $image[0]; ?>" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="<?php echo $image[1]; ?>" class="img-fluid">
            </div>
            <div class="col-3">
                <?php echo $p; ?>
            </div>
            <div class="col-3">
                
            </div>
        </div>
        <div class="row">

            
                 
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>