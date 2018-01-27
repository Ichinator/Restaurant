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
        $__internal_48a3fa6b26b4bec85de5083604a9c777c59e40e0105d60ca4f0058f191e0151d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a3fa6b26b4bec85de5083604a9c777c59e40e0105d60ca4f0058f191e0151d->enter($__internal_48a3fa6b26b4bec85de5083604a9c777c59e40e0105d60ca4f0058f191e0151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

        $__internal_cd90874d29dae9c8a4a771a7d45bbe99ac28be10e2d197e0c9665df8b80ccf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd90874d29dae9c8a4a771a7d45bbe99ac28be10e2d197e0c9665df8b80ccf8a->enter($__internal_cd90874d29dae9c8a4a771a7d45bbe99ac28be10e2d197e0c9665df8b80ccf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:value.html.twig"));

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
        
        $__internal_48a3fa6b26b4bec85de5083604a9c777c59e40e0105d60ca4f0058f191e0151d->leave($__internal_48a3fa6b26b4bec85de5083604a9c777c59e40e0105d60ca4f0058f191e0151d_prof);

        
        $__internal_cd90874d29dae9c8a4a771a7d45bbe99ac28be10e2d197e0c9665df8b80ccf8a->leave($__internal_cd90874d29dae9c8a4a771a7d45bbe99ac28be10e2d197e0c9665df8b80ccf8a_prof);

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
