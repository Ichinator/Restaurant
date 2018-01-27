<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_09c0b48f29e4040169d53071ff3b353206182fc809a3ec6160416e3ba173d3bc extends Twig_Template
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
        $__internal_15eacd36f7a3e6b4518a27f65125dfa09e72df5175f83db9f8dbc7d6ab0bee3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15eacd36f7a3e6b4518a27f65125dfa09e72df5175f83db9f8dbc7d6ab0bee3f->enter($__internal_15eacd36f7a3e6b4518a27f65125dfa09e72df5175f83db9f8dbc7d6ab0bee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_23fcc2aa2caa0b106abceaaa3f13cb98936ae1ef0e4d4e563bcd5ecc2cbef5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fcc2aa2caa0b106abceaaa3f13cb98936ae1ef0e4d4e563bcd5ecc2cbef5d0->enter($__internal_23fcc2aa2caa0b106abceaaa3f13cb98936ae1ef0e4d4e563bcd5ecc2cbef5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_15eacd36f7a3e6b4518a27f65125dfa09e72df5175f83db9f8dbc7d6ab0bee3f->leave($__internal_15eacd36f7a3e6b4518a27f65125dfa09e72df5175f83db9f8dbc7d6ab0bee3f_prof);

        
        $__internal_23fcc2aa2caa0b106abceaaa3f13cb98936ae1ef0e4d4e563bcd5ecc2cbef5d0->leave($__internal_23fcc2aa2caa0b106abceaaa3f13cb98936ae1ef0e4d4e563bcd5ecc2cbef5d0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
