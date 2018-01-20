<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2fa804d1b463eaa81ff289ee3d10e7eac2033f12ec9c64c2cf4c16e878fc52b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ee014e37740d2efa1dda2b4791b5239d8454d8ac47dee22fa04483f83d322fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee014e37740d2efa1dda2b4791b5239d8454d8ac47dee22fa04483f83d322fcb->enter($__internal_ee014e37740d2efa1dda2b4791b5239d8454d8ac47dee22fa04483f83d322fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_9487dfa91b0c5df507e38c75f3c458ec7ce16559c471c4a17e05e46da945509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9487dfa91b0c5df507e38c75f3c458ec7ce16559c471c4a17e05e46da945509d->enter($__internal_9487dfa91b0c5df507e38c75f3c458ec7ce16559c471c4a17e05e46da945509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee014e37740d2efa1dda2b4791b5239d8454d8ac47dee22fa04483f83d322fcb->leave($__internal_ee014e37740d2efa1dda2b4791b5239d8454d8ac47dee22fa04483f83d322fcb_prof);

        
        $__internal_9487dfa91b0c5df507e38c75f3c458ec7ce16559c471c4a17e05e46da945509d->leave($__internal_9487dfa91b0c5df507e38c75f3c458ec7ce16559c471c4a17e05e46da945509d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dc46abc1b8b7c9aa025903c30322c57b5f491538efb373af0d8b1cc17191fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc46abc1b8b7c9aa025903c30322c57b5f491538efb373af0d8b1cc17191fe4->enter($__internal_5dc46abc1b8b7c9aa025903c30322c57b5f491538efb373af0d8b1cc17191fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f59eb9a6ae6c324b3a694c5aa2aa0c2a81ea79d492ccc505e751f31534c21bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59eb9a6ae6c324b3a694c5aa2aa0c2a81ea79d492ccc505e751f31534c21bee->enter($__internal_f59eb9a6ae6c324b3a694c5aa2aa0c2a81ea79d492ccc505e751f31534c21bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f59eb9a6ae6c324b3a694c5aa2aa0c2a81ea79d492ccc505e751f31534c21bee->leave($__internal_f59eb9a6ae6c324b3a694c5aa2aa0c2a81ea79d492ccc505e751f31534c21bee_prof);

        
        $__internal_5dc46abc1b8b7c9aa025903c30322c57b5f491538efb373af0d8b1cc17191fe4->leave($__internal_5dc46abc1b8b7c9aa025903c30322c57b5f491538efb373af0d8b1cc17191fe4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
