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
        $__internal_626b245acc3556d67aee89d9832c109aa5dd28b4a0d6d2c856616d1a835014fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626b245acc3556d67aee89d9832c109aa5dd28b4a0d6d2c856616d1a835014fa->enter($__internal_626b245acc3556d67aee89d9832c109aa5dd28b4a0d6d2c856616d1a835014fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_117adc09b41db9cf8c69d5cd1a6ee4a845a9c2bcf418a32d678bb7902f76128e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117adc09b41db9cf8c69d5cd1a6ee4a845a9c2bcf418a32d678bb7902f76128e->enter($__internal_117adc09b41db9cf8c69d5cd1a6ee4a845a9c2bcf418a32d678bb7902f76128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

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
        
        $__internal_626b245acc3556d67aee89d9832c109aa5dd28b4a0d6d2c856616d1a835014fa->leave($__internal_626b245acc3556d67aee89d9832c109aa5dd28b4a0d6d2c856616d1a835014fa_prof);

        
        $__internal_117adc09b41db9cf8c69d5cd1a6ee4a845a9c2bcf418a32d678bb7902f76128e->leave($__internal_117adc09b41db9cf8c69d5cd1a6ee4a845a9c2bcf418a32d678bb7902f76128e_prof);

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
