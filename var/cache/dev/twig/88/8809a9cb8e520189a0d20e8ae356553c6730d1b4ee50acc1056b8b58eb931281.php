<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_706acb0b715a9b778bb273fcf398702ad039b1abdd518babbfdd74b513be23e2 extends Twig_Template
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
        $__internal_d1f29e5f9a7ab1ac5bedc0c162597ec0e5cdef65347c53b28485456be0515dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f29e5f9a7ab1ac5bedc0c162597ec0e5cdef65347c53b28485456be0515dba->enter($__internal_d1f29e5f9a7ab1ac5bedc0c162597ec0e5cdef65347c53b28485456be0515dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2f00842f41760495b84034db47e24e494f92b124ea51a08178252d8f44703654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f00842f41760495b84034db47e24e494f92b124ea51a08178252d8f44703654->enter($__internal_2f00842f41760495b84034db47e24e494f92b124ea51a08178252d8f44703654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d1f29e5f9a7ab1ac5bedc0c162597ec0e5cdef65347c53b28485456be0515dba->leave($__internal_d1f29e5f9a7ab1ac5bedc0c162597ec0e5cdef65347c53b28485456be0515dba_prof);

        
        $__internal_2f00842f41760495b84034db47e24e494f92b124ea51a08178252d8f44703654->leave($__internal_2f00842f41760495b84034db47e24e494f92b124ea51a08178252d8f44703654_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
