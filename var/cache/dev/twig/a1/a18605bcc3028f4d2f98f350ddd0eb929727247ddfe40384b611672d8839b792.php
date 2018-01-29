<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_f261acb8a0b273cfb776841889bbbde77c9598697771ce668ba974820711b764 extends Twig_Template
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
        $__internal_43ba0200d5a5ea157279662742845ac7fdd75039b3675a9a3a4bda357cc43b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ba0200d5a5ea157279662742845ac7fdd75039b3675a9a3a4bda357cc43b21->enter($__internal_43ba0200d5a5ea157279662742845ac7fdd75039b3675a9a3a4bda357cc43b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_852689d6f16caeccf0554e5544ea647e32f8b6d9bbd42d3ddd7160edf3d67b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852689d6f16caeccf0554e5544ea647e32f8b6d9bbd42d3ddd7160edf3d67b7d->enter($__internal_852689d6f16caeccf0554e5544ea647e32f8b6d9bbd42d3ddd7160edf3d67b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_43ba0200d5a5ea157279662742845ac7fdd75039b3675a9a3a4bda357cc43b21->leave($__internal_43ba0200d5a5ea157279662742845ac7fdd75039b3675a9a3a4bda357cc43b21_prof);

        
        $__internal_852689d6f16caeccf0554e5544ea647e32f8b6d9bbd42d3ddd7160edf3d67b7d->leave($__internal_852689d6f16caeccf0554e5544ea647e32f8b6d9bbd42d3ddd7160edf3d67b7d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
