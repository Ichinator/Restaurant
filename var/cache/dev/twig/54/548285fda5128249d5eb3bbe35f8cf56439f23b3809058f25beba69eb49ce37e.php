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
        $__internal_b6ce1cd4ad22d23199778b6d250bbedc754e3e98b983370f0b14c588b86e847d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ce1cd4ad22d23199778b6d250bbedc754e3e98b983370f0b14c588b86e847d->enter($__internal_b6ce1cd4ad22d23199778b6d250bbedc754e3e98b983370f0b14c588b86e847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7e7f08a6a69fcdaf482ff8470ab9fd23a9fa6a920c93083cbd69a7ca52dacac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7f08a6a69fcdaf482ff8470ab9fd23a9fa6a920c93083cbd69a7ca52dacac2->enter($__internal_7e7f08a6a69fcdaf482ff8470ab9fd23a9fa6a920c93083cbd69a7ca52dacac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b6ce1cd4ad22d23199778b6d250bbedc754e3e98b983370f0b14c588b86e847d->leave($__internal_b6ce1cd4ad22d23199778b6d250bbedc754e3e98b983370f0b14c588b86e847d_prof);

        
        $__internal_7e7f08a6a69fcdaf482ff8470ab9fd23a9fa6a920c93083cbd69a7ca52dacac2->leave($__internal_7e7f08a6a69fcdaf482ff8470ab9fd23a9fa6a920c93083cbd69a7ca52dacac2_prof);

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
