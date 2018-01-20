<?php

/* default/access.html.twig */
class __TwigTemplate_045afa5362f3022a9293aced1f8c97dcb6d2ebd2a81d58002fe4c73f1bf9edb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/access.html.twig", 1);
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
        $__internal_f6beb93ca086fdeed356c10f8570917f2dde2e81516ad9205761a2e463ff5543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6beb93ca086fdeed356c10f8570917f2dde2e81516ad9205761a2e463ff5543->enter($__internal_f6beb93ca086fdeed356c10f8570917f2dde2e81516ad9205761a2e463ff5543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/access.html.twig"));

        $__internal_4d5f475f7d60fc494eb35b68b410c5c416ba88919771bd24b9cfdedf8cc7876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5f475f7d60fc494eb35b68b410c5c416ba88919771bd24b9cfdedf8cc7876a->enter($__internal_4d5f475f7d60fc494eb35b68b410c5c416ba88919771bd24b9cfdedf8cc7876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6beb93ca086fdeed356c10f8570917f2dde2e81516ad9205761a2e463ff5543->leave($__internal_f6beb93ca086fdeed356c10f8570917f2dde2e81516ad9205761a2e463ff5543_prof);

        
        $__internal_4d5f475f7d60fc494eb35b68b410c5c416ba88919771bd24b9cfdedf8cc7876a->leave($__internal_4d5f475f7d60fc494eb35b68b410c5c416ba88919771bd24b9cfdedf8cc7876a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98d90ffc7d603c7865860f0a010a784c1a71bb7214ec784d787af93c067ba246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d90ffc7d603c7865860f0a010a784c1a71bb7214ec784d787af93c067ba246->enter($__internal_98d90ffc7d603c7865860f0a010a784c1a71bb7214ec784d787af93c067ba246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af249b28331871cfb6f48f1492cf23a24fd5a162bd5988d171aa356142dab8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af249b28331871cfb6f48f1492cf23a24fd5a162bd5988d171aa356142dab8e9->enter($__internal_af249b28331871cfb6f48f1492cf23a24fd5a162bd5988d171aa356142dab8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_af249b28331871cfb6f48f1492cf23a24fd5a162bd5988d171aa356142dab8e9->leave($__internal_af249b28331871cfb6f48f1492cf23a24fd5a162bd5988d171aa356142dab8e9_prof);

        
        $__internal_98d90ffc7d603c7865860f0a010a784c1a71bb7214ec784d787af93c067ba246->leave($__internal_98d90ffc7d603c7865860f0a010a784c1a71bb7214ec784d787af93c067ba246_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58e664a08022a45e4993a0bec153fe41ae3161ad44da80a17f442d526c105abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e664a08022a45e4993a0bec153fe41ae3161ad44da80a17f442d526c105abc->enter($__internal_58e664a08022a45e4993a0bec153fe41ae3161ad44da80a17f442d526c105abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cb004d8fc233934aca888cb9a942b49ce6b9ec966b7f90263a98aaaceb3175f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb004d8fc233934aca888cb9a942b49ce6b9ec966b7f90263a98aaaceb3175f->enter($__internal_8cb004d8fc233934aca888cb9a942b49ce6b9ec966b7f90263a98aaaceb3175f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.8369285619815!2d3.9114141513129415!3d43.609936863142245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a58263f46659%3A0x17b58252e421598b!2sRestaurant+l&#39;annexe!5e0!3m2!1sfr!2sfr!4v1516028614842\"
            width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
";
        
        $__internal_8cb004d8fc233934aca888cb9a942b49ce6b9ec966b7f90263a98aaaceb3175f->leave($__internal_8cb004d8fc233934aca888cb9a942b49ce6b9ec966b7f90263a98aaaceb3175f_prof);

        
        $__internal_58e664a08022a45e4993a0bec153fe41ae3161ad44da80a17f442d526c105abc->leave($__internal_58e664a08022a45e4993a0bec153fe41ae3161ad44da80a17f442d526c105abc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16bac4651978e97063942660effca4ea5249d9fd5fb41f45f88be2597f8b64f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bac4651978e97063942660effca4ea5249d9fd5fb41f45f88be2597f8b64f3->enter($__internal_16bac4651978e97063942660effca4ea5249d9fd5fb41f45f88be2597f8b64f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9572c3502a8e1a6b7bbf6d4811e3de8823d73e973410bd097bfa2fbc49339f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9572c3502a8e1a6b7bbf6d4811e3de8823d73e973410bd097bfa2fbc49339f65->enter($__internal_9572c3502a8e1a6b7bbf6d4811e3de8823d73e973410bd097bfa2fbc49339f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9572c3502a8e1a6b7bbf6d4811e3de8823d73e973410bd097bfa2fbc49339f65->leave($__internal_9572c3502a8e1a6b7bbf6d4811e3de8823d73e973410bd097bfa2fbc49339f65_prof);

        
        $__internal_16bac4651978e97063942660effca4ea5249d9fd5fb41f45f88be2597f8b64f3->leave($__internal_16bac4651978e97063942660effca4ea5249d9fd5fb41f45f88be2597f8b64f3_prof);

    }

    public function getTemplateName()
    {
        return "default/access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 12,  88 => 11,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.8369285619815!2d3.9114141513129415!3d43.609936863142245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a58263f46659%3A0x17b58252e421598b!2sRestaurant+l&#39;annexe!5e0!3m2!1sfr!2sfr!4v1516028614842\"
            width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/access.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/access.html.twig");
    }
}
