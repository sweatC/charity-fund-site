<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="search_form"><label class="screen-reader-text" for="s"><?php _e('Поиск:', 'charitas'); ?></label>
		<input type="text" value="<?php _e('Поиск...', 'charitas'); ?>" name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
		<!--<input type="submit" id="searchsubmit" value="<?php _e('Поиск', 'charitas'); ?>" />-->
	</div>
</form>