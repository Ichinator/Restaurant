<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cddbbbeb3de59918190e5d1724bc1f77a44b1fe915395adf561252e486c19d61 extends Twig_Template
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
        $__internal_71499e3e41a7735e9d4170d406a8e365b7280adf44f0776dc3eb69c046a8e654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71499e3e41a7735e9d4170d406a8e365b7280adf44f0776dc3eb69c046a8e654->enter($__internal_71499e3e41a7735e9d4170d406a8e365b7280adf44f0776dc3eb69c046a8e654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_454cc9ff46fc85e53de4029d98989ad9efde0f36a63886a4dae9d70ddf5dfc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454cc9ff46fc85e53de4029d98989ad9efde0f36a63886a4dae9d70ddf5dfc08->enter($__internal_454cc9ff46fc85e53de4029d98989ad9efde0f36a63886a4dae9d70ddf5dfc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_71499e3e41a7735e9d4170d406a8e365b7280adf44f0776dc3eb69c046a8e654->leave($__internal_71499e3e41a7735e9d4170d406a8e365b7280adf44f0776dc3eb69c046a8e654_prof);

        
        $__internal_454cc9ff46fc85e53de4029d98989ad9efde0f36a63886a4dae9d70ddf5dfc08->leave($__internal_454cc9ff46fc85e53de4029d98989ad9efde0f36a63886a4dae9d70ddf5dfc08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
