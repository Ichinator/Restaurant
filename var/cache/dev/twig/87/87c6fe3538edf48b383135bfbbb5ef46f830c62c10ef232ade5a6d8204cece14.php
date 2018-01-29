<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_3be2e017580165f96aedf599a21ca19d15bbeacae01a7e70adb41ab97aa6dfe6 extends Twig_Template
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
        $__internal_0611d200a0131d40ff89529e19b61c00cf0c62e844bacae19b28f9b5b47cd7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0611d200a0131d40ff89529e19b61c00cf0c62e844bacae19b28f9b5b47cd7a2->enter($__internal_0611d200a0131d40ff89529e19b61c00cf0c62e844bacae19b28f9b5b47cd7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_0f5236e70c318dbb88288a0a4be139c9b604490d123ab374ceb5459a94a98e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5236e70c318dbb88288a0a4be139c9b604490d123ab374ceb5459a94a98e96->enter($__internal_0f5236e70c318dbb88288a0a4be139c9b604490d123ab374ceb5459a94a98e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0611d200a0131d40ff89529e19b61c00cf0c62e844bacae19b28f9b5b47cd7a2->leave($__internal_0611d200a0131d40ff89529e19b61c00cf0c62e844bacae19b28f9b5b47cd7a2_prof);

        
        $__internal_0f5236e70c318dbb88288a0a4be139c9b604490d123ab374ceb5459a94a98e96->leave($__internal_0f5236e70c318dbb88288a0a4be139c9b604490d123ab374ceb5459a94a98e96_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
