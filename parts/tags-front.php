<?php
        $tags = wp_get_post_tags($post->ID);
        foreach ($tags as $tag) {
          $tag_link = get_tag_link($tag->term_id);
        ?>
          <a class="tags" href="<?php echo $tag_link; ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a>
        <?php
        }
        ?>