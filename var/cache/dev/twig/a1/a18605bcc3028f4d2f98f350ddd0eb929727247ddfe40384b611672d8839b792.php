<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_f261acb8a0b273cfb776841889bbbde77c9598697771ce668ba974820711b764 extends Twig_Template
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
        $__internal_1839216cff32aaa96b2e10d15f36413f93ecbf3b7cd8e778184a1539c2fc338b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1839216cff32aaa96b2e10d15f36413f93ecbf3b7cd8e778184a1539c2fc338b->enter($__internal_1839216cff32aaa96b2e10d15f36413f93ecbf3b7cd8e778184a1539c2fc338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_eb0d80702563028c9557df06e369761592263eec93411c07dd104b59602acedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0d80702563028c9557df06e369761592263eec93411c07dd104b59602acedf->enter($__internal_eb0d80702563028c9557df06e369761592263eec93411c07dd104b59602acedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_1839216cff32aaa96b2e10d15f36413f93ecbf3b7cd8e778184a1539c2fc338b->leave($__internal_1839216cff32aaa96b2e10d15f36413f93ecbf3b7cd8e778184a1539c2fc338b_prof);

        
        $__internal_eb0d80702563028c9557df06e369761592263eec93411c07dd104b59602acedf->leave($__internal_eb0d80702563028c9557df06e369761592263eec93411c07dd104b59602acedf_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
