<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_64c4e2b2f14c3979e0e8db56b5997ee89d1f361545ce55ac3c96085bbc5cb7ea extends Twig_Template
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
        $__internal_fd1283e3bc9fa8a0501af89a673d7453c0af20f975646f9bf577a6ed79b87a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1283e3bc9fa8a0501af89a673d7453c0af20f975646f9bf577a6ed79b87a61->enter($__internal_fd1283e3bc9fa8a0501af89a673d7453c0af20f975646f9bf577a6ed79b87a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_3770fb05fe3b90674659a75f861ca7b7543cc4027d759c9af282742483c8b0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3770fb05fe3b90674659a75f861ca7b7543cc4027d759c9af282742483c8b0b6->enter($__internal_3770fb05fe3b90674659a75f861ca7b7543cc4027d759c9af282742483c8b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_fd1283e3bc9fa8a0501af89a673d7453c0af20f975646f9bf577a6ed79b87a61->leave($__internal_fd1283e3bc9fa8a0501af89a673d7453c0af20f975646f9bf577a6ed79b87a61_prof);

        
        $__internal_3770fb05fe3b90674659a75f861ca7b7543cc4027d759c9af282742483c8b0b6->leave($__internal_3770fb05fe3b90674659a75f861ca7b7543cc4027d759c9af282742483c8b0b6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
