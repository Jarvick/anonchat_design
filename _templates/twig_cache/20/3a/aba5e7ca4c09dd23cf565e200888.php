<?php

/* index.twig */
class __TwigTemplate_203aaba5e7ca4c09dd23cf565e200888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main.twig");

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_head' => array($this, 'block_page_head'),
            'page_navbar' => array($this, 'block_page_navbar'),
            'page_content' => array($this, 'block_page_content'),
            'page_footer' => array($this, 'block_page_footer'),
            'page_last_js' => array($this, 'block_page_last_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo "    Index title
";
    }

    // line 7
    public function block_page_head($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("part_default_head.twig")->display($context);
    }

    // line 11
    public function block_page_navbar($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("part_default_navbar.twig")->display($context);
    }

    // line 15
    public function block_page_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->env->loadTemplate("part_default_content.twig")->display($context);
    }

    // line 19
    public function block_page_footer($context, array $blocks = array())
    {
        // line 20
        echo "<!--футер - пустой-->
";
    }

    // line 23
    public function block_page_last_js($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->env->loadTemplate("part_default_page_last_js.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  66 => 20,  63 => 19,  58 => 16,  55 => 15,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
