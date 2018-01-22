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
        $__internal_a7e87c99f9925d666d8ff42871f3a6b645f2deb53932d27dbdb82b1f65557058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e87c99f9925d666d8ff42871f3a6b645f2deb53932d27dbdb82b1f65557058->enter($__internal_a7e87c99f9925d666d8ff42871f3a6b645f2deb53932d27dbdb82b1f65557058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8c19bfd35db1d7922e328304a0d785a5872aef20df2798148ff66cbb7daf4303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c19bfd35db1d7922e328304a0d785a5872aef20df2798148ff66cbb7daf4303->enter($__internal_8c19bfd35db1d7922e328304a0d785a5872aef20df2798148ff66cbb7daf4303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e87c99f9925d666d8ff42871f3a6b645f2deb53932d27dbdb82b1f65557058->leave($__internal_a7e87c99f9925d666d8ff42871f3a6b645f2deb53932d27dbdb82b1f65557058_prof);

        
        $__internal_8c19bfd35db1d7922e328304a0d785a5872aef20df2798148ff66cbb7daf4303->leave($__internal_8c19bfd35db1d7922e328304a0d785a5872aef20df2798148ff66cbb7daf4303_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25e9f2f4af1e4dd4572e75e0c2d046fb1ec4e24c5aedeb6607b258132ef76707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e9f2f4af1e4dd4572e75e0c2d046fb1ec4e24c5aedeb6607b258132ef76707->enter($__internal_25e9f2f4af1e4dd4572e75e0c2d046fb1ec4e24c5aedeb6607b258132ef76707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5de7e0717573ce224e319b4b57dde89e53fe5342e422822fdfbb70b7f04a90d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de7e0717573ce224e319b4b57dde89e53fe5342e422822fdfbb70b7f04a90d3->enter($__internal_5de7e0717573ce224e319b4b57dde89e53fe5342e422822fdfbb70b7f04a90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5de7e0717573ce224e319b4b57dde89e53fe5342e422822fdfbb70b7f04a90d3->leave($__internal_5de7e0717573ce224e319b4b57dde89e53fe5342e422822fdfbb70b7f04a90d3_prof);

        
        $__internal_25e9f2f4af1e4dd4572e75e0c2d046fb1ec4e24c5aedeb6607b258132ef76707->leave($__internal_25e9f2f4af1e4dd4572e75e0c2d046fb1ec4e24c5aedeb6607b258132ef76707_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3925350feccd8a705e4da825588f6e818fb85b1daa6269be31db5672ec9913a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3925350feccd8a705e4da825588f6e818fb85b1daa6269be31db5672ec9913a6->enter($__internal_3925350feccd8a705e4da825588f6e818fb85b1daa6269be31db5672ec9913a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7830069f940397a80b2bdbbb30c6e9a025b348440fc03fb166a1ffbc85f10bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7830069f940397a80b2bdbbb30c6e9a025b348440fc03fb166a1ffbc85f10bf7->enter($__internal_7830069f940397a80b2bdbbb30c6e9a025b348440fc03fb166a1ffbc85f10bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7830069f940397a80b2bdbbb30c6e9a025b348440fc03fb166a1ffbc85f10bf7->leave($__internal_7830069f940397a80b2bdbbb30c6e9a025b348440fc03fb166a1ffbc85f10bf7_prof);

        
        $__internal_3925350feccd8a705e4da825588f6e818fb85b1daa6269be31db5672ec9913a6->leave($__internal_3925350feccd8a705e4da825588f6e818fb85b1daa6269be31db5672ec9913a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8550860fe89d337d5e8b44a8167e8ec7d42ee6db8984994f5444ac3974c4831d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8550860fe89d337d5e8b44a8167e8ec7d42ee6db8984994f5444ac3974c4831d->enter($__internal_8550860fe89d337d5e8b44a8167e8ec7d42ee6db8984994f5444ac3974c4831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fc50a859e71bb7c746fade6b2ab87dbc302eed6712d86f7d5d196653bd3f6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc50a859e71bb7c746fade6b2ab87dbc302eed6712d86f7d5d196653bd3f6ee->enter($__internal_5fc50a859e71bb7c746fade6b2ab87dbc302eed6712d86f7d5d196653bd3f6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5fc50a859e71bb7c746fade6b2ab87dbc302eed6712d86f7d5d196653bd3f6ee->leave($__internal_5fc50a859e71bb7c746fade6b2ab87dbc302eed6712d86f7d5d196653bd3f6ee_prof);

        
        $__internal_8550860fe89d337d5e8b44a8167e8ec7d42ee6db8984994f5444ac3974c4831d->leave($__internal_8550860fe89d337d5e8b44a8167e8ec7d42ee6db8984994f5444ac3974c4831d_prof);

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
