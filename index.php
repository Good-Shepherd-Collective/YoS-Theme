<?php get_header(); ?>
<!-- Top Hero Section Starts -->

<div class="nine-block-grid black" style="height: 80vh;">
  <h1 class="one">Top color</h1>
  <h2 class="two">testing</h2>
  <button class="btn btn-light-brown nine" title="Learn More">Learn More</button>

</div>

<!-- Top Hero Section Ends -->


<!-- Two column Info Starts -->

<div class="two-column-grid">
  <section class="two-column-grid-1 light-sand" style="position: relative;">
    <!-- PhP function for pulling in news posts starts -->
    <?php
    /* news posts loop begins here 'cat' stands for category and three is the category number stored in the database. The $eventPosts variable is one we made up to store the value query.  */
    $eventPosts = new WP_Query('cat=3&post_per_page=1');

    if ($eventPosts->have_posts()) :
      while ($eventPosts->have_posts()) : $eventPosts->the_post(); ?>

        <!-- php to get the tag from posts -->

        <?php get_template_part('parts/tags-front'); ?>

        <div class="spacer-40"></div>

        <!-- php to get the tag from posts -->


        <h2><?php the_title(); ?></h2>
        <!--  Get the author image URL -->
        <?php $author_id = get_the_author_meta('ID');
        $output = get_avatar_url($author_id);
        echo '<img src="' . $output . '" class="auth-image-gsc"/>' ?>

        <?php $author_name  =  get_the_author_meta('display_name');

        echo "<p class='author_name'>$author_name</p>" ?>

        <?php $author_email = get_the_author_meta('user_email');

        echo "<p class='author_email'>$author_email</p>" ?>


        <!-- < ?php echo '<img class="thumbnail" src="' . get_the_post_thumbnail_url(get_the_ID(), "full") . '">'; ?> -->



        <!-- This sets the excerpt length -->
        <p><?php echo get_excerpt(140); ?></p>



        <button class="btn btn-red"><a href="<?php the_permalink(); ?>">Learn More</a></button>
    <?php // output content however we please here

      endwhile;

    else :

    // fallback no content message here

    endif;
    wp_reset_postdata(); ?>

    <!-- PhP function for pulling in news posts ends -->

  </section>
  <section class="two-column-grid-2 ">

    <!-- PhP function for pulling in news posts starts -->
    <?php
    /* news posts loop begins here 'cat' stands for category and three is the category number stored in the database. The $eventPosts variable is one we made up to store the value query.  */
    $newsPosts = new WP_Query('cat=2&post_per_page=1');

    if ($eventPosts->have_posts()) :
      while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

        <!-- php to get the tag from posts -->

        <?php get_template_part('parts/tags-front'); ?>

        <div class="spacer-40"></div>

        <!-- php to get the tag from posts -->

        <h2><?php the_title(); ?></h2>
        <!--  Get the author image URL -->
        <?php $author_id = get_the_author_meta('ID');
        $output = get_avatar_url($author_id);
        echo '<img src="' . $output . '" class="auth-image-gsc"/>' ?>

        <?php $author_name  =  get_the_author_meta('display_name');

        echo "<p class='author_name'>$author_name</p>" ?>

        <?php $author_email = get_the_author_meta('user_email');

        echo "<p class='author_email'>$author_email</p>" ?>

        <p><?php echo get_excerpt(140); ?></p>
        <button class="btn btn-light-brown"><a href="<?php the_permalink(); ?>">Learn More</a></button>
    <?php // output content however we please here

      endwhile;

    else :

    // fallback no content message here

    endif;
    wp_reset_postdata(); ?>

    <!-- PhP function for pulling in news posts ends -->
  </section>
</div>

<!-- Two column ends Starts -->

<!-- Red Big Section Starts -->

<section class="red">
  <h1>Section</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, natus quos? Tenetur maiores repudiandae odit et est doloremque quia? Ab, laborum corporis quasi aspernatur in tempora consectetur iusto saepe! Repellendus.</p>
  <button class="btn btn-light-brown" title="Learn More">Learn More</button>
</section>

<!-- Red Big Section Ends -->



<div class="six-block-grid light-sand">
  <div class="six-block-grid-1 red-box">
    <h3>Hi</h3>
    <p>Accusamus, quos magni, hic ratione culpa eum archit</p>
  </div>
  <div class="six-block-grid-2 red-box">
    <h3>Hi</h3>
    <p>Accusamus, quos magni, hic ratione culpa eum archit</p>
  </div>
  <div class="six-block-grid-3 red-box">
    <h3>Hi</h3>
    <p>Accusamus, quos magni, hic ratione culpa eum archit</p>
  </div>
  <div class="six-block-grid-4 red-box">
    <h3>Hi</h3>
    <p>Accusamus, quos magni, hic ratione culpa eum archit</p>
  </div>
  <div class="six-block-grid-5 red-box">
    <h3>Hi</h3>
    <p>Accusamus, quos magni, hic ratione culpa eum archit</p>
  </div>
  <div class="six-block-grid-6 red-box">
    <h3>Hi</h3>
    <p>Lorem ipsum dolor sit amet consectetur </p>
  </div>
</div>
<?php
get_footer();
?>