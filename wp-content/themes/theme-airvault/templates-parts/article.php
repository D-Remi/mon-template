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

<section>
    <article class="container-fluid bg-secondary">
        <h2 class="text-center text-white">Contribuer</h2>
        <div class="row text-white text-center">
            <div class="col-4 p-4">
                <img src="<?php echo $image[4] ; ?>" class="img-fluid mb-2">
                <h3>Cartographie des acteurs</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod. </p>
                <a href="">En Savoir Plus</a>
            </div>
            <div class="col-4 p-4">
                <img src="<?php echo $image[5] ; ?>" class="img-fluid mb-2">
                <h3>Le Forum</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod. </p>
                <a href="">En Savoir Plus</a>
            </div>
            <div class="col-4 p-4">
                <img src="<?php echo $image[6] ; ?>" class="img-fluid mb-2">
                <h3>Enquête en ligne</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod. </p>
                <a href="">En Savoir Plus</a>
            </div>
        </div>
    </article>
    <article class="container-fluid my-3">
        <h2 class="text-center">Le Projet</h2>
        <div class="row justify-content-betwenn">
            <div class="col-6 p-5">
                <div class="row align-items-center">
                    <div class="col-6">
                        <img src="<?php echo $image[7] ; ?>" class="img-fluid">
                    </div>
                    <div class="col-6">
                        <h3>Tendances</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod.  Nullam quis risus eget urna mollis  ornare vel eu leo.</p>
                        <a href="">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-6 p-5">
                <div class="row justify-content-center">
                    <div class="col-6 mx-0 py-5 p-0 text-center" style="background-color:#F7A600">
                        <h3>Retour en Images</h3>
                        <a href="">En savoir plus</a>
                    </div>
                    <div class="col-6 mx-0 p-0">
                        <img src="<?php echo $image[8] ; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>