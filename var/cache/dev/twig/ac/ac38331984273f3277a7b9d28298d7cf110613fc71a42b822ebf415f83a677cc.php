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
        $__internal_4cd69cd24732106875ae2a31b7ec88bcd98fea85825e3964d131b34d6446c90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd69cd24732106875ae2a31b7ec88bcd98fea85825e3964d131b34d6446c90c->enter($__internal_4cd69cd24732106875ae2a31b7ec88bcd98fea85825e3964d131b34d6446c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_e83ac76feb8e5f5c1f1745097a0e95ebc2c78634404eca767fd4d49672337925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83ac76feb8e5f5c1f1745097a0e95ebc2c78634404eca767fd4d49672337925->enter($__internal_e83ac76feb8e5f5c1f1745097a0e95ebc2c78634404eca767fd4d49672337925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_4cd69cd24732106875ae2a31b7ec88bcd98fea85825e3964d131b34d6446c90c->leave($__internal_4cd69cd24732106875ae2a31b7ec88bcd98fea85825e3964d131b34d6446c90c_prof);

        
        $__internal_e83ac76feb8e5f5c1f1745097a0e95ebc2c78634404eca767fd4d49672337925->leave($__internal_e83ac76feb8e5f5c1f1745097a0e95ebc2c78634404eca767fd4d49672337925_prof);

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
