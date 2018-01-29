<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_9b9305e7a195c7a8f57ff8db043c279132b3708a3c649c3ea5207d7c174a0415 extends Twig_Template
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
        $__internal_244d73280af16ce7bdbba5ea873c7fd43c03120a222daec8c6ef8cef0e6bad24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244d73280af16ce7bdbba5ea873c7fd43c03120a222daec8c6ef8cef0e6bad24->enter($__internal_244d73280af16ce7bdbba5ea873c7fd43c03120a222daec8c6ef8cef0e6bad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_3c276c504fbea2e851ac8e7087d4d577d06bb9df21d4b67b79225e8215274b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c276c504fbea2e851ac8e7087d4d577d06bb9df21d4b67b79225e8215274b8d->enter($__internal_3c276c504fbea2e851ac8e7087d4d577d06bb9df21d4b67b79225e8215274b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_244d73280af16ce7bdbba5ea873c7fd43c03120a222daec8c6ef8cef0e6bad24->leave($__internal_244d73280af16ce7bdbba5ea873c7fd43c03120a222daec8c6ef8cef0e6bad24_prof);

        
        $__internal_3c276c504fbea2e851ac8e7087d4d577d06bb9df21d4b67b79225e8215274b8d->leave($__internal_3c276c504fbea2e851ac8e7087d4d577d06bb9df21d4b67b79225e8215274b8d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
