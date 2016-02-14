<?php

/* AppBundle:Home:getNotes.html.twig */
class __TwigTemplate_a61aba79141f9c44086e46f500ec38c2df1c0103ec482779aa9b2269e9cde832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:getNotes.html.twig", 1);
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
        $__internal_bb44f5a74ec9311c9b52008409e27dc5810650ee9918fb350c3289388597c577 = $this->env->getExtension("native_profiler");
        $__internal_bb44f5a74ec9311c9b52008409e27dc5810650ee9918fb350c3289388597c577->enter($__internal_bb44f5a74ec9311c9b52008409e27dc5810650ee9918fb350c3289388597c577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:getNotes.html.twig"));

        // line 30
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb44f5a74ec9311c9b52008409e27dc5810650ee9918fb350c3289388597c577->leave($__internal_bb44f5a74ec9311c9b52008409e27dc5810650ee9918fb350c3289388597c577_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6b90edb14645c11a5919f7b1eb2c48cef8add5ceb1714a642a59bf58864d52c = $this->env->getExtension("native_profiler");
        $__internal_f6b90edb14645c11a5919f7b1eb2c48cef8add5ceb1714a642a59bf58864d52c->enter($__internal_f6b90edb14645c11a5919f7b1eb2c48cef8add5ceb1714a642a59bf58864d52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_f6b90edb14645c11a5919f7b1eb2c48cef8add5ceb1714a642a59bf58864d52c->leave($__internal_f6b90edb14645c11a5919f7b1eb2c48cef8add5ceb1714a642a59bf58864d52c_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ab9448a98156cc482fb8fd7d995640b639de6d76546c755eec78462d1269b1a2 = $this->env->getExtension("native_profiler");
        $__internal_ab9448a98156cc482fb8fd7d995640b639de6d76546c755eec78462d1269b1a2->enter($__internal_ab9448a98156cc482fb8fd7d995640b639de6d76546c755eec78462d1269b1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_ab9448a98156cc482fb8fd7d995640b639de6d76546c755eec78462d1269b1a2->leave($__internal_ab9448a98156cc482fb8fd7d995640b639de6d76546c755eec78462d1269b1a2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b68ba5ccf22bff506eb57e691ce37c4f66b7680f1c7809097ded73c3471dd57 = $this->env->getExtension("native_profiler");
        $__internal_4b68ba5ccf22bff506eb57e691ce37c4f66b7680f1c7809097ded73c3471dd57->enter($__internal_4b68ba5ccf22bff506eb57e691ce37c4f66b7680f1c7809097ded73c3471dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.offset", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) : ("-")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.limit", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "limit", array()), "html", null, true);
        echo "
    </p>

    <ul id=\"note-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "notes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["note"]) {
            // line 16
            echo "        <li>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_note", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["note"], "html", null, true);
            echo "</a>
            [<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.edit.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
            [<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.remove.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.empty", array(), "AppBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
    <p>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("new_note");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
    </p>
";
        
        $__internal_4b68ba5ccf22bff506eb57e691ce37c4f66b7680f1c7809097ded73c3471dd57->leave($__internal_4b68ba5ccf22bff506eb57e691ce37c4f66b7680f1c7809097ded73c3471dd57_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:getNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  128 => 24,  119 => 22,  109 => 19,  103 => 18,  97 => 17,  94 => 16,  89 => 15,  76 => 11,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 30,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.list.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     <p>*/
/*         {{ 'note.offset'|trans({}, 'AppBundle') }}: {{ data.offset ?: '-' }}, {{ 'note.limit'|trans({}, 'AppBundle') }}: {{ data.limit }}*/
/*     </p>*/
/* */
/*     <ul id="note-list">*/
/*         {% for id, note in data.notes %}*/
/*         <li>*/
/*             <a href="{{ path('get_note', {'id': id}) }}">{{ note }}</a>*/
/*             [<a href="{{ path('edit_notes', {'id': id}) }}">{{ 'note.edit.link'|trans({}, 'AppBundle') }}</a>]*/
/*             [<a href="{{ path('remove_notes', {'id': id}) }}">{{ 'note.remove.link'|trans({}, 'AppBundle') }}</a>]*/
/*         </li>*/
/*         {% else %}*/
/*         <li>{{ 'note.list.empty'|trans({}, 'AppBundle') }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <p>*/
/*         <a href="{{ path('new_note') }}">{{ 'note.new.link'|trans({}, 'AppBundle') }}</a>*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
