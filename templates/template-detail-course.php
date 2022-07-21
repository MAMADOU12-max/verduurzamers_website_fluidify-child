<?php /** Template Name: Template Detail Course */ ?>


<?php
    /**
     * Get course id from url
     */
  if (isset($_GET['course-id'])) {
    $course = get_post($_GET['course-id']);
    
    $lastest_post=get_posts(
            array(
                'post_type' => 'course',
                'posts_per_page' => 2,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            )
        );
  }
?>

<!-- -------------------------------------------------- Include header ------------------------------------------------- -->
<?php include "components/header-base.php"; ?>
<!-- -------------------------------------------------- Include header ------------------------------------------------- -->



<!-- ----------------------------------------------- Start bande section ---------------------------------------------- -->
<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-light fw-bold">“Eigenlijk willen we allemaal verduurzamers zijn...”</h2>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------------------- End bande section ---------------------------------------------- -->



<section class="py-md-5">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">

            <!-- ------------------------------------------ Start Detail course --------------------------------------------- -->
            <div class="col-11 text-md-start text-center">
                <h4>Title course</h4>
            </div>
            <div class="col-md-7 col-11 my-3">
                <div>
                    <img src="<?= get_the_post_thumbnail_url($course->ID) ;?>"
                     class="w-100 detail-image" alt="">
                </div>
                <div class="my-5">
                    <p class="text-md-start text-center"><?= $course->post_content; ?></p>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6  my-2">
                        <a href="#" class="text-decoration-none">
                            <ul class="list-group">
                                <li class="list-group-item" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                                    <!-- <div class="md-v-line"></div><i class="fas fa-laptop mr-4 pr-3"></i> Previous post -->
                                    <i class="fa-solid fa-circle-arrow-left text-success"></i>
                                    <span class="fw-bold text-success">
                                        Previous post
                                    </span>
                                    <div class="mt-2">
                                        <h5 class="text-success">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis.</h5>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-md-6 my-2 text-end">
                        <a href="#" class="text-decoration-none">
                            <ul class="list-group">
                                <li class="list-group-item"
                                style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                                    <div class="md-v-line"></div>
                                    <span class="fw-bold text-success">
                                        Next post
                                    </span>
                                    <i class="fa-solid fa-circle-arrow-right text-success"></i>
                                    <div class="mt-2">
                                        <h5 class="text-success">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis.</h5>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ------------------------------------------- End Detail course ---------------------------------------------- -->

            <!-- --------------------------------------- Start Mini dashboard side ------------------------------------------ -->
            <div class="col-md-4 col-11 my-3">
                <div>
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                        <div class="card-body text-center my-4">
                            <img class="img-fluid rounded rounded-circle swiper-img border-success"
                                src="<?php echo get_stylesheet_directory_uri();?>/images/profielfoto-cartoon_HV.png" alt=""> 
                            <h5 class="mb-3">Melenchon</h5>
                            <div>
                            <ul class="list-inline author-socials text-center">
                                    <li class="list-inline-item mx-2">
                                        <a href="#"><i class="fab fa-facebook-f text-muted" style="font-size: 23px;"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-2">
                                        <a href="#"><i class="fab fa-twitter text-muted" style="font-size: 25px;"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-2">
                                        <a href="#"><i class="fab fa-linkedin-in text-muted" style="font-size: 25px;"></i></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                        <div class="card-body m-3">
                            <h4 class="mt-3">Latest posts</h4>

                            <div class="list-group">
                                <?php foreach ($lastest_post as $post) { 
                                    $post_date=preg_split("/[\s,]+/", $post->post_date )[0];
                                    $post_title=$post->post_title;    
                                ?>
                                    <a href= <?= "template-detail-course/?course-id=".$post->ID;?>  class="list-group-item list-group-item-action border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                        </div>
                                        <p class="mb-1"> <?= $post_title ;  ?> </p>
                                        <small class="text-muted"> <?= $post_date; ?></small>
                                        <hr>
                                    </a>
                                <?php } ?>
                            </div>
                             
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                        <div class="card-body m-3">
                            <h4 class="mt-3">Tags</h4>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ----------------------------------------- End Mini dashboard side ------------------------------------------ -->

        </div>     
    </div>
</section>


<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->
<?php include "components/footer-base.php"; ?>
<!-- -------------------------------------------------- Include footer ------------------------------------------------- -->


