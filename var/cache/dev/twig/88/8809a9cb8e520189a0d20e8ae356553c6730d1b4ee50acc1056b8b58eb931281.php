<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_706acb0b715a9b778bb273fcf398702ad039b1abdd518babbfdd74b513be23e2 extends Twig_Template
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
        $__internal_0c8e4d076cb947e8e8e006481ee2e98ca7c07d084a2bd04803e9d5e501c6d53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8e4d076cb947e8e8e006481ee2e98ca7c07d084a2bd04803e9d5e501c6d53c->enter($__internal_0c8e4d076cb947e8e8e006481ee2e98ca7c07d084a2bd04803e9d5e501c6d53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f92acfacbd2e29140a43f06ccddb8ec3a06a271addcd02cd4f6890cb43f69f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92acfacbd2e29140a43f06ccddb8ec3a06a271addcd02cd4f6890cb43f69f37->enter($__internal_f92acfacbd2e29140a43f06ccddb8ec3a06a271addcd02cd4f6890cb43f69f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0c8e4d076cb947e8e8e006481ee2e98ca7c07d084a2bd04803e9d5e501c6d53c->leave($__internal_0c8e4d076cb947e8e8e006481ee2e98ca7c07d084a2bd04803e9d5e501c6d53c_prof);

        
        $__internal_f92acfacbd2e29140a43f06ccddb8ec3a06a271addcd02cd4f6890cb43f69f37->leave($__internal_f92acfacbd2e29140a43f06ccddb8ec3a06a271addcd02cd4f6890cb43f69f37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
