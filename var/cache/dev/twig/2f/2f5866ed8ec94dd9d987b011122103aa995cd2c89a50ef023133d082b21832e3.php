<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_5aeb93168461973fba16b028d1a70bc6a9354e365258e22f1c9ad47b03cf7aad extends Twig_Template
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
        $__internal_98eee62a48f424b0d97f7d2b5fb3a3019229630db747ff981cc678609fbeaa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eee62a48f424b0d97f7d2b5fb3a3019229630db747ff981cc678609fbeaa44->enter($__internal_98eee62a48f424b0d97f7d2b5fb3a3019229630db747ff981cc678609fbeaa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_9ddd26e0895f1af6706df9ddbfb90433031688dec85538cb5a8c90c07f467c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddd26e0895f1af6706df9ddbfb90433031688dec85538cb5a8c90c07f467c55->enter($__internal_9ddd26e0895f1af6706df9ddbfb90433031688dec85538cb5a8c90c07f467c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_98eee62a48f424b0d97f7d2b5fb3a3019229630db747ff981cc678609fbeaa44->leave($__internal_98eee62a48f424b0d97f7d2b5fb3a3019229630db747ff981cc678609fbeaa44_prof);

        
        $__internal_9ddd26e0895f1af6706df9ddbfb90433031688dec85538cb5a8c90c07f467c55->leave($__internal_9ddd26e0895f1af6706df9ddbfb90433031688dec85538cb5a8c90c07f467c55_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
