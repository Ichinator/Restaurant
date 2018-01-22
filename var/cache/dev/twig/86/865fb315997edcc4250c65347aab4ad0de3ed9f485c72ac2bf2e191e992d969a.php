<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_b0f9e2e5d398ac87875f65afd6f65eacfce05fbd8992367a0e9d191c752bffbb extends Twig_Template
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
        $__internal_7b559059002ea565b5f0fe3c7ee5e7532a96ace75802272a5886d962abbcfe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b559059002ea565b5f0fe3c7ee5e7532a96ace75802272a5886d962abbcfe6b->enter($__internal_7b559059002ea565b5f0fe3c7ee5e7532a96ace75802272a5886d962abbcfe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_b032281d5936d60ee0814f8ffe0bb560c376728a7420bfd694320afec47ade12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b032281d5936d60ee0814f8ffe0bb560c376728a7420bfd694320afec47ade12->enter($__internal_b032281d5936d60ee0814f8ffe0bb560c376728a7420bfd694320afec47ade12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_7b559059002ea565b5f0fe3c7ee5e7532a96ace75802272a5886d962abbcfe6b->leave($__internal_7b559059002ea565b5f0fe3c7ee5e7532a96ace75802272a5886d962abbcfe6b_prof);

        
        $__internal_b032281d5936d60ee0814f8ffe0bb560c376728a7420bfd694320afec47ade12->leave($__internal_b032281d5936d60ee0814f8ffe0bb560c376728a7420bfd694320afec47ade12_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
