<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5dbd066d64fa7daee3b8438d68226e343e4344c49c32e15ea83f5b430eb14ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9092b7974885ff1f5b916a2c063c8fe1f9b2b3438a2cb9a9015e353f67037c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9092b7974885ff1f5b916a2c063c8fe1f9b2b3438a2cb9a9015e353f67037c1c->enter($__internal_9092b7974885ff1f5b916a2c063c8fe1f9b2b3438a2cb9a9015e353f67037c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a2b182c5b4408268b87b12a7394181940cce47e85726c2665262c44e29856804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b182c5b4408268b87b12a7394181940cce47e85726c2665262c44e29856804->enter($__internal_a2b182c5b4408268b87b12a7394181940cce47e85726c2665262c44e29856804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9092b7974885ff1f5b916a2c063c8fe1f9b2b3438a2cb9a9015e353f67037c1c->leave($__internal_9092b7974885ff1f5b916a2c063c8fe1f9b2b3438a2cb9a9015e353f67037c1c_prof);

        
        $__internal_a2b182c5b4408268b87b12a7394181940cce47e85726c2665262c44e29856804->leave($__internal_a2b182c5b4408268b87b12a7394181940cce47e85726c2665262c44e29856804_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06fc4e49211b3c4ecf53cfc384bcdc240d15a1301f7ff53fc1b5a74137e1d08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fc4e49211b3c4ecf53cfc384bcdc240d15a1301f7ff53fc1b5a74137e1d08e->enter($__internal_06fc4e49211b3c4ecf53cfc384bcdc240d15a1301f7ff53fc1b5a74137e1d08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb3f8cb9763392d160d546e5b7e19382af509390b20f0307f9764ec85674129b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3f8cb9763392d160d546e5b7e19382af509390b20f0307f9764ec85674129b->enter($__internal_eb3f8cb9763392d160d546e5b7e19382af509390b20f0307f9764ec85674129b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_eb3f8cb9763392d160d546e5b7e19382af509390b20f0307f9764ec85674129b->leave($__internal_eb3f8cb9763392d160d546e5b7e19382af509390b20f0307f9764ec85674129b_prof);

        
        $__internal_06fc4e49211b3c4ecf53cfc384bcdc240d15a1301f7ff53fc1b5a74137e1d08e->leave($__internal_06fc4e49211b3c4ecf53cfc384bcdc240d15a1301f7ff53fc1b5a74137e1d08e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
