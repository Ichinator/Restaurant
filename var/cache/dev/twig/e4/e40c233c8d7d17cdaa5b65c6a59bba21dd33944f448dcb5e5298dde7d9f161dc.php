<?php

/* :default:onePlat.html.twig */
class __TwigTemplate_e657de7bb9120f3bc45c98195c442dadf66dd68baf98ad27dcaf394c271dfbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:onePlat.html.twig", 1);
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
        $__internal_8ce46bf5d359e30415da5f07a098ae3053920eba871d705763f5b0f81cd1e48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce46bf5d359e30415da5f07a098ae3053920eba871d705763f5b0f81cd1e48a->enter($__internal_8ce46bf5d359e30415da5f07a098ae3053920eba871d705763f5b0f81cd1e48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:onePlat.html.twig"));

        $__internal_ef4d736e335c01d6d29d206dffb29f5d095837314f99553a21b3087d37e084d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4d736e335c01d6d29d206dffb29f5d095837314f99553a21b3087d37e084d3->enter($__internal_ef4d736e335c01d6d29d206dffb29f5d095837314f99553a21b3087d37e084d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:onePlat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce46bf5d359e30415da5f07a098ae3053920eba871d705763f5b0f81cd1e48a->leave($__internal_8ce46bf5d359e30415da5f07a098ae3053920eba871d705763f5b0f81cd1e48a_prof);

        
        $__internal_ef4d736e335c01d6d29d206dffb29f5d095837314f99553a21b3087d37e084d3->leave($__internal_ef4d736e335c01d6d29d206dffb29f5d095837314f99553a21b3087d37e084d3_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24f748f8668c8575940aa0db8af7dc220a0e9253af01b6f57b02145bede79d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f748f8668c8575940aa0db8af7dc220a0e9253af01b6f57b02145bede79d55->enter($__internal_24f748f8668c8575940aa0db8af7dc220a0e9253af01b6f57b02145bede79d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73eaaa09d924f410f5008281d32488179ac70f9fa9b1f263d3a680c53d0cd1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73eaaa09d924f410f5008281d32488179ac70f9fa9b1f263d3a680c53d0cd1d8->enter($__internal_73eaaa09d924f410f5008281d32488179ac70f9fa9b1f263d3a680c53d0cd1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_73eaaa09d924f410f5008281d32488179ac70f9fa9b1f263d3a680c53d0cd1d8->leave($__internal_73eaaa09d924f410f5008281d32488179ac70f9fa9b1f263d3a680c53d0cd1d8_prof);

        
        $__internal_24f748f8668c8575940aa0db8af7dc220a0e9253af01b6f57b02145bede79d55->leave($__internal_24f748f8668c8575940aa0db8af7dc220a0e9253af01b6f57b02145bede79d55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_688d0facd87bb1bceaa776c97e64a528f7049dfbdf6240e5fca20efe3fe549d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688d0facd87bb1bceaa776c97e64a528f7049dfbdf6240e5fca20efe3fe549d7->enter($__internal_688d0facd87bb1bceaa776c97e64a528f7049dfbdf6240e5fca20efe3fe549d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd808a76b1fc46576e547cecc7e4d2e2c641e797d1682bb7f2d86b4291562eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd808a76b1fc46576e547cecc7e4d2e2c641e797d1682bb7f2d86b4291562eeb->enter($__internal_dd808a76b1fc46576e547cecc7e4d2e2c641e797d1682bb7f2d86b4291562eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "name", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "prix", array()), "html", null, true);
        echo "<br \\>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["onePlat"] ?? $this->getContext($context, "onePlat")), "image", array()), "html", null, true);
        echo "\" /><br \\><br \\>
";
        
        $__internal_dd808a76b1fc46576e547cecc7e4d2e2c641e797d1682bb7f2d86b4291562eeb->leave($__internal_dd808a76b1fc46576e547cecc7e4d2e2c641e797d1682bb7f2d86b4291562eeb_prof);

        
        $__internal_688d0facd87bb1bceaa776c97e64a528f7049dfbdf6240e5fca20efe3fe549d7->leave($__internal_688d0facd87bb1bceaa776c97e64a528f7049dfbdf6240e5fca20efe3fe549d7_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3968dbbfb663380b8e59feab1927e6619f263078a7f00b9db6f57aebdbb59861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3968dbbfb663380b8e59feab1927e6619f263078a7f00b9db6f57aebdbb59861->enter($__internal_3968dbbfb663380b8e59feab1927e6619f263078a7f00b9db6f57aebdbb59861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b694f806afb50178ea2b0c91b3fc238796383786359edec5fc07f5ce9ddc113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b694f806afb50178ea2b0c91b3fc238796383786359edec5fc07f5ce9ddc113e->enter($__internal_b694f806afb50178ea2b0c91b3fc238796383786359edec5fc07f5ce9ddc113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b694f806afb50178ea2b0c91b3fc238796383786359edec5fc07f5ce9ddc113e->leave($__internal_b694f806afb50178ea2b0c91b3fc238796383786359edec5fc07f5ce9ddc113e_prof);

        
        $__internal_3968dbbfb663380b8e59feab1927e6619f263078a7f00b9db6f57aebdbb59861->leave($__internal_3968dbbfb663380b8e59feab1927e6619f263078a7f00b9db6f57aebdbb59861_prof);

    }

    public function getTemplateName()
    {
        return ":default:onePlat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  100 => 12,  86 => 9,  82 => 8,  78 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {{ onePlat.name}}<br \\>
    {{ onePlat.prix }}<br \\>
    <img src=\"{{ vich_uploader_asset(onePlat, 'imageFile') }}\" alt=\"{{ onePlat.image }}\" /><br \\><br \\>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:onePlat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/onePlat.html.twig");
    }
}
