<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_bc658cb9c6f4fd79becbeeaf3ef37b003d987c2d6108bec25f60942532483834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56c3ca50325465621296049c3ba3d35548e1f996757e7f1a18d8c6c467b6a151 = $this->env->getExtension("native_profiler");
        $__internal_56c3ca50325465621296049c3ba3d35548e1f996757e7f1a18d8c6c467b6a151->enter($__internal_56c3ca50325465621296049c3ba3d35548e1f996757e7f1a18d8c6c467b6a151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c3ca50325465621296049c3ba3d35548e1f996757e7f1a18d8c6c467b6a151->leave($__internal_56c3ca50325465621296049c3ba3d35548e1f996757e7f1a18d8c6c467b6a151_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b06f8fa825f22199dfc35c812334418e0d923b5fd77dd07199237a5e301702d = $this->env->getExtension("native_profiler");
        $__internal_1b06f8fa825f22199dfc35c812334418e0d923b5fd77dd07199237a5e301702d->enter($__internal_1b06f8fa825f22199dfc35c812334418e0d923b5fd77dd07199237a5e301702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1b06f8fa825f22199dfc35c812334418e0d923b5fd77dd07199237a5e301702d->leave($__internal_1b06f8fa825f22199dfc35c812334418e0d923b5fd77dd07199237a5e301702d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80784d59e42a9a17a0a1e61cc530e85e63410b280a231f8d11b5b2c17fa21396 = $this->env->getExtension("native_profiler");
        $__internal_80784d59e42a9a17a0a1e61cc530e85e63410b280a231f8d11b5b2c17fa21396->enter($__internal_80784d59e42a9a17a0a1e61cc530e85e63410b280a231f8d11b5b2c17fa21396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_80784d59e42a9a17a0a1e61cc530e85e63410b280a231f8d11b5b2c17fa21396->leave($__internal_80784d59e42a9a17a0a1e61cc530e85e63410b280a231f8d11b5b2c17fa21396_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc2525888bf61efb2df5eab5277cb90f1fb23dde8a6cbad3649eff17ab02e0f0 = $this->env->getExtension("native_profiler");
        $__internal_dc2525888bf61efb2df5eab5277cb90f1fb23dde8a6cbad3649eff17ab02e0f0->enter($__internal_dc2525888bf61efb2df5eab5277cb90f1fb23dde8a6cbad3649eff17ab02e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_dc2525888bf61efb2df5eab5277cb90f1fb23dde8a6cbad3649eff17ab02e0f0->leave($__internal_dc2525888bf61efb2df5eab5277cb90f1fb23dde8a6cbad3649eff17ab02e0f0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6bc0059f6308daba25f6ee2167b4b07a551d01d0c021a858f22e7539451b250a = $this->env->getExtension("native_profiler");
        $__internal_6bc0059f6308daba25f6ee2167b4b07a551d01d0c021a858f22e7539451b250a->enter($__internal_6bc0059f6308daba25f6ee2167b4b07a551d01d0c021a858f22e7539451b250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6bc0059f6308daba25f6ee2167b4b07a551d01d0c021a858f22e7539451b250a->leave($__internal_6bc0059f6308daba25f6ee2167b4b07a551d01d0c021a858f22e7539451b250a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
