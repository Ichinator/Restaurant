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
        $__internal_744c946d93dd8f2c75062f23d3ccf7b6936a8165563eb4c1b4438330cf8e50b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744c946d93dd8f2c75062f23d3ccf7b6936a8165563eb4c1b4438330cf8e50b1->enter($__internal_744c946d93dd8f2c75062f23d3ccf7b6936a8165563eb4c1b4438330cf8e50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c94b5529d11df48068aef577d6eebd1fbc9bde8e1587e25cebe7daefd1e9f83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94b5529d11df48068aef577d6eebd1fbc9bde8e1587e25cebe7daefd1e9f83e->enter($__internal_c94b5529d11df48068aef577d6eebd1fbc9bde8e1587e25cebe7daefd1e9f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_744c946d93dd8f2c75062f23d3ccf7b6936a8165563eb4c1b4438330cf8e50b1->leave($__internal_744c946d93dd8f2c75062f23d3ccf7b6936a8165563eb4c1b4438330cf8e50b1_prof);

        
        $__internal_c94b5529d11df48068aef577d6eebd1fbc9bde8e1587e25cebe7daefd1e9f83e->leave($__internal_c94b5529d11df48068aef577d6eebd1fbc9bde8e1587e25cebe7daefd1e9f83e_prof);

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
