<?php

/* AppBundle:Home:newNote.html.twig */
class __TwigTemplate_1471632da9c5ef0fa8c1bee2c11474c0dee014c201ca67f49de544face1cad16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:newNote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_405cdff139e88a2022d66e72e2161284445b99ba7e02156a59f70a0c2bcd6fe1 = $this->env->getExtension("native_profiler");
        $__internal_405cdff139e88a2022d66e72e2161284445b99ba7e02156a59f70a0c2bcd6fe1->enter($__internal_405cdff139e88a2022d66e72e2161284445b99ba7e02156a59f70a0c2bcd6fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:newNote.html.twig"));

        // line 21
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_405cdff139e88a2022d66e72e2161284445b99ba7e02156a59f70a0c2bcd6fe1->leave($__internal_405cdff139e88a2022d66e72e2161284445b99ba7e02156a59f70a0c2bcd6fe1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8052aa2df0529fc4f06bf8bcd473577c699bebde1b9c489c2dddb995eeb4b682 = $this->env->getExtension("native_profiler");
        $__internal_8052aa2df0529fc4f06bf8bcd473577c699bebde1b9c489c2dddb995eeb4b682->enter($__internal_8052aa2df0529fc4f06bf8bcd473577c699bebde1b9c489c2dddb995eeb4b682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_8052aa2df0529fc4f06bf8bcd473577c699bebde1b9c489c2dddb995eeb4b682->leave($__internal_8052aa2df0529fc4f06bf8bcd473577c699bebde1b9c489c2dddb995eeb4b682_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f33d4c9ca823935bd3fc9971f665522aa82a50ece409f1453c08c8d4ed345dd9 = $this->env->getExtension("native_profiler");
        $__internal_f33d4c9ca823935bd3fc9971f665522aa82a50ece409f1453c08c8d4ed345dd9->enter($__internal_f33d4c9ca823935bd3fc9971f665522aa82a50ece409f1453c08c8d4ed345dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_f33d4c9ca823935bd3fc9971f665522aa82a50ece409f1453c08c8d4ed345dd9->leave($__internal_f33d4c9ca823935bd3fc9971f665522aa82a50ece409f1453c08c8d4ed345dd9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a34cfb815fa1bcb033a0f00f84b9a8a7209bc3668c835fbea331d17fb30afe20 = $this->env->getExtension("native_profiler");
        $__internal_a34cfb815fa1bcb033a0f00f84b9a8a7209bc3668c835fbea331d17fb30afe20->enter($__internal_a34cfb815fa1bcb033a0f00f84b9a8a7209bc3668c835fbea331d17fb30afe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("post_notes");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

        <input type=\"submit\" value=\"";
            // line 15
            echo $this->env->getExtension('translator')->getTranslator()->trans("note.new.submit", array(), "AppBundle");
            echo "\">
    </form>
    ";
        }
        // line 18
        echo "
";
        
        $__internal_a34cfb815fa1bcb033a0f00f84b9a8a7209bc3668c835fbea331d17fb30afe20->leave($__internal_a34cfb815fa1bcb033a0f00f84b9a8a7209bc3668c835fbea331d17fb30afe20_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:newNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  90 => 15,  85 => 13,  77 => 11,  75 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 21,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.new.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     {%  if (form is defined) %}*/
/*     <form action="{{ url('post_notes') }}" method="POST" {{ form_enctype(form) }}>*/
/* */
/*         {{ form_widget(form) }}*/
/* */
/*         <input type="submit" value="{% trans from 'AppBundle' %}note.new.submit{% endtrans %}">*/
/*     </form>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
