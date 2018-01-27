<?php

/* :default:index.html.twig */
class __TwigTemplate_eb393832a25084efde0a24c75d43536496e428abd3606ea7a9bf8c39eb288100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_af438aaf26fbe8aba8486d365fca2a28fb17b6244c98b2ee58a4d401a791973e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af438aaf26fbe8aba8486d365fca2a28fb17b6244c98b2ee58a4d401a791973e->enter($__internal_af438aaf26fbe8aba8486d365fca2a28fb17b6244c98b2ee58a4d401a791973e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_6d374c396b936c465968f31b42d94c3d8c273eaf42977298ea4afb33d55b71b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d374c396b936c465968f31b42d94c3d8c273eaf42977298ea4afb33d55b71b7->enter($__internal_6d374c396b936c465968f31b42d94c3d8c273eaf42977298ea4afb33d55b71b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af438aaf26fbe8aba8486d365fca2a28fb17b6244c98b2ee58a4d401a791973e->leave($__internal_af438aaf26fbe8aba8486d365fca2a28fb17b6244c98b2ee58a4d401a791973e_prof);

        
        $__internal_6d374c396b936c465968f31b42d94c3d8c273eaf42977298ea4afb33d55b71b7->leave($__internal_6d374c396b936c465968f31b42d94c3d8c273eaf42977298ea4afb33d55b71b7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48b761181276d31cc359e80833780b1f312e15efded6a1043ac38e19af797261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b761181276d31cc359e80833780b1f312e15efded6a1043ac38e19af797261->enter($__internal_48b761181276d31cc359e80833780b1f312e15efded6a1043ac38e19af797261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e70ba52e5a46f9eaddd620a9a227eb0167519d5335a6efbe950e7ad882710af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70ba52e5a46f9eaddd620a9a227eb0167519d5335a6efbe950e7ad882710af8->enter($__internal_e70ba52e5a46f9eaddd620a9a227eb0167519d5335a6efbe950e7ad882710af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e70ba52e5a46f9eaddd620a9a227eb0167519d5335a6efbe950e7ad882710af8->leave($__internal_e70ba52e5a46f9eaddd620a9a227eb0167519d5335a6efbe950e7ad882710af8_prof);

        
        $__internal_48b761181276d31cc359e80833780b1f312e15efded6a1043ac38e19af797261->leave($__internal_48b761181276d31cc359e80833780b1f312e15efded6a1043ac38e19af797261_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4009ad03c2534552456706d509ff7f0f4a6f639733e9ad40ba3f6601c3dcb85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4009ad03c2534552456706d509ff7f0f4a6f639733e9ad40ba3f6601c3dcb85->enter($__internal_e4009ad03c2534552456706d509ff7f0f4a6f639733e9ad40ba3f6601c3dcb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d7c5745874b02b0a84fa0294d9f3d5735eb3e659aa702703bbfea0862754d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7c5745874b02b0a84fa0294d9f3d5735eb3e659aa702703bbfea0862754d36->enter($__internal_8d7c5745874b02b0a84fa0294d9f3d5735eb3e659aa702703bbfea0862754d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_8d7c5745874b02b0a84fa0294d9f3d5735eb3e659aa702703bbfea0862754d36->leave($__internal_8d7c5745874b02b0a84fa0294d9f3d5735eb3e659aa702703bbfea0862754d36_prof);

        
        $__internal_e4009ad03c2534552456706d509ff7f0f4a6f639733e9ad40ba3f6601c3dcb85->leave($__internal_e4009ad03c2534552456706d509ff7f0f4a6f639733e9ad40ba3f6601c3dcb85_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a1bacd5e53a91923b22ca6e0c5a76ee422231c1a54128b88697b61e63f49009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1bacd5e53a91923b22ca6e0c5a76ee422231c1a54128b88697b61e63f49009->enter($__internal_1a1bacd5e53a91923b22ca6e0c5a76ee422231c1a54128b88697b61e63f49009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96f004231c3bf4553ddac8e8b3c102c14709b2ba732334b729b0487359371a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f004231c3bf4553ddac8e8b3c102c14709b2ba732334b729b0487359371a7f->enter($__internal_96f004231c3bf4553ddac8e8b3c102c14709b2ba732334b729b0487359371a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_96f004231c3bf4553ddac8e8b3c102c14709b2ba732334b729b0487359371a7f->leave($__internal_96f004231c3bf4553ddac8e8b3c102c14709b2ba732334b729b0487359371a7f_prof);

        
        $__internal_1a1bacd5e53a91923b22ca6e0c5a76ee422231c1a54128b88697b61e63f49009->leave($__internal_1a1bacd5e53a91923b22ca6e0c5a76ee422231c1a54128b88697b61e63f49009_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
{% endblock %}", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/index.html.twig");
    }
}
