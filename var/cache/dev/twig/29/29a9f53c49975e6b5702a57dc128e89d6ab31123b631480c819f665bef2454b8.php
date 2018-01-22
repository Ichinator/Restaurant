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
        $__internal_90adedb4b2edcd74dfa6cb74a969b0f89855e2375da21375a89b9151bc388820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90adedb4b2edcd74dfa6cb74a969b0f89855e2375da21375a89b9151bc388820->enter($__internal_90adedb4b2edcd74dfa6cb74a969b0f89855e2375da21375a89b9151bc388820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fde41015e077fae36db7d33faa931e698d086e9f76cbc22006d30403be5b4f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde41015e077fae36db7d33faa931e698d086e9f76cbc22006d30403be5b4f45->enter($__internal_fde41015e077fae36db7d33faa931e698d086e9f76cbc22006d30403be5b4f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_90adedb4b2edcd74dfa6cb74a969b0f89855e2375da21375a89b9151bc388820->leave($__internal_90adedb4b2edcd74dfa6cb74a969b0f89855e2375da21375a89b9151bc388820_prof);

        
        $__internal_fde41015e077fae36db7d33faa931e698d086e9f76cbc22006d30403be5b4f45->leave($__internal_fde41015e077fae36db7d33faa931e698d086e9f76cbc22006d30403be5b4f45_prof);

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
