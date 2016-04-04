<?php
global $redux_starter;
$slides = $redux_starter ['opt-slides'];
$slidewidth = $redux_starter ['opt-slider-size-width'];
$slidemin = $redux_starter ['opt-slider-min-slides'];
$slidemax = $redux_starter ['opt-slider-max-slides'];
$slidemargin = $redux_starter ['opt-slider-margin-slides'];
$slidepager = $redux_starter ['opt-slider-pager-slides'];
$slidecaptions = $redux_starter ['opt-slider-captions-slides'];
$slidemoveslides = $redux_starter ['opt-slider-move-slides'];
?>
<ul class="bxslider" data-bx-slidewidth="<?php echo $slidewidth; ?>"
	data-bx-minslides="<?php echo $slidemin; ?>"
	data-bx-maxslides="<?php echo $slidemax; ?>"
	data-bx-slidemargin="<?php echo $slidemargin; ?>"
	data-bx-pager="<?php echo $slidepager; ?>"
	data-bx-captions="<?php echo $slidecaptions; ?>"
	data-moveslides="<?php echo $slidemoveslides; ?>">
<?php foreach ($slides as $slide) : ?>
	<li><img src="<?php echo $slide['image'];?>" alt=""
		title="<?php echo $slide['title']; ?>" /></li>
<?php endforeach;?>
</ul>
