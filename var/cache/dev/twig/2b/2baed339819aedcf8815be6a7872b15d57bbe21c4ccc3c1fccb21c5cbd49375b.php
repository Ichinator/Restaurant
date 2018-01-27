<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_516ae0ec9d439b2f67d652e0f4b8c8603c131357f987a4b791c90259058595dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f98bb1c4e28c30d692a40bc35b724f40f34dd41de8023bb86119cadaea8f2647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98bb1c4e28c30d692a40bc35b724f40f34dd41de8023bb86119cadaea8f2647->enter($__internal_f98bb1c4e28c30d692a40bc35b724f40f34dd41de8023bb86119cadaea8f2647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_065f2c43bea444e378911161dd926416c45f3e0124534578c7faa99779578b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065f2c43bea444e378911161dd926416c45f3e0124534578c7faa99779578b4d->enter($__internal_065f2c43bea444e378911161dd926416c45f3e0124534578c7faa99779578b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f98bb1c4e28c30d692a40bc35b724f40f34dd41de8023bb86119cadaea8f2647->leave($__internal_f98bb1c4e28c30d692a40bc35b724f40f34dd41de8023bb86119cadaea8f2647_prof);

        
        $__internal_065f2c43bea444e378911161dd926416c45f3e0124534578c7faa99779578b4d->leave($__internal_065f2c43bea444e378911161dd926416c45f3e0124534578c7faa99779578b4d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b96a32fa479ed8b14fda298b20bec56ca49c7772e3d8663db2987bfc2456fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b96a32fa479ed8b14fda298b20bec56ca49c7772e3d8663db2987bfc2456fbc->enter($__internal_6b96a32fa479ed8b14fda298b20bec56ca49c7772e3d8663db2987bfc2456fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_03d5bde72232d0d25c055456ddbddba8dc199bb04de660438feea6a8688d0214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d5bde72232d0d25c055456ddbddba8dc199bb04de660438feea6a8688d0214->enter($__internal_03d5bde72232d0d25c055456ddbddba8dc199bb04de660438feea6a8688d0214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_03d5bde72232d0d25c055456ddbddba8dc199bb04de660438feea6a8688d0214->leave($__internal_03d5bde72232d0d25c055456ddbddba8dc199bb04de660438feea6a8688d0214_prof);

        
        $__internal_6b96a32fa479ed8b14fda298b20bec56ca49c7772e3d8663db2987bfc2456fbc->leave($__internal_6b96a32fa479ed8b14fda298b20bec56ca49c7772e3d8663db2987bfc2456fbc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_605651664df53eb1b3435260aac2df9d0339ef8c1dd3e3f36c5afc08bfb22b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605651664df53eb1b3435260aac2df9d0339ef8c1dd3e3f36c5afc08bfb22b66->enter($__internal_605651664df53eb1b3435260aac2df9d0339ef8c1dd3e3f36c5afc08bfb22b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1c824b7e61bcf7c65119e354b4b0ab3775613ff197db9ef0844dc452b6e8e70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c824b7e61bcf7c65119e354b4b0ab3775613ff197db9ef0844dc452b6e8e70b->enter($__internal_1c824b7e61bcf7c65119e354b4b0ab3775613ff197db9ef0844dc452b6e8e70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1c824b7e61bcf7c65119e354b4b0ab3775613ff197db9ef0844dc452b6e8e70b->leave($__internal_1c824b7e61bcf7c65119e354b4b0ab3775613ff197db9ef0844dc452b6e8e70b_prof);

        
        $__internal_605651664df53eb1b3435260aac2df9d0339ef8c1dd3e3f36c5afc08bfb22b66->leave($__internal_605651664df53eb1b3435260aac2df9d0339ef8c1dd3e3f36c5afc08bfb22b66_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b8fb8e7e3f787a225aba8a12e476f8a582d31e0caa89ccf040cd96e23af83aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fb8e7e3f787a225aba8a12e476f8a582d31e0caa89ccf040cd96e23af83aeb->enter($__internal_b8fb8e7e3f787a225aba8a12e476f8a582d31e0caa89ccf040cd96e23af83aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_af723ab2ad42210abfb15ff2ef9eb8290610db922ee08e5ba74e7cded90ec183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af723ab2ad42210abfb15ff2ef9eb8290610db922ee08e5ba74e7cded90ec183->enter($__internal_af723ab2ad42210abfb15ff2ef9eb8290610db922ee08e5ba74e7cded90ec183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_af723ab2ad42210abfb15ff2ef9eb8290610db922ee08e5ba74e7cded90ec183->leave($__internal_af723ab2ad42210abfb15ff2ef9eb8290610db922ee08e5ba74e7cded90ec183_prof);

        
        $__internal_b8fb8e7e3f787a225aba8a12e476f8a582d31e0caa89ccf040cd96e23af83aeb->leave($__internal_b8fb8e7e3f787a225aba8a12e476f8a582d31e0caa89ccf040cd96e23af83aeb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
