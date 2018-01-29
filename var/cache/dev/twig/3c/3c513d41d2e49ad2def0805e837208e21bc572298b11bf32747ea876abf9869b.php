<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_a1d4726817052f192b572652e749974429a3e4d46f787787a862ed21bcd192e6 extends Twig_Template
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
        $__internal_288db3f77b2fa852c985903c53deec92b76e12e0e042002524ac77762dfc5282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288db3f77b2fa852c985903c53deec92b76e12e0e042002524ac77762dfc5282->enter($__internal_288db3f77b2fa852c985903c53deec92b76e12e0e042002524ac77762dfc5282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_a9ec432d9ba14832447e4b23c87cdb2741a6df113e11b918ee1fdafd85aaa2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ec432d9ba14832447e4b23c87cdb2741a6df113e11b918ee1fdafd85aaa2a3->enter($__internal_a9ec432d9ba14832447e4b23c87cdb2741a6df113e11b918ee1fdafd85aaa2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_288db3f77b2fa852c985903c53deec92b76e12e0e042002524ac77762dfc5282->leave($__internal_288db3f77b2fa852c985903c53deec92b76e12e0e042002524ac77762dfc5282_prof);

        
        $__internal_a9ec432d9ba14832447e4b23c87cdb2741a6df113e11b918ee1fdafd85aaa2a3->leave($__internal_a9ec432d9ba14832447e4b23c87cdb2741a6df113e11b918ee1fdafd85aaa2a3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
