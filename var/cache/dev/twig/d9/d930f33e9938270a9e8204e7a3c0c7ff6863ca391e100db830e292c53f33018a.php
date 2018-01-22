<?php

/* :default:access.html.twig */
class __TwigTemplate_045afa5362f3022a9293aced1f8c97dcb6d2ebd2a81d58002fe4c73f1bf9edb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:access.html.twig", 1);
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
        $__internal_b034f232897bcbdd5173f988b5033709a06746d747c32525ef5090af05a1796d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b034f232897bcbdd5173f988b5033709a06746d747c32525ef5090af05a1796d->enter($__internal_b034f232897bcbdd5173f988b5033709a06746d747c32525ef5090af05a1796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:access.html.twig"));

        $__internal_f5495d61d28b6b187fb2d8560518a08ea79988e8149649d37583eb9676b1e936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5495d61d28b6b187fb2d8560518a08ea79988e8149649d37583eb9676b1e936->enter($__internal_f5495d61d28b6b187fb2d8560518a08ea79988e8149649d37583eb9676b1e936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b034f232897bcbdd5173f988b5033709a06746d747c32525ef5090af05a1796d->leave($__internal_b034f232897bcbdd5173f988b5033709a06746d747c32525ef5090af05a1796d_prof);

        
        $__internal_f5495d61d28b6b187fb2d8560518a08ea79988e8149649d37583eb9676b1e936->leave($__internal_f5495d61d28b6b187fb2d8560518a08ea79988e8149649d37583eb9676b1e936_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3febb790f548d42df4bb47e2bb2ac7548fbb6277f87ad8322ff1aac8410a9a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3febb790f548d42df4bb47e2bb2ac7548fbb6277f87ad8322ff1aac8410a9a38->enter($__internal_3febb790f548d42df4bb47e2bb2ac7548fbb6277f87ad8322ff1aac8410a9a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3414d089779f6b8fda178bce44b41e43a482c07415083b3c1d08aa322a87b925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3414d089779f6b8fda178bce44b41e43a482c07415083b3c1d08aa322a87b925->enter($__internal_3414d089779f6b8fda178bce44b41e43a482c07415083b3c1d08aa322a87b925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3414d089779f6b8fda178bce44b41e43a482c07415083b3c1d08aa322a87b925->leave($__internal_3414d089779f6b8fda178bce44b41e43a482c07415083b3c1d08aa322a87b925_prof);

        
        $__internal_3febb790f548d42df4bb47e2bb2ac7548fbb6277f87ad8322ff1aac8410a9a38->leave($__internal_3febb790f548d42df4bb47e2bb2ac7548fbb6277f87ad8322ff1aac8410a9a38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfb266c964b722c3a054956c84f1f2d3cc250497fc39b787057e316926097bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfb266c964b722c3a054956c84f1f2d3cc250497fc39b787057e316926097bd->enter($__internal_ddfb266c964b722c3a054956c84f1f2d3cc250497fc39b787057e316926097bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed230998c13700f4c485a9457bd7f9036f28003694e79c96c82bc9b8888280e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed230998c13700f4c485a9457bd7f9036f28003694e79c96c82bc9b8888280e8->enter($__internal_ed230998c13700f4c485a9457bd7f9036f28003694e79c96c82bc9b8888280e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.8369285619815!2d3.9114141513129415!3d43.609936863142245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a58263f46659%3A0x17b58252e421598b!2sRestaurant+l&#39;annexe!5e0!3m2!1sfr!2sfr!4v1516028614842\"
            width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
";
        
        $__internal_ed230998c13700f4c485a9457bd7f9036f28003694e79c96c82bc9b8888280e8->leave($__internal_ed230998c13700f4c485a9457bd7f9036f28003694e79c96c82bc9b8888280e8_prof);

        
        $__internal_ddfb266c964b722c3a054956c84f1f2d3cc250497fc39b787057e316926097bd->leave($__internal_ddfb266c964b722c3a054956c84f1f2d3cc250497fc39b787057e316926097bd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f8ac5322f1b3dbff6800c55ccf9a47d193c633d6c604c0ed68b4c54b807d437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8ac5322f1b3dbff6800c55ccf9a47d193c633d6c604c0ed68b4c54b807d437->enter($__internal_1f8ac5322f1b3dbff6800c55ccf9a47d193c633d6c604c0ed68b4c54b807d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffbb4f058a52aa990752d6317882f94081c5249d92b3360489ce3dc9a5bc9769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbb4f058a52aa990752d6317882f94081c5249d92b3360489ce3dc9a5bc9769->enter($__internal_ffbb4f058a52aa990752d6317882f94081c5249d92b3360489ce3dc9a5bc9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ffbb4f058a52aa990752d6317882f94081c5249d92b3360489ce3dc9a5bc9769->leave($__internal_ffbb4f058a52aa990752d6317882f94081c5249d92b3360489ce3dc9a5bc9769_prof);

        
        $__internal_1f8ac5322f1b3dbff6800c55ccf9a47d193c633d6c604c0ed68b4c54b807d437->leave($__internal_1f8ac5322f1b3dbff6800c55ccf9a47d193c633d6c604c0ed68b4c54b807d437_prof);

    }

    public function getTemplateName()
    {
        return ":default:access.html.twig";
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
{% endblock %}", ":default:access.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/access.html.twig");
    }
}
