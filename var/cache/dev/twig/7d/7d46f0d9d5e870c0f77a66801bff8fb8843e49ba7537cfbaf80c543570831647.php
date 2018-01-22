<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1759d8ccf63c856d07dcfbf808f71d5e28e1dd82b967746527c4d4388c87e970 extends Twig_Template
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
        $__internal_438fa03adda2cdd92ac5a24b408e0dceeb447265bc3a8601fd504649b400aa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438fa03adda2cdd92ac5a24b408e0dceeb447265bc3a8601fd504649b400aa71->enter($__internal_438fa03adda2cdd92ac5a24b408e0dceeb447265bc3a8601fd504649b400aa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4152e4aff9944621850097aff5ef6777ad5bdf1a598dafa777c88ce40e0272a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4152e4aff9944621850097aff5ef6777ad5bdf1a598dafa777c88ce40e0272a0->enter($__internal_4152e4aff9944621850097aff5ef6777ad5bdf1a598dafa777c88ce40e0272a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_438fa03adda2cdd92ac5a24b408e0dceeb447265bc3a8601fd504649b400aa71->leave($__internal_438fa03adda2cdd92ac5a24b408e0dceeb447265bc3a8601fd504649b400aa71_prof);

        
        $__internal_4152e4aff9944621850097aff5ef6777ad5bdf1a598dafa777c88ce40e0272a0->leave($__internal_4152e4aff9944621850097aff5ef6777ad5bdf1a598dafa777c88ce40e0272a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
