<?php //This file ensures each section gets a consistent Section Title
	function blain_section_title( $title ) { 
		if ($title != 'blain') : ?>
			<div class="section-title">
		    	<span><?php echo $title ?></span>
		    </div>
	<?php endif; 
	} ?>