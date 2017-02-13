<?php

/* part_default_navbar.twig */
class __TwigTemplate_8e51ccff94a28cddee9106c74439d9d0 extends Twig_Template
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
        echo "<!-- Fixed navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">anonim.chat</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\"><i class=\"fa fa-user-secret\" aria-hidden=\"true\"></i> Главная</a></li>
                <li><a href=\"#about\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> О проекте</a></li>
                <li><a href=\"#contact\"><i class=\"fa fa-commenting-o\" aria-hidden=\"true\"></i> Обратная связь</a></li>
                <!--<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li class=\"dropdown-header\">Nav header</li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Вход</a></li>
                <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> Регистрация</a></li>
                <!--<li><a href=\"../navbar/\">Default</a></li>
                <li><a href=\"../navbar-static-top/\">Static top</a></li>
                <li class=\"active\"><a href=\"./\">Fixed top <span class=\"sr-only\">(current)</span></a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "part_default_navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  86 => 18,  81 => 15,  76 => 14,  60 => 7,  53 => 18,  49 => 16,  45 => 14,  43 => 13,  38 => 10,  36 => 9,  23 => 1,  74 => 24,  71 => 13,  66 => 9,  63 => 19,  58 => 16,  55 => 19,  50 => 12,  47 => 15,  42 => 8,  39 => 7,  34 => 4,  31 => 7,);
    }
}
