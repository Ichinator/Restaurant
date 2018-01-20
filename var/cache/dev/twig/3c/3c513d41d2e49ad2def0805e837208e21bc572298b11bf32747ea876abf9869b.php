<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_a1d4726817052f192b572652e749974429a3e4d46f787787a862ed21bcd192e6 extends Twig_Template
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
        $__internal_66504000e4d0478b93ed64db1c903b7df7bcd719511252200bfcc5a3850b14ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66504000e4d0478b93ed64db1c903b7df7bcd719511252200bfcc5a3850b14ee->enter($__internal_66504000e4d0478b93ed64db1c903b7df7bcd719511252200bfcc5a3850b14ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_1f83e520b3455ebb47263da97cc46ef64ef4cc4ea572fb44003654e4ff007e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f83e520b3455ebb47263da97cc46ef64ef4cc4ea572fb44003654e4ff007e92->enter($__internal_1f83e520b3455ebb47263da97cc46ef64ef4cc4ea572fb44003654e4ff007e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_66504000e4d0478b93ed64db1c903b7df7bcd719511252200bfcc5a3850b14ee->leave($__internal_66504000e4d0478b93ed64db1c903b7df7bcd719511252200bfcc5a3850b14ee_prof);

        
        $__internal_1f83e520b3455ebb47263da97cc46ef64ef4cc4ea572fb44003654e4ff007e92->leave($__internal_1f83e520b3455ebb47263da97cc46ef64ef4cc4ea572fb44003654e4ff007e92_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
