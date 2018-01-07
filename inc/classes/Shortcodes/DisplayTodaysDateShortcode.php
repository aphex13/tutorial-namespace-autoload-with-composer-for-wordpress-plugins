<?php 
/**
 * This is the class responsible for the 'display_todays_date' shortcode.
 */

namespace Spencerfeng\NamespaceAutoloadWithComposerDemo\Shortcodes;

class DisplayTodaysDateShortcode
{
    public function register($atts, $content = null)
    {
        return 'Today is ' . date("d/m/Y");
    }

    public function init()
    {
        add_shortcode('display_todays_date', array($this, 'register'));
    }
}