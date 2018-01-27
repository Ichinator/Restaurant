<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_6efc1e4be8475ac72cb283c2008d22c6003780fa48641de4239f1f2dbc6ce883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b21339f6f81fcab2c5a64746b65a8f7607e385ade2169ed6b255ac2055b8ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b21339f6f81fcab2c5a64746b65a8f7607e385ade2169ed6b255ac2055b8ad2->enter($__internal_6b21339f6f81fcab2c5a64746b65a8f7607e385ade2169ed6b255ac2055b8ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_3696f819a23ea8f4a00aeb0aad8df21ffe4a17d2ddc4b8d2d5bd17a7110f141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3696f819a23ea8f4a00aeb0aad8df21ffe4a17d2ddc4b8d2d5bd17a7110f141c->enter($__internal_3696f819a23ea8f4a00aeb0aad8df21ffe4a17d2ddc4b8d2d5bd17a7110f141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_6b21339f6f81fcab2c5a64746b65a8f7607e385ade2169ed6b255ac2055b8ad2->leave($__internal_6b21339f6f81fcab2c5a64746b65a8f7607e385ade2169ed6b255ac2055b8ad2_prof);

        
        $__internal_3696f819a23ea8f4a00aeb0aad8df21ffe4a17d2ddc4b8d2d5bd17a7110f141c->leave($__internal_3696f819a23ea8f4a00aeb0aad8df21ffe4a17d2ddc4b8d2d5bd17a7110f141c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
