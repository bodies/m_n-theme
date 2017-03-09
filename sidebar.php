<div id="sidebar" class="clearfix">
	<div id="sb-1">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bucket left") ) : ?>
		<?php endif; ?>
	</div><!-- close:sb-1 -->
	<div id="sb-2">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bucket right") ) : ?>
		<?php endif; ?>
	</div>
</div>