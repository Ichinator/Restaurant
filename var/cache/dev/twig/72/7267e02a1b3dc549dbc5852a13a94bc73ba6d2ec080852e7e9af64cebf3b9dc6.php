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
        $__internal_e30443afef8d76ee5a185d60f2505f40e02f9a1be186210709bdb88d99263e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30443afef8d76ee5a185d60f2505f40e02f9a1be186210709bdb88d99263e85->enter($__internal_e30443afef8d76ee5a185d60f2505f40e02f9a1be186210709bdb88d99263e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_abc6061280ca15e208f2790f0d9eef2a31bcb03ddee2d2b655ab95720fa60526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc6061280ca15e208f2790f0d9eef2a31bcb03ddee2d2b655ab95720fa60526->enter($__internal_abc6061280ca15e208f2790f0d9eef2a31bcb03ddee2d2b655ab95720fa60526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30443afef8d76ee5a185d60f2505f40e02f9a1be186210709bdb88d99263e85->leave($__internal_e30443afef8d76ee5a185d60f2505f40e02f9a1be186210709bdb88d99263e85_prof);

        
        $__internal_abc6061280ca15e208f2790f0d9eef2a31bcb03ddee2d2b655ab95720fa60526->leave($__internal_abc6061280ca15e208f2790f0d9eef2a31bcb03ddee2d2b655ab95720fa60526_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6898bcfeaf25482a903529cd62bc5d524b8638e6ba01a73f99ed72a62a06e770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6898bcfeaf25482a903529cd62bc5d524b8638e6ba01a73f99ed72a62a06e770->enter($__internal_6898bcfeaf25482a903529cd62bc5d524b8638e6ba01a73f99ed72a62a06e770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_429348824187e330b7651c2e3e2b31751fca8778d37607981d8ebbb573df023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429348824187e330b7651c2e3e2b31751fca8778d37607981d8ebbb573df023a->enter($__internal_429348824187e330b7651c2e3e2b31751fca8778d37607981d8ebbb573df023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_429348824187e330b7651c2e3e2b31751fca8778d37607981d8ebbb573df023a->leave($__internal_429348824187e330b7651c2e3e2b31751fca8778d37607981d8ebbb573df023a_prof);

        
        $__internal_6898bcfeaf25482a903529cd62bc5d524b8638e6ba01a73f99ed72a62a06e770->leave($__internal_6898bcfeaf25482a903529cd62bc5d524b8638e6ba01a73f99ed72a62a06e770_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc97478109715725b92d18e71ffb3e65daf737c9fdc6942b23ae6fbe2002884c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc97478109715725b92d18e71ffb3e65daf737c9fdc6942b23ae6fbe2002884c->enter($__internal_dc97478109715725b92d18e71ffb3e65daf737c9fdc6942b23ae6fbe2002884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a42d03b05bc07ef0cab1c0010b5c8052ca4a539c3f0bd29b66d40d40a5bde746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42d03b05bc07ef0cab1c0010b5c8052ca4a539c3f0bd29b66d40d40a5bde746->enter($__internal_a42d03b05bc07ef0cab1c0010b5c8052ca4a539c3f0bd29b66d40d40a5bde746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a42d03b05bc07ef0cab1c0010b5c8052ca4a539c3f0bd29b66d40d40a5bde746->leave($__internal_a42d03b05bc07ef0cab1c0010b5c8052ca4a539c3f0bd29b66d40d40a5bde746_prof);

        
        $__internal_dc97478109715725b92d18e71ffb3e65daf737c9fdc6942b23ae6fbe2002884c->leave($__internal_dc97478109715725b92d18e71ffb3e65daf737c9fdc6942b23ae6fbe2002884c_prof);

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
