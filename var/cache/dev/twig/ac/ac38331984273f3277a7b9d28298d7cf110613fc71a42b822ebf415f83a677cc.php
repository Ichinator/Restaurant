<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_de2d1ba5c4348067ed1b26f8d7dc9e54d0d8a091e90c827502daae05e087d772 extends Twig_Template
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
        $__internal_7508e024b78ae574fa4d5b00da2248ee95a5e8eadfe8a2d6da32ec7978bf47e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7508e024b78ae574fa4d5b00da2248ee95a5e8eadfe8a2d6da32ec7978bf47e3->enter($__internal_7508e024b78ae574fa4d5b00da2248ee95a5e8eadfe8a2d6da32ec7978bf47e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_067ccb96cfd67764d20d15800a33ae7b92d1f5c14f256862c03b008505d02fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067ccb96cfd67764d20d15800a33ae7b92d1f5c14f256862c03b008505d02fc1->enter($__internal_067ccb96cfd67764d20d15800a33ae7b92d1f5c14f256862c03b008505d02fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_7508e024b78ae574fa4d5b00da2248ee95a5e8eadfe8a2d6da32ec7978bf47e3->leave($__internal_7508e024b78ae574fa4d5b00da2248ee95a5e8eadfe8a2d6da32ec7978bf47e3_prof);

        
        $__internal_067ccb96cfd67764d20d15800a33ae7b92d1f5c14f256862c03b008505d02fc1->leave($__internal_067ccb96cfd67764d20d15800a33ae7b92d1f5c14f256862c03b008505d02fc1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
