<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0bc2f0d75881d2e71d4cdf58da3cff82f6b4c37e2569f068ddf003ba37b4926b extends Twig_Template
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
        $__internal_88dba45e468514e743dc530de7c3c9f1d614b5035453fc34772dcbc669350c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dba45e468514e743dc530de7c3c9f1d614b5035453fc34772dcbc669350c8a->enter($__internal_88dba45e468514e743dc530de7c3c9f1d614b5035453fc34772dcbc669350c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a20fee93d17d4f568498babc6a21f417149aee8baa8b7fa97929d87e510aee6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20fee93d17d4f568498babc6a21f417149aee8baa8b7fa97929d87e510aee6c->enter($__internal_a20fee93d17d4f568498babc6a21f417149aee8baa8b7fa97929d87e510aee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_88dba45e468514e743dc530de7c3c9f1d614b5035453fc34772dcbc669350c8a->leave($__internal_88dba45e468514e743dc530de7c3c9f1d614b5035453fc34772dcbc669350c8a_prof);

        
        $__internal_a20fee93d17d4f568498babc6a21f417149aee8baa8b7fa97929d87e510aee6c->leave($__internal_a20fee93d17d4f568498babc6a21f417149aee8baa8b7fa97929d87e510aee6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
