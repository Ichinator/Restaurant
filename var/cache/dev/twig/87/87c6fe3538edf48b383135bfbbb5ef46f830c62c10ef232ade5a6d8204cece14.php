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
        $__internal_f8ac74df7c6ef623c005f887f35b6ba4bb123c2714e176da4f32444e7b845c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ac74df7c6ef623c005f887f35b6ba4bb123c2714e176da4f32444e7b845c3f->enter($__internal_f8ac74df7c6ef623c005f887f35b6ba4bb123c2714e176da4f32444e7b845c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_2a54f354e2a14e86d10d982e02829390343fd933928ed36dc152a684a127f3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a54f354e2a14e86d10d982e02829390343fd933928ed36dc152a684a127f3f7->enter($__internal_2a54f354e2a14e86d10d982e02829390343fd933928ed36dc152a684a127f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_f8ac74df7c6ef623c005f887f35b6ba4bb123c2714e176da4f32444e7b845c3f->leave($__internal_f8ac74df7c6ef623c005f887f35b6ba4bb123c2714e176da4f32444e7b845c3f_prof);

        
        $__internal_2a54f354e2a14e86d10d982e02829390343fd933928ed36dc152a684a127f3f7->leave($__internal_2a54f354e2a14e86d10d982e02829390343fd933928ed36dc152a684a127f3f7_prof);

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
