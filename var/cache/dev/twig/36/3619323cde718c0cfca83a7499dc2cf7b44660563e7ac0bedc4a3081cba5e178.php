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
        $__internal_ae9c1ca46d7c3da19d13898268070c370ef08487c60ef3736778de9d7d68ce6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c1ca46d7c3da19d13898268070c370ef08487c60ef3736778de9d7d68ce6a->enter($__internal_ae9c1ca46d7c3da19d13898268070c370ef08487c60ef3736778de9d7d68ce6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6aaa5f81e3c79880aeffa2c47553cb316adca244d7ce6db33997f29992de5572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaa5f81e3c79880aeffa2c47553cb316adca244d7ce6db33997f29992de5572->enter($__internal_6aaa5f81e3c79880aeffa2c47553cb316adca244d7ce6db33997f29992de5572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ae9c1ca46d7c3da19d13898268070c370ef08487c60ef3736778de9d7d68ce6a->leave($__internal_ae9c1ca46d7c3da19d13898268070c370ef08487c60ef3736778de9d7d68ce6a_prof);

        
        $__internal_6aaa5f81e3c79880aeffa2c47553cb316adca244d7ce6db33997f29992de5572->leave($__internal_6aaa5f81e3c79880aeffa2c47553cb316adca244d7ce6db33997f29992de5572_prof);

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
