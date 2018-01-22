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
        $__internal_4c215ca368e5d0aba7cb5d2c74f649dd4ac176bfc3b098a55ba05236a7f86584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c215ca368e5d0aba7cb5d2c74f649dd4ac176bfc3b098a55ba05236a7f86584->enter($__internal_4c215ca368e5d0aba7cb5d2c74f649dd4ac176bfc3b098a55ba05236a7f86584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e4c11c1550b6cfff2883395178ba2a470b2db8007a4638edbded5df217f65c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c11c1550b6cfff2883395178ba2a470b2db8007a4638edbded5df217f65c5d->enter($__internal_e4c11c1550b6cfff2883395178ba2a470b2db8007a4638edbded5df217f65c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4c215ca368e5d0aba7cb5d2c74f649dd4ac176bfc3b098a55ba05236a7f86584->leave($__internal_4c215ca368e5d0aba7cb5d2c74f649dd4ac176bfc3b098a55ba05236a7f86584_prof);

        
        $__internal_e4c11c1550b6cfff2883395178ba2a470b2db8007a4638edbded5df217f65c5d->leave($__internal_e4c11c1550b6cfff2883395178ba2a470b2db8007a4638edbded5df217f65c5d_prof);

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
