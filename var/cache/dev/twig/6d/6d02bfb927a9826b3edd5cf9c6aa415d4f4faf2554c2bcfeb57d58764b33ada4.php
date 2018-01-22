<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ba0c2765b5bbecc9bf14d76bb11b23756a6374e0cfdf9935a4e9bb12420254e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c03dafe067ff3536979e3e03c38e88f30583bd3297a5bd4fb42792947b8aca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c03dafe067ff3536979e3e03c38e88f30583bd3297a5bd4fb42792947b8aca4->enter($__internal_4c03dafe067ff3536979e3e03c38e88f30583bd3297a5bd4fb42792947b8aca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_81972b844815405e85ac8e1146c44215c34677ead1a368cfac920ac4b15492db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81972b844815405e85ac8e1146c44215c34677ead1a368cfac920ac4b15492db->enter($__internal_81972b844815405e85ac8e1146c44215c34677ead1a368cfac920ac4b15492db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c03dafe067ff3536979e3e03c38e88f30583bd3297a5bd4fb42792947b8aca4->leave($__internal_4c03dafe067ff3536979e3e03c38e88f30583bd3297a5bd4fb42792947b8aca4_prof);

        
        $__internal_81972b844815405e85ac8e1146c44215c34677ead1a368cfac920ac4b15492db->leave($__internal_81972b844815405e85ac8e1146c44215c34677ead1a368cfac920ac4b15492db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da1cd54e64b5e4b050e2ef7b856e52dd70eec9b9ccad61551ae33e05ead640ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1cd54e64b5e4b050e2ef7b856e52dd70eec9b9ccad61551ae33e05ead640ba->enter($__internal_da1cd54e64b5e4b050e2ef7b856e52dd70eec9b9ccad61551ae33e05ead640ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87669f0a6ce5e7cd5d1bea49cf5b9de3ec1f415ee89adeb74b48035de5b48a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87669f0a6ce5e7cd5d1bea49cf5b9de3ec1f415ee89adeb74b48035de5b48a1f->enter($__internal_87669f0a6ce5e7cd5d1bea49cf5b9de3ec1f415ee89adeb74b48035de5b48a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_87669f0a6ce5e7cd5d1bea49cf5b9de3ec1f415ee89adeb74b48035de5b48a1f->leave($__internal_87669f0a6ce5e7cd5d1bea49cf5b9de3ec1f415ee89adeb74b48035de5b48a1f_prof);

        
        $__internal_da1cd54e64b5e4b050e2ef7b856e52dd70eec9b9ccad61551ae33e05ead640ba->leave($__internal_da1cd54e64b5e4b050e2ef7b856e52dd70eec9b9ccad61551ae33e05ead640ba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_403a28c7d614ba39640701756f286c825419caaeb289e0664b9cb0d5af436fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403a28c7d614ba39640701756f286c825419caaeb289e0664b9cb0d5af436fa2->enter($__internal_403a28c7d614ba39640701756f286c825419caaeb289e0664b9cb0d5af436fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_815a7d74d5b243903ccfc89663061a09c7a7545c2b1c7835b8edce0bb27dea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815a7d74d5b243903ccfc89663061a09c7a7545c2b1c7835b8edce0bb27dea59->enter($__internal_815a7d74d5b243903ccfc89663061a09c7a7545c2b1c7835b8edce0bb27dea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_815a7d74d5b243903ccfc89663061a09c7a7545c2b1c7835b8edce0bb27dea59->leave($__internal_815a7d74d5b243903ccfc89663061a09c7a7545c2b1c7835b8edce0bb27dea59_prof);

        
        $__internal_403a28c7d614ba39640701756f286c825419caaeb289e0664b9cb0d5af436fa2->leave($__internal_403a28c7d614ba39640701756f286c825419caaeb289e0664b9cb0d5af436fa2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
