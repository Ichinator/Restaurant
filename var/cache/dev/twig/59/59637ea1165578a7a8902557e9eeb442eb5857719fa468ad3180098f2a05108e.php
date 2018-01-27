<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_23d3214855eb06e74829de0cf792c6bfd28e66cafbd966d2f46b031570e4b9b9 extends Twig_Template
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
        $__internal_5ed32f7a520413476bad5513096ced404a127c581e787f287465a444970ced74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed32f7a520413476bad5513096ced404a127c581e787f287465a444970ced74->enter($__internal_5ed32f7a520413476bad5513096ced404a127c581e787f287465a444970ced74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b36ed6f6cda696b14ddb2f87b99c25ff35e5db55b862d1c2a64b67d3adaccee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36ed6f6cda696b14ddb2f87b99c25ff35e5db55b862d1c2a64b67d3adaccee1->enter($__internal_b36ed6f6cda696b14ddb2f87b99c25ff35e5db55b862d1c2a64b67d3adaccee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5ed32f7a520413476bad5513096ced404a127c581e787f287465a444970ced74->leave($__internal_5ed32f7a520413476bad5513096ced404a127c581e787f287465a444970ced74_prof);

        
        $__internal_b36ed6f6cda696b14ddb2f87b99c25ff35e5db55b862d1c2a64b67d3adaccee1->leave($__internal_b36ed6f6cda696b14ddb2f87b99c25ff35e5db55b862d1c2a64b67d3adaccee1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
