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
        $__internal_6e0d61f57f017a7a3d509e961978c8af4094f59c4c17e78e40e472e13207abe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d61f57f017a7a3d509e961978c8af4094f59c4c17e78e40e472e13207abe6->enter($__internal_6e0d61f57f017a7a3d509e961978c8af4094f59c4c17e78e40e472e13207abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_3af53d059387b480aec98eb9c9450cd87d52876533d109fe8d047ec130cd3ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af53d059387b480aec98eb9c9450cd87d52876533d109fe8d047ec130cd3ca3->enter($__internal_3af53d059387b480aec98eb9c9450cd87d52876533d109fe8d047ec130cd3ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_6e0d61f57f017a7a3d509e961978c8af4094f59c4c17e78e40e472e13207abe6->leave($__internal_6e0d61f57f017a7a3d509e961978c8af4094f59c4c17e78e40e472e13207abe6_prof);

        
        $__internal_3af53d059387b480aec98eb9c9450cd87d52876533d109fe8d047ec130cd3ca3->leave($__internal_3af53d059387b480aec98eb9c9450cd87d52876533d109fe8d047ec130cd3ca3_prof);

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
