<?php

/* @EasyAdmin/default/field_datetime.html.twig */
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
        $__internal_92059c3382a38148ea2107bdfcbe41b286029ee335972ddbe7cfe2e17ec2b50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92059c3382a38148ea2107bdfcbe41b286029ee335972ddbe7cfe2e17ec2b50f->enter($__internal_92059c3382a38148ea2107bdfcbe41b286029ee335972ddbe7cfe2e17ec2b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_42e4db44544401258c21dcaa5ab1ec9ab24a687415fa6baa6a3781c386136dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e4db44544401258c21dcaa5ab1ec9ab24a687415fa6baa6a3781c386136dc1->enter($__internal_42e4db44544401258c21dcaa5ab1ec9ab24a687415fa6baa6a3781c386136dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_92059c3382a38148ea2107bdfcbe41b286029ee335972ddbe7cfe2e17ec2b50f->leave($__internal_92059c3382a38148ea2107bdfcbe41b286029ee335972ddbe7cfe2e17ec2b50f_prof);

        
        $__internal_42e4db44544401258c21dcaa5ab1ec9ab24a687415fa6baa6a3781c386136dc1->leave($__internal_42e4db44544401258c21dcaa5ab1ec9ab24a687415fa6baa6a3781c386136dc1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
