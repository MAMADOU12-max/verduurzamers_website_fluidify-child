<?php /** Template Name: Template Zoeker Second */ ?>

<?php   
    /** Getting experts */
    $experts = get_posts(
        array(
            'post_type' => 'expert',
            'orderby' => 'desc',
        )
    );
    /**
     * Getting specialties
     */
    $specialities=array();
     foreach ($experts as $key => $expert) {
        if (!empty(get_field('specialities', $expert->ID))) {
            $expert_specialities= get_field('specialities', $expert->ID);
            foreach ($expert_specialities as $key => $speciality) {
                if (!in_array($speciality, $specialities)) {
                    array_push($specialities, $speciality);
                }
            }   
        }
       
    }
    
?>

<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #018B42;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  inset: 0px;
  margin: auto;
  display: block;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>




<!-- --------------------------------------- Start modal to become a member -------------------------------------------- -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end border-bottom-0">
                <button type="button" class="bg-danger text-white border-0 p-2 px-3 rounded  rounded-3 fw-bold" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body px-md-4 px-3">

                <div class="container mb-4 p-3 d-flex justify-content-center"> 
                    <div class="card-profil p-1 border-0"> 
                        <div class="image d-flex flex-column justify-content-center align-items-center"> 
                            <button class="profil rounded rounded-pill btn-secondary" style="height: 140px; width: 140px"> 
                                <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
                            </button> 
                            <span class="name mt-3 fw-bold">Eleanor Pena</span> 
                            <span class="idd fw-bold">@eleanorpena</span> 
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1">Oxc4c16a645_b21a</span>
                                <span><i class="fa fa-copy"></i></span> 
                            </div> 
                            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                                <span class="number fw-bold">1069 <span class="follow" style="color: #444444">Followers</span></span> 
                            </div> 
                            <div class=" d-flex mt-2"> 
                                <button class="btn btn-success py-2 px-3 h6 fw-bold rounded rounded-2">
                                    Images <i class="fa-solid fa-caret-down"></i> 
                                    <!-- <i class="fa-solid fa-caret-up"></i> -->
                                </button> 
                            </div> 
                            
                            <div class="text mt-3 text-center"> 

                                
                               
<!-- <div class="row d-flex justify-content-center my-5 bg-danger">
    <div class="col-md-8 col-11 bg-success" style="width: 23.667% !important;"> -->
        <div class="slide_profils text-center mx-md-5 bg-dark" style="width: 300px !important; height:60px !important">
            <div class="d-flex justify-content-center" >
                <img class="img-fluid" heigth="100" width="80"
                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                 
            </div>
            <div class="d-flex justify-content-center" style="width: 79px !important; height:50px !important">
                <img class="img-fluid" heigth="100" width="80"
                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                 
            </div>
            <div class="d-flex justify-content-center" style="width: 79px !important; height:50px !important">
                <img class="img-fluid" heigth="100" width="80"
                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                 
            </div> <div class="d-flex justify-content-center" style="width: 79px !important; height:50px !important">
                <img class="img-fluid" heigth="100" width="80"
                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                 
            </div> <div class="d-flex justify-content-center" style="width: 79px !important;height:50px !important">
                <img class="img-fluid" heigth="100" width="80"
                src=<?= get_the_post_thumbnail_url( $expert->ID); ?> alt="">                 
            </div>
        </div>            
    <!-- </div>
</div> -->

                                <span style="color: #545454">Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> 
                                Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
                            </div> 
                            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
                                <span>
                                    <a href="" class="text-dark">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </span> 
                                <span>
                                    <a href="" class="text-dark">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="" class="text-dark">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </span> 
                                <span>
                                    <a href="" class="text-dark">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </span>
                            </div> 
                            <div class=" px-2 rounded mt-4" style="background-color: #ccc"> 
                                <span class="fw-bold" style="color: #a0a0a0">Joined May,2021</span> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- --------------------------------------- End modal to become a member -------------------------------------------- -->



<!-- ------------------------------------------- Start First Over ons slide ------------------------------------------ -->
<section class="first-slide-zoeker2">
    <div class="container px-md-4">
        <div class="row ">
            <div class="col-md-7 col-12 text-md-start text-center">
                <h2 class="text-white display-5 fw-bold text-break text-md-start text-center">VIND&nbsp;EEN <br> VERDUURZAMER OM&nbsp;MEE&nbsp;SAMEN&nbsp;TE&nbsp;WERKEN.</h2>
                <button type="button" class="btn text-white my-3 px-md-5 px-3 font-weight rounded-pill py-1"
                style="background-color: #D50074;">
                    <span class="fw-bold">LID WORDEN</span> 
                </button>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------- End First Over ons slide -------------------------------------------- -->



