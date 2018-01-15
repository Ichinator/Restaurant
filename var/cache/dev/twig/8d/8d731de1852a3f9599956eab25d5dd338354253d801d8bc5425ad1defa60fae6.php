<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_30b05fae63c43d2dd561ac007d771658df5ccba108c31e4818b53acb49c6a7f1 extends Twig_Template
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
        $__internal_b2c0ddc728d933f08405e633ea50041ed700f6df5ce2584112b83d8a423381ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c0ddc728d933f08405e633ea50041ed700f6df5ce2584112b83d8a423381ac->enter($__internal_b2c0ddc728d933f08405e633ea50041ed700f6df5ce2584112b83d8a423381ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_dcd08ce588659cccfd4518c96068fa64718f4addec1ae0da4831e42db803a046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd08ce588659cccfd4518c96068fa64718f4addec1ae0da4831e42db803a046->enter($__internal_dcd08ce588659cccfd4518c96068fa64718f4addec1ae0da4831e42db803a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_b2c0ddc728d933f08405e633ea50041ed700f6df5ce2584112b83d8a423381ac->leave($__internal_b2c0ddc728d933f08405e633ea50041ed700f6df5ce2584112b83d8a423381ac_prof);

        
        $__internal_dcd08ce588659cccfd4518c96068fa64718f4addec1ae0da4831e42db803a046->leave($__internal_dcd08ce588659cccfd4518c96068fa64718f4addec1ae0da4831e42db803a046_prof);

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
