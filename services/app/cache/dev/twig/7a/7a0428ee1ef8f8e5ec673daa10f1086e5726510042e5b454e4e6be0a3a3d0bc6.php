<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67235bdff0627fb0e1043c49688704d4277b54210abadd515ddf9114c189620e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1abd55e95c8b5c7a9ce97c84bc128f073d2a25f26f414b1d7f7965a1a6b3fb0d = $this->env->getExtension("native_profiler");
        $__internal_1abd55e95c8b5c7a9ce97c84bc128f073d2a25f26f414b1d7f7965a1a6b3fb0d->enter($__internal_1abd55e95c8b5c7a9ce97c84bc128f073d2a25f26f414b1d7f7965a1a6b3fb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1abd55e95c8b5c7a9ce97c84bc128f073d2a25f26f414b1d7f7965a1a6b3fb0d->leave($__internal_1abd55e95c8b5c7a9ce97c84bc128f073d2a25f26f414b1d7f7965a1a6b3fb0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e793e36972d54123f9e863f6cdbb337ab0df523468be25e398e71f09acf0f3b6 = $this->env->getExtension("native_profiler");
        $__internal_e793e36972d54123f9e863f6cdbb337ab0df523468be25e398e71f09acf0f3b6->enter($__internal_e793e36972d54123f9e863f6cdbb337ab0df523468be25e398e71f09acf0f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e793e36972d54123f9e863f6cdbb337ab0df523468be25e398e71f09acf0f3b6->leave($__internal_e793e36972d54123f9e863f6cdbb337ab0df523468be25e398e71f09acf0f3b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5933182f5ef23358d0cea035925205ba6c395edb3d05607be7bd2129dccf60a = $this->env->getExtension("native_profiler");
        $__internal_e5933182f5ef23358d0cea035925205ba6c395edb3d05607be7bd2129dccf60a->enter($__internal_e5933182f5ef23358d0cea035925205ba6c395edb3d05607be7bd2129dccf60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e5933182f5ef23358d0cea035925205ba6c395edb3d05607be7bd2129dccf60a->leave($__internal_e5933182f5ef23358d0cea035925205ba6c395edb3d05607be7bd2129dccf60a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6254ad6ffa335cf30a7333a3a9eae1059cc1bedc42919e0fe6e14f7aa1d76d72 = $this->env->getExtension("native_profiler");
        $__internal_6254ad6ffa335cf30a7333a3a9eae1059cc1bedc42919e0fe6e14f7aa1d76d72->enter($__internal_6254ad6ffa335cf30a7333a3a9eae1059cc1bedc42919e0fe6e14f7aa1d76d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6254ad6ffa335cf30a7333a3a9eae1059cc1bedc42919e0fe6e14f7aa1d76d72->leave($__internal_6254ad6ffa335cf30a7333a3a9eae1059cc1bedc42919e0fe6e14f7aa1d76d72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
