<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_41b6db3adead07584eec0557ea8d6f94549bfc799773ad4454804c9578afc75a extends Twig_Template
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
        $__internal_77caf7b0ebb8a28d63bbab9cc2f1cfce65ceddc06feaa0e243d3adf4e598e5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77caf7b0ebb8a28d63bbab9cc2f1cfce65ceddc06feaa0e243d3adf4e598e5a4->enter($__internal_77caf7b0ebb8a28d63bbab9cc2f1cfce65ceddc06feaa0e243d3adf4e598e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_40728eec69764151460b4ff194a72dd25580dd638199ba37a319b0da067ed26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40728eec69764151460b4ff194a72dd25580dd638199ba37a319b0da067ed26d->enter($__internal_40728eec69764151460b4ff194a72dd25580dd638199ba37a319b0da067ed26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_77caf7b0ebb8a28d63bbab9cc2f1cfce65ceddc06feaa0e243d3adf4e598e5a4->leave($__internal_77caf7b0ebb8a28d63bbab9cc2f1cfce65ceddc06feaa0e243d3adf4e598e5a4_prof);

        
        $__internal_40728eec69764151460b4ff194a72dd25580dd638199ba37a319b0da067ed26d->leave($__internal_40728eec69764151460b4ff194a72dd25580dd638199ba37a319b0da067ed26d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
