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
        $__internal_517543576b3b05bd8f53dba4bb54f1c546396904b2092f61e176fd1365345517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517543576b3b05bd8f53dba4bb54f1c546396904b2092f61e176fd1365345517->enter($__internal_517543576b3b05bd8f53dba4bb54f1c546396904b2092f61e176fd1365345517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_97fc72700a3727140cd9c6b70a7fcce223de17bc2deed8f456360c1c63fe3a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fc72700a3727140cd9c6b70a7fcce223de17bc2deed8f456360c1c63fe3a22->enter($__internal_97fc72700a3727140cd9c6b70a7fcce223de17bc2deed8f456360c1c63fe3a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_517543576b3b05bd8f53dba4bb54f1c546396904b2092f61e176fd1365345517->leave($__internal_517543576b3b05bd8f53dba4bb54f1c546396904b2092f61e176fd1365345517_prof);

        
        $__internal_97fc72700a3727140cd9c6b70a7fcce223de17bc2deed8f456360c1c63fe3a22->leave($__internal_97fc72700a3727140cd9c6b70a7fcce223de17bc2deed8f456360c1c63fe3a22_prof);

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
