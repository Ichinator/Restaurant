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
        $__internal_9fc9fb7b6981dd34c922b7b507babd6486a1a2b1d657d97c2db08cd225d09209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc9fb7b6981dd34c922b7b507babd6486a1a2b1d657d97c2db08cd225d09209->enter($__internal_9fc9fb7b6981dd34c922b7b507babd6486a1a2b1d657d97c2db08cd225d09209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_714469a2401632b823e207b6ded48371c7bd7aaae39635ffb0f7d6d8e3203d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714469a2401632b823e207b6ded48371c7bd7aaae39635ffb0f7d6d8e3203d6b->enter($__internal_714469a2401632b823e207b6ded48371c7bd7aaae39635ffb0f7d6d8e3203d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_9fc9fb7b6981dd34c922b7b507babd6486a1a2b1d657d97c2db08cd225d09209->leave($__internal_9fc9fb7b6981dd34c922b7b507babd6486a1a2b1d657d97c2db08cd225d09209_prof);

        
        $__internal_714469a2401632b823e207b6ded48371c7bd7aaae39635ffb0f7d6d8e3203d6b->leave($__internal_714469a2401632b823e207b6ded48371c7bd7aaae39635ffb0f7d6d8e3203d6b_prof);

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
