<!-- .lft-social -->
<section class="add">
    <div class="title">
                <h2>Exchange Rate</h2>
    </div>
    <div class="clearfix"></div>

    <div align="center" style="margin: 30px 0px; height: 300px;overflow-y: scroll;"><div align="center" style="margin: 0px; padding: 0px; border: 2px solid rgb(136, 136, 136); width: 100%;padding: 10px; background-color: rgb(255, 255, 255);"><noscript><div align="center" style="width: 100%; border-bottom: 1px solid rgb(136, 136, 136); margin: 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); background-color: rgb(160, 192, 48);"><a href="https://fx-rate.net/NPR/" style="text-decoration: none; font-size: 14px; font-weight: bold; text-align: center; color: rgb(0, 0, 0);"><img src="https://fx-rate.net/images/countries/np.png" style="margin: 0px; padding: 0px; border: none;"> Nepalese Rupee Exchange Rate</a></div></noscript><script type="text/javascript" src="https://fx-rate.net/fx-rates2.php?label_name=Nepalese Rupee Exchange Rate&lab=0&width=215&currency=NPR&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=a0c030&hbg=0&flag_code=np&length=continent&label_type=currency_name&cp=000000,FFFFFF,a0c030&lang=en"></script></div></div>

</section>

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
<section class="latest-reviews">

    <!-- Nav tabs -->
    <div class="card">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#mukhya" aria-controls="mukhya" role="tab"
                                                      data-toggle="tab">मुख्य खबर</a></li>
            <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">लोकप्रिय</a>
            </li>
            <li role="presentation"><a href="#latest_update" aria-controls="latest_update" role="tab"
                                       data-toggle="tab">ताजा अपडेट</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="mukhya">
                <?php
                $args = array(
                    'category_name' => 'main-news',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    ?>


                    <?php
                    while ($query->have_posts()):$query->the_post();
                        $post_id = get_the_ID();
                        ?>
                        <!-- .weghiet -->
                        <div class="weghiet">
                            <div class="col-sm-4 col-md-4 pad">
                               <?php echo get_the_post_thumbnail($post_id,'thumbnail',array('class'=>'img-responsive','alt' =>'get_the_title()'))?>
                            </div>
                            <div class="col-sm-8 col-md-8 pad">
                                <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                                <span class="post-date">Posted On <?php echo get_the_date('M j, y')?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- /.weghiet -->
                <?php endif; ?>

            </div>
            <div role="tabpanel" class="tab-pane" id="popular">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'meta_key' => 'view_count',
                    'orderby' => 'meta_value_num',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                ?>


                <?php
                while ($query->have_posts()):$query->the_post();
                $post_id = get_the_ID();
                ?>
                <div class="weghiet">
                    <div class="col-sm-4 col-md-4 pad">
                       <?php echo get_the_post_thumbnail($post_id,'thumbnail',array('class'=>'img-responsive','alt' => get_the_title()));?>
                    </div>
                    <div class="col-sm-8 col-md-8 pad">
                        <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
                        <span class="post-date">Posted On <?php echo get_the_date('M j, y')?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                    </div>
                </div>

                <?php endwhile;?>
                <?php wp_reset_postdata();?>
                <?php endif;?>



            </div>
            <div role="tabpanel" class="tab-pane" id="latest_update">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    ?>


                    <?php
                    while ($query->have_posts()):$query->the_post();
                        $post_id = get_the_ID();
                        ?>
                        <div class="weghiet">
                            <div class="col-sm-4 col-md-4 pad">
                                <?php echo get_the_post_thumbnail($post_id,'thumbnail',array('class'=>'img-responsive','alt' => get_the_title()));?>
                            </div>
                            <div class="col-sm-8 col-md-8 pad">
                                <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
                                <span class="post-date">Posted On <?php echo get_the_date('M j, y')?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                            </div>
                        </div>

                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                <?php endif;?>



            </div>
        </div>
    </div>


</section>


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

<section class="add">

        <?php
        $args = array(
            'category_name' => 'film',
            'post_status' =>  'publish',
            'posts_per_page' => '5'
        );

        $query = new WP_Query($args);

        ?>

        <?php if($query->have_posts()):?>
            <!-- .title -->
            <div class="title">
                <h2>फिल्म</h2>
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