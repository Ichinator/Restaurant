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
        $__internal_3f918ca3c3fc76af2a2f7223b5670f3e871dd828dfe9ff49b66c141698bfd061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f918ca3c3fc76af2a2f7223b5670f3e871dd828dfe9ff49b66c141698bfd061->enter($__internal_3f918ca3c3fc76af2a2f7223b5670f3e871dd828dfe9ff49b66c141698bfd061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_7b8d97e676adbc841356822c55bb510fbd8e9541d7f0c8fe7493693e215f4057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8d97e676adbc841356822c55bb510fbd8e9541d7f0c8fe7493693e215f4057->enter($__internal_7b8d97e676adbc841356822c55bb510fbd8e9541d7f0c8fe7493693e215f4057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3f918ca3c3fc76af2a2f7223b5670f3e871dd828dfe9ff49b66c141698bfd061->leave($__internal_3f918ca3c3fc76af2a2f7223b5670f3e871dd828dfe9ff49b66c141698bfd061_prof);

        
        $__internal_7b8d97e676adbc841356822c55bb510fbd8e9541d7f0c8fe7493693e215f4057->leave($__internal_7b8d97e676adbc841356822c55bb510fbd8e9541d7f0c8fe7493693e215f4057_prof);

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
