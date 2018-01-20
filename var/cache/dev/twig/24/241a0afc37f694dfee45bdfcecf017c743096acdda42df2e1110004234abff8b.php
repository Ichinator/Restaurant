<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f3633679b8b245873d073a2894d18130b3d1ef12240db9e4df98ce56e970d52 extends Twig_Template
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
        $__internal_a9f372c047c122b01816cc91796bbebf6a76b40d1c44d4e7a06c14b64ab28c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f372c047c122b01816cc91796bbebf6a76b40d1c44d4e7a06c14b64ab28c14->enter($__internal_a9f372c047c122b01816cc91796bbebf6a76b40d1c44d4e7a06c14b64ab28c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5ef373b7db3e373475fa8c8f8134f6f8a1f4c8faf9fd2e5ae97e3cc8a2f1dc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef373b7db3e373475fa8c8f8134f6f8a1f4c8faf9fd2e5ae97e3cc8a2f1dc1e->enter($__internal_5ef373b7db3e373475fa8c8f8134f6f8a1f4c8faf9fd2e5ae97e3cc8a2f1dc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f372c047c122b01816cc91796bbebf6a76b40d1c44d4e7a06c14b64ab28c14->leave($__internal_a9f372c047c122b01816cc91796bbebf6a76b40d1c44d4e7a06c14b64ab28c14_prof);

        
        $__internal_5ef373b7db3e373475fa8c8f8134f6f8a1f4c8faf9fd2e5ae97e3cc8a2f1dc1e->leave($__internal_5ef373b7db3e373475fa8c8f8134f6f8a1f4c8faf9fd2e5ae97e3cc8a2f1dc1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed2ff45df49629c8d274a2f9edeb7501bd8f253824b8287aded7653093c8f360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2ff45df49629c8d274a2f9edeb7501bd8f253824b8287aded7653093c8f360->enter($__internal_ed2ff45df49629c8d274a2f9edeb7501bd8f253824b8287aded7653093c8f360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_616f3cff27f634c6f810d5348a896ae3e40a2ca080926ecdf02c2dc6f9c9c757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616f3cff27f634c6f810d5348a896ae3e40a2ca080926ecdf02c2dc6f9c9c757->enter($__internal_616f3cff27f634c6f810d5348a896ae3e40a2ca080926ecdf02c2dc6f9c9c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_616f3cff27f634c6f810d5348a896ae3e40a2ca080926ecdf02c2dc6f9c9c757->leave($__internal_616f3cff27f634c6f810d5348a896ae3e40a2ca080926ecdf02c2dc6f9c9c757_prof);

        
        $__internal_ed2ff45df49629c8d274a2f9edeb7501bd8f253824b8287aded7653093c8f360->leave($__internal_ed2ff45df49629c8d274a2f9edeb7501bd8f253824b8287aded7653093c8f360_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df128dcaf11722613d6b1f882aa3dea7b6fb9d6d495640960a91fa8c69158d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df128dcaf11722613d6b1f882aa3dea7b6fb9d6d495640960a91fa8c69158d5c->enter($__internal_df128dcaf11722613d6b1f882aa3dea7b6fb9d6d495640960a91fa8c69158d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66e43861a28645e14d40a8782471f82723353c93a943f04e26c7be636a8be2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e43861a28645e14d40a8782471f82723353c93a943f04e26c7be636a8be2fe->enter($__internal_66e43861a28645e14d40a8782471f82723353c93a943f04e26c7be636a8be2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66e43861a28645e14d40a8782471f82723353c93a943f04e26c7be636a8be2fe->leave($__internal_66e43861a28645e14d40a8782471f82723353c93a943f04e26c7be636a8be2fe_prof);

        
        $__internal_df128dcaf11722613d6b1f882aa3dea7b6fb9d6d495640960a91fa8c69158d5c->leave($__internal_df128dcaf11722613d6b1f882aa3dea7b6fb9d6d495640960a91fa8c69158d5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94fc3fba03caede0fc1ffc90b4b10a58fd7ab1b2d1f465870f458ee9be8db706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fc3fba03caede0fc1ffc90b4b10a58fd7ab1b2d1f465870f458ee9be8db706->enter($__internal_94fc3fba03caede0fc1ffc90b4b10a58fd7ab1b2d1f465870f458ee9be8db706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41c506bf4f7c77f75cbb292101098d4840b1cf2ef8a9da603248e587aaaa618e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c506bf4f7c77f75cbb292101098d4840b1cf2ef8a9da603248e587aaaa618e->enter($__internal_41c506bf4f7c77f75cbb292101098d4840b1cf2ef8a9da603248e587aaaa618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41c506bf4f7c77f75cbb292101098d4840b1cf2ef8a9da603248e587aaaa618e->leave($__internal_41c506bf4f7c77f75cbb292101098d4840b1cf2ef8a9da603248e587aaaa618e_prof);

        
        $__internal_94fc3fba03caede0fc1ffc90b4b10a58fd7ab1b2d1f465870f458ee9be8db706->leave($__internal_94fc3fba03caede0fc1ffc90b4b10a58fd7ab1b2d1f465870f458ee9be8db706_prof);

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
