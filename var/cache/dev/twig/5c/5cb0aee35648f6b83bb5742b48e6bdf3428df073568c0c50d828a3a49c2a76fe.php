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
        $__internal_3eb37a7fa04552a736559e4d96169a63d1c1e2b51d4fcca646843cf864d64366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb37a7fa04552a736559e4d96169a63d1c1e2b51d4fcca646843cf864d64366->enter($__internal_3eb37a7fa04552a736559e4d96169a63d1c1e2b51d4fcca646843cf864d64366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5cea6b220fd880a2e5f8f12ca91805058f701086fa04bc56a68de0f51976992d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea6b220fd880a2e5f8f12ca91805058f701086fa04bc56a68de0f51976992d->enter($__internal_5cea6b220fd880a2e5f8f12ca91805058f701086fa04bc56a68de0f51976992d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3eb37a7fa04552a736559e4d96169a63d1c1e2b51d4fcca646843cf864d64366->leave($__internal_3eb37a7fa04552a736559e4d96169a63d1c1e2b51d4fcca646843cf864d64366_prof);

        
        $__internal_5cea6b220fd880a2e5f8f12ca91805058f701086fa04bc56a68de0f51976992d->leave($__internal_5cea6b220fd880a2e5f8f12ca91805058f701086fa04bc56a68de0f51976992d_prof);

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
