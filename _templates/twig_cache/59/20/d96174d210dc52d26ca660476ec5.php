<?php

/* part_default_content.twig */
class __TwigTemplate_5920d96174d210dc52d26ca660476ec5 extends Twig_Template
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
        echo "<div class=\"container\" id=\"content\">
    <div class=\"row\" id=\"main_chat_frame\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" id=\"main_chat_heading\">
                    <h4>Чат с незнакомцем</h4>
                </div>
                <div class=\"panel-body\" id=\"main_chat_messages\">
                    <div class=\"mymessage\">
                        <div class=\"avatar\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body \">
                                Привет!<br>
                                тут новая строчка<br><br>
                                тут новая строчка<br>

                            </div>
                        </div>
                        <i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>
                    </div>


                    <div class=\"anonmessage\">
                        <div class=\"avatar\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                Привет
                            </div>
                        </div>
                        <i class=\"fa fa-check text-muted\" aria-hidden=\"true\"></i>
                    </div>

                </div>
                <div class=\"panel-footer\" id=\"main_chat_message_controls\">
                        <textarea class=\"form-control\" id=\"main_message_ta\"></textarea>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"main_message_btn_send\"><i class=\"fa fa-envelope-o fa-lg\" aria-hidden=\"true\"></i> Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "part_default_content.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
