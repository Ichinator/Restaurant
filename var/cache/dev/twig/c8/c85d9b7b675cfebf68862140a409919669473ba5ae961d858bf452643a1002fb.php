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
        $__internal_3b3ff0fd3a54a36fae27d23c1bb7a669fdb3f57f15bf2e29e729d74e8d08873b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3ff0fd3a54a36fae27d23c1bb7a669fdb3f57f15bf2e29e729d74e8d08873b->enter($__internal_3b3ff0fd3a54a36fae27d23c1bb7a669fdb3f57f15bf2e29e729d74e8d08873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ad709bd15a10ae628eb8b7be756ab5d729d24fedc1325815bf8f29d4d7469358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad709bd15a10ae628eb8b7be756ab5d729d24fedc1325815bf8f29d4d7469358->enter($__internal_ad709bd15a10ae628eb8b7be756ab5d729d24fedc1325815bf8f29d4d7469358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3b3ff0fd3a54a36fae27d23c1bb7a669fdb3f57f15bf2e29e729d74e8d08873b->leave($__internal_3b3ff0fd3a54a36fae27d23c1bb7a669fdb3f57f15bf2e29e729d74e8d08873b_prof);

        
        $__internal_ad709bd15a10ae628eb8b7be756ab5d729d24fedc1325815bf8f29d4d7469358->leave($__internal_ad709bd15a10ae628eb8b7be756ab5d729d24fedc1325815bf8f29d4d7469358_prof);

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
