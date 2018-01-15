<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79852c08652d81e2bde38a628dd79471d1679fd1d58baeb5ee3e940b9f404914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_212c76476b817f0952d172de9848fc46e21a0571d1aa4e0b4495de67524d50e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212c76476b817f0952d172de9848fc46e21a0571d1aa4e0b4495de67524d50e9->enter($__internal_212c76476b817f0952d172de9848fc46e21a0571d1aa4e0b4495de67524d50e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c7e26bfb0dc1a539226d64218e1f8569befc999d649c91f3dffd3235bf37b5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e26bfb0dc1a539226d64218e1f8569befc999d649c91f3dffd3235bf37b5b2->enter($__internal_c7e26bfb0dc1a539226d64218e1f8569befc999d649c91f3dffd3235bf37b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212c76476b817f0952d172de9848fc46e21a0571d1aa4e0b4495de67524d50e9->leave($__internal_212c76476b817f0952d172de9848fc46e21a0571d1aa4e0b4495de67524d50e9_prof);

        
        $__internal_c7e26bfb0dc1a539226d64218e1f8569befc999d649c91f3dffd3235bf37b5b2->leave($__internal_c7e26bfb0dc1a539226d64218e1f8569befc999d649c91f3dffd3235bf37b5b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06aba135fd2e1ac71797ddddfa30e19836c503e402b6e35ef38037f62d2e8306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06aba135fd2e1ac71797ddddfa30e19836c503e402b6e35ef38037f62d2e8306->enter($__internal_06aba135fd2e1ac71797ddddfa30e19836c503e402b6e35ef38037f62d2e8306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dfcf8e18d2b1d9e349b5e55389a43c244102ba6a629a2ae58547622f7d2c5d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcf8e18d2b1d9e349b5e55389a43c244102ba6a629a2ae58547622f7d2c5d9a->enter($__internal_dfcf8e18d2b1d9e349b5e55389a43c244102ba6a629a2ae58547622f7d2c5d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfcf8e18d2b1d9e349b5e55389a43c244102ba6a629a2ae58547622f7d2c5d9a->leave($__internal_dfcf8e18d2b1d9e349b5e55389a43c244102ba6a629a2ae58547622f7d2c5d9a_prof);

        
        $__internal_06aba135fd2e1ac71797ddddfa30e19836c503e402b6e35ef38037f62d2e8306->leave($__internal_06aba135fd2e1ac71797ddddfa30e19836c503e402b6e35ef38037f62d2e8306_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bae00fa9ac61b81fdca5d83cb960dcdd589fd267932b206084f891addc98a7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae00fa9ac61b81fdca5d83cb960dcdd589fd267932b206084f891addc98a7a4->enter($__internal_bae00fa9ac61b81fdca5d83cb960dcdd589fd267932b206084f891addc98a7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4d83dfb79f699662040c651b8248324e15e528d0514f38851f22817bd8b85f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d83dfb79f699662040c651b8248324e15e528d0514f38851f22817bd8b85f1->enter($__internal_b4d83dfb79f699662040c651b8248324e15e528d0514f38851f22817bd8b85f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4d83dfb79f699662040c651b8248324e15e528d0514f38851f22817bd8b85f1->leave($__internal_b4d83dfb79f699662040c651b8248324e15e528d0514f38851f22817bd8b85f1_prof);

        
        $__internal_bae00fa9ac61b81fdca5d83cb960dcdd589fd267932b206084f891addc98a7a4->leave($__internal_bae00fa9ac61b81fdca5d83cb960dcdd589fd267932b206084f891addc98a7a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20915e1236103b1e9a8a5ca2e4491ed9a1a70b2a8a7303cef443bd474162acd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20915e1236103b1e9a8a5ca2e4491ed9a1a70b2a8a7303cef443bd474162acd8->enter($__internal_20915e1236103b1e9a8a5ca2e4491ed9a1a70b2a8a7303cef443bd474162acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_838876e46205d17b950d10efca9d70faa69efe5a988be12e663abcb6f48f342a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838876e46205d17b950d10efca9d70faa69efe5a988be12e663abcb6f48f342a->enter($__internal_838876e46205d17b950d10efca9d70faa69efe5a988be12e663abcb6f48f342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_838876e46205d17b950d10efca9d70faa69efe5a988be12e663abcb6f48f342a->leave($__internal_838876e46205d17b950d10efca9d70faa69efe5a988be12e663abcb6f48f342a_prof);

        
        $__internal_20915e1236103b1e9a8a5ca2e4491ed9a1a70b2a8a7303cef443bd474162acd8->leave($__internal_20915e1236103b1e9a8a5ca2e4491ed9a1a70b2a8a7303cef443bd474162acd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
