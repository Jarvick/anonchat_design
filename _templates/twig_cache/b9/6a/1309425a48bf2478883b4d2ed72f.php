<?php

/* part_default_page_last_js.twig */
class __TwigTemplate_b96a1309425a48bf2478883b4d2ed72f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- JS start -->
<script src=\"/js/jquery-3.1.1.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/public.js\"></script>
<script src=\"/js/development.js\"></script>
<!-- JS end -->";
    }

    public function getTemplateName()
    {
        return "part_default_page_last_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
