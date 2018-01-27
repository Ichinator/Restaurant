<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_0e4bcf9fd36a55363e7417501cf5d877546e296056d7bb6eb2804d9be1d1015a extends Twig_Template
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
        $__internal_a1751c626d5991ee0f40bf9f882c58a4128dcc7790295503aa9ece76069f61ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1751c626d5991ee0f40bf9f882c58a4128dcc7790295503aa9ece76069f61ed->enter($__internal_a1751c626d5991ee0f40bf9f882c58a4128dcc7790295503aa9ece76069f61ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_8a8485b8f2409875de4bc4cfa2fc2a0a04922905933ba845d95b12327b52f945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8485b8f2409875de4bc4cfa2fc2a0a04922905933ba845d95b12327b52f945->enter($__internal_8a8485b8f2409875de4bc4cfa2fc2a0a04922905933ba845d95b12327b52f945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_a1751c626d5991ee0f40bf9f882c58a4128dcc7790295503aa9ece76069f61ed->leave($__internal_a1751c626d5991ee0f40bf9f882c58a4128dcc7790295503aa9ece76069f61ed_prof);

        
        $__internal_8a8485b8f2409875de4bc4cfa2fc2a0a04922905933ba845d95b12327b52f945->leave($__internal_8a8485b8f2409875de4bc4cfa2fc2a0a04922905933ba845d95b12327b52f945_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
