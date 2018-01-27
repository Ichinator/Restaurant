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
        $__internal_14efbab6f26b1e0aa24d3239108a1fc2569b64099fb22bb794b6a3ceb2cee112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14efbab6f26b1e0aa24d3239108a1fc2569b64099fb22bb794b6a3ceb2cee112->enter($__internal_14efbab6f26b1e0aa24d3239108a1fc2569b64099fb22bb794b6a3ceb2cee112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9a873f465dbdc4a370856f597e836b32f103ee38c6673d629c665609d13afd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a873f465dbdc4a370856f597e836b32f103ee38c6673d629c665609d13afd26->enter($__internal_9a873f465dbdc4a370856f597e836b32f103ee38c6673d629c665609d13afd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_14efbab6f26b1e0aa24d3239108a1fc2569b64099fb22bb794b6a3ceb2cee112->leave($__internal_14efbab6f26b1e0aa24d3239108a1fc2569b64099fb22bb794b6a3ceb2cee112_prof);

        
        $__internal_9a873f465dbdc4a370856f597e836b32f103ee38c6673d629c665609d13afd26->leave($__internal_9a873f465dbdc4a370856f597e836b32f103ee38c6673d629c665609d13afd26_prof);

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
