<?php

class AC_Notice_Simple extends AC_Notice {

	public function __construct( $message, $type = null ) {
		parent::__construct( '<p>' . $message . '</p>', $type );
	}

}