<!-- ----------------------------------------------- Start Content section ------------------------------------------- -->
<section class="">
    <div class="container p-md-4 p-1">

        <div class="my-2">
            <div class="row mx-md-5 my-md-1 mb-1">
                <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
                    <h2 class="text-md-start text-center text-break fw-bold text-success">
                        DE VERDUURZAMERS
                    </h2>
                </div>
                <div class="col-md-8 d-none d-md-flex border-bottom border-5 border-success mb-3">
                </div>
            </div>
            
            <div class="row d-flex justify-content-center m-md-3 m-lg-5 mt-lg-0 mt-1 my-3 m-1">
                
                <h4 class="fw-bold text-md-start text-center my-3">Maak je selectie, kies een verduurzamer uit en maak contact.</h4>
                
                <div class="col-lg-4 col-11 my-2">
                    <select id="speciality" class="form-select" aria-label="Default select example">
                        <option value="" selected>Filter by specialization</option>
                        <?php
                            foreach ($specialities as $key => $specialitie) {
                                if (!empty($specialitie))
                                    echo '<option value="'.$specialitie.'">'.$specialitie.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-4 col-11 my-2">
                    <select id="bedrijf" class="form-select" aria-label="Default select example">
                        <option value="" selected>Filter by bedrijf</option>
                        <?php
                            foreach ($experts as $key => $expert) {
                                if (!empty(get_field('bedrijf',$expert->ID)))
                                    echo '<option value="'.get_field('bedrijf',$expert->ID).'">'.get_field('bedrijf',$expert->ID).'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-4 col-11 my-2">
                    <select id="functie" class="form-select" aria-label="Default select example">
                        <option value="" selected>Filter by functie</option>
                        <?php
                            foreach ($experts as $key => $expert) {
                                echo '<option value="'.get_field('functie',$expert->ID).'">'.get_field('functie',$expert->ID).'</option>';
                            }
                        ?>
                    </select>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- ----------------------------------------------- End Content section ----------------------------------------------- -->


<!-- ------------------------------------------- Start Card profils section -------------------------------------------- -->
<section>
    <div class="container"> 

        <div class="row mx-md-5 my-md-1 mb-1">
            <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
                <h3 class="text-md-start mx-2 text-center text-break fw-bold text-success">
                    Alle verduurzamers
                </h3>
            </div>
        </div>

        <div hidden="hidden" class="loader"></div>

        <div class="expert-row row my-md-5 mx-md-5 d-flex justify-content-center justify-content-md-start">
            <?php
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
            ?>  
        </div>

    </div>
        

    </div>
</section>
<!-- -------------------------------------------- End Card profils section --------------------------------------------- -->


<!-- ----------------------------------------------- Start bande section ---------------------------------------------- -->
<section class="section-band my-5 d-flex align-items-center justify-content-md-center">
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-light fw-bold">“Eigenlijk willen we allemaal verduurzamers zijn...”</h2>
                </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------------- End bande section ---------------------------------------------- -->



<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $('.form-select').change(function() {
        var speciality = $('#speciality').val();
        var functie= $('#functie').val();
        var bedrijf = $('#bedrijf').val();
        $.ajax({
            url: '/gildevanverduurzamers/ajax-filter',
            type: 'POST',
            data: {
                speciality: speciality,
                functie: functie,
                bedrijf: bedrijf
            },
            beforeSend: function() {
                $('.loader').attr('hidden', false);
            },
            success: function(data) {
                $('.loader').attr('hidden', true);
                $('.expert-row').html(data);
            }
        });
    });
</script>

<script>
    $('.slide_profils').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        // autoplay: true,
        speed: 300,
        // nextArrow: '<i class="fa fa-arrow-left fa-2x bg-success text-white p-1 px-2 rounded-pill positionned_arrow left_arrow"></i>',
        // prevArrow: '<i class="fa fa-arrow-right fa-2x bg-success text-white p-1 px-2 rounded-pill positionned_arrow right_arrow"></i>',

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: false 
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]
    });
</script>
