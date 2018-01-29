<?php

/* :default:oneEntree.html.twig */
class __TwigTemplate_b997189e25bd6f9d31521dada0a31d9921813c3fdcbead78a10d48fd3e9f1d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:oneEntree.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c6b6c5f9e5b8a13df8ec3490cb5fdef70c18e77026c1d9e69b999cd1e32a408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6b6c5f9e5b8a13df8ec3490cb5fdef70c18e77026c1d9e69b999cd1e32a408->enter($__internal_9c6b6c5f9e5b8a13df8ec3490cb5fdef70c18e77026c1d9e69b999cd1e32a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneEntree.html.twig"));

        $__internal_8dbafd458c0eb3ca00454e821789275183a9e8227c16af8937978f69bfa46844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbafd458c0eb3ca00454e821789275183a9e8227c16af8937978f69bfa46844->enter($__internal_8dbafd458c0eb3ca00454e821789275183a9e8227c16af8937978f69bfa46844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneEntree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c6b6c5f9e5b8a13df8ec3490cb5fdef70c18e77026c1d9e69b999cd1e32a408->leave($__internal_9c6b6c5f9e5b8a13df8ec3490cb5fdef70c18e77026c1d9e69b999cd1e32a408_prof);

        
        $__internal_8dbafd458c0eb3ca00454e821789275183a9e8227c16af8937978f69bfa46844->leave($__internal_8dbafd458c0eb3ca00454e821789275183a9e8227c16af8937978f69bfa46844_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c109fceb188082fc4bab34912015e06ce2789f1bfb960bd573f1c103ea28f517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c109fceb188082fc4bab34912015e06ce2789f1bfb960bd573f1c103ea28f517->enter($__internal_c109fceb188082fc4bab34912015e06ce2789f1bfb960bd573f1c103ea28f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f4764dde9eeeb11dcc5325647665ab24c9716950a4485b60b6325ff3f5852ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4764dde9eeeb11dcc5325647665ab24c9716950a4485b60b6325ff3f5852ac->enter($__internal_0f4764dde9eeeb11dcc5325647665ab24c9716950a4485b60b6325ff3f5852ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0f4764dde9eeeb11dcc5325647665ab24c9716950a4485b60b6325ff3f5852ac->leave($__internal_0f4764dde9eeeb11dcc5325647665ab24c9716950a4485b60b6325ff3f5852ac_prof);

        
        $__internal_c109fceb188082fc4bab34912015e06ce2789f1bfb960bd573f1c103ea28f517->leave($__internal_c109fceb188082fc4bab34912015e06ce2789f1bfb960bd573f1c103ea28f517_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2bc68538b7fb5122aea76b6a62407bed814bb733eeb0f49d51e32af63d5bda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bc68538b7fb5122aea76b6a62407bed814bb733eeb0f49d51e32af63d5bda8->enter($__internal_f2bc68538b7fb5122aea76b6a62407bed814bb733eeb0f49d51e32af63d5bda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1c9952f387238c3ef09098759283ec411b3b117a5245e9af04f333572719973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c9952f387238c3ef09098759283ec411b3b117a5245e9af04f333572719973->enter($__internal_f1c9952f387238c3ef09098759283ec411b3b117a5245e9af04f333572719973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEntree"] ?? $this->getContext($context, "oneEntree")), "name", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEntree"] ?? $this->getContext($context, "oneEntree")), "prix", array()), "html", null, true);
        echo "<br \\>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneEntree"] ?? $this->getContext($context, "oneEntree")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEntree"] ?? $this->getContext($context, "oneEntree")), "image", array()), "html", null, true);
        echo "\" /><br \\><br \\>
";
        
        $__internal_f1c9952f387238c3ef09098759283ec411b3b117a5245e9af04f333572719973->leave($__internal_f1c9952f387238c3ef09098759283ec411b3b117a5245e9af04f333572719973_prof);

        
        $__internal_f2bc68538b7fb5122aea76b6a62407bed814bb733eeb0f49d51e32af63d5bda8->leave($__internal_f2bc68538b7fb5122aea76b6a62407bed814bb733eeb0f49d51e32af63d5bda8_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fea1db979bb1184f3f35254ac994eab238d67fc4128e0255be35d6be86e50138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea1db979bb1184f3f35254ac994eab238d67fc4128e0255be35d6be86e50138->enter($__internal_fea1db979bb1184f3f35254ac994eab238d67fc4128e0255be35d6be86e50138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d99944215049eab93d3aa64adf1f33dcfed6a4538132247e2733f1848bb6b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d99944215049eab93d3aa64adf1f33dcfed6a4538132247e2733f1848bb6b3e->enter($__internal_4d99944215049eab93d3aa64adf1f33dcfed6a4538132247e2733f1848bb6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4d99944215049eab93d3aa64adf1f33dcfed6a4538132247e2733f1848bb6b3e->leave($__internal_4d99944215049eab93d3aa64adf1f33dcfed6a4538132247e2733f1848bb6b3e_prof);

        
        $__internal_fea1db979bb1184f3f35254ac994eab238d67fc4128e0255be35d6be86e50138->leave($__internal_fea1db979bb1184f3f35254ac994eab238d67fc4128e0255be35d6be86e50138_prof);

    }

    public function getTemplateName()
    {
        return ":default:oneEntree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  100 => 12,  86 => 9,  82 => 8,  78 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent ()}}
{% endblock %}
{% block body %}
    {{ parent ()}}
    {{ oneEntree.name}}<br \\>
    {{ oneEntree.prix }}<br \\>
    <img src=\"{{ vich_uploader_asset(oneEntree, 'imageFile') }}\" alt=\"{{ oneEntree.image }}\" /><br \\><br \\>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:oneEntree.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/oneEntree.html.twig");
    }
}
