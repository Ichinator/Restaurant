<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_fa077ab2ba3076f4c243b759911e869b1f2dc57fa8166aaaba7080846334b0bc extends Twig_Template
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
        $__internal_3aafa09ed0b70fd60d803ae0d8c285076311310541e6ac5c4f67d11b27196183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aafa09ed0b70fd60d803ae0d8c285076311310541e6ac5c4f67d11b27196183->enter($__internal_3aafa09ed0b70fd60d803ae0d8c285076311310541e6ac5c4f67d11b27196183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_cad2d4d1f803023c017be6066297aa149df890b65a5fcfadf3d7308b80b8c7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad2d4d1f803023c017be6066297aa149df890b65a5fcfadf3d7308b80b8c7ba->enter($__internal_cad2d4d1f803023c017be6066297aa149df890b65a5fcfadf3d7308b80b8c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3aafa09ed0b70fd60d803ae0d8c285076311310541e6ac5c4f67d11b27196183->leave($__internal_3aafa09ed0b70fd60d803ae0d8c285076311310541e6ac5c4f67d11b27196183_prof);

        
        $__internal_cad2d4d1f803023c017be6066297aa149df890b65a5fcfadf3d7308b80b8c7ba->leave($__internal_cad2d4d1f803023c017be6066297aa149df890b65a5fcfadf3d7308b80b8c7ba_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
