<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_db892c3e5008796b3ad6ada3b4cfd23d6a66e3fd1af14935b5cd516d406165a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_243f1c11c1db8255e21d682e168105305f0667924c2b34a34b4e49be6175c983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243f1c11c1db8255e21d682e168105305f0667924c2b34a34b4e49be6175c983->enter($__internal_243f1c11c1db8255e21d682e168105305f0667924c2b34a34b4e49be6175c983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_416693430d7fd10849e3b2b26bbec76cbce6fd54dd6edd29bba1474bdc45de81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416693430d7fd10849e3b2b26bbec76cbce6fd54dd6edd29bba1474bdc45de81->enter($__internal_416693430d7fd10849e3b2b26bbec76cbce6fd54dd6edd29bba1474bdc45de81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243f1c11c1db8255e21d682e168105305f0667924c2b34a34b4e49be6175c983->leave($__internal_243f1c11c1db8255e21d682e168105305f0667924c2b34a34b4e49be6175c983_prof);

        
        $__internal_416693430d7fd10849e3b2b26bbec76cbce6fd54dd6edd29bba1474bdc45de81->leave($__internal_416693430d7fd10849e3b2b26bbec76cbce6fd54dd6edd29bba1474bdc45de81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f755082f3ed0eff40184de7d643367e4e03f23a6ce5fb481e144be871866d934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f755082f3ed0eff40184de7d643367e4e03f23a6ce5fb481e144be871866d934->enter($__internal_f755082f3ed0eff40184de7d643367e4e03f23a6ce5fb481e144be871866d934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27bc9e2ce115656b363a31074efa185be7aab34f977254d9c33d5ab4c9b250b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bc9e2ce115656b363a31074efa185be7aab34f977254d9c33d5ab4c9b250b7->enter($__internal_27bc9e2ce115656b363a31074efa185be7aab34f977254d9c33d5ab4c9b250b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_27bc9e2ce115656b363a31074efa185be7aab34f977254d9c33d5ab4c9b250b7->leave($__internal_27bc9e2ce115656b363a31074efa185be7aab34f977254d9c33d5ab4c9b250b7_prof);

        
        $__internal_f755082f3ed0eff40184de7d643367e4e03f23a6ce5fb481e144be871866d934->leave($__internal_f755082f3ed0eff40184de7d643367e4e03f23a6ce5fb481e144be871866d934_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
