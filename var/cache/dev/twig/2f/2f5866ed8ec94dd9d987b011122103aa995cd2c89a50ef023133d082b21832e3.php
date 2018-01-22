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
        $__internal_c91173ee30c5d8a9352e986857dd48c961381658dcb0dc1a9fe5ce828d78955a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91173ee30c5d8a9352e986857dd48c961381658dcb0dc1a9fe5ce828d78955a->enter($__internal_c91173ee30c5d8a9352e986857dd48c961381658dcb0dc1a9fe5ce828d78955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_d4ad66a71d159d493f939e4385c3d4634a858a5d1652ee19ee67dccd0e0e31c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ad66a71d159d493f939e4385c3d4634a858a5d1652ee19ee67dccd0e0e31c6->enter($__internal_d4ad66a71d159d493f939e4385c3d4634a858a5d1652ee19ee67dccd0e0e31c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_c91173ee30c5d8a9352e986857dd48c961381658dcb0dc1a9fe5ce828d78955a->leave($__internal_c91173ee30c5d8a9352e986857dd48c961381658dcb0dc1a9fe5ce828d78955a_prof);

        
        $__internal_d4ad66a71d159d493f939e4385c3d4634a858a5d1652ee19ee67dccd0e0e31c6->leave($__internal_d4ad66a71d159d493f939e4385c3d4634a858a5d1652ee19ee67dccd0e0e31c6_prof);

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
