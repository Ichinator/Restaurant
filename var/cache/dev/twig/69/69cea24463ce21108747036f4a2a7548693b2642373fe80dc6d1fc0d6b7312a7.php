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
        $__internal_296f0ebd7fd364cb83e6a8b7564000dc3413e53eb3b45066638708b57dc18a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296f0ebd7fd364cb83e6a8b7564000dc3413e53eb3b45066638708b57dc18a20->enter($__internal_296f0ebd7fd364cb83e6a8b7564000dc3413e53eb3b45066638708b57dc18a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_e833856bd9a041f381ba90347675475ccd5e6c02bfc7128a6f79254ba144ce23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e833856bd9a041f381ba90347675475ccd5e6c02bfc7128a6f79254ba144ce23->enter($__internal_e833856bd9a041f381ba90347675475ccd5e6c02bfc7128a6f79254ba144ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

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
        
        $__internal_296f0ebd7fd364cb83e6a8b7564000dc3413e53eb3b45066638708b57dc18a20->leave($__internal_296f0ebd7fd364cb83e6a8b7564000dc3413e53eb3b45066638708b57dc18a20_prof);

        
        $__internal_e833856bd9a041f381ba90347675475ccd5e6c02bfc7128a6f79254ba144ce23->leave($__internal_e833856bd9a041f381ba90347675475ccd5e6c02bfc7128a6f79254ba144ce23_prof);

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
