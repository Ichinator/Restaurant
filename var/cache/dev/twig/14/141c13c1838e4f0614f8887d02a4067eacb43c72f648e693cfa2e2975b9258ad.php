<?php

/* default/boissons.html.twig */
class __TwigTemplate_37b8459cad94a242feb5b554784624c8627ad2d9e0b194fc8fa2efce65183cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/boissons.html.twig", 1);
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
        $__internal_9f7d1e5ed72eab5e000638db14d3d6336ace431adaa7d8ff84fecee0ca218de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7d1e5ed72eab5e000638db14d3d6336ace431adaa7d8ff84fecee0ca218de0->enter($__internal_9f7d1e5ed72eab5e000638db14d3d6336ace431adaa7d8ff84fecee0ca218de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/boissons.html.twig"));

        $__internal_4623f0a96d1881e40256aadebeda58bb2dac98a4c762bae4a0c73601105ae97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4623f0a96d1881e40256aadebeda58bb2dac98a4c762bae4a0c73601105ae97d->enter($__internal_4623f0a96d1881e40256aadebeda58bb2dac98a4c762bae4a0c73601105ae97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/boissons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7d1e5ed72eab5e000638db14d3d6336ace431adaa7d8ff84fecee0ca218de0->leave($__internal_9f7d1e5ed72eab5e000638db14d3d6336ace431adaa7d8ff84fecee0ca218de0_prof);

        
        $__internal_4623f0a96d1881e40256aadebeda58bb2dac98a4c762bae4a0c73601105ae97d->leave($__internal_4623f0a96d1881e40256aadebeda58bb2dac98a4c762bae4a0c73601105ae97d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d52355851f5bfc9139dbd068fc2504096056240dee43c31c656091bceb37c8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52355851f5bfc9139dbd068fc2504096056240dee43c31c656091bceb37c8bf->enter($__internal_d52355851f5bfc9139dbd068fc2504096056240dee43c31c656091bceb37c8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31965ead595865e2772c654cbfceed891bd90c690b090044c457b03ac84a93a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31965ead595865e2772c654cbfceed891bd90c690b090044c457b03ac84a93a2->enter($__internal_31965ead595865e2772c654cbfceed891bd90c690b090044c457b03ac84a93a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_31965ead595865e2772c654cbfceed891bd90c690b090044c457b03ac84a93a2->leave($__internal_31965ead595865e2772c654cbfceed891bd90c690b090044c457b03ac84a93a2_prof);

        
        $__internal_d52355851f5bfc9139dbd068fc2504096056240dee43c31c656091bceb37c8bf->leave($__internal_d52355851f5bfc9139dbd068fc2504096056240dee43c31c656091bceb37c8bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea12feb85328791f6a0e4eac5f398262e74a2e2a7cf8857876b04fedf2a0788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea12feb85328791f6a0e4eac5f398262e74a2e2a7cf8857876b04fedf2a0788->enter($__internal_5ea12feb85328791f6a0e4eac5f398262e74a2e2a7cf8857876b04fedf2a0788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54d4bbc3d9fa85c52a43f5492743cfdb525f2f0ca0c771c75deb9fe30d0e3cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d4bbc3d9fa85c52a43f5492743cfdb525f2f0ca0c771c75deb9fe30d0e3cfa->enter($__internal_54d4bbc3d9fa85c52a43f5492743cfdb525f2f0ca0c771c75deb9fe30d0e3cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"container\">
    <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["boissons"]);
        foreach ($context['_seq'] as $context["_key"] => $context["boissons"]) {
            // line 11
            echo "        <div class=\"col-sm-4\">
        ";
            // line 12
            if ($this->getAttribute($context["boissons"], "enabled", array())) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["boissons"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
            <td><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOneBoisson", array("id" => $this->getAttribute($context["boissons"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boissons"], "name", array()), "html", null, true);
                echo "</a></td>
        ";
            }
            // line 18
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boissons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
</div>

";
        
        $__internal_54d4bbc3d9fa85c52a43f5492743cfdb525f2f0ca0c771c75deb9fe30d0e3cfa->leave($__internal_54d4bbc3d9fa85c52a43f5492743cfdb525f2f0ca0c771c75deb9fe30d0e3cfa_prof);

        
        $__internal_5ea12feb85328791f6a0e4eac5f398262e74a2e2a7cf8857876b04fedf2a0788->leave($__internal_5ea12feb85328791f6a0e4eac5f398262e74a2e2a7cf8857876b04fedf2a0788_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5d27e306e8c1213b897aa99a0ca9d4e867cc47753344d8a5ab2e10fb2045881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d27e306e8c1213b897aa99a0ca9d4e867cc47753344d8a5ab2e10fb2045881->enter($__internal_f5d27e306e8c1213b897aa99a0ca9d4e867cc47753344d8a5ab2e10fb2045881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0af73cf5489af969e232b47d8d58c06439f625e3ac4710315084af91862bb42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af73cf5489af969e232b47d8d58c06439f625e3ac4710315084af91862bb42d->enter($__internal_0af73cf5489af969e232b47d8d58c06439f625e3ac4710315084af91862bb42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_0af73cf5489af969e232b47d8d58c06439f625e3ac4710315084af91862bb42d->leave($__internal_0af73cf5489af969e232b47d8d58c06439f625e3ac4710315084af91862bb42d_prof);

        
        $__internal_f5d27e306e8c1213b897aa99a0ca9d4e867cc47753344d8a5ab2e10fb2045881->leave($__internal_f5d27e306e8c1213b897aa99a0ca9d4e867cc47753344d8a5ab2e10fb2045881_prof);

    }

    public function getTemplateName()
    {
        return "default/boissons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 26,  132 => 25,  119 => 20,  112 => 18,  105 => 16,  99 => 15,  95 => 14,  90 => 13,  88 => 12,  85 => 11,  81 => 10,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

<div class=\"container\">
    <div class=\"row\">
    {% for boissons in boissons %}
        <div class=\"col-sm-4\">
        {% if boissons.enabled %}
            {{ boissons.name}}<br \\>
            {{ boissons.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(boissons, 'imageFile') }}\" alt=\"{{ boissons.image }}\" /><br \\><br \\>
            <td><a href=\"{{ path('showOneBoisson', { 'id': boissons.id }) }}\">{{ boissons.name }}</a></td>
        {% endif %}
        </div>
    {% endfor %}
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/boissons.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/boissons.html.twig");
    }
}
