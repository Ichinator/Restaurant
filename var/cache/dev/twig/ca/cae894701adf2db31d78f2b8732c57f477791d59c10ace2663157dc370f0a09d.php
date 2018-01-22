<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_e6419bdf0aadba1e1907faf0ab53aa2ec01d397daf4c918ca0ad5d8068a80360 extends Twig_Template
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
        $__internal_62babbeddd0bde410a9bbd35e0c84c0778226c2137a814db3889576ca2feec8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62babbeddd0bde410a9bbd35e0c84c0778226c2137a814db3889576ca2feec8b->enter($__internal_62babbeddd0bde410a9bbd35e0c84c0778226c2137a814db3889576ca2feec8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_c89f9236924f1f59b1ba0d63d7d977f49b59319316927db1bd74fe20769bafe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89f9236924f1f59b1ba0d63d7d977f49b59319316927db1bd74fe20769bafe1->enter($__internal_c89f9236924f1f59b1ba0d63d7d977f49b59319316927db1bd74fe20769bafe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_62babbeddd0bde410a9bbd35e0c84c0778226c2137a814db3889576ca2feec8b->leave($__internal_62babbeddd0bde410a9bbd35e0c84c0778226c2137a814db3889576ca2feec8b_prof);

        
        $__internal_c89f9236924f1f59b1ba0d63d7d977f49b59319316927db1bd74fe20769bafe1->leave($__internal_c89f9236924f1f59b1ba0d63d7d977f49b59319316927db1bd74fe20769bafe1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
", "EasyAdminBundle:default:field_text.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
