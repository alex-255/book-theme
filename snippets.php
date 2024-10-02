<img <?php 
        echo "srcset=\"";
        echo get_the_post_thumbnail_url( get_the_ID(), "thumbnail" ) . " 150w, ";
        echo get_the_post_thumbnail_url( get_the_ID(), "medium" ) . " 300w, ";
        echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ) . " 768w, ";
        echo get_the_post_thumbnail_url( get_the_ID(), "large" ) . " 1024w, ";
        echo get_the_post_thumbnail_url( get_the_ID(), "1536x1536" ) . " 1536w, ";
        echo get_the_post_thumbnail_url( get_the_ID(), "2048x2048" ) . " 2048w, ";
        echo "\"";
        echo "sizes=\"";
        echo "(max-width:150px) 150px, (max-width:300px) 300px, (max-width:768px) 768px, (max-width:1024px) 1024px, (max-width:1536px) 1536px, 2048px";
        echo "\"";
        ?> src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "full" ); ?>"
    alt="<?php echo get_the_title(); ?>" />