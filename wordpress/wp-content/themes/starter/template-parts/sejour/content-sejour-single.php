<div class="panel panel-default">
    <div class="panel-heading">
   	 <?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
    </div>
    <div class="panel-body ">
   	   <?php the_content( ); echo "Prix du séjour : " .get_post_meta( get_the_ID(), '_sejour_information_textmoney', true ). "€"?>
   	</div>
</div>
