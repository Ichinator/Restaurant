<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde38e4fb9fe7eabbfea1e107aff0cfecba5b1a1adbb4f8eaccd937c99e9be1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ec82fa88d3041528c22b06ded31884177bbaa9e1b998f5f3bc92271b97d451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ec82fa88d3041528c22b06ded31884177bbaa9e1b998f5f3bc92271b97d451->enter($__internal_c6ec82fa88d3041528c22b06ded31884177bbaa9e1b998f5f3bc92271b97d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4ea55b4a46edb0a2e00f3630e8928a9810b6ba9e503c26d397c096481874f3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea55b4a46edb0a2e00f3630e8928a9810b6ba9e503c26d397c096481874f3a2->enter($__internal_4ea55b4a46edb0a2e00f3630e8928a9810b6ba9e503c26d397c096481874f3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ec82fa88d3041528c22b06ded31884177bbaa9e1b998f5f3bc92271b97d451->leave($__internal_c6ec82fa88d3041528c22b06ded31884177bbaa9e1b998f5f3bc92271b97d451_prof);

        
        $__internal_4ea55b4a46edb0a2e00f3630e8928a9810b6ba9e503c26d397c096481874f3a2->leave($__internal_4ea55b4a46edb0a2e00f3630e8928a9810b6ba9e503c26d397c096481874f3a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a715bbec819a393a482f3dd96d62741ac74d5d313ab26a97687f5a290ca0751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a715bbec819a393a482f3dd96d62741ac74d5d313ab26a97687f5a290ca0751->enter($__internal_0a715bbec819a393a482f3dd96d62741ac74d5d313ab26a97687f5a290ca0751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b10dba2cc93f637205ac24ac1f7d80da7c30e0242bcd0cdaa701b0f1e6e1f468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10dba2cc93f637205ac24ac1f7d80da7c30e0242bcd0cdaa701b0f1e6e1f468->enter($__internal_b10dba2cc93f637205ac24ac1f7d80da7c30e0242bcd0cdaa701b0f1e6e1f468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b10dba2cc93f637205ac24ac1f7d80da7c30e0242bcd0cdaa701b0f1e6e1f468->leave($__internal_b10dba2cc93f637205ac24ac1f7d80da7c30e0242bcd0cdaa701b0f1e6e1f468_prof);

        
        $__internal_0a715bbec819a393a482f3dd96d62741ac74d5d313ab26a97687f5a290ca0751->leave($__internal_0a715bbec819a393a482f3dd96d62741ac74d5d313ab26a97687f5a290ca0751_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
