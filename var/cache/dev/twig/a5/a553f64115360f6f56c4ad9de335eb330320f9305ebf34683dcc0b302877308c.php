<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_360b646b034fededee9c6504130dd506f69ecb6f0dc338ef69d343d7bf370ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_90e8d91b9f08da5b88b773bc02a12c29454d5eee310e66caee18b762dbab1594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e8d91b9f08da5b88b773bc02a12c29454d5eee310e66caee18b762dbab1594->enter($__internal_90e8d91b9f08da5b88b773bc02a12c29454d5eee310e66caee18b762dbab1594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7f2dbee3194ec192d8140da1f93aa317fcc116c0146e756bbef5f64cd1bfeae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2dbee3194ec192d8140da1f93aa317fcc116c0146e756bbef5f64cd1bfeae7->enter($__internal_7f2dbee3194ec192d8140da1f93aa317fcc116c0146e756bbef5f64cd1bfeae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e8d91b9f08da5b88b773bc02a12c29454d5eee310e66caee18b762dbab1594->leave($__internal_90e8d91b9f08da5b88b773bc02a12c29454d5eee310e66caee18b762dbab1594_prof);

        
        $__internal_7f2dbee3194ec192d8140da1f93aa317fcc116c0146e756bbef5f64cd1bfeae7->leave($__internal_7f2dbee3194ec192d8140da1f93aa317fcc116c0146e756bbef5f64cd1bfeae7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d3c68e7d124697d237e0eb15cf0562992d3dcb1ee563f93b3273ed0f5831441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3c68e7d124697d237e0eb15cf0562992d3dcb1ee563f93b3273ed0f5831441->enter($__internal_5d3c68e7d124697d237e0eb15cf0562992d3dcb1ee563f93b3273ed0f5831441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0efae37dc543494c12ba31b85b5a273908cd4cf19e0a1904a15ab146725666ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efae37dc543494c12ba31b85b5a273908cd4cf19e0a1904a15ab146725666ed->enter($__internal_0efae37dc543494c12ba31b85b5a273908cd4cf19e0a1904a15ab146725666ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0efae37dc543494c12ba31b85b5a273908cd4cf19e0a1904a15ab146725666ed->leave($__internal_0efae37dc543494c12ba31b85b5a273908cd4cf19e0a1904a15ab146725666ed_prof);

        
        $__internal_5d3c68e7d124697d237e0eb15cf0562992d3dcb1ee563f93b3273ed0f5831441->leave($__internal_5d3c68e7d124697d237e0eb15cf0562992d3dcb1ee563f93b3273ed0f5831441_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e38c1671939091e7da7bd7a4fa47ec4c2d42dc6b5b8e3c775e122e50d9c9f2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38c1671939091e7da7bd7a4fa47ec4c2d42dc6b5b8e3c775e122e50d9c9f2d3->enter($__internal_e38c1671939091e7da7bd7a4fa47ec4c2d42dc6b5b8e3c775e122e50d9c9f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02b30c71f0450b1557d6b2f32e562b31a560172746daec4b4a1da8962de99356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b30c71f0450b1557d6b2f32e562b31a560172746daec4b4a1da8962de99356->enter($__internal_02b30c71f0450b1557d6b2f32e562b31a560172746daec4b4a1da8962de99356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_02b30c71f0450b1557d6b2f32e562b31a560172746daec4b4a1da8962de99356->leave($__internal_02b30c71f0450b1557d6b2f32e562b31a560172746daec4b4a1da8962de99356_prof);

        
        $__internal_e38c1671939091e7da7bd7a4fa47ec4c2d42dc6b5b8e3c775e122e50d9c9f2d3->leave($__internal_e38c1671939091e7da7bd7a4fa47ec4c2d42dc6b5b8e3c775e122e50d9c9f2d3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_311bf108c8587ab3d5353d7e29a9a9c6efb94473984b4897cb8bd945b9c9f2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311bf108c8587ab3d5353d7e29a9a9c6efb94473984b4897cb8bd945b9c9f2a5->enter($__internal_311bf108c8587ab3d5353d7e29a9a9c6efb94473984b4897cb8bd945b9c9f2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5ebc12cc7a3b24a56427e0917f8d06f517673f03e446651439b7afb7d1e7ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ebc12cc7a3b24a56427e0917f8d06f517673f03e446651439b7afb7d1e7ddc->enter($__internal_a5ebc12cc7a3b24a56427e0917f8d06f517673f03e446651439b7afb7d1e7ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a5ebc12cc7a3b24a56427e0917f8d06f517673f03e446651439b7afb7d1e7ddc->leave($__internal_a5ebc12cc7a3b24a56427e0917f8d06f517673f03e446651439b7afb7d1e7ddc_prof);

        
        $__internal_311bf108c8587ab3d5353d7e29a9a9c6efb94473984b4897cb8bd945b9c9f2a5->leave($__internal_311bf108c8587ab3d5353d7e29a9a9c6efb94473984b4897cb8bd945b9c9f2a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
