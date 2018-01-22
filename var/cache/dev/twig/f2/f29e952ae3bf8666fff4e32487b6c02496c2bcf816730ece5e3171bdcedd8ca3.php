<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d83ed2f28443535b2f91068b03851ddffc438ed9b454a7755ba1695e6b7141cc extends Twig_Template
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
        $__internal_28e283280bfab5c523d1f96abae2f002fd381a02717b72761e6a2548eb2c40d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e283280bfab5c523d1f96abae2f002fd381a02717b72761e6a2548eb2c40d1->enter($__internal_28e283280bfab5c523d1f96abae2f002fd381a02717b72761e6a2548eb2c40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bd548c78f8acbc18eca22d676dd428d75697085f25f1e199a5c44e739c3cc339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd548c78f8acbc18eca22d676dd428d75697085f25f1e199a5c44e739c3cc339->enter($__internal_bd548c78f8acbc18eca22d676dd428d75697085f25f1e199a5c44e739c3cc339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_28e283280bfab5c523d1f96abae2f002fd381a02717b72761e6a2548eb2c40d1->leave($__internal_28e283280bfab5c523d1f96abae2f002fd381a02717b72761e6a2548eb2c40d1_prof);

        
        $__internal_bd548c78f8acbc18eca22d676dd428d75697085f25f1e199a5c44e739c3cc339->leave($__internal_bd548c78f8acbc18eca22d676dd428d75697085f25f1e199a5c44e739c3cc339_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
