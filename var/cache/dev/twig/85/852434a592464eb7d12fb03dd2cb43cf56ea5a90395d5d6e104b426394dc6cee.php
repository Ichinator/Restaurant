<?php

/* :default:index.html.twig */
class __TwigTemplate_eb393832a25084efde0a24c75d43536496e428abd3606ea7a9bf8c39eb288100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da4a2137f8dbee9b63abbf3121351c83f33e5ceb00558e3f7a1bdb6fc28371dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4a2137f8dbee9b63abbf3121351c83f33e5ceb00558e3f7a1bdb6fc28371dc->enter($__internal_da4a2137f8dbee9b63abbf3121351c83f33e5ceb00558e3f7a1bdb6fc28371dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_15d2d24d6a2170bffe25f20499a726a9e8e8568a0dd6b76719444b74e854837a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d2d24d6a2170bffe25f20499a726a9e8e8568a0dd6b76719444b74e854837a->enter($__internal_15d2d24d6a2170bffe25f20499a726a9e8e8568a0dd6b76719444b74e854837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4a2137f8dbee9b63abbf3121351c83f33e5ceb00558e3f7a1bdb6fc28371dc->leave($__internal_da4a2137f8dbee9b63abbf3121351c83f33e5ceb00558e3f7a1bdb6fc28371dc_prof);

        
        $__internal_15d2d24d6a2170bffe25f20499a726a9e8e8568a0dd6b76719444b74e854837a->leave($__internal_15d2d24d6a2170bffe25f20499a726a9e8e8568a0dd6b76719444b74e854837a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d49ff5eecf427f5b7d1aef80a856919b50e330b634d94e9fb0bebda927c94ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d49ff5eecf427f5b7d1aef80a856919b50e330b634d94e9fb0bebda927c94ad->enter($__internal_5d49ff5eecf427f5b7d1aef80a856919b50e330b634d94e9fb0bebda927c94ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7d5b91d8e4e944b1e58234ac75f6e977d8dbfa9f2d897eda20acb629f75be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d5b91d8e4e944b1e58234ac75f6e977d8dbfa9f2d897eda20acb629f75be1f->enter($__internal_d7d5b91d8e4e944b1e58234ac75f6e977d8dbfa9f2d897eda20acb629f75be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d7d5b91d8e4e944b1e58234ac75f6e977d8dbfa9f2d897eda20acb629f75be1f->leave($__internal_d7d5b91d8e4e944b1e58234ac75f6e977d8dbfa9f2d897eda20acb629f75be1f_prof);

        
        $__internal_5d49ff5eecf427f5b7d1aef80a856919b50e330b634d94e9fb0bebda927c94ad->leave($__internal_5d49ff5eecf427f5b7d1aef80a856919b50e330b634d94e9fb0bebda927c94ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09fc989004c925e60807c09d947cdeb006b889493c585ce27d2333decd61e9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fc989004c925e60807c09d947cdeb006b889493c585ce27d2333decd61e9c6->enter($__internal_09fc989004c925e60807c09d947cdeb006b889493c585ce27d2333decd61e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed1aa3952cb0dce0fce3c067dc9fc63ee6a3afd5412137a9dcf0b0c5574169c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed1aa3952cb0dce0fce3c067dc9fc63ee6a3afd5412137a9dcf0b0c5574169c->enter($__internal_8ed1aa3952cb0dce0fce3c067dc9fc63ee6a3afd5412137a9dcf0b0c5574169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_8ed1aa3952cb0dce0fce3c067dc9fc63ee6a3afd5412137a9dcf0b0c5574169c->leave($__internal_8ed1aa3952cb0dce0fce3c067dc9fc63ee6a3afd5412137a9dcf0b0c5574169c_prof);

        
        $__internal_09fc989004c925e60807c09d947cdeb006b889493c585ce27d2333decd61e9c6->leave($__internal_09fc989004c925e60807c09d947cdeb006b889493c585ce27d2333decd61e9c6_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ffe2d7dab8b96628e133883a66b8faf563598e3a9245a11a4c18b43ee107b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffe2d7dab8b96628e133883a66b8faf563598e3a9245a11a4c18b43ee107b94->enter($__internal_2ffe2d7dab8b96628e133883a66b8faf563598e3a9245a11a4c18b43ee107b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_566a0fd38cb3df814f04ce47ecd42b6f6f5d0c03b03b05030a06d5abd40e5454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566a0fd38cb3df814f04ce47ecd42b6f6f5d0c03b03b05030a06d5abd40e5454->enter($__internal_566a0fd38cb3df814f04ce47ecd42b6f6f5d0c03b03b05030a06d5abd40e5454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_566a0fd38cb3df814f04ce47ecd42b6f6f5d0c03b03b05030a06d5abd40e5454->leave($__internal_566a0fd38cb3df814f04ce47ecd42b6f6f5d0c03b03b05030a06d5abd40e5454_prof);

        
        $__internal_2ffe2d7dab8b96628e133883a66b8faf563598e3a9245a11a4c18b43ee107b94->leave($__internal_2ffe2d7dab8b96628e133883a66b8faf563598e3a9245a11a4c18b43ee107b94_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  86 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent ()}}
{% endblock %}
{% block body %}
    {{ parent ()}}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/index.html.twig");
    }
}
