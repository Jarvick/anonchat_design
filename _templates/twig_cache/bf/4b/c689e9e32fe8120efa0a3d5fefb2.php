<?php

/* main.twig */
class __TwigTemplate_bf4bc689e9e32fe8120efa0a3d5fefb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_head' => array($this, 'block_page_head'),
            'page_navbar' => array($this, 'block_page_navbar'),
            'page_content' => array($this, 'block_page_content'),
            'page_footer' => array($this, 'block_page_footer'),
            'page_last_js' => array($this, 'block_page_last_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('page_head', $context, $blocks);
        // line 10
        echo "
</head>
<body>
";
        // line 13
        $this->displayBlock('page_navbar', $context, $blocks);
        // line 14
        $this->displayBlock('page_content', $context, $blocks);
        // line 15
        $this->displayBlock('page_footer', $context, $blocks);
        // line 16
        echo "

";
        // line 18
        $this->displayBlock('page_last_js', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo "ЗАГОЛОВОК";
    }

    // line 9
    public function block_page_head($context, array $blocks = array())
    {
    }

    // line 13
    public function block_page_navbar($context, array $blocks = array())
    {
    }

    // line 14
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 15
    public function block_page_footer($context, array $blocks = array())
    {
    }

    // line 18
    public function block_page_last_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  81 => 15,  76 => 14,  60 => 7,  53 => 18,  49 => 16,  45 => 14,  43 => 13,  38 => 10,  36 => 9,  23 => 1,  74 => 24,  71 => 13,  66 => 9,  63 => 19,  58 => 16,  55 => 19,  50 => 12,  47 => 15,  42 => 8,  39 => 7,  34 => 4,  31 => 7,);
    }
}
