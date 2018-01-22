<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c8be5e464561c72f74f4c0761d0cfa6086f3888e680eeba2228aefe1308d1347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0bde0e2261c53e3740f78032e24b8e6a344002392a02b9e6b4b7db519ce2dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bde0e2261c53e3740f78032e24b8e6a344002392a02b9e6b4b7db519ce2dcd->enter($__internal_b0bde0e2261c53e3740f78032e24b8e6a344002392a02b9e6b4b7db519ce2dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_690045d9165fccc38d864475d59272004b3a4e648617b85c1523fd0fb5669356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690045d9165fccc38d864475d59272004b3a4e648617b85c1523fd0fb5669356->enter($__internal_690045d9165fccc38d864475d59272004b3a4e648617b85c1523fd0fb5669356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0bde0e2261c53e3740f78032e24b8e6a344002392a02b9e6b4b7db519ce2dcd->leave($__internal_b0bde0e2261c53e3740f78032e24b8e6a344002392a02b9e6b4b7db519ce2dcd_prof);

        
        $__internal_690045d9165fccc38d864475d59272004b3a4e648617b85c1523fd0fb5669356->leave($__internal_690045d9165fccc38d864475d59272004b3a4e648617b85c1523fd0fb5669356_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c81e36af57404381780de83e79be629178e4288c64d6576cc5bbc7ca2ec5a3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81e36af57404381780de83e79be629178e4288c64d6576cc5bbc7ca2ec5a3f9->enter($__internal_c81e36af57404381780de83e79be629178e4288c64d6576cc5bbc7ca2ec5a3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64605c2b015fa16ce01c706b9916b0561e74432ed058d6c3fb64047dc2294d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64605c2b015fa16ce01c706b9916b0561e74432ed058d6c3fb64047dc2294d3f->enter($__internal_64605c2b015fa16ce01c706b9916b0561e74432ed058d6c3fb64047dc2294d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64605c2b015fa16ce01c706b9916b0561e74432ed058d6c3fb64047dc2294d3f->leave($__internal_64605c2b015fa16ce01c706b9916b0561e74432ed058d6c3fb64047dc2294d3f_prof);

        
        $__internal_c81e36af57404381780de83e79be629178e4288c64d6576cc5bbc7ca2ec5a3f9->leave($__internal_c81e36af57404381780de83e79be629178e4288c64d6576cc5bbc7ca2ec5a3f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8147f5efa101b5d166de2408fdce3c9b87b9188ab72dba9664e35c051f2d4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8147f5efa101b5d166de2408fdce3c9b87b9188ab72dba9664e35c051f2d4b6->enter($__internal_c8147f5efa101b5d166de2408fdce3c9b87b9188ab72dba9664e35c051f2d4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4209090480463d17a30404a00a20de89100f3c99f5c41176b78cf5bd9d565c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4209090480463d17a30404a00a20de89100f3c99f5c41176b78cf5bd9d565c05->enter($__internal_4209090480463d17a30404a00a20de89100f3c99f5c41176b78cf5bd9d565c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4209090480463d17a30404a00a20de89100f3c99f5c41176b78cf5bd9d565c05->leave($__internal_4209090480463d17a30404a00a20de89100f3c99f5c41176b78cf5bd9d565c05_prof);

        
        $__internal_c8147f5efa101b5d166de2408fdce3c9b87b9188ab72dba9664e35c051f2d4b6->leave($__internal_c8147f5efa101b5d166de2408fdce3c9b87b9188ab72dba9664e35c051f2d4b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
