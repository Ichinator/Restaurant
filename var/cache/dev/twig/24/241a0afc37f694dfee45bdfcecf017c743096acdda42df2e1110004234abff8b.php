<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7f3633679b8b245873d073a2894d18130b3d1ef12240db9e4df98ce56e970d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54afd905372b44d8ff85c0aaccd093d36f2be0526845f5a07367cdaacc930c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54afd905372b44d8ff85c0aaccd093d36f2be0526845f5a07367cdaacc930c32->enter($__internal_54afd905372b44d8ff85c0aaccd093d36f2be0526845f5a07367cdaacc930c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9172e7981431d6d04932a80f72d3b655a13070fcf6f957b223cd05587b35814a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9172e7981431d6d04932a80f72d3b655a13070fcf6f957b223cd05587b35814a->enter($__internal_9172e7981431d6d04932a80f72d3b655a13070fcf6f957b223cd05587b35814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54afd905372b44d8ff85c0aaccd093d36f2be0526845f5a07367cdaacc930c32->leave($__internal_54afd905372b44d8ff85c0aaccd093d36f2be0526845f5a07367cdaacc930c32_prof);

        
        $__internal_9172e7981431d6d04932a80f72d3b655a13070fcf6f957b223cd05587b35814a->leave($__internal_9172e7981431d6d04932a80f72d3b655a13070fcf6f957b223cd05587b35814a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2ee643e034e9a972d0e06cd60ce621451a2ba4f2d8d6e6574950dc3323e7c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ee643e034e9a972d0e06cd60ce621451a2ba4f2d8d6e6574950dc3323e7c7e->enter($__internal_f2ee643e034e9a972d0e06cd60ce621451a2ba4f2d8d6e6574950dc3323e7c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ea16b68c0886b50b0238ebf8560bf09ac5800b9c39c5125899c4968cafc8c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea16b68c0886b50b0238ebf8560bf09ac5800b9c39c5125899c4968cafc8c7f->enter($__internal_2ea16b68c0886b50b0238ebf8560bf09ac5800b9c39c5125899c4968cafc8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ea16b68c0886b50b0238ebf8560bf09ac5800b9c39c5125899c4968cafc8c7f->leave($__internal_2ea16b68c0886b50b0238ebf8560bf09ac5800b9c39c5125899c4968cafc8c7f_prof);

        
        $__internal_f2ee643e034e9a972d0e06cd60ce621451a2ba4f2d8d6e6574950dc3323e7c7e->leave($__internal_f2ee643e034e9a972d0e06cd60ce621451a2ba4f2d8d6e6574950dc3323e7c7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af495b9706d040152a98d61ace8c83ef5b84fcb4f5836a9a7ea057f5705f88be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af495b9706d040152a98d61ace8c83ef5b84fcb4f5836a9a7ea057f5705f88be->enter($__internal_af495b9706d040152a98d61ace8c83ef5b84fcb4f5836a9a7ea057f5705f88be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca385d3104075e385488c19cbf38f9268d72768e76022b3e83c9ee4424e6db48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca385d3104075e385488c19cbf38f9268d72768e76022b3e83c9ee4424e6db48->enter($__internal_ca385d3104075e385488c19cbf38f9268d72768e76022b3e83c9ee4424e6db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca385d3104075e385488c19cbf38f9268d72768e76022b3e83c9ee4424e6db48->leave($__internal_ca385d3104075e385488c19cbf38f9268d72768e76022b3e83c9ee4424e6db48_prof);

        
        $__internal_af495b9706d040152a98d61ace8c83ef5b84fcb4f5836a9a7ea057f5705f88be->leave($__internal_af495b9706d040152a98d61ace8c83ef5b84fcb4f5836a9a7ea057f5705f88be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d7afdbe75a4a6111374b9d78914d47619f69c081dd614533fe3e3e27a819eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7afdbe75a4a6111374b9d78914d47619f69c081dd614533fe3e3e27a819eab->enter($__internal_5d7afdbe75a4a6111374b9d78914d47619f69c081dd614533fe3e3e27a819eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a360ef032e8e8748db84640d25f0e9e8fa9f2df91048579ffbbc0d247600f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a360ef032e8e8748db84640d25f0e9e8fa9f2df91048579ffbbc0d247600f77->enter($__internal_4a360ef032e8e8748db84640d25f0e9e8fa9f2df91048579ffbbc0d247600f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a360ef032e8e8748db84640d25f0e9e8fa9f2df91048579ffbbc0d247600f77->leave($__internal_4a360ef032e8e8748db84640d25f0e9e8fa9f2df91048579ffbbc0d247600f77_prof);

        
        $__internal_5d7afdbe75a4a6111374b9d78914d47619f69c081dd614533fe3e3e27a819eab->leave($__internal_5d7afdbe75a4a6111374b9d78914d47619f69c081dd614533fe3e3e27a819eab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
