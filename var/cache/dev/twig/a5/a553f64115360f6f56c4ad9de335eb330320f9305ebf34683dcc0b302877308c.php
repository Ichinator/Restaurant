<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_360b646b034fededee9c6504130dd506f69ecb6f0dc338ef69d343d7bf370ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_59640e2c7814edc4c719cda669b5c08608e4985e0bcca2c7b200662939fcd52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59640e2c7814edc4c719cda669b5c08608e4985e0bcca2c7b200662939fcd52d->enter($__internal_59640e2c7814edc4c719cda669b5c08608e4985e0bcca2c7b200662939fcd52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9c56d714174328c76ff104d4364e015c7263107a16e035b8215804a19eead1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c56d714174328c76ff104d4364e015c7263107a16e035b8215804a19eead1dd->enter($__internal_9c56d714174328c76ff104d4364e015c7263107a16e035b8215804a19eead1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59640e2c7814edc4c719cda669b5c08608e4985e0bcca2c7b200662939fcd52d->leave($__internal_59640e2c7814edc4c719cda669b5c08608e4985e0bcca2c7b200662939fcd52d_prof);

        
        $__internal_9c56d714174328c76ff104d4364e015c7263107a16e035b8215804a19eead1dd->leave($__internal_9c56d714174328c76ff104d4364e015c7263107a16e035b8215804a19eead1dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3be48e2addf1776489f995902f12445b114349779432e7f68af79fff2d475f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be48e2addf1776489f995902f12445b114349779432e7f68af79fff2d475f83->enter($__internal_3be48e2addf1776489f995902f12445b114349779432e7f68af79fff2d475f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb9a4e9497263257c9fab58fff7f00ff5ce1c50b98f5941e42d96783e5b77b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9a4e9497263257c9fab58fff7f00ff5ce1c50b98f5941e42d96783e5b77b45->enter($__internal_fb9a4e9497263257c9fab58fff7f00ff5ce1c50b98f5941e42d96783e5b77b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fb9a4e9497263257c9fab58fff7f00ff5ce1c50b98f5941e42d96783e5b77b45->leave($__internal_fb9a4e9497263257c9fab58fff7f00ff5ce1c50b98f5941e42d96783e5b77b45_prof);

        
        $__internal_3be48e2addf1776489f995902f12445b114349779432e7f68af79fff2d475f83->leave($__internal_3be48e2addf1776489f995902f12445b114349779432e7f68af79fff2d475f83_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fc09463bb4a35bb5f98a47d4d834f414ab57f7abdedf70125cf416cd2d9759c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc09463bb4a35bb5f98a47d4d834f414ab57f7abdedf70125cf416cd2d9759c->enter($__internal_4fc09463bb4a35bb5f98a47d4d834f414ab57f7abdedf70125cf416cd2d9759c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c02f7e88547ce526be60b32435af33b7b7963ff7d9d6fce275b5a283f4965e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c02f7e88547ce526be60b32435af33b7b7963ff7d9d6fce275b5a283f4965e1->enter($__internal_5c02f7e88547ce526be60b32435af33b7b7963ff7d9d6fce275b5a283f4965e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5c02f7e88547ce526be60b32435af33b7b7963ff7d9d6fce275b5a283f4965e1->leave($__internal_5c02f7e88547ce526be60b32435af33b7b7963ff7d9d6fce275b5a283f4965e1_prof);

        
        $__internal_4fc09463bb4a35bb5f98a47d4d834f414ab57f7abdedf70125cf416cd2d9759c->leave($__internal_4fc09463bb4a35bb5f98a47d4d834f414ab57f7abdedf70125cf416cd2d9759c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c620eebd549e4b7db028e52347d47effd4e24ffce62ec76c883c79d35adb6ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c620eebd549e4b7db028e52347d47effd4e24ffce62ec76c883c79d35adb6ab3->enter($__internal_c620eebd549e4b7db028e52347d47effd4e24ffce62ec76c883c79d35adb6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbcde8e038bad7822138eddd30b3fcb3b1d55a03664df14943431ef9484f67fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcde8e038bad7822138eddd30b3fcb3b1d55a03664df14943431ef9484f67fb->enter($__internal_dbcde8e038bad7822138eddd30b3fcb3b1d55a03664df14943431ef9484f67fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dbcde8e038bad7822138eddd30b3fcb3b1d55a03664df14943431ef9484f67fb->leave($__internal_dbcde8e038bad7822138eddd30b3fcb3b1d55a03664df14943431ef9484f67fb_prof);

        
        $__internal_c620eebd549e4b7db028e52347d47effd4e24ffce62ec76c883c79d35adb6ab3->leave($__internal_c620eebd549e4b7db028e52347d47effd4e24ffce62ec76c883c79d35adb6ab3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
