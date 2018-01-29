<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_2e11e4956a5ba17944837715dcbe7947d18c47cf581761a87c8e517c2715bc73 extends Twig_Template
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
        $__internal_8111d212a8e6364f2ac5d48d8b3b34e5793d906b0dc7a97c1727fd492bc8fb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8111d212a8e6364f2ac5d48d8b3b34e5793d906b0dc7a97c1727fd492bc8fb2b->enter($__internal_8111d212a8e6364f2ac5d48d8b3b34e5793d906b0dc7a97c1727fd492bc8fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_de128e14b893b5d48a13472094f35d310b62c2d9f649bc511360fd1e637d0e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de128e14b893b5d48a13472094f35d310b62c2d9f649bc511360fd1e637d0e48->enter($__internal_de128e14b893b5d48a13472094f35d310b62c2d9f649bc511360fd1e637d0e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8111d212a8e6364f2ac5d48d8b3b34e5793d906b0dc7a97c1727fd492bc8fb2b->leave($__internal_8111d212a8e6364f2ac5d48d8b3b34e5793d906b0dc7a97c1727fd492bc8fb2b_prof);

        
        $__internal_de128e14b893b5d48a13472094f35d310b62c2d9f649bc511360fd1e637d0e48->leave($__internal_de128e14b893b5d48a13472094f35d310b62c2d9f649bc511360fd1e637d0e48_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
