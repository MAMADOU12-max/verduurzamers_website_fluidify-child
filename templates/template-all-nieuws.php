<?php /** Template Name: Template All Nieuws */ ?>

<?php
    /* 
        Getting Nieuws, Courses and Experts post
    */
    $nieuws = get_posts( 
        array(
            'post_type' => 'nieuws'
        )
    );
?>

<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->



<!-- ------------------------------------------------- Start All nieuws ---------------------------------------------- -->
<section class="m-4 pt-5">
    <div class="container mt-5">

        <div class="row my-md-1 my-3 mx-md-5 d-flex justify-content-md-between">
            <div class="col-md-2">
                <h1 class="text-md-start text-center fw-bold text-success">NIEUWS</h1>
            </div>
            <div class="col-md-10 d-none d-md-flex border-bottom border-5 border-success mb-3"></div>
        </div>

        <div class="row my-md-2 mx-md-4 d-flex justify-content-md-start justify-content-center">
            <?php
            foreach($nieuws as $nieuw){
                $summary=get_field('summary', $nieuw->ID);
                $img=get_field('image', $nieuw->ID);
            ?>
            
                <div class="col-md-4 col-12 mt-4 d-flex justify-content-md-center justify-content-center">                    
                    <div class="d-flex flex-column bd-highlight">
                        <div class="bd-highlight">
                            <h4 class="fw-bold text-md-start text-center"> <?= $nieuw->post_title; ?> </h4>
                        </div>
                        <div class="bd-highlight">
                            <div class="card border-0" style="max-width: 22rem; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                                <img class="card-img-top img-fluid" style="height: 12rem" src="<?= $img; ?>" alt="Card image cap">
                                <div class="card-body m-4">
                                    <div class="card-text d-flex justify-content-center card-text-limited">
                                        <?= $summary; ?>
                                    </div>
                                    <div class="text-md-center">
                                        <button type="button" class="btn text-white px-5 py-1 font-weight rounded-pill"
                                            style="background-color: #2DAB66;">
                                                <span class="fw-bold">LID WORDEN</span>
                                        </button>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
            }
            ?>
        </div>

        <!-- Pagnination -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- -------------------------------------------------- End All nieuws ----------------------------------------------- -->



<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->

