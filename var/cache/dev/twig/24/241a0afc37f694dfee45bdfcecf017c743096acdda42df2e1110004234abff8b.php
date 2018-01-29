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
        $__internal_9c11857698000990b27ab5a704cd139f43263f614e9836d50b4d5b72ca69141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c11857698000990b27ab5a704cd139f43263f614e9836d50b4d5b72ca69141d->enter($__internal_9c11857698000990b27ab5a704cd139f43263f614e9836d50b4d5b72ca69141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ff48d4dac6700ae180713c84685ea8c77b0b34302cebca6ffaff96ff7d4892cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff48d4dac6700ae180713c84685ea8c77b0b34302cebca6ffaff96ff7d4892cb->enter($__internal_ff48d4dac6700ae180713c84685ea8c77b0b34302cebca6ffaff96ff7d4892cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c11857698000990b27ab5a704cd139f43263f614e9836d50b4d5b72ca69141d->leave($__internal_9c11857698000990b27ab5a704cd139f43263f614e9836d50b4d5b72ca69141d_prof);

        
        $__internal_ff48d4dac6700ae180713c84685ea8c77b0b34302cebca6ffaff96ff7d4892cb->leave($__internal_ff48d4dac6700ae180713c84685ea8c77b0b34302cebca6ffaff96ff7d4892cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c48594e8da6ff4b236553b6739d4cb88d7a7b47ead2b6b9f3c971289ada0db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c48594e8da6ff4b236553b6739d4cb88d7a7b47ead2b6b9f3c971289ada0db4->enter($__internal_4c48594e8da6ff4b236553b6739d4cb88d7a7b47ead2b6b9f3c971289ada0db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee41c35b3a0b5a548109b8ad00c76dcb2190da3392e9907bfd40f89f68b4acbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee41c35b3a0b5a548109b8ad00c76dcb2190da3392e9907bfd40f89f68b4acbd->enter($__internal_ee41c35b3a0b5a548109b8ad00c76dcb2190da3392e9907bfd40f89f68b4acbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee41c35b3a0b5a548109b8ad00c76dcb2190da3392e9907bfd40f89f68b4acbd->leave($__internal_ee41c35b3a0b5a548109b8ad00c76dcb2190da3392e9907bfd40f89f68b4acbd_prof);

        
        $__internal_4c48594e8da6ff4b236553b6739d4cb88d7a7b47ead2b6b9f3c971289ada0db4->leave($__internal_4c48594e8da6ff4b236553b6739d4cb88d7a7b47ead2b6b9f3c971289ada0db4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1d4a288a9b5b70da49071cf01a74bb42c3b4f3365503e90be36c3307d05538f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d4a288a9b5b70da49071cf01a74bb42c3b4f3365503e90be36c3307d05538f->enter($__internal_d1d4a288a9b5b70da49071cf01a74bb42c3b4f3365503e90be36c3307d05538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54fe869eaa63a967f135f6314e1c2698c71014aacfe4f8d1aeb7602cf06a1157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fe869eaa63a967f135f6314e1c2698c71014aacfe4f8d1aeb7602cf06a1157->enter($__internal_54fe869eaa63a967f135f6314e1c2698c71014aacfe4f8d1aeb7602cf06a1157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54fe869eaa63a967f135f6314e1c2698c71014aacfe4f8d1aeb7602cf06a1157->leave($__internal_54fe869eaa63a967f135f6314e1c2698c71014aacfe4f8d1aeb7602cf06a1157_prof);

        
        $__internal_d1d4a288a9b5b70da49071cf01a74bb42c3b4f3365503e90be36c3307d05538f->leave($__internal_d1d4a288a9b5b70da49071cf01a74bb42c3b4f3365503e90be36c3307d05538f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b84e0485697fb222d9da663b4d8cd688bc473e88a6b372a1f20eec70925c0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b84e0485697fb222d9da663b4d8cd688bc473e88a6b372a1f20eec70925c0c0->enter($__internal_8b84e0485697fb222d9da663b4d8cd688bc473e88a6b372a1f20eec70925c0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d00508879ecacef2b0690b50205333f5c075d18bf07b2daf8f286d6fd09c2c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00508879ecacef2b0690b50205333f5c075d18bf07b2daf8f286d6fd09c2c5f->enter($__internal_d00508879ecacef2b0690b50205333f5c075d18bf07b2daf8f286d6fd09c2c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d00508879ecacef2b0690b50205333f5c075d18bf07b2daf8f286d6fd09c2c5f->leave($__internal_d00508879ecacef2b0690b50205333f5c075d18bf07b2daf8f286d6fd09c2c5f_prof);

        
        $__internal_8b84e0485697fb222d9da663b4d8cd688bc473e88a6b372a1f20eec70925c0c0->leave($__internal_8b84e0485697fb222d9da663b4d8cd688bc473e88a6b372a1f20eec70925c0c0_prof);

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
