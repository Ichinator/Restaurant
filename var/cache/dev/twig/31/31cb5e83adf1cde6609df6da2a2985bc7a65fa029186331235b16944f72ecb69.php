<?php

/* KMSFroalaEditorBundle:Form:value.html.twig */
class __TwigTemplate_5ccef9c4bae900fbfe85c6966f2972aa6130055810b2e6449429d079539a8e30 extends Twig_Template
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
        $__internal_611c58b38a4c14e6158b1f50c06790a6bb55f0d4e1e7d597ce4868e49a6e5335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611c58b38a4c14e6158b1f50c06790a6bb55f0d4e1e7d597ce4868e49a6e5335->enter($__internal_611c58b38a4c14e6158b1f50c06790a6bb55f0d4e1e7d597ce4868e49a6e5335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        $__internal_8e08d9fe8ed3425abbaac7a457df93ea5f541b4edf160d9aef5f5ee90539071c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e08d9fe8ed3425abbaac7a457df93ea5f541b4edf160d9aef5f5ee90539071c->enter($__internal_8e08d9fe8ed3425abbaac7a457df93ea5f541b4edf160d9aef5f5ee90539071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        // line 1
        if (twig_test_iterable(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "JSON.parse( \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_jsonencode_filter(($context["value"] ?? $this->getContext($context, "value"))), "js"), "html", null, true);
            echo "\" ),
";
        } elseif ((        // line 2
($context["value"] ?? $this->getContext($context, "value")) === true)) {
            echo "true,
";
        } elseif ((        // line 3
($context["value"] ?? $this->getContext($context, "value")) === false)) {
            echo "false,
";
        } elseif (preg_match("/^\\d+\$/",         // line 4
($context["value"] ?? $this->getContext($context, "value")))) {
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo ",
";
        } else {
            // line 5
            echo "\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\",
";
        }
        
        $__internal_611c58b38a4c14e6158b1f50c06790a6bb55f0d4e1e7d597ce4868e49a6e5335->leave($__internal_611c58b38a4c14e6158b1f50c06790a6bb55f0d4e1e7d597ce4868e49a6e5335_prof);

        
        $__internal_8e08d9fe8ed3425abbaac7a457df93ea5f541b4edf160d9aef5f5ee90539071c->leave($__internal_8e08d9fe8ed3425abbaac7a457df93ea5f541b4edf160d9aef5f5ee90539071c_prof);

    }

    public function getTemplateName()
    {
        return "KMSFroalaEditorBundle:Form:value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 4,  35 => 3,  31 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if value is iterable %}JSON.parse( \"{{ value | json_encode | raw | escape('js')  }}\" ),
{% elseif value is same as(true) %}true,
{% elseif value is same as(false) %}false,
{% elseif value matches '/^\\\\d+\$/' %}{{ value }},
{% else %}\"{{ value }}\",
{% endif %}", "KMSFroalaEditorBundle:Form:value.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/kms/froala-editor-bundle/Resources/views/Form/value.html.twig");
    }
}
