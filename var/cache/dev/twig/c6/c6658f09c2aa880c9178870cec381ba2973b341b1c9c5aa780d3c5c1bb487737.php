<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a77bacb32889e3f42636496730ad20ad419474a43e9bea2043d6d72f438fb2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7079a7a91900710fe1778342a703c7ff5bfa38bc18950a1c1b19a855eeccdb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7079a7a91900710fe1778342a703c7ff5bfa38bc18950a1c1b19a855eeccdb31->enter($__internal_7079a7a91900710fe1778342a703c7ff5bfa38bc18950a1c1b19a855eeccdb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_bf1dfaeddb628fb16e9cf5deec098bf93ff59ab81f563092057a6d87758f46b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1dfaeddb628fb16e9cf5deec098bf93ff59ab81f563092057a6d87758f46b1->enter($__internal_bf1dfaeddb628fb16e9cf5deec098bf93ff59ab81f563092057a6d87758f46b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7079a7a91900710fe1778342a703c7ff5bfa38bc18950a1c1b19a855eeccdb31->leave($__internal_7079a7a91900710fe1778342a703c7ff5bfa38bc18950a1c1b19a855eeccdb31_prof);

        
        $__internal_bf1dfaeddb628fb16e9cf5deec098bf93ff59ab81f563092057a6d87758f46b1->leave($__internal_bf1dfaeddb628fb16e9cf5deec098bf93ff59ab81f563092057a6d87758f46b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c35b64c1bf08910b46b77850accf2c1f8369f513b6f732ab4e7f2d69bcd6afd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35b64c1bf08910b46b77850accf2c1f8369f513b6f732ab4e7f2d69bcd6afd9->enter($__internal_c35b64c1bf08910b46b77850accf2c1f8369f513b6f732ab4e7f2d69bcd6afd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8de80da125cb47ba3cb99ab10cb9c41c4eaf1e2d508304d1e947da80d7d289a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de80da125cb47ba3cb99ab10cb9c41c4eaf1e2d508304d1e947da80d7d289a3->enter($__internal_8de80da125cb47ba3cb99ab10cb9c41c4eaf1e2d508304d1e947da80d7d289a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8de80da125cb47ba3cb99ab10cb9c41c4eaf1e2d508304d1e947da80d7d289a3->leave($__internal_8de80da125cb47ba3cb99ab10cb9c41c4eaf1e2d508304d1e947da80d7d289a3_prof);

        
        $__internal_c35b64c1bf08910b46b77850accf2c1f8369f513b6f732ab4e7f2d69bcd6afd9->leave($__internal_c35b64c1bf08910b46b77850accf2c1f8369f513b6f732ab4e7f2d69bcd6afd9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
