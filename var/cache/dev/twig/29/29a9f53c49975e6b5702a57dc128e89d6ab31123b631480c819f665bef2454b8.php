<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ebc641b4324a22b52f293c8aa2d433647d511b7b968bac1a424305d39561bce2 extends Twig_Template
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
        $__internal_84f78b4a0881aa879ef4d9431deaaba6f766533d14b6ee9a586af6e960965749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f78b4a0881aa879ef4d9431deaaba6f766533d14b6ee9a586af6e960965749->enter($__internal_84f78b4a0881aa879ef4d9431deaaba6f766533d14b6ee9a586af6e960965749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_27dcea8fde859afb3f96d6bab54c557b14a693911f79483bcaf6cfbe1e7e6eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dcea8fde859afb3f96d6bab54c557b14a693911f79483bcaf6cfbe1e7e6eb9->enter($__internal_27dcea8fde859afb3f96d6bab54c557b14a693911f79483bcaf6cfbe1e7e6eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_84f78b4a0881aa879ef4d9431deaaba6f766533d14b6ee9a586af6e960965749->leave($__internal_84f78b4a0881aa879ef4d9431deaaba6f766533d14b6ee9a586af6e960965749_prof);

        
        $__internal_27dcea8fde859afb3f96d6bab54c557b14a693911f79483bcaf6cfbe1e7e6eb9->leave($__internal_27dcea8fde859afb3f96d6bab54c557b14a693911f79483bcaf6cfbe1e7e6eb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
