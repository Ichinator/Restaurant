<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2fa804d1b463eaa81ff289ee3d10e7eac2033f12ec9c64c2cf4c16e878fc52b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3bf21c5ebbc4fdf245a0b1a4a20d4687e65736ba3d10e94d7edf780198c6dfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf21c5ebbc4fdf245a0b1a4a20d4687e65736ba3d10e94d7edf780198c6dfcb->enter($__internal_3bf21c5ebbc4fdf245a0b1a4a20d4687e65736ba3d10e94d7edf780198c6dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ea992161da0c592b1e3ff1e7373492a5fc781ae4ef8ba4304a277e629657dded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea992161da0c592b1e3ff1e7373492a5fc781ae4ef8ba4304a277e629657dded->enter($__internal_ea992161da0c592b1e3ff1e7373492a5fc781ae4ef8ba4304a277e629657dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf21c5ebbc4fdf245a0b1a4a20d4687e65736ba3d10e94d7edf780198c6dfcb->leave($__internal_3bf21c5ebbc4fdf245a0b1a4a20d4687e65736ba3d10e94d7edf780198c6dfcb_prof);

        
        $__internal_ea992161da0c592b1e3ff1e7373492a5fc781ae4ef8ba4304a277e629657dded->leave($__internal_ea992161da0c592b1e3ff1e7373492a5fc781ae4ef8ba4304a277e629657dded_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a59927e72a5e1b3c26b470b12d7736318d2270a8c33e1447c4752e0c1365612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a59927e72a5e1b3c26b470b12d7736318d2270a8c33e1447c4752e0c1365612->enter($__internal_2a59927e72a5e1b3c26b470b12d7736318d2270a8c33e1447c4752e0c1365612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_595b5f054108859ebcadf2beac6f335bdc8c9b7e8318d18a148728baf1a5897d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595b5f054108859ebcadf2beac6f335bdc8c9b7e8318d18a148728baf1a5897d->enter($__internal_595b5f054108859ebcadf2beac6f335bdc8c9b7e8318d18a148728baf1a5897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_595b5f054108859ebcadf2beac6f335bdc8c9b7e8318d18a148728baf1a5897d->leave($__internal_595b5f054108859ebcadf2beac6f335bdc8c9b7e8318d18a148728baf1a5897d_prof);

        
        $__internal_2a59927e72a5e1b3c26b470b12d7736318d2270a8c33e1447c4752e0c1365612->leave($__internal_2a59927e72a5e1b3c26b470b12d7736318d2270a8c33e1447c4752e0c1365612_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
