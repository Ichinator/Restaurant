<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4546785293ce7c20b4aa2d0b2c4294db656f82df494dc095de70b3d267773e02 extends Twig_Template
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
        $__internal_aa9b030ec78c84af841b26186ac9df65d03b6f49ff7d470bb5bdb81aee901b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9b030ec78c84af841b26186ac9df65d03b6f49ff7d470bb5bdb81aee901b15->enter($__internal_aa9b030ec78c84af841b26186ac9df65d03b6f49ff7d470bb5bdb81aee901b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c48d96f71cbcc93da03efd47ffc1282282b4d9a97db62332c7bf039c338ba917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48d96f71cbcc93da03efd47ffc1282282b4d9a97db62332c7bf039c338ba917->enter($__internal_c48d96f71cbcc93da03efd47ffc1282282b4d9a97db62332c7bf039c338ba917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_aa9b030ec78c84af841b26186ac9df65d03b6f49ff7d470bb5bdb81aee901b15->leave($__internal_aa9b030ec78c84af841b26186ac9df65d03b6f49ff7d470bb5bdb81aee901b15_prof);

        
        $__internal_c48d96f71cbcc93da03efd47ffc1282282b4d9a97db62332c7bf039c338ba917->leave($__internal_c48d96f71cbcc93da03efd47ffc1282282b4d9a97db62332c7bf039c338ba917_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
