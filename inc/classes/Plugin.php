<?php 
/**
 * This is the class for this plugin.
 */

namespace Spencerfeng\NamespaceAutoloadWithComposerDemo;

class Plugin
{
    private $shortcodes;

    public function __construct()
    {
        $this->shortcodes = array();
    }

    public function addShortcode($shortcode) 
    {
        array_push($this->shortcodes, $shortcode);
    }

    private function registerShortcodes()
    {
        if (count($this->shortcodes)) {
            foreach ($this->shortcodes as $shortcode) {
                $shortcode->init();
            }
        }
    }

    public function init()
    {
        // Register all shortcodes 
        $this->registerShortcodes();
    }
}