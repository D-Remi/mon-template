<?php
    $title = get_field('title');
    $img = get_field('image');
    $button = get_field('button');

    // condition pour recuperer la valeur de la couleur du texte
    if( have_rows('text-content') ) {
        while (have_rows('text-content') ){
            if( have_rows('text-content') ) {
                the_row();
                $layout = get_sub_field('color');
                $title_heigth = get_sub_field('font-size');
            }
        }
    }
    // conditions pour recupérer les valeur du repeteur du bouton
    if( have_rows('button') ) {
        while (have_rows('button') ){
            if( have_rows('button') ) {
                the_row();
                $button_background = get_sub_field('button_background');
                $button_text = get_sub_field('button_text');
                $text_color = get_sub_field('text_color');
            }
        }
    }
    // conditions pour recupérer les valeur du repeteur du bouton
    if( have_rows('border') ) {
        while (have_rows('border') ){
            if( have_rows('border') ) {
                the_row();
                $border_heigth = get_sub_field('border-heigth');
                $border_color = get_sub_field('border-color');
            }
        }
    }
    //Boucle pour recuperer la valeur du texte
    foreach($title as $key => $values ){
        foreach($values as $key => $value){
             $value;
        }
    }

if(have_posts()){
?>
    <div class="row py-0 my-0 justify-content-between mb-0" style="border-bottom:<?php echo $border_heigth.'px' . '' . $border_color ?> solid">
        <div class="col-3">
            <h1 class="entry-header-title" style="color:<?php echo $layout;?>;font-size:<?php echo $title_heigth .'px'?>"><?php echo $value; ?></h1>
            <a href="" class="entry-header-title-button" style="background-color:<?php echo $button_background;?>;color:<?php echo $text_color;?>"><?php echo $button_text ?></a>
        </div>
        <div class="col-6 mb-0 mt-5">
            <img src="<?php echo $img['url'];?>" class="img-fluid">
        </div>
    </div>
<?php
}else{
    echo 'Aucune Page de créer';
}    