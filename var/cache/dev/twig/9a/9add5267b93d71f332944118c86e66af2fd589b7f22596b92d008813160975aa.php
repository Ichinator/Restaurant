<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d4faa8b502a4bf9ff5250a0fa668a9c7c3b0db72da88844be174de3b791616b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dce64c11edd24b9f090c4515c89610044411a58121474ac7466856d1ae62d2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce64c11edd24b9f090c4515c89610044411a58121474ac7466856d1ae62d2c1->enter($__internal_dce64c11edd24b9f090c4515c89610044411a58121474ac7466856d1ae62d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_be67f4d29cdd279577f56c6d56406aa7d3f90adb7f8c009ce7a2906e39da6290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be67f4d29cdd279577f56c6d56406aa7d3f90adb7f8c009ce7a2906e39da6290->enter($__internal_be67f4d29cdd279577f56c6d56406aa7d3f90adb7f8c009ce7a2906e39da6290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce64c11edd24b9f090c4515c89610044411a58121474ac7466856d1ae62d2c1->leave($__internal_dce64c11edd24b9f090c4515c89610044411a58121474ac7466856d1ae62d2c1_prof);

        
        $__internal_be67f4d29cdd279577f56c6d56406aa7d3f90adb7f8c009ce7a2906e39da6290->leave($__internal_be67f4d29cdd279577f56c6d56406aa7d3f90adb7f8c009ce7a2906e39da6290_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8844cfcbf0647370be788b86e32aacedb5ab5db403b263a97d12ac9aa55aabad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8844cfcbf0647370be788b86e32aacedb5ab5db403b263a97d12ac9aa55aabad->enter($__internal_8844cfcbf0647370be788b86e32aacedb5ab5db403b263a97d12ac9aa55aabad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4f39bde590f2da9bb29d3569467ecb1040fb2f8fe6c42a9319c809ef7612ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f39bde590f2da9bb29d3569467ecb1040fb2f8fe6c42a9319c809ef7612ace->enter($__internal_a4f39bde590f2da9bb29d3569467ecb1040fb2f8fe6c42a9319c809ef7612ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a4f39bde590f2da9bb29d3569467ecb1040fb2f8fe6c42a9319c809ef7612ace->leave($__internal_a4f39bde590f2da9bb29d3569467ecb1040fb2f8fe6c42a9319c809ef7612ace_prof);

        
        $__internal_8844cfcbf0647370be788b86e32aacedb5ab5db403b263a97d12ac9aa55aabad->leave($__internal_8844cfcbf0647370be788b86e32aacedb5ab5db403b263a97d12ac9aa55aabad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
