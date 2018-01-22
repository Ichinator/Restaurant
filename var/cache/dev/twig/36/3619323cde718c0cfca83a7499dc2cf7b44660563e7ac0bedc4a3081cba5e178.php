<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5aab138524601fc841c55ac643a9230f12f16a76b875da7d012f0ace08816334 extends Twig_Template
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
        $__internal_fb3810e36b23702933449502289cc926899384ae8b5b40072d6b5809e99db916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3810e36b23702933449502289cc926899384ae8b5b40072d6b5809e99db916->enter($__internal_fb3810e36b23702933449502289cc926899384ae8b5b40072d6b5809e99db916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_acd251a4667e85b6f808a14820b7922cb9167b7bed536acd3f3ac374fda86495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd251a4667e85b6f808a14820b7922cb9167b7bed536acd3f3ac374fda86495->enter($__internal_acd251a4667e85b6f808a14820b7922cb9167b7bed536acd3f3ac374fda86495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fb3810e36b23702933449502289cc926899384ae8b5b40072d6b5809e99db916->leave($__internal_fb3810e36b23702933449502289cc926899384ae8b5b40072d6b5809e99db916_prof);

        
        $__internal_acd251a4667e85b6f808a14820b7922cb9167b7bed536acd3f3ac374fda86495->leave($__internal_acd251a4667e85b6f808a14820b7922cb9167b7bed536acd3f3ac374fda86495_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
