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
        $__internal_32470c80af7a086756c51642b72bb614442fecbe85f750aed1b7aee6329872c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32470c80af7a086756c51642b72bb614442fecbe85f750aed1b7aee6329872c4->enter($__internal_32470c80af7a086756c51642b72bb614442fecbe85f750aed1b7aee6329872c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_82d12d50804836c6620883d03d9790f60da2f27457576a5f75d3f4eefe0fe39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d12d50804836c6620883d03d9790f60da2f27457576a5f75d3f4eefe0fe39e->enter($__internal_82d12d50804836c6620883d03d9790f60da2f27457576a5f75d3f4eefe0fe39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_32470c80af7a086756c51642b72bb614442fecbe85f750aed1b7aee6329872c4->leave($__internal_32470c80af7a086756c51642b72bb614442fecbe85f750aed1b7aee6329872c4_prof);

        
        $__internal_82d12d50804836c6620883d03d9790f60da2f27457576a5f75d3f4eefe0fe39e->leave($__internal_82d12d50804836c6620883d03d9790f60da2f27457576a5f75d3f4eefe0fe39e_prof);

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
