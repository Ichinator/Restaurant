<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_0e4bcf9fd36a55363e7417501cf5d877546e296056d7bb6eb2804d9be1d1015a extends Twig_Template
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
        $__internal_d1be507d02b85e4ebfc7c23f45bf0442143adbe2055a26bea391b6481e4571c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1be507d02b85e4ebfc7c23f45bf0442143adbe2055a26bea391b6481e4571c7->enter($__internal_d1be507d02b85e4ebfc7c23f45bf0442143adbe2055a26bea391b6481e4571c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_34fbbafa23fbab633a7d0b832a598dc0887a5aa7cf06c5a7ac0bc25cc3a625bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fbbafa23fbab633a7d0b832a598dc0887a5aa7cf06c5a7ac0bc25cc3a625bb->enter($__internal_34fbbafa23fbab633a7d0b832a598dc0887a5aa7cf06c5a7ac0bc25cc3a625bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_d1be507d02b85e4ebfc7c23f45bf0442143adbe2055a26bea391b6481e4571c7->leave($__internal_d1be507d02b85e4ebfc7c23f45bf0442143adbe2055a26bea391b6481e4571c7_prof);

        
        $__internal_34fbbafa23fbab633a7d0b832a598dc0887a5aa7cf06c5a7ac0bc25cc3a625bb->leave($__internal_34fbbafa23fbab633a7d0b832a598dc0887a5aa7cf06c5a7ac0bc25cc3a625bb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
", "EasyAdminBundle:default:field_integer.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}