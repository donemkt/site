
<form action="<?php echo esc_url( home_url('/') ); ?>" method="get" id="searchform" class="">
	<input type="text" id="s" name="s" placeholder="<?php echo esc_attr__( 'Search', 'engage' ); ?>" />
	<button type="submit"><span class="ion-ios-search-strong"></span></button>
</form>