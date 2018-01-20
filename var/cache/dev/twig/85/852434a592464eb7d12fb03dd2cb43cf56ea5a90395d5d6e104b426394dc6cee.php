<?php

/* default/index.html.twig */
class __TwigTemplate_eb393832a25084efde0a24c75d43536496e428abd3606ea7a9bf8c39eb288100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_5ab409747c5b1384c7513c7f3076552eb5b79e1d3e23ac556e8a886fc4336260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab409747c5b1384c7513c7f3076552eb5b79e1d3e23ac556e8a886fc4336260->enter($__internal_5ab409747c5b1384c7513c7f3076552eb5b79e1d3e23ac556e8a886fc4336260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_eaaacc5efe354849f4cd34eb7791572ba4b33f50804363a3db00e37d58958d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaacc5efe354849f4cd34eb7791572ba4b33f50804363a3db00e37d58958d7a->enter($__internal_eaaacc5efe354849f4cd34eb7791572ba4b33f50804363a3db00e37d58958d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab409747c5b1384c7513c7f3076552eb5b79e1d3e23ac556e8a886fc4336260->leave($__internal_5ab409747c5b1384c7513c7f3076552eb5b79e1d3e23ac556e8a886fc4336260_prof);

        
        $__internal_eaaacc5efe354849f4cd34eb7791572ba4b33f50804363a3db00e37d58958d7a->leave($__internal_eaaacc5efe354849f4cd34eb7791572ba4b33f50804363a3db00e37d58958d7a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58bc84db4dc89dc0e495304e36e84ad4eae412a86e1cf0a39d5dc9beb297c339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bc84db4dc89dc0e495304e36e84ad4eae412a86e1cf0a39d5dc9beb297c339->enter($__internal_58bc84db4dc89dc0e495304e36e84ad4eae412a86e1cf0a39d5dc9beb297c339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_66707f5b8c5b86128905f22fbf3adff13a4e94f18939b01a59e169459296e237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66707f5b8c5b86128905f22fbf3adff13a4e94f18939b01a59e169459296e237->enter($__internal_66707f5b8c5b86128905f22fbf3adff13a4e94f18939b01a59e169459296e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_66707f5b8c5b86128905f22fbf3adff13a4e94f18939b01a59e169459296e237->leave($__internal_66707f5b8c5b86128905f22fbf3adff13a4e94f18939b01a59e169459296e237_prof);

        
        $__internal_58bc84db4dc89dc0e495304e36e84ad4eae412a86e1cf0a39d5dc9beb297c339->leave($__internal_58bc84db4dc89dc0e495304e36e84ad4eae412a86e1cf0a39d5dc9beb297c339_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bc7008398335716b208bf83cd1925be8b2fbaff16565751cfd0b1dbd34f4c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc7008398335716b208bf83cd1925be8b2fbaff16565751cfd0b1dbd34f4c10->enter($__internal_5bc7008398335716b208bf83cd1925be8b2fbaff16565751cfd0b1dbd34f4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8b4c588eafbece1b9dd6fd3eeb90f80e702e076f2998d332e8248c13d3e6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8b4c588eafbece1b9dd6fd3eeb90f80e702e076f2998d332e8248c13d3e6e8->enter($__internal_5f8b4c588eafbece1b9dd6fd3eeb90f80e702e076f2998d332e8248c13d3e6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_5f8b4c588eafbece1b9dd6fd3eeb90f80e702e076f2998d332e8248c13d3e6e8->leave($__internal_5f8b4c588eafbece1b9dd6fd3eeb90f80e702e076f2998d332e8248c13d3e6e8_prof);

        
        $__internal_5bc7008398335716b208bf83cd1925be8b2fbaff16565751cfd0b1dbd34f4c10->leave($__internal_5bc7008398335716b208bf83cd1925be8b2fbaff16565751cfd0b1dbd34f4c10_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc9325ae0bb2fd05a1630946e231eb0e14836c9fa83518c90e6a25d50793a8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9325ae0bb2fd05a1630946e231eb0e14836c9fa83518c90e6a25d50793a8d0->enter($__internal_dc9325ae0bb2fd05a1630946e231eb0e14836c9fa83518c90e6a25d50793a8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d19dd6e6ea5f1523612a2577f509113d8ef691de0286f16efe6b72603d3b182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d19dd6e6ea5f1523612a2577f509113d8ef691de0286f16efe6b72603d3b182->enter($__internal_5d19dd6e6ea5f1523612a2577f509113d8ef691de0286f16efe6b72603d3b182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_5d19dd6e6ea5f1523612a2577f509113d8ef691de0286f16efe6b72603d3b182->leave($__internal_5d19dd6e6ea5f1523612a2577f509113d8ef691de0286f16efe6b72603d3b182_prof);

        
        $__internal_dc9325ae0bb2fd05a1630946e231eb0e14836c9fa83518c90e6a25d50793a8d0->leave($__internal_dc9325ae0bb2fd05a1630946e231eb0e14836c9fa83518c90e6a25d50793a8d0_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  86 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/index.html.twig");
    }
}
