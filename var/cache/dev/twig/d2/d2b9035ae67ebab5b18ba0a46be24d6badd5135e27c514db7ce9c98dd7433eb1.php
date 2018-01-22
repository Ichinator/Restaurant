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
        $__internal_6297c1566f28eab847814432bc46ec2798071dee279d48f84e8aac6c289ec525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6297c1566f28eab847814432bc46ec2798071dee279d48f84e8aac6c289ec525->enter($__internal_6297c1566f28eab847814432bc46ec2798071dee279d48f84e8aac6c289ec525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_4ee45dbda1796fb20aea9513fa92f8fe969c8f4b55b08791e8552cc1b84d5e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee45dbda1796fb20aea9513fa92f8fe969c8f4b55b08791e8552cc1b84d5e6b->enter($__internal_4ee45dbda1796fb20aea9513fa92f8fe969c8f4b55b08791e8552cc1b84d5e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

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
        
        $__internal_6297c1566f28eab847814432bc46ec2798071dee279d48f84e8aac6c289ec525->leave($__internal_6297c1566f28eab847814432bc46ec2798071dee279d48f84e8aac6c289ec525_prof);

        
        $__internal_4ee45dbda1796fb20aea9513fa92f8fe969c8f4b55b08791e8552cc1b84d5e6b->leave($__internal_4ee45dbda1796fb20aea9513fa92f8fe969c8f4b55b08791e8552cc1b84d5e6b_prof);

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
