<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_cf1648894b9ccd727800114e1fa679a3e5115e596678cb9a324759c1442f9b69 extends Twig_Template
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
        $__internal_e3cb80e2ef75fd9e068a0ebf85a1a24041c320556eab838c3a9165527b2e4fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cb80e2ef75fd9e068a0ebf85a1a24041c320556eab838c3a9165527b2e4fa6->enter($__internal_e3cb80e2ef75fd9e068a0ebf85a1a24041c320556eab838c3a9165527b2e4fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_b051449f2abc1eb0de3a3cb4b87c2671b5b442c54d1ecab76a38e01276eb9916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051449f2abc1eb0de3a3cb4b87c2671b5b442c54d1ecab76a38e01276eb9916->enter($__internal_b051449f2abc1eb0de3a3cb4b87c2671b5b442c54d1ecab76a38e01276eb9916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e3cb80e2ef75fd9e068a0ebf85a1a24041c320556eab838c3a9165527b2e4fa6->leave($__internal_e3cb80e2ef75fd9e068a0ebf85a1a24041c320556eab838c3a9165527b2e4fa6_prof);

        
        $__internal_b051449f2abc1eb0de3a3cb4b87c2671b5b442c54d1ecab76a38e01276eb9916->leave($__internal_b051449f2abc1eb0de3a3cb4b87c2671b5b442c54d1ecab76a38e01276eb9916_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
