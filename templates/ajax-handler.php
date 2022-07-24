<?php /** Template Name: Template Ajax Filter */ ?>

<?php 

/**
 * Getting parameters for ajax request in order to filter the results
 */

 if (isset($_POST) && !empty ($_POST)) {
 	extract($_POST);
     $args= array(
        'post_type' => 'expert',
        'posts_per_page' => -1,
        'order' => 'ASC',
     );
     // all experts
     $experts= get_posts( $args );
     foreach ($experts as $key => $expert) {
        if (!empty($speciality))
            if (!in_array($speciality, get_field('specialities', $expert->ID)))
                unset($experts[$key]);
        if (!empty($functie))
            if ($functie != get_field('functie', $expert->ID))
                unset($experts[$key]);
        if (!empty($bedrijf))
            if ($functie != get_field('bedrijf', $expert->ID))
                unset($experts[$key]);
     }


    foreach($experts as $expert) {
        $expert_image= get_the_post_thumbnail_url($expert->ID, 'medium');
        $expert_firstname = get_field('voornaam', $expert->ID);
        $expert_lastname = get_field('achternaam', $expert->ID);
        $expert_function = get_field('functie', $expert->ID);
        $expert_specialities = get_field('specialities', $expert->ID);
        $expert_bedrijf = get_field('bedrijf', $expert->ID);
?>
    <div class="col-md-4 col-11 d-flex justify-content-center nopadding my-5">
        <div class="card border border-0" style="background: none; width: 22rem; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
            <div class="card-body text-center">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid rounded rounded-circle profile_img border border-4 border-success"
                    src="<?=$expert_image ;?>" alt="profielfoto">
                    <h4 class="text-detached text-white text-center text-break fw-bold w-75">
                        <?= $expert_firstname ?>&nbsp;<?= $expert_lastname; ?>
                    </h4>
                </div>
            
                <div class="card-title_zoeker text-center mb-0 d-flex justify-content-center"></div>

                <div class="card-text p-3" style="background-color:#F8F8F8;">
                    
                    <div class="my-3" aria-current="true">
                        <?php 
                            foreach ($expert_specialities as $key  => $specialitie) 
                            {
                        ?>
                                <div class="d-flex w-100 justify-content-start">
                                    <h6 class="mb-1 w-50 text-start">Specialisatie <?= $key+1 ?>:</h6>
                                    <small> <?= $specialitie; ?> </small>
                                </div>
                        <?php 
                            }
                        ?>
                        <div class="d-flex w-100 justify-content-start">
                            <h6 class="mb-1 w-50 text-start"> Functie:</h6>
                            <small> <?= $expert_function; ?> </small>
                        </div>
                        <div class="d-flex w-100 justify-content-start">
                            <h6 class="mb-1 w-50 text-start">Bedrijf:</h6>
                            <small> <?= $expert_bedrijf; ?> </small>
                        </div>
                    </div>
                    
                    <button type="button" class="btn text-white my-1 px-md-3 px-3 font-weight rounded-pill py-1"
                        style="background-color: #D50074;">
                        <span class="fw-bold">Voeg toe aan selectie</span>
                    </button>
                    <button type="button" class="btn text-white my-3 px-md-5 px-5 font-weight rounded-pill py-1"
                        style="background-color: #2DAB66;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="fw-bold">Bekijk profiel</span>
                    </button>

                </div>
                
            </div>
        </div>
    </div>
            
<?php
    }
}
?>


      