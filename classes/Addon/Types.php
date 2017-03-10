<?php

class AC_Addon_Types extends AC_Addon {

	public function __construct() {
		$this
			->set_title( __( 'Toolset Types', 'codepress-admin-columns' ) )
			->set_slug( 'ac-addon-types' )
			->set_logo( AC()->get_plugin_url() . 'assets/images/addons/toolset-types.png' )
			->set_icon( AC()->get_plugin_url() . 'assets/images/addons/toolset-types-icon.png' )
			->set_link( ac_get_site_utm_url( 'toolset-types-columns', 'addon', 'types' ) )
			->set_description( $this->get_fields_description( $this->get_title() ) )
			->set_plugin( 'types' );
	}

}