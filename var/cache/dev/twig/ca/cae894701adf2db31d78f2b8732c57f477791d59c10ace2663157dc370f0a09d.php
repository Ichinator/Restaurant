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
        $__internal_6cd4b2a463707927daf836c7dffd58471b7f6effacbde4ba44da9ca219840071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd4b2a463707927daf836c7dffd58471b7f6effacbde4ba44da9ca219840071->enter($__internal_6cd4b2a463707927daf836c7dffd58471b7f6effacbde4ba44da9ca219840071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_51f053c55d1a003e7443d98b62dd56e05fb1ee059d6e6ca5122d1885e00f6054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f053c55d1a003e7443d98b62dd56e05fb1ee059d6e6ca5122d1885e00f6054->enter($__internal_51f053c55d1a003e7443d98b62dd56e05fb1ee059d6e6ca5122d1885e00f6054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_6cd4b2a463707927daf836c7dffd58471b7f6effacbde4ba44da9ca219840071->leave($__internal_6cd4b2a463707927daf836c7dffd58471b7f6effacbde4ba44da9ca219840071_prof);

        
        $__internal_51f053c55d1a003e7443d98b62dd56e05fb1ee059d6e6ca5122d1885e00f6054->leave($__internal_51f053c55d1a003e7443d98b62dd56e05fb1ee059d6e6ca5122d1885e00f6054_prof);

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
