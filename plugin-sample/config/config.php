<?php
if ( !defined( 'ABSPATH' ) )
    exit;

class JMC87_PluginConfig
{
    public function __construct()
    {
        add_action( 'plugins_loaded', array( $this, 'jmc87_load_textdomain' ) );
    }

    public function jmc87_load_textdomain()
    {
        load_plugin_textdomain( PLG_TEXTDOMAIN, false, LANG_DIR );
    }
}