<?php
/**
 * Created by PhpStorm.
 * User: thorarinnt
 * Date: 09/11/2017
 * Time: 14:11
 */

namespace Tms\AboveFold;


require __DIR__ . '/vendor/autoload.php';


use \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles AS CssToInlineStyles;

class CssInline {

    private $html;

    private $css;

    public function __construct( $html, $css )
    {
        $this->html = $html;
        $this->css = $css;
    }

    public function setHtml(){

    }

    public function setCss(){

    }

    public function convert(){
        // create instance
        $cssToInlineStyles = new CssToInlineStyles();

        return $cssToInlineStyles->convert(
            $this->html,
            $this->css
        );
    }

    function sayHello(){
      // return 'Hello world';
        $html = '<h1 class="test">Hi</h1><';
        $css = 'h1.test{ color:blue; }';

        // create instance
        $cssToInlineStyles = new CssToInlineStyles();

        return $cssToInlineStyles->convert(
            $html,
            $css
        );

    }

}






/*
$html = file_get_contents(__DIR__ . '/examples/sumo/index.htm');
$css = file_get_contents(__DIR__ . '/examples/sumo/style.css');

// output
echo $cssToInlineStyles->convert(
    $html,
    $css
);*/