<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4ddc14ea5db4985ce521562d9670d5e0447f7cc6596942562453388a1d8247a0 extends Twig_Template
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
        $__internal_71f779d1f12ef5fb02e50531e80c4ffdd2af5aa21ba2ae072d3e3c173c9cce6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f779d1f12ef5fb02e50531e80c4ffdd2af5aa21ba2ae072d3e3c173c9cce6e->enter($__internal_71f779d1f12ef5fb02e50531e80c4ffdd2af5aa21ba2ae072d3e3c173c9cce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_046bf216f9cb666fe961038961c15548b9728bc3ab11bd8055466803eff04598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046bf216f9cb666fe961038961c15548b9728bc3ab11bd8055466803eff04598->enter($__internal_046bf216f9cb666fe961038961c15548b9728bc3ab11bd8055466803eff04598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_71f779d1f12ef5fb02e50531e80c4ffdd2af5aa21ba2ae072d3e3c173c9cce6e->leave($__internal_71f779d1f12ef5fb02e50531e80c4ffdd2af5aa21ba2ae072d3e3c173c9cce6e_prof);

        
        $__internal_046bf216f9cb666fe961038961c15548b9728bc3ab11bd8055466803eff04598->leave($__internal_046bf216f9cb666fe961038961c15548b9728bc3ab11bd8055466803eff04598_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
