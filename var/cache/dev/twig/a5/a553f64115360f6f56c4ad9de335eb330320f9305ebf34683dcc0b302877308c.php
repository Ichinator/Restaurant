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
        $__internal_3a946fe04f7b9e18c65098ac2dd43c4a5fd778296c2ef7d820f3a31c0f5144bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a946fe04f7b9e18c65098ac2dd43c4a5fd778296c2ef7d820f3a31c0f5144bb->enter($__internal_3a946fe04f7b9e18c65098ac2dd43c4a5fd778296c2ef7d820f3a31c0f5144bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_48ec73d300bed34bb52f0db6fb1cdf9196c3e634ce5b79e88306ac0fc8cfef90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ec73d300bed34bb52f0db6fb1cdf9196c3e634ce5b79e88306ac0fc8cfef90->enter($__internal_48ec73d300bed34bb52f0db6fb1cdf9196c3e634ce5b79e88306ac0fc8cfef90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a946fe04f7b9e18c65098ac2dd43c4a5fd778296c2ef7d820f3a31c0f5144bb->leave($__internal_3a946fe04f7b9e18c65098ac2dd43c4a5fd778296c2ef7d820f3a31c0f5144bb_prof);

        
        $__internal_48ec73d300bed34bb52f0db6fb1cdf9196c3e634ce5b79e88306ac0fc8cfef90->leave($__internal_48ec73d300bed34bb52f0db6fb1cdf9196c3e634ce5b79e88306ac0fc8cfef90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4294195a26c650a325aa800f9c0fd6abed1c1b832230c7bb147b86627020382a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4294195a26c650a325aa800f9c0fd6abed1c1b832230c7bb147b86627020382a->enter($__internal_4294195a26c650a325aa800f9c0fd6abed1c1b832230c7bb147b86627020382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc34cc87f5a5152e10d5c2be8f173ffaae0d1d9922dc23567cb3944c7e9f8b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc34cc87f5a5152e10d5c2be8f173ffaae0d1d9922dc23567cb3944c7e9f8b6d->enter($__internal_cc34cc87f5a5152e10d5c2be8f173ffaae0d1d9922dc23567cb3944c7e9f8b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc34cc87f5a5152e10d5c2be8f173ffaae0d1d9922dc23567cb3944c7e9f8b6d->leave($__internal_cc34cc87f5a5152e10d5c2be8f173ffaae0d1d9922dc23567cb3944c7e9f8b6d_prof);

        
        $__internal_4294195a26c650a325aa800f9c0fd6abed1c1b832230c7bb147b86627020382a->leave($__internal_4294195a26c650a325aa800f9c0fd6abed1c1b832230c7bb147b86627020382a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d12015d82257e0d25fb908900a24ff8bc25e6a12c8eefc537781eeca7a32ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d12015d82257e0d25fb908900a24ff8bc25e6a12c8eefc537781eeca7a32ca1->enter($__internal_1d12015d82257e0d25fb908900a24ff8bc25e6a12c8eefc537781eeca7a32ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6aaafc1b475c7b120f9a74e7ea6b9c2ae52ba8e4971f49c04555b6f352fcd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aaafc1b475c7b120f9a74e7ea6b9c2ae52ba8e4971f49c04555b6f352fcd34->enter($__internal_e6aaafc1b475c7b120f9a74e7ea6b9c2ae52ba8e4971f49c04555b6f352fcd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e6aaafc1b475c7b120f9a74e7ea6b9c2ae52ba8e4971f49c04555b6f352fcd34->leave($__internal_e6aaafc1b475c7b120f9a74e7ea6b9c2ae52ba8e4971f49c04555b6f352fcd34_prof);

        
        $__internal_1d12015d82257e0d25fb908900a24ff8bc25e6a12c8eefc537781eeca7a32ca1->leave($__internal_1d12015d82257e0d25fb908900a24ff8bc25e6a12c8eefc537781eeca7a32ca1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3e2f2709a0d5d5c60cd95a28eaed2798aeebbde906f7f1d89b2b81076b79081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e2f2709a0d5d5c60cd95a28eaed2798aeebbde906f7f1d89b2b81076b79081->enter($__internal_e3e2f2709a0d5d5c60cd95a28eaed2798aeebbde906f7f1d89b2b81076b79081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7df9f62e3bb6f68dea7994b23ff71b7bbfabd36d5c193fc39c01012b7b038181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df9f62e3bb6f68dea7994b23ff71b7bbfabd36d5c193fc39c01012b7b038181->enter($__internal_7df9f62e3bb6f68dea7994b23ff71b7bbfabd36d5c193fc39c01012b7b038181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7df9f62e3bb6f68dea7994b23ff71b7bbfabd36d5c193fc39c01012b7b038181->leave($__internal_7df9f62e3bb6f68dea7994b23ff71b7bbfabd36d5c193fc39c01012b7b038181_prof);

        
        $__internal_e3e2f2709a0d5d5c60cd95a28eaed2798aeebbde906f7f1d89b2b81076b79081->leave($__internal_e3e2f2709a0d5d5c60cd95a28eaed2798aeebbde906f7f1d89b2b81076b79081_prof);

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
