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
        $__internal_9040611ed96f2f2b895898712e1b85c8c330b6390b223c26a984b6bd7a1696d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9040611ed96f2f2b895898712e1b85c8c330b6390b223c26a984b6bd7a1696d6->enter($__internal_9040611ed96f2f2b895898712e1b85c8c330b6390b223c26a984b6bd7a1696d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d8e9f8d1e2fd25174218122f713b0c6956ebce48d6c59d04b43ee7e6ed37f16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e9f8d1e2fd25174218122f713b0c6956ebce48d6c59d04b43ee7e6ed37f16d->enter($__internal_d8e9f8d1e2fd25174218122f713b0c6956ebce48d6c59d04b43ee7e6ed37f16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9040611ed96f2f2b895898712e1b85c8c330b6390b223c26a984b6bd7a1696d6->leave($__internal_9040611ed96f2f2b895898712e1b85c8c330b6390b223c26a984b6bd7a1696d6_prof);

        
        $__internal_d8e9f8d1e2fd25174218122f713b0c6956ebce48d6c59d04b43ee7e6ed37f16d->leave($__internal_d8e9f8d1e2fd25174218122f713b0c6956ebce48d6c59d04b43ee7e6ed37f16d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e3d7cbb0da2a2f4e57ca61d9d0a39353a721189058aa46fa1d0aab5f1db4dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3d7cbb0da2a2f4e57ca61d9d0a39353a721189058aa46fa1d0aab5f1db4dd6->enter($__internal_6e3d7cbb0da2a2f4e57ca61d9d0a39353a721189058aa46fa1d0aab5f1db4dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d5d7eba67bd5a6ffa5c14d95dfe7c23575ae2165f5fabe33afe4c40f485fe7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5d7eba67bd5a6ffa5c14d95dfe7c23575ae2165f5fabe33afe4c40f485fe7f->enter($__internal_4d5d7eba67bd5a6ffa5c14d95dfe7c23575ae2165f5fabe33afe4c40f485fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4d5d7eba67bd5a6ffa5c14d95dfe7c23575ae2165f5fabe33afe4c40f485fe7f->leave($__internal_4d5d7eba67bd5a6ffa5c14d95dfe7c23575ae2165f5fabe33afe4c40f485fe7f_prof);

        
        $__internal_6e3d7cbb0da2a2f4e57ca61d9d0a39353a721189058aa46fa1d0aab5f1db4dd6->leave($__internal_6e3d7cbb0da2a2f4e57ca61d9d0a39353a721189058aa46fa1d0aab5f1db4dd6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b8fd7bc2662f9c3dbb5416d5a08bc36e63e81a4a1be5d653cc729fae8f7a674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8fd7bc2662f9c3dbb5416d5a08bc36e63e81a4a1be5d653cc729fae8f7a674->enter($__internal_2b8fd7bc2662f9c3dbb5416d5a08bc36e63e81a4a1be5d653cc729fae8f7a674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a4fc6630a92e8b33920a05d9fd81c043a9d25ddc78ab560ec4e5632a39ffd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4fc6630a92e8b33920a05d9fd81c043a9d25ddc78ab560ec4e5632a39ffd1f->enter($__internal_9a4fc6630a92e8b33920a05d9fd81c043a9d25ddc78ab560ec4e5632a39ffd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9a4fc6630a92e8b33920a05d9fd81c043a9d25ddc78ab560ec4e5632a39ffd1f->leave($__internal_9a4fc6630a92e8b33920a05d9fd81c043a9d25ddc78ab560ec4e5632a39ffd1f_prof);

        
        $__internal_2b8fd7bc2662f9c3dbb5416d5a08bc36e63e81a4a1be5d653cc729fae8f7a674->leave($__internal_2b8fd7bc2662f9c3dbb5416d5a08bc36e63e81a4a1be5d653cc729fae8f7a674_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2999213fbf4694094563e46df1863b535f909f777cba25ccdabc38c4ccac5830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2999213fbf4694094563e46df1863b535f909f777cba25ccdabc38c4ccac5830->enter($__internal_2999213fbf4694094563e46df1863b535f909f777cba25ccdabc38c4ccac5830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67beefdaff2ae8f09e7b228769a2cb72e3417350ddd23f91bb071de8cecd812b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67beefdaff2ae8f09e7b228769a2cb72e3417350ddd23f91bb071de8cecd812b->enter($__internal_67beefdaff2ae8f09e7b228769a2cb72e3417350ddd23f91bb071de8cecd812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_67beefdaff2ae8f09e7b228769a2cb72e3417350ddd23f91bb071de8cecd812b->leave($__internal_67beefdaff2ae8f09e7b228769a2cb72e3417350ddd23f91bb071de8cecd812b_prof);

        
        $__internal_2999213fbf4694094563e46df1863b535f909f777cba25ccdabc38c4ccac5830->leave($__internal_2999213fbf4694094563e46df1863b535f909f777cba25ccdabc38c4ccac5830_prof);

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
