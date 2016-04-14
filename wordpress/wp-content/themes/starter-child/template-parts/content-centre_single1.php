<div class="panel panel-default">
  <div class="panel-heading">
   	<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
  </div>
  <div class="panel-body ">
   	<div class="col-md-12">
      <img src="<?php echo get_post_meta( get_the_ID(), '_centre_secteur_file_list', true ) ?>">
   	  <?php the_content( );?>
      <?php $secteur_centre = get_post_meta(get_the_ID(),'_centre_secteur_secteur_centre', true );?>
      <?php foreach ($secteur_centre as $key => $value) : ?>
         <?php
            $centre = get_post ( $value );
            $lien = get_permalink ( $value );
            $title = $centre->post_title;
          ?>
      <a href="<?php echo $lien; ?>"><?php echo $title; ?></a>
      <?php endforeach;?>
    </div>
   </div>
</div>
