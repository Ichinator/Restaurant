<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c8e9268ef3247d76f721a6320fcda0f254b149105268703b6222a71e02d8445f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9b7addb0b998befafed9393fb2fdda6f4c23c4c3d8ebb4484636f04a799ea3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7addb0b998befafed9393fb2fdda6f4c23c4c3d8ebb4484636f04a799ea3fa->enter($__internal_9b7addb0b998befafed9393fb2fdda6f4c23c4c3d8ebb4484636f04a799ea3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8c4da45970a3fd7653f9e7fa8037c34352ad1a03e1249a8b278e783d9dfcb422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4da45970a3fd7653f9e7fa8037c34352ad1a03e1249a8b278e783d9dfcb422->enter($__internal_8c4da45970a3fd7653f9e7fa8037c34352ad1a03e1249a8b278e783d9dfcb422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7addb0b998befafed9393fb2fdda6f4c23c4c3d8ebb4484636f04a799ea3fa->leave($__internal_9b7addb0b998befafed9393fb2fdda6f4c23c4c3d8ebb4484636f04a799ea3fa_prof);

        
        $__internal_8c4da45970a3fd7653f9e7fa8037c34352ad1a03e1249a8b278e783d9dfcb422->leave($__internal_8c4da45970a3fd7653f9e7fa8037c34352ad1a03e1249a8b278e783d9dfcb422_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67c1724261d1b5e20ae1dea52f8711f28606777f6c1e525d1205f5c0c8e9b502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c1724261d1b5e20ae1dea52f8711f28606777f6c1e525d1205f5c0c8e9b502->enter($__internal_67c1724261d1b5e20ae1dea52f8711f28606777f6c1e525d1205f5c0c8e9b502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_161268a374ccd2ddb8373915b3476795edc50d0744eae1535abfd549ce977dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161268a374ccd2ddb8373915b3476795edc50d0744eae1535abfd549ce977dc8->enter($__internal_161268a374ccd2ddb8373915b3476795edc50d0744eae1535abfd549ce977dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_161268a374ccd2ddb8373915b3476795edc50d0744eae1535abfd549ce977dc8->leave($__internal_161268a374ccd2ddb8373915b3476795edc50d0744eae1535abfd549ce977dc8_prof);

        
        $__internal_67c1724261d1b5e20ae1dea52f8711f28606777f6c1e525d1205f5c0c8e9b502->leave($__internal_67c1724261d1b5e20ae1dea52f8711f28606777f6c1e525d1205f5c0c8e9b502_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
