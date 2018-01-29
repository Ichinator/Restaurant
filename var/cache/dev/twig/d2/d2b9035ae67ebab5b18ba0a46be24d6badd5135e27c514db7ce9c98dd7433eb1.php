<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_09474bd01d8d00081625ec9fc63364aeee80aeaf29e899af5e9c061bfde7ff3c extends Twig_Template
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
        $__internal_7d0d72d8e98df8c4fc214f6a85f848c5f5ae2da4bfa926da29f91f9a4c7ef740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0d72d8e98df8c4fc214f6a85f848c5f5ae2da4bfa926da29f91f9a4c7ef740->enter($__internal_7d0d72d8e98df8c4fc214f6a85f848c5f5ae2da4bfa926da29f91f9a4c7ef740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_35aceb7acea01990e427864354b2ecaeb96e19f82d2ebaa8d7dce1567741a2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aceb7acea01990e427864354b2ecaeb96e19f82d2ebaa8d7dce1567741a2cf->enter($__internal_35aceb7acea01990e427864354b2ecaeb96e19f82d2ebaa8d7dce1567741a2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_7d0d72d8e98df8c4fc214f6a85f848c5f5ae2da4bfa926da29f91f9a4c7ef740->leave($__internal_7d0d72d8e98df8c4fc214f6a85f848c5f5ae2da4bfa926da29f91f9a4c7ef740_prof);

        
        $__internal_35aceb7acea01990e427864354b2ecaeb96e19f82d2ebaa8d7dce1567741a2cf->leave($__internal_35aceb7acea01990e427864354b2ecaeb96e19f82d2ebaa8d7dce1567741a2cf_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
