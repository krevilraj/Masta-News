<?php get_header(); ?>


<header>
    <div class="container">
        <div class="col-sm-2 col-md-2">
            <!-- .breaking-btn -->
            <div class="breaking-btn">
                Breaking News
            </div>
            <!-- /.breaking-btn -->
        </div>
        <div class="col-sm-10 col-md-10">
            <?php
            $args = array(
                'category_name' => 'Breaking news',
                'posts_per_page' => 4,
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);
            if ($query->have_posts()):

                ?>

                <!-- .breaking-carousel -->
                <div class="owl-carousel owl-theme breaking-carousel">

                    <?php while ($query->have_posts()):$query->the_post(); ?>

                        <div><?php the_title(); ?></div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <!-- /.breaking-carousel -->

            <?php endif; ?>
        </div>

    </div>
</header>


<section>
    <div class="container">
        <!-- .left content -->
        <div class="col-sm-8 col-md-8">


            <!-- .title -->
            <div class="title">
                <h2>समाचार</h2>
            </div>
            <!-- /.title -->
            <!-- .entertainment-carousel -->
            <div class="owl-carousel owl-theme carousel">
                <?php
                $args = array(
                    'category_name' => 'समाचार',
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                );

                $query = new WP_Query($args);
                if ($query->have_posts()):

                    ?>
                    <?php
                    $count = 0;
                    while ($query->have_posts()):
                        $query->the_post();
                        $post_id = get_the_ID();
                        ?>
                        <?php if ($count % 2 == 0) echo '<div>'; ?>

                        <!-- .entertainment-post-text -->
                        <div class="entertainment-post-text col-md-12">
                            <div class="col-md-12 pad ">
                                <?php // echo get_the_post_thumbnail($post_id, 'medium', array('alt' => get_the_title(), 'class' => 'img-responsive')) ?>
                                <?php $attachment = get_the_post_thumbnail_url($post_id,'medium')?>
                                <img src="<?php echo $attachment;?>" alt="<?php the_title()?>" height="auto">
                            </div>
                            <div class="col-md-12 pad">
                                <!-- .blog-text -->
                                <div class="blog-text">

                                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <span class="post-date">Posted On <?php echo get_the_date('M j,  Y'); ?></span>
                                    <span class="post-comment"><i class="fa fa-eye"
                                                                  aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                                    <?php $link = '<a class="post-list-link" href="' . get_the_permalink() . '">Read more</a>'; ?>
                                    <p><?php echo wp_trim_words(get_the_content(), 25, "..." . $link) ?></p>
                                </div>
                                <!-- /.blog-text -->
                            </div>
                        </div>
                        <!-- /.entertainment-post-text -->
                        <?php
                        $count++;
                        if ($count % 2 == 0) echo '</div>'; ?>


                        <!-- /.entertainment-post-text -->

                        <?php

                    endwhile;
                    ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>


            <!-- .title -->
            <div class="title">
                <h2>राजनीति</h2>

            </div>

            <?php
            $args = array(
                'category_name' => 'rajniti',
                'posts_per_page' => 7,

            );

            $query = new WP_Query($args);
            if ($query->have_posts()):
                ?>
                <?php
                $count = 0;
                $class = "first";
                while ($query->have_posts()):
                    $query->the_post();
                    $post_id = get_the_ID();
                    ?>
                    <?php if ($class == "first"){ ?>
                    <!-- /.title -->
                    <div class="col-sm-6 col-md-6 pad">
                        <div class="blog - content">
                            <!-- .blog-content -->
                            <?php echo get_the_post_thumbnail($post_id,'medium',array(alt=>get_the_title(),'class'=>'img-responsive'))?>


                            <div class="blog-text">
                                <div class="subject">TRAVEL</div>
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <span class="post-date">Posted On <?php echo get_the_date('M j,  Y'); ?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>

                                <p><?php echo wp_trim_words(get_the_content(),50,"...".$link)?></p>
                            </div>
                            <!-- /.blog-content -->
                        </div>
                    </div>
                        <?php $class="other";}else{?>
                    <?php if($class=="other") echo '<div class="col-sm-6 col-md-6">'?>
                        <!-- .weghiet -->
                        <div class="weghiet">
                            <div class="col-sm-4 col-md-4 pad">
                                <?php echo get_the_post_thumbnail($post_id,'thumbnail',array(alt=>get_the_title(),'class'=>'img-responsive'))?>

                            </div>
                            <div class="col-sm-8 col-md-8 pad">
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <span class="post-date">Posted On <?php echo get_the_date('M j,  Y'); ?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                            </div>
                        </div>
                        <!-- /.weghiet -->


                    <?php $class="finish"; }?>
                <?php endwhile;?>
                <?php echo '</div>';?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <section class="life-style-post">
                <!-- .title -->
                <div class="title">
                    <h2>बिस्व</h2>
                </div>
                <!-- /.title -->
                <?php
                $args = array(
                    'category_name' => 'world-news',
                    'posts_per_page' => 7,

                );

                $query = new WP_Query($args);
                if($query->have_posts()):

                ?>

                <!-- .life-style-carousel -->
                <div class="owl-carousel owl-theme carousel">
                    <div>
                        <?php while($query->have_posts()):$query->the_post();
                            $post_id = get_the_ID();
                            ?>
                        <!-- .life-style-post-text -->
                        <div class="life-style-post-text">
                            <div class="col-sm-4 col-md-4 pad">
                                <?php echo get_the_post_thumbnail($post_id,'medium',array('class'=>'img-responsive','alt'=>get_the_title()))?>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <!-- .blog-text -->
                                <div class="blog-text">
                                    <h3><a href="<?php the_permalink()?>"><?php the_title()?></a>
                                    </h3>
                                    <span class="post-date">Posted On <?php echo get_the_date('M j,  Y'); ?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                                    <?php $link = '<a class="post-list-link" href="'.get_the_permalink().'">Read more</a>';?>
                                    <p><?php echo wp_trim_words(get_the_content(),25,"...".$link)?></p>
                                </div>
                                <!-- /.blog-text -->
                            </div>
                        </div>
                        <!-- /.life-style-post-text -->
                      <?php endwhile;?>
                        <?php wp_reset_postdata();?>
                    </div>

                </div>
                <!-- /.life-style-carousel -->

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
                                'terms' => array('bishwa-ad1'))
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
                <div class="col-md-4 border">
                    <h6><img src="<?php echo $ad_image[0];?>"
                             alt="<?php echo $post_title;?>"/></h6>
                </div>

                <?php $myposts = get_posts(array(
                        'showposts' => -1,
                        'post_type' => 'advertisement',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'advertise',
                                'field' => 'slug',
                                'terms' => array('bishwa-ad2'))
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
                <!-- /.add --> <!-- .add -->
                <div class="col-md-4 border">
                    <h6><img src="<?php echo $ad_image[0];?>"
                             alt="<?php echo $post_title;?>"/></h6>
                </div>

                <?php $myposts = get_posts(array(
                        'showposts' => -1,
                        'post_type' => 'advertisement',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'advertise',
                                'field' => 'slug',
                                'terms' => array('bishwa-ad3'))
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
                <!-- /.add --> <!-- .add -->
                <div class="col-md-4 border">
                    <h6><img src="<?php echo $ad_image[0];?>"
                             alt="<?php echo $post_title;?>"/></h6>
                </div>
                <!-- /.add -->
            </section>



            <section class="life-style-post">
                <!-- .title -->
                <div class="title">
                    <h2>राष्ट्रिय</h2>
                </div>
                <!-- /.title -->
                <?php
                    $args = array(
                                'category_name' => 'rajniti',
                                'post_status' =>  'publish',
                                'posts_per_page' => '4'
                    );

                $query = new WP_Query($args);

                ?>

                <?php if($query->have_posts()):?>
                <!-- .entertainment-carousel -->
                <div class="owl-carousel owl-theme carousel"><?php $count=0;?>
                    <?php while($query->have_posts()):$query->the_post();
                        $post_id = get_the_ID();
                        ?>
                   <?php if($count%2==0) echo '<div>';?>
                        <!-- .entertainment-post-text -->
                        <div class="entertainment-post-text">
                            <div class="col-md-12 pad">
                                <?php echo get_the_post_thumbnail($post_id,'medium',array('class'=>'img-responsive','alt'=>get_the_title()))?>
                            </div>
                            <div class="col-md-12 pad">
                                <!-- .blog-text -->
                                <div class="blog-text">
                                    <div class="subject">राष्ट्रिय</div>
                                    <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                                    <span class="post-date">Posted On <?php echo get_the_date('F j, y')?></span>
                                <span class="post-comment"><i class="fa fa-eye"
                                                              aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                                    <?php $link = '<a class="post-list-link" href="'.get_the_permalink().'">Read more</a>';?>
                                    <p><?php echo wp_trim_words(get_the_content(),50,"...".$link)?></p>
                                </div>
                                <!-- /.blog-text -->
                            </div>
                        </div>
                        <!-- /.entertainment-post-text -->
                <?php $count++;?>
                    <?php if($count%2==0)echo '</div>';?>

                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                </div>
                <!-- /.life-style-carousel -->
                <?php endif;?>

                <?php
                $args = array(
                    'category_name' => 'rajniti',
                    'post_status' =>  'publish',
                    'posts_per_page' => 6,
                    'offset'        =>4,
                );

                $query = new WP_Query($args);
                ?>
                <?php if($query->have_posts()):?>
                <?php $count=0; $class="pad";?>
                <?php while($query->have_posts()):$query->the_post();?>
                <?php $post_id = get_the_ID();?>
                <?php if($count%3 ==0)echo '<div class="col-sm-6 col-md-6 '.$class.'"';?>

                    <!-- .weghiet -->
                    <div class="weghiet">
                        <div class="col-sm-4 col-md-4 pad">
                            <?php echo get_the_post_thumbnail($post_id,'thumbnail',array('class'=>'img-responsive','alt'=>get_the_title()))?>

                        </div>
                        <div class="col-sm-8 col-md-8 pad">
                            <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
                            <span class="post-date">Posted On <?php echo get_the_date('F j, y')?></span>
                            <span class="post-comment"><i class="fa fa-eye"
                                                          aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
                        </div>
                    </div>
                    <!-- /.weghiet -->
                <?php $count++;?>
                <?php if($count%3 ==0)echo '</div>'?>

                <?php endwhile;?>
                <?php wp_reset_postdata();?>
                <?php endif;?>
            </section>
        </div>
        <!-- /.left content -->
        <!-- .right content -->
        <div class="col-sm-4 col-md-4">
            <?php get_sidebar();?>
        </div>
        <!-- /.right content -->
    </div>
</section>
<section>

    <?php $myposts = get_posts(array(
            'showposts' => -1,
            'post_type' => 'advertisement',
            'tax_query' => array(
                array(
                    'taxonomy' => 'advertise',
                    'field' => 'slug',
                    'terms' => array('after-rastria'))
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




    <!-- .vedio -->
    <div class="container">
        <div class="col-md-12 text-center ad">
            <img src="<?php echo $ad_image[0];?>"
                 alt="<?php echo $post_title;?>"/>
        </div>
    </div>
    <!-- /.vedio -->
</section>
<section>
    <div class="container">
        <!-- .title -->
        <div class="col-sm-4 col-md-4">
            <?php
            $args = array(
                'category_name' => 'technology',
                'post_status' =>  'publish',
                'posts_per_page' => '5'
            );

            $query = new WP_Query($args);

            ?>

            <?php if($query->have_posts()):?>
            <!-- .title -->
            <div class="title">
                <h2>प्रविधि</h2>
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
        </div>
        <div class="col-sm-4 col-md-4">
            <?php
            $args = array(
                'category_name' => 'entertainment',
                'post_status' =>  'publish',
                'posts_per_page' => '5'
            );

            $query = new WP_Query($args);

            ?>

            <?php if($query->have_posts()):?>
                <!-- .title -->
                <div class="title">
                    <h2>मनोरञ्जन</h2>
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
        </div>
        <div class="col-sm-4 col-md-4">
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
        </div>

    </div>
</section>


<?php get_footer(); ?>

