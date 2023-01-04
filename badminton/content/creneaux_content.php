<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Planning</span>
                        <span class="section-heading-lower">Jeu Libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                        <?php

                        foreach ($array as $day => $hours) {

                            echo '<li class="list-unstyled-item list-hours-item d-flex">' .
                                $day .
                                '<span class="ms-auto">' . $hours . '</span>                              
                                </li>';
                        };

                        ?>

                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av. Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.8118866302493!2d3.8895623163301942!3d43.610458233846096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e22f7f97%3A0xa311207f5c128449!2s717%20Av.%20Jean%20Mermoz%2C%2034000%20Montpellier!5e0!3m2!1sfr!2sfr!4v1672845160401!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">

                    <?php

                    $html = file_get_contents('content/equipe_content.php');

                    $debut = strpos($html, '<!-- start -->');
                    $fin = strpos($html, '<!-- end -->');

                    $longeur = $fin - $debut;
                    $code = substr($html, $debut, $longeur);

                    echo $code

                    ?>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>