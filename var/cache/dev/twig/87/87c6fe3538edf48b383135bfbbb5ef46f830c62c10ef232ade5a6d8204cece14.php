<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_3be2e017580165f96aedf599a21ca19d15bbeacae01a7e70adb41ab97aa6dfe6 extends Twig_Template
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
        $__internal_a9f87b6e27796ffb5e47cd140284c946390e22dd7023250d05079ad793472818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f87b6e27796ffb5e47cd140284c946390e22dd7023250d05079ad793472818->enter($__internal_a9f87b6e27796ffb5e47cd140284c946390e22dd7023250d05079ad793472818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_1549c96606d5f3df187558000ae492f7989dc7b1249abe1208be284cc72fbda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1549c96606d5f3df187558000ae492f7989dc7b1249abe1208be284cc72fbda9->enter($__internal_1549c96606d5f3df187558000ae492f7989dc7b1249abe1208be284cc72fbda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a9f87b6e27796ffb5e47cd140284c946390e22dd7023250d05079ad793472818->leave($__internal_a9f87b6e27796ffb5e47cd140284c946390e22dd7023250d05079ad793472818_prof);

        
        $__internal_1549c96606d5f3df187558000ae492f7989dc7b1249abe1208be284cc72fbda9->leave($__internal_1549c96606d5f3df187558000ae492f7989dc7b1249abe1208be284cc72fbda9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_date.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
