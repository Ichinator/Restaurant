<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_57b383853e640304db3a122fb6f6df6c3c8fe4637df9e35af122454c7c2c58f9 extends Twig_Template
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
        $__internal_271f95ef17574065f9a2748f5aaaaac9cd2f6e2d4d13633858c7c9a6fc3e7d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271f95ef17574065f9a2748f5aaaaac9cd2f6e2d4d13633858c7c9a6fc3e7d6c->enter($__internal_271f95ef17574065f9a2748f5aaaaac9cd2f6e2d4d13633858c7c9a6fc3e7d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7c122385eec2ae1ef78138d32fc3c56691627f3f975b59a70233dacb6b099563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c122385eec2ae1ef78138d32fc3c56691627f3f975b59a70233dacb6b099563->enter($__internal_7c122385eec2ae1ef78138d32fc3c56691627f3f975b59a70233dacb6b099563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_271f95ef17574065f9a2748f5aaaaac9cd2f6e2d4d13633858c7c9a6fc3e7d6c->leave($__internal_271f95ef17574065f9a2748f5aaaaac9cd2f6e2d4d13633858c7c9a6fc3e7d6c_prof);

        
        $__internal_7c122385eec2ae1ef78138d32fc3c56691627f3f975b59a70233dacb6b099563->leave($__internal_7c122385eec2ae1ef78138d32fc3c56691627f3f975b59a70233dacb6b099563_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
