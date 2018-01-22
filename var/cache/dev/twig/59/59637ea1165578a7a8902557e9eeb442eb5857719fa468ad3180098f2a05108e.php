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
        $__internal_c87b2995301245e0eb39348654cd9ac30b7a3a83291dff750d0fc72ac2392826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87b2995301245e0eb39348654cd9ac30b7a3a83291dff750d0fc72ac2392826->enter($__internal_c87b2995301245e0eb39348654cd9ac30b7a3a83291dff750d0fc72ac2392826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9e444330a9a7c5c67878032e04947fd19273cd3c9a5aeda6dde10d654559ef4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e444330a9a7c5c67878032e04947fd19273cd3c9a5aeda6dde10d654559ef4f->enter($__internal_9e444330a9a7c5c67878032e04947fd19273cd3c9a5aeda6dde10d654559ef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c87b2995301245e0eb39348654cd9ac30b7a3a83291dff750d0fc72ac2392826->leave($__internal_c87b2995301245e0eb39348654cd9ac30b7a3a83291dff750d0fc72ac2392826_prof);

        
        $__internal_9e444330a9a7c5c67878032e04947fd19273cd3c9a5aeda6dde10d654559ef4f->leave($__internal_9e444330a9a7c5c67878032e04947fd19273cd3c9a5aeda6dde10d654559ef4f_prof);

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
