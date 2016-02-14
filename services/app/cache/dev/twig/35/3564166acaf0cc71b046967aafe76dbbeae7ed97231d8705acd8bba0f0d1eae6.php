<?php

/* AppBundle:Note:newNote.html.twig */
class __TwigTemplate_d070dc9c7f0602121bf39e6e7941b4e3a2a573ba5813ee2403309395134a88a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:newNote.html.twig", 1);
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
        $__internal_f25bea210ec4d82264d1b7bf4075491684be7ecddecdfbdc7e0c9d8d56b1b153 = $this->env->getExtension("native_profiler");
        $__internal_f25bea210ec4d82264d1b7bf4075491684be7ecddecdfbdc7e0c9d8d56b1b153->enter($__internal_f25bea210ec4d82264d1b7bf4075491684be7ecddecdfbdc7e0c9d8d56b1b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:newNote.html.twig"));

        // line 21
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25bea210ec4d82264d1b7bf4075491684be7ecddecdfbdc7e0c9d8d56b1b153->leave($__internal_f25bea210ec4d82264d1b7bf4075491684be7ecddecdfbdc7e0c9d8d56b1b153_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e617e0c1ac900d5736a1a1656d69146eedd34bc8a850e60eb77df2175882fc89 = $this->env->getExtension("native_profiler");
        $__internal_e617e0c1ac900d5736a1a1656d69146eedd34bc8a850e60eb77df2175882fc89->enter($__internal_e617e0c1ac900d5736a1a1656d69146eedd34bc8a850e60eb77df2175882fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_e617e0c1ac900d5736a1a1656d69146eedd34bc8a850e60eb77df2175882fc89->leave($__internal_e617e0c1ac900d5736a1a1656d69146eedd34bc8a850e60eb77df2175882fc89_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_bf1d4f32df695fb4ede25270b14a93ce98d1986d1b6b08c4b9b5bb3fbdad6d16 = $this->env->getExtension("native_profiler");
        $__internal_bf1d4f32df695fb4ede25270b14a93ce98d1986d1b6b08c4b9b5bb3fbdad6d16->enter($__internal_bf1d4f32df695fb4ede25270b14a93ce98d1986d1b6b08c4b9b5bb3fbdad6d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_bf1d4f32df695fb4ede25270b14a93ce98d1986d1b6b08c4b9b5bb3fbdad6d16->leave($__internal_bf1d4f32df695fb4ede25270b14a93ce98d1986d1b6b08c4b9b5bb3fbdad6d16_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0a4d16d8d22694660eac88f91f76b274174e1181bc5228103b3d7000302947c = $this->env->getExtension("native_profiler");
        $__internal_e0a4d16d8d22694660eac88f91f76b274174e1181bc5228103b3d7000302947c->enter($__internal_e0a4d16d8d22694660eac88f91f76b274174e1181bc5228103b3d7000302947c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e0a4d16d8d22694660eac88f91f76b274174e1181bc5228103b3d7000302947c->leave($__internal_e0a4d16d8d22694660eac88f91f76b274174e1181bc5228103b3d7000302947c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:newNote.html.twig";
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
