<!--    Advertisement-->
<section class="add">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('top-sidebar'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->

<!--        Most Popular-->
<section class="add">
    <?php
    $cat = get_category( get_query_var( 'cat' ) );
    $cat_slug = $cat->slug;

    ?>


    <?php
    $args = array(
        'category_name' => $cat_slug,
        'post_status' =>  'publish',
        'posts_per_page' => '5',
        'post_type' => 'post',
        'meta_key' => 'view_count',
        'orderby' => 'meta_value_num',

    );

    $query = new WP_Query($args);

    ?>

    <?php if($query->have_posts()):?>
        <!-- .title -->
        <div class="title">
            <h2>Most Popular</h2>
        </div>
        <!-- /.title -->
        <!-- .trravel-carousel -->
        <div class="owl-carousel owl-theme carousel">
            <div>
                <?php while($query->have_posts()):$query->the_post();$post_id= get_the_ID();?>
                    <!-- .weghiet -->
                    <div class="weghiet">
                        <div class="col-sm-4 col-md-4 pad">
                            <?php echo get_the_post_thumbnail($post_id,'thumbnail',array('class'=>'img-responsive','alt'=>get_the_title()))?>
                        </div>
                        <div class="col-sm-8 col-md-8 pad">
                            <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
                            <span class="post-date">Posted On <?php echo get_the_date('F j, y');?></span>
                                    <span class="post-comment"><i class="fa fa-eye"
                                                                  aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                        </div>
                    </div>
                    <!-- /.weghiet -->
                <?php endwhile;?>

            </div>

        </div>
        <!-- /.trravel-carousel -->

    <?php endif;?>


</section>
<!--        End MOst popular-->

<!--    Advertisement-->
<section class="add">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('sidebar1'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->
<!--    Advertisement-->
<section class="add">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('sidebar2'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->
<!--    Advertisement-->
<section class="add">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('sidebar3'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->
<!--    Advertisement-->
<section class="add">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('sidebar4'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->

        <!--    Advertisement-->
<section class="life-style-post">

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('sidebar5'))
            ))
    );

    foreach ($myposts as $mypost) {
        $post_id = $mypost->ID;
        $post_title = $mypost->post_title;
    }
    $ad_id = get_post_meta($post_id,'image',true);
    $ad_image = wp_get_attachment_image_src($ad_id,'full',true);
    $external_link = get_post_meta($post_id,'external_link',true);

    ?>



    <!-- .add -->
    <div class="col-md-12 border">
        <h6><img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/></h6>
    </div>
    <!-- /.add -->
</section>
<!--  End  Advertisement-->