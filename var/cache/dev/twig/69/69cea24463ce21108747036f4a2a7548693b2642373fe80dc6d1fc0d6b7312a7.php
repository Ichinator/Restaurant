<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_7435ef390c96ed1404e3be8283f70313f651ed6afb20f563c6cccfd30dd9d8da extends Twig_Template
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
        $__internal_fa773594f327008bf33e9ea76ddbd7ea80721dc14f342929b661526a0a3a94af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa773594f327008bf33e9ea76ddbd7ea80721dc14f342929b661526a0a3a94af->enter($__internal_fa773594f327008bf33e9ea76ddbd7ea80721dc14f342929b661526a0a3a94af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_de44ee420b7da6fe17652e3559a3bdecda440cbe5a299853f289d59ccb03001a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de44ee420b7da6fe17652e3559a3bdecda440cbe5a299853f289d59ccb03001a->enter($__internal_de44ee420b7da6fe17652e3559a3bdecda440cbe5a299853f289d59ccb03001a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_fa773594f327008bf33e9ea76ddbd7ea80721dc14f342929b661526a0a3a94af->leave($__internal_fa773594f327008bf33e9ea76ddbd7ea80721dc14f342929b661526a0a3a94af_prof);

        
        $__internal_de44ee420b7da6fe17652e3559a3bdecda440cbe5a299853f289d59ccb03001a->leave($__internal_de44ee420b7da6fe17652e3559a3bdecda440cbe5a299853f289d59ccb03001a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
