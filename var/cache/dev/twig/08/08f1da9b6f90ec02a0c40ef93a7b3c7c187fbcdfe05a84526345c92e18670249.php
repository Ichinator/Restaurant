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
        $__internal_da90f3e082fbfc00d2147d03ec7cef7913aad045bfa45f053c5297b2031f3e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da90f3e082fbfc00d2147d03ec7cef7913aad045bfa45f053c5297b2031f3e3a->enter($__internal_da90f3e082fbfc00d2147d03ec7cef7913aad045bfa45f053c5297b2031f3e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:errors.html.twig"));

        $__internal_f26049adabf125a44a4b83bfec34ea35fdfccd6284eed13f462a94613bd4ee75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26049adabf125a44a4b83bfec34ea35fdfccd6284eed13f462a94613bd4ee75->enter($__internal_f26049adabf125a44a4b83bfec34ea35fdfccd6284eed13f462a94613bd4ee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:errors.html.twig"));

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
        
        $__internal_da90f3e082fbfc00d2147d03ec7cef7913aad045bfa45f053c5297b2031f3e3a->leave($__internal_da90f3e082fbfc00d2147d03ec7cef7913aad045bfa45f053c5297b2031f3e3a_prof);

        
        $__internal_f26049adabf125a44a4b83bfec34ea35fdfccd6284eed13f462a94613bd4ee75->leave($__internal_f26049adabf125a44a4b83bfec34ea35fdfccd6284eed13f462a94613bd4ee75_prof);

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
