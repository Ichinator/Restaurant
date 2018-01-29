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
        $__internal_80ec09006bd97f14707a82e62d90d76998b92aeb3b23c728d03021546697b219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ec09006bd97f14707a82e62d90d76998b92aeb3b23c728d03021546697b219->enter($__internal_80ec09006bd97f14707a82e62d90d76998b92aeb3b23c728d03021546697b219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_41891010fd7f37211d48c2c18c66d5210e451dc74413e44eee483c087fad307d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41891010fd7f37211d48c2c18c66d5210e451dc74413e44eee483c087fad307d->enter($__internal_41891010fd7f37211d48c2c18c66d5210e451dc74413e44eee483c087fad307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_80ec09006bd97f14707a82e62d90d76998b92aeb3b23c728d03021546697b219->leave($__internal_80ec09006bd97f14707a82e62d90d76998b92aeb3b23c728d03021546697b219_prof);

        
        $__internal_41891010fd7f37211d48c2c18c66d5210e451dc74413e44eee483c087fad307d->leave($__internal_41891010fd7f37211d48c2c18c66d5210e451dc74413e44eee483c087fad307d_prof);

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
