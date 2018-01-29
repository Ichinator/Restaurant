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
        $__internal_8e9b54760eabcf982ddcb12fe56f9dad0a11171ed2cfc245aa2c237e533ee7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9b54760eabcf982ddcb12fe56f9dad0a11171ed2cfc245aa2c237e533ee7a0->enter($__internal_8e9b54760eabcf982ddcb12fe56f9dad0a11171ed2cfc245aa2c237e533ee7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0b8f0f460e4882233644cf05a83cb89d4602425a25bc014277b18e7c427c6b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8f0f460e4882233644cf05a83cb89d4602425a25bc014277b18e7c427c6b27->enter($__internal_0b8f0f460e4882233644cf05a83cb89d4602425a25bc014277b18e7c427c6b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8e9b54760eabcf982ddcb12fe56f9dad0a11171ed2cfc245aa2c237e533ee7a0->leave($__internal_8e9b54760eabcf982ddcb12fe56f9dad0a11171ed2cfc245aa2c237e533ee7a0_prof);

        
        $__internal_0b8f0f460e4882233644cf05a83cb89d4602425a25bc014277b18e7c427c6b27->leave($__internal_0b8f0f460e4882233644cf05a83cb89d4602425a25bc014277b18e7c427c6b27_prof);

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
