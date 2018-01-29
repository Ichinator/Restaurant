<?php

/* FOSCommentBundle:Thread:errors.html.twig */
class __TwigTemplate_2d436f3d7ea093b6a3d519d923455d448918dea914e1756528dd1dc201d88ab2 extends Twig_Template
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
        $__internal_6af374f403fda7af1a9052d3467c5a66a22115d4cff6eca8377e8ec8c4dbb3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af374f403fda7af1a9052d3467c5a66a22115d4cff6eca8377e8ec8c4dbb3e3->enter($__internal_6af374f403fda7af1a9052d3467c5a66a22115d4cff6eca8377e8ec8c4dbb3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:errors.html.twig"));

        $__internal_95566b0b909851515bc18f809780158a3a68306ee26a0a1183b829227ffe6e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95566b0b909851515bc18f809780158a3a68306ee26a0a1183b829227ffe6e41->enter($__internal_95566b0b909851515bc18f809780158a3a68306ee26a0a1183b829227ffe6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:errors.html.twig"));

        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 3
            echo "    <li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
        
        $__internal_6af374f403fda7af1a9052d3467c5a66a22115d4cff6eca8377e8ec8c4dbb3e3->leave($__internal_6af374f403fda7af1a9052d3467c5a66a22115d4cff6eca8377e8ec8c4dbb3e3_prof);

        
        $__internal_95566b0b909851515bc18f809780158a3a68306ee26a0a1183b829227ffe6e41->leave($__internal_95566b0b909851515bc18f809780158a3a68306ee26a0a1183b829227ffe6e41_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
{% for error in errors %}
    <li>{{ error }}</li>
{% endfor%}
</ul>
", "FOSCommentBundle:Thread:errors.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/errors.html.twig");
    }
}
