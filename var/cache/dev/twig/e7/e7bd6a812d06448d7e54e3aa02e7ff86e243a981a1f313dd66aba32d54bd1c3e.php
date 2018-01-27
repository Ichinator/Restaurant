<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_114a13ebcf91ecea836dd538477d69bda54abe63070cba20fef89f537f682385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_eb96af09ada951793a6db910b432d57e3d358d19ea97fc11bd2abfb7bee2ff3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb96af09ada951793a6db910b432d57e3d358d19ea97fc11bd2abfb7bee2ff3c->enter($__internal_eb96af09ada951793a6db910b432d57e3d358d19ea97fc11bd2abfb7bee2ff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9d5dd19a2d6b5e907680cce8d2f8b8e96ec743fe7b93a7d12365edc01d5d3073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5dd19a2d6b5e907680cce8d2f8b8e96ec743fe7b93a7d12365edc01d5d3073->enter($__internal_9d5dd19a2d6b5e907680cce8d2f8b8e96ec743fe7b93a7d12365edc01d5d3073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb96af09ada951793a6db910b432d57e3d358d19ea97fc11bd2abfb7bee2ff3c->leave($__internal_eb96af09ada951793a6db910b432d57e3d358d19ea97fc11bd2abfb7bee2ff3c_prof);

        
        $__internal_9d5dd19a2d6b5e907680cce8d2f8b8e96ec743fe7b93a7d12365edc01d5d3073->leave($__internal_9d5dd19a2d6b5e907680cce8d2f8b8e96ec743fe7b93a7d12365edc01d5d3073_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca9b997fd4895c4d7cce4ab2b5c771b7f4d2f9ab16f7c69cc0eec8f15ffa2eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9b997fd4895c4d7cce4ab2b5c771b7f4d2f9ab16f7c69cc0eec8f15ffa2eb0->enter($__internal_ca9b997fd4895c4d7cce4ab2b5c771b7f4d2f9ab16f7c69cc0eec8f15ffa2eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05b271b4cf7d11b99635cf7b87449709c04db0248bd628f09c8b945acfe880ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b271b4cf7d11b99635cf7b87449709c04db0248bd628f09c8b945acfe880ed->enter($__internal_05b271b4cf7d11b99635cf7b87449709c04db0248bd628f09c8b945acfe880ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_05b271b4cf7d11b99635cf7b87449709c04db0248bd628f09c8b945acfe880ed->leave($__internal_05b271b4cf7d11b99635cf7b87449709c04db0248bd628f09c8b945acfe880ed_prof);

        
        $__internal_ca9b997fd4895c4d7cce4ab2b5c771b7f4d2f9ab16f7c69cc0eec8f15ffa2eb0->leave($__internal_ca9b997fd4895c4d7cce4ab2b5c771b7f4d2f9ab16f7c69cc0eec8f15ffa2eb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
