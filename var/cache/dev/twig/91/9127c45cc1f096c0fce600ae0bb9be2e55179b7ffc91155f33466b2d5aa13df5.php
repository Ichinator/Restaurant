<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ec124338fbe2d344c126f372256bcbdb4f611e31f5c38769261519f4d34006ed extends Twig_Template
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
        $__internal_d30fa179e9fccfc89a0c6979f5cfcc43933707c6cb629a7b8860d1141585543f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30fa179e9fccfc89a0c6979f5cfcc43933707c6cb629a7b8860d1141585543f->enter($__internal_d30fa179e9fccfc89a0c6979f5cfcc43933707c6cb629a7b8860d1141585543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c6d3dfa81d76fdcd283c15e177b964110aa24ae1bb9bddd7dcce9547eabf828e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d3dfa81d76fdcd283c15e177b964110aa24ae1bb9bddd7dcce9547eabf828e->enter($__internal_c6d3dfa81d76fdcd283c15e177b964110aa24ae1bb9bddd7dcce9547eabf828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d30fa179e9fccfc89a0c6979f5cfcc43933707c6cb629a7b8860d1141585543f->leave($__internal_d30fa179e9fccfc89a0c6979f5cfcc43933707c6cb629a7b8860d1141585543f_prof);

        
        $__internal_c6d3dfa81d76fdcd283c15e177b964110aa24ae1bb9bddd7dcce9547eabf828e->leave($__internal_c6d3dfa81d76fdcd283c15e177b964110aa24ae1bb9bddd7dcce9547eabf828e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
