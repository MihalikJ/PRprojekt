<?php
include_once("classes/DB.php");
use classes\DB;
$db = new DB("localhost", "root", "", "portalove", 3306);
$gallery = $db->getGallery();
?>

<li class="selected">
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
            <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-one">
                    <!-- Gallery One pop up connected with JS code below -->


                    <?php
                    foreach ($gallery as $key => $Gallery) {
                        ?>

    <div class="grid-item">
        <figure class="effect-sadie">
            <img src="<?php echo $Gallery['fotka_upravena']; ?>" alt="Image" class="img-fluid tm-img">
            <figcaption>
                <h2 class="tm-figure-title"><span><strong><?php echo $Gallery['user_iduser']; ?></strong></span></h2>
                <p class="tm-figure-description"><?php echo $Gallery['popis']; ?></p>
                <a href="<?php echo $Gallery['fotka']; ?>">View more</a>
            </figcaption>
        </figure>
    </div>

<?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</li>

<!-- Page 2 Gallery Two -->
<li>
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
            <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-two">
                    <!-- Gallery Two pop up connected with JS code below -->

                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-12-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>One</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-12.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-11-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Two</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-11.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-10-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Three</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-10.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-09-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Four</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-09.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-08-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Five</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-08.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Six</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-07.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Seven</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-06.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Eight</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-05.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Nine</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-04.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Ten</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-03.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Eleven</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-02.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>Twelve</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-01.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-13-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>13</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-13.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-14-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>14</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-14.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-15-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>15</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-15.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-16-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Pix <span><strong>16</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-16.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

<!-- Page 3 Gallery Three -->
<li>
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">
            <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-three">
                    <!-- Gallery Two pop up connected with JS code below -->

                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>1</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-07.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-16-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>2</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-16.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>3</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-02.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-15-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>4</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-15.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>5</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-03.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-14-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>6</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-14.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>7</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-04.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-13-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>8</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-13.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>9</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-05.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-12-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>10</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-12.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>11</strong></span></h2>
                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                <a href="img/tm-img-06.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="grid-item">
                        <figure class="effect-sadie">
                            <img src="img/tm-img-11-tn.jpg" alt="Image" class="img-fluid tm-img">
                            <figcaption>
                                <h2 class="tm-figure-title">Photo <span><strong>12</strong></span></h2>
                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                <a href="img/tm-img-11.jpg">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div> <!-- .tm-img-gallery-container -->
        </div>
    </div>
</li>