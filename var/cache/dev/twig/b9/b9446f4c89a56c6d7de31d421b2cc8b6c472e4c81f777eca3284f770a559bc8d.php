<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_a9f89bfcbcd0acb69bf0992fd1adec4f63f904d4de06218da42f9dfab5fa02cf extends Twig_Template
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
        $__internal_c7b25dc32d794809b1e4ae58f5661d549134ba9e1270140d8960c64348177dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b25dc32d794809b1e4ae58f5661d549134ba9e1270140d8960c64348177dbf->enter($__internal_c7b25dc32d794809b1e4ae58f5661d549134ba9e1270140d8960c64348177dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0621b7364b9c1ee9fac070f1dc617c02198e66d6e53713df76e0aad1612fc2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0621b7364b9c1ee9fac070f1dc617c02198e66d6e53713df76e0aad1612fc2a9->enter($__internal_0621b7364b9c1ee9fac070f1dc617c02198e66d6e53713df76e0aad1612fc2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c7b25dc32d794809b1e4ae58f5661d549134ba9e1270140d8960c64348177dbf->leave($__internal_c7b25dc32d794809b1e4ae58f5661d549134ba9e1270140d8960c64348177dbf_prof);

        
        $__internal_0621b7364b9c1ee9fac070f1dc617c02198e66d6e53713df76e0aad1612fc2a9->leave($__internal_0621b7364b9c1ee9fac070f1dc617c02198e66d6e53713df76e0aad1612fc2a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
