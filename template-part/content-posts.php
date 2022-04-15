<?php
<section class="fp-images"> 
if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>
        <section <?php post_class('content-box'); ?>>
        
    </header>
      <h2 class="title-class"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <div class='post-image'>
      <?php the_post_thumbnail('homepage-thumb');?>
      </div>
      
      <p class="author-date">written by:&nbsp;<?php the_author();?>&nbsp;––&nbsp;<?php the_date(); ?></p>
      <?php the_content(); 
         if ( is_single()) { 
           echo "I'm SINGLE!";  
           the_tags();          
          }?>
         
      <hr class="break"></hr> 
      
    </section>
    <?php
    }
       } else { echo "no posts found!";
    }
    
    ?>
    <div id="posts-page"><?php posts_nav_link(' | ','prev page','next page>'); ?> </div>
    <div id="bottom-page-spacer"/>
    </section>
    </main>