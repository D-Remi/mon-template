<?php
    if( have_rows('picture-bloc') ) {
        while (have_rows('picture-bloc') ){
            if( have_rows('picture-bloc') ) {
                the_row();
                $image[] = get_sub_field('image');
            }
        }
    }
?>
    
    <section class="container-fluid">
        <h2 class="text-center">Actualités</h2>
        <div class="row">
            <div class="col-3">
                <img src="<?php echo $image[2] ; ?>" width="400px" heigth="300px"><br>
                <span>4 juin</span><br>
                <h3>Intégrer les acteurs aux problématiques environnementales</h3>
                <p>Donec sed odio dui. Curabitur blandit tempus porttitor Sed posuere consectetur est at lobor …</p>
            </div>
            <div class="col-3">
            <img src="<?php echo $image[1] ; ?>" width="400px" heigth="300px"><br>
                <span>4 juin</span><br>
                <h3>Le site du futur projet en quelques photos</h3>
                <p>Donec sed odio dui. Curabitur blandit tempus porttitor Sed posuere consectetur est at lobor …</p>
            </div>
            <div class="col-3">
            <img src="<?php echo $image[0] ; ?>" width="400px" heigth="300px"><br>
                <span>4 juin</span><br>
                <h3>Les indicateurs d’une biodiversité équilibrée</h3>
                <p>Donec sed odio dui. Curabitur blandit tempus porttitor Sed posuere consectetur est at lobor …</p>
            </div>
            <div class="col-3">
            <img src="<?php echo $image[3] ; ?>" width="400px" heigth="300px"><br>
                <span>4 juin</span><br>
                <h3>Le site du futur projet  en quelques photos</h3>
                <p>Donec sed odio dui. Curabitur blandit tempus porttitor Sed posuere consectetur est at lobor …</p>
            </div>
        </div>
    </section>
