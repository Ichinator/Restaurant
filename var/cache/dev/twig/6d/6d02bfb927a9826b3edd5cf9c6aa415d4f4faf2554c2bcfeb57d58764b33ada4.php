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
        $__internal_dc58db3e54c7d69db6142e97058b11a5156da05c7b5e17051f73ffffebc2a17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc58db3e54c7d69db6142e97058b11a5156da05c7b5e17051f73ffffebc2a17a->enter($__internal_dc58db3e54c7d69db6142e97058b11a5156da05c7b5e17051f73ffffebc2a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4d2a1f2ee93b2d1a9e1c1dbc2546991dff3709a90cf878f8a449f2286d247374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2a1f2ee93b2d1a9e1c1dbc2546991dff3709a90cf878f8a449f2286d247374->enter($__internal_4d2a1f2ee93b2d1a9e1c1dbc2546991dff3709a90cf878f8a449f2286d247374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc58db3e54c7d69db6142e97058b11a5156da05c7b5e17051f73ffffebc2a17a->leave($__internal_dc58db3e54c7d69db6142e97058b11a5156da05c7b5e17051f73ffffebc2a17a_prof);

        
        $__internal_4d2a1f2ee93b2d1a9e1c1dbc2546991dff3709a90cf878f8a449f2286d247374->leave($__internal_4d2a1f2ee93b2d1a9e1c1dbc2546991dff3709a90cf878f8a449f2286d247374_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06094e9204708865c6557068792651a12dcfcbcbf52b6ea1519451f039ced841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06094e9204708865c6557068792651a12dcfcbcbf52b6ea1519451f039ced841->enter($__internal_06094e9204708865c6557068792651a12dcfcbcbf52b6ea1519451f039ced841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_636409be8fbfc0266db695f77347293c1804f855e1d63949be584f24722e0d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636409be8fbfc0266db695f77347293c1804f855e1d63949be584f24722e0d97->enter($__internal_636409be8fbfc0266db695f77347293c1804f855e1d63949be584f24722e0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_636409be8fbfc0266db695f77347293c1804f855e1d63949be584f24722e0d97->leave($__internal_636409be8fbfc0266db695f77347293c1804f855e1d63949be584f24722e0d97_prof);

        
        $__internal_06094e9204708865c6557068792651a12dcfcbcbf52b6ea1519451f039ced841->leave($__internal_06094e9204708865c6557068792651a12dcfcbcbf52b6ea1519451f039ced841_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a13c45750f91d610e163c78705023a5efe2a5e92c98f4b54d383d3a954e340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a13c45750f91d610e163c78705023a5efe2a5e92c98f4b54d383d3a954e340->enter($__internal_71a13c45750f91d610e163c78705023a5efe2a5e92c98f4b54d383d3a954e340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b008a5470c1ba00d942c1485b159113f93c2a6b14396550ca2c22b6296aa9409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b008a5470c1ba00d942c1485b159113f93c2a6b14396550ca2c22b6296aa9409->enter($__internal_b008a5470c1ba00d942c1485b159113f93c2a6b14396550ca2c22b6296aa9409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b008a5470c1ba00d942c1485b159113f93c2a6b14396550ca2c22b6296aa9409->leave($__internal_b008a5470c1ba00d942c1485b159113f93c2a6b14396550ca2c22b6296aa9409_prof);

        
        $__internal_71a13c45750f91d610e163c78705023a5efe2a5e92c98f4b54d383d3a954e340->leave($__internal_71a13c45750f91d610e163c78705023a5efe2a5e92c98f4b54d383d3a954e340_prof);

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
