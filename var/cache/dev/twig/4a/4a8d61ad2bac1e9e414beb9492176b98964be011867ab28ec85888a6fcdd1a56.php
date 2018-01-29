<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cddbbbeb3de59918190e5d1724bc1f77a44b1fe915395adf561252e486c19d61 extends Twig_Template
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
        $__internal_d552d664661e615de6dd1338193eed6a2b2fa794c1e1784de12a0f362ba1e1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d552d664661e615de6dd1338193eed6a2b2fa794c1e1784de12a0f362ba1e1bc->enter($__internal_d552d664661e615de6dd1338193eed6a2b2fa794c1e1784de12a0f362ba1e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_11f446d71396d411678088573a10c25ab6137ab24133c907486e025d3e45722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f446d71396d411678088573a10c25ab6137ab24133c907486e025d3e45722a->enter($__internal_11f446d71396d411678088573a10c25ab6137ab24133c907486e025d3e45722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d552d664661e615de6dd1338193eed6a2b2fa794c1e1784de12a0f362ba1e1bc->leave($__internal_d552d664661e615de6dd1338193eed6a2b2fa794c1e1784de12a0f362ba1e1bc_prof);

        
        $__internal_11f446d71396d411678088573a10c25ab6137ab24133c907486e025d3e45722a->leave($__internal_11f446d71396d411678088573a10c25ab6137ab24133c907486e025d3e45722a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
