<?php

/* default/employees.html.twig */
class __TwigTemplate_0b2fff6fba61b822af088cdb41faa86b27e83d72fe1021d51ccc149fa3a8b7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/employees.html.twig", 1);
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
        $__internal_cbe8e782fb44426fe27a2a6e92e358a67286366594a429bb08ebfce87c60b1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe8e782fb44426fe27a2a6e92e358a67286366594a429bb08ebfce87c60b1e9->enter($__internal_cbe8e782fb44426fe27a2a6e92e358a67286366594a429bb08ebfce87c60b1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/employees.html.twig"));

        $__internal_6c322bdacca8df4ce5e163b7e4c56ea09f4ef1e21967c9eb2a7d3f4e7bd5a48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c322bdacca8df4ce5e163b7e4c56ea09f4ef1e21967c9eb2a7d3f4e7bd5a48a->enter($__internal_6c322bdacca8df4ce5e163b7e4c56ea09f4ef1e21967c9eb2a7d3f4e7bd5a48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/employees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe8e782fb44426fe27a2a6e92e358a67286366594a429bb08ebfce87c60b1e9->leave($__internal_cbe8e782fb44426fe27a2a6e92e358a67286366594a429bb08ebfce87c60b1e9_prof);

        
        $__internal_6c322bdacca8df4ce5e163b7e4c56ea09f4ef1e21967c9eb2a7d3f4e7bd5a48a->leave($__internal_6c322bdacca8df4ce5e163b7e4c56ea09f4ef1e21967c9eb2a7d3f4e7bd5a48a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16652ee6e2de6fcbf1a2f3a72effc8bfa7b1ef648a6cbda8fef82913c3866da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16652ee6e2de6fcbf1a2f3a72effc8bfa7b1ef648a6cbda8fef82913c3866da4->enter($__internal_16652ee6e2de6fcbf1a2f3a72effc8bfa7b1ef648a6cbda8fef82913c3866da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52ee3910753659036b7e2fcb6a2d040ba2599e9031c8cecca6ad6c76a7abef62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ee3910753659036b7e2fcb6a2d040ba2599e9031c8cecca6ad6c76a7abef62->enter($__internal_52ee3910753659036b7e2fcb6a2d040ba2599e9031c8cecca6ad6c76a7abef62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_52ee3910753659036b7e2fcb6a2d040ba2599e9031c8cecca6ad6c76a7abef62->leave($__internal_52ee3910753659036b7e2fcb6a2d040ba2599e9031c8cecca6ad6c76a7abef62_prof);

        
        $__internal_16652ee6e2de6fcbf1a2f3a72effc8bfa7b1ef648a6cbda8fef82913c3866da4->leave($__internal_16652ee6e2de6fcbf1a2f3a72effc8bfa7b1ef648a6cbda8fef82913c3866da4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ea29318d395e8d437490e5c8559f309338133b0656f27369ec6efeaa5b9b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea29318d395e8d437490e5c8559f309338133b0656f27369ec6efeaa5b9b5e->enter($__internal_b3ea29318d395e8d437490e5c8559f309338133b0656f27369ec6efeaa5b9b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf4474a391476ef1a83dd74d7338994e16157aed9df864d5b37e1b7c1f6faa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4474a391476ef1a83dd74d7338994e16157aed9df864d5b37e1b7c1f6faa99->enter($__internal_bf4474a391476ef1a83dd74d7338994e16157aed9df864d5b37e1b7c1f6faa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["employees"]);
        foreach ($context['_seq'] as $context["_key"] => $context["employees"]) {
            // line 10
            echo "            <div class=\"col-sm-4\">
                ";
            // line 11
            if ($this->getAttribute($context["employees"], "enabled", array())) {
                // line 12
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "nom", array()), "html", null, true);
                echo "<br \\>
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "prenom", array()), "html", null, true);
                echo "<br \\>
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "poste", array()), "html", null, true);
                echo "<br \\>
                    <td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOneEmployee", array("id" => $this->getAttribute($context["employees"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "nom", array()), "html", null, true);
                echo "</a></td><br \\>
                    <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["employees"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "image", array()), "html", null, true);
                echo "\" /><br \\>
                ";
            }
            // line 18
            echo "            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>




";
        
        $__internal_bf4474a391476ef1a83dd74d7338994e16157aed9df864d5b37e1b7c1f6faa99->leave($__internal_bf4474a391476ef1a83dd74d7338994e16157aed9df864d5b37e1b7c1f6faa99_prof);

        
        $__internal_b3ea29318d395e8d437490e5c8559f309338133b0656f27369ec6efeaa5b9b5e->leave($__internal_b3ea29318d395e8d437490e5c8559f309338133b0656f27369ec6efeaa5b9b5e_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf18fa66f014b810bf7af7a043f6fa1c4aa331238fe34174ab952d4cbc063a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf18fa66f014b810bf7af7a043f6fa1c4aa331238fe34174ab952d4cbc063a83->enter($__internal_bf18fa66f014b810bf7af7a043f6fa1c4aa331238fe34174ab952d4cbc063a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29f30b773ddc0515b76dd2e4ac867b7b07422c8e7efc19de76a98b5eee6d4870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f30b773ddc0515b76dd2e4ac867b7b07422c8e7efc19de76a98b5eee6d4870->enter($__internal_29f30b773ddc0515b76dd2e4ac867b7b07422c8e7efc19de76a98b5eee6d4870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_29f30b773ddc0515b76dd2e4ac867b7b07422c8e7efc19de76a98b5eee6d4870->leave($__internal_29f30b773ddc0515b76dd2e4ac867b7b07422c8e7efc19de76a98b5eee6d4870_prof);

        
        $__internal_bf18fa66f014b810bf7af7a043f6fa1c4aa331238fe34174ab952d4cbc063a83->leave($__internal_bf18fa66f014b810bf7af7a043f6fa1c4aa331238fe34174ab952d4cbc063a83_prof);

    }

    public function getTemplateName()
    {
        return "default/employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 29,  138 => 28,  122 => 20,  115 => 18,  108 => 16,  102 => 15,  98 => 14,  94 => 13,  89 => 12,  87 => 11,  84 => 10,  80 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {% for employees in employees %}
            <div class=\"col-sm-4\">
                {% if employees.enabled %}
                    {{ employees.nom}}<br \\>
                    {{ employees.prenom }}<br \\>
                    {{ employees.poste }}<br \\>
                    <td><a href=\"{{ path('showOneEmployee', { 'id': employees.id }) }}\">{{ employees.nom }}</a></td><br \\>
                    <img src=\"{{ vich_uploader_asset(employees, 'imageFile') }}\" alt=\"{{ employees.image }}\" /><br \\>
                {% endif %}
            </div>
    {% endfor %}
        </div>
    </div>




{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/employees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/employees.html.twig");
    }
}
