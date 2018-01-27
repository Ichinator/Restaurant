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
        $__internal_5c132f540acdbc2d9af220f6c6b567dbdd5994d73a03bff8f3b99e5c48507796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c132f540acdbc2d9af220f6c6b567dbdd5994d73a03bff8f3b99e5c48507796->enter($__internal_5c132f540acdbc2d9af220f6c6b567dbdd5994d73a03bff8f3b99e5c48507796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_4792b260d22e757d8378f332e492ee7ac146ce03b346ee18ad8863891c1bc5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4792b260d22e757d8378f332e492ee7ac146ce03b346ee18ad8863891c1bc5a3->enter($__internal_4792b260d22e757d8378f332e492ee7ac146ce03b346ee18ad8863891c1bc5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_5c132f540acdbc2d9af220f6c6b567dbdd5994d73a03bff8f3b99e5c48507796->leave($__internal_5c132f540acdbc2d9af220f6c6b567dbdd5994d73a03bff8f3b99e5c48507796_prof);

        
        $__internal_4792b260d22e757d8378f332e492ee7ac146ce03b346ee18ad8863891c1bc5a3->leave($__internal_4792b260d22e757d8378f332e492ee7ac146ce03b346ee18ad8863891c1bc5a3_prof);

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
