<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cddbbbeb3de59918190e5d1724bc1f77a44b1fe915395adf561252e486c19d61 extends Twig_Template
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
        $__internal_e633915f4210021f544b486a824dbe668127ba104440e9e0968b7f3419da3cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e633915f4210021f544b486a824dbe668127ba104440e9e0968b7f3419da3cc1->enter($__internal_e633915f4210021f544b486a824dbe668127ba104440e9e0968b7f3419da3cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_17b630e0de12a7143bc5eb2ba3aea20837e389d26de67551ddb8d328da426d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b630e0de12a7143bc5eb2ba3aea20837e389d26de67551ddb8d328da426d82->enter($__internal_17b630e0de12a7143bc5eb2ba3aea20837e389d26de67551ddb8d328da426d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e633915f4210021f544b486a824dbe668127ba104440e9e0968b7f3419da3cc1->leave($__internal_e633915f4210021f544b486a824dbe668127ba104440e9e0968b7f3419da3cc1_prof);

        
        $__internal_17b630e0de12a7143bc5eb2ba3aea20837e389d26de67551ddb8d328da426d82->leave($__internal_17b630e0de12a7143bc5eb2ba3aea20837e389d26de67551ddb8d328da426d82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
