<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_ac3f684ca5fa621375557570e933866675549a4c8b7b9a99162bfdd2bd1e148c extends Twig_Template
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
        $__internal_928de40b4a149fd17beb13b49527034ff9d7355fa8094ca20bfd6f50cf9125d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928de40b4a149fd17beb13b49527034ff9d7355fa8094ca20bfd6f50cf9125d3->enter($__internal_928de40b4a149fd17beb13b49527034ff9d7355fa8094ca20bfd6f50cf9125d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_68e04006bb37c79705a7b0756ab24644ad9164ae1f4f915985168d95109280e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e04006bb37c79705a7b0756ab24644ad9164ae1f4f915985168d95109280e4->enter($__internal_68e04006bb37c79705a7b0756ab24644ad9164ae1f4f915985168d95109280e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_928de40b4a149fd17beb13b49527034ff9d7355fa8094ca20bfd6f50cf9125d3->leave($__internal_928de40b4a149fd17beb13b49527034ff9d7355fa8094ca20bfd6f50cf9125d3_prof);

        
        $__internal_68e04006bb37c79705a7b0756ab24644ad9164ae1f4f915985168d95109280e4->leave($__internal_68e04006bb37c79705a7b0756ab24644ad9164ae1f4f915985168d95109280e4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
