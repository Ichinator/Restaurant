<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_09c0b48f29e4040169d53071ff3b353206182fc809a3ec6160416e3ba173d3bc extends Twig_Template
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
        $__internal_ca00b535909663ddb32b0ee2b30966fc96201e35802aa89a18433a9814368774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca00b535909663ddb32b0ee2b30966fc96201e35802aa89a18433a9814368774->enter($__internal_ca00b535909663ddb32b0ee2b30966fc96201e35802aa89a18433a9814368774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_76dafafb5a8cc3c2effd791e5dcbfbcdf03c1f0428c3321d9bd084b37a4e30e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dafafb5a8cc3c2effd791e5dcbfbcdf03c1f0428c3321d9bd084b37a4e30e6->enter($__internal_76dafafb5a8cc3c2effd791e5dcbfbcdf03c1f0428c3321d9bd084b37a4e30e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_ca00b535909663ddb32b0ee2b30966fc96201e35802aa89a18433a9814368774->leave($__internal_ca00b535909663ddb32b0ee2b30966fc96201e35802aa89a18433a9814368774_prof);

        
        $__internal_76dafafb5a8cc3c2effd791e5dcbfbcdf03c1f0428c3321d9bd084b37a4e30e6->leave($__internal_76dafafb5a8cc3c2effd791e5dcbfbcdf03c1f0428c3321d9bd084b37a4e30e6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}