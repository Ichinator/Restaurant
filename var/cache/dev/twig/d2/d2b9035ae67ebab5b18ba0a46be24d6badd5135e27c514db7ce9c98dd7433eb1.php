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
        $__internal_d5da83a4b8c8ed111de83a0a33428e8900b27182128967f0c96581775cd4085e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5da83a4b8c8ed111de83a0a33428e8900b27182128967f0c96581775cd4085e->enter($__internal_d5da83a4b8c8ed111de83a0a33428e8900b27182128967f0c96581775cd4085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_4ecc6819be55ab9523ea5f4774b623fcb1233c477630fac2eab85aeed2417237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecc6819be55ab9523ea5f4774b623fcb1233c477630fac2eab85aeed2417237->enter($__internal_4ecc6819be55ab9523ea5f4774b623fcb1233c477630fac2eab85aeed2417237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

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
        
        $__internal_d5da83a4b8c8ed111de83a0a33428e8900b27182128967f0c96581775cd4085e->leave($__internal_d5da83a4b8c8ed111de83a0a33428e8900b27182128967f0c96581775cd4085e_prof);

        
        $__internal_4ecc6819be55ab9523ea5f4774b623fcb1233c477630fac2eab85aeed2417237->leave($__internal_4ecc6819be55ab9523ea5f4774b623fcb1233c477630fac2eab85aeed2417237_prof);

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
