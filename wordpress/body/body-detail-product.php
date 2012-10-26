<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
	
	<div class="content-pr mt5 cover">
		<nav class="content-pr-nav">
         	<?php get_template_part('/inc/top-product-menu'); ?>
	    </nav>
        <section class="detail-pr cover">
            <article class="txt-detail-pr">
               <?php
                    if( have_posts() ) {
                        the_post(); 
                ?>
                <p><?php the_content(); ?></p>
            </article>
            <a href="/wp-cctv/wordpress/مشخصات-محصول/">
                <?php
                    $meta = get_post_custom();
                    if(count($meta['img'])>0){
                        foreach ($meta['img'] as $img_id) {
                            $img_small = wp_get_attachment_image($img_id,'large'); 
                            echo "$img_small";
                        }
                    }
                ?>
            </a>
        </section>
        <div class="info left cover">
           <?php
				$argus=array(
		          'numberposts' =>'4',
		          'orderby '=> 'menu_order',   
		          'order'=> 'ASC',  
		          'post_mime_type' => 'image', 
		          'post_parent' => $post->ID, 
		          'post_status' => null, 
		          'post_type' => 'attachment'
		        ); 
				$images = get_children($argus);
				if($images){
	          		foreach ($images as $img) {
	                	echo "<div class='share-property'>";
	                    	$img_small = wp_get_attachment_image($img->ID,'middle');
						 	echo "$img_small";
						 	echo "<h3 class='txc'>$img->post_title</h3>";
	                    	echo "<p>$img->post_content</p>";
	                	echo "</div>";
					}
        		}else echo 'تصویر وجود ندارد';
  	    	  }
		  ?>
        <div class="bottom-bg"></div>
        </div>		
	</div>			
</section>
