<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="ac-notice notice <?php echo esc_attr( $this->type . ' ' . $this->id ); ?>">
	<div class="ac-notice__body">
		<?php echo wp_kses_post( $this->message ); ?>
	</div>
</div>