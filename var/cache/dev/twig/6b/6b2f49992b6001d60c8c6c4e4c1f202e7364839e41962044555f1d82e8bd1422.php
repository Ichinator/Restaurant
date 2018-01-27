<?php

/* :default:employees.html.twig */
class __TwigTemplate_0b2fff6fba61b822af088cdb41faa86b27e83d72fe1021d51ccc149fa3a8b7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:employees.html.twig", 1);
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
        $__internal_93e0ce6e6243d6a31f3c879bb798bcde32861acb42a80c406f8a0dd166271ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e0ce6e6243d6a31f3c879bb798bcde32861acb42a80c406f8a0dd166271ec9->enter($__internal_93e0ce6e6243d6a31f3c879bb798bcde32861acb42a80c406f8a0dd166271ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:employees.html.twig"));

        $__internal_87a2fae63ca4f9eb87f849dc61f53b068a64d2e63755c2f9664df822fa3cce79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a2fae63ca4f9eb87f849dc61f53b068a64d2e63755c2f9664df822fa3cce79->enter($__internal_87a2fae63ca4f9eb87f849dc61f53b068a64d2e63755c2f9664df822fa3cce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:employees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e0ce6e6243d6a31f3c879bb798bcde32861acb42a80c406f8a0dd166271ec9->leave($__internal_93e0ce6e6243d6a31f3c879bb798bcde32861acb42a80c406f8a0dd166271ec9_prof);

        
        $__internal_87a2fae63ca4f9eb87f849dc61f53b068a64d2e63755c2f9664df822fa3cce79->leave($__internal_87a2fae63ca4f9eb87f849dc61f53b068a64d2e63755c2f9664df822fa3cce79_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_956ff2d152467bdc348294fa5a5371ff986a8e6d01e79983708f4874b7e80c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956ff2d152467bdc348294fa5a5371ff986a8e6d01e79983708f4874b7e80c0e->enter($__internal_956ff2d152467bdc348294fa5a5371ff986a8e6d01e79983708f4874b7e80c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d1fc8e5da3a3f09d579459741404dbd0bffa5196c43d5abd7047076b70e7205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fc8e5da3a3f09d579459741404dbd0bffa5196c43d5abd7047076b70e7205e->enter($__internal_d1fc8e5da3a3f09d579459741404dbd0bffa5196c43d5abd7047076b70e7205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d1fc8e5da3a3f09d579459741404dbd0bffa5196c43d5abd7047076b70e7205e->leave($__internal_d1fc8e5da3a3f09d579459741404dbd0bffa5196c43d5abd7047076b70e7205e_prof);

        
        $__internal_956ff2d152467bdc348294fa5a5371ff986a8e6d01e79983708f4874b7e80c0e->leave($__internal_956ff2d152467bdc348294fa5a5371ff986a8e6d01e79983708f4874b7e80c0e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_103adb03f87089b509b93dcf560d060476fd8d4ee16086cfb76f39b268e855b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103adb03f87089b509b93dcf560d060476fd8d4ee16086cfb76f39b268e855b0->enter($__internal_103adb03f87089b509b93dcf560d060476fd8d4ee16086cfb76f39b268e855b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f39dbe7b204ebcef4a794d04724910b3c9914c013217b7ecb8b209f3d5b5b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f39dbe7b204ebcef4a794d04724910b3c9914c013217b7ecb8b209f3d5b5b53->enter($__internal_9f39dbe7b204ebcef4a794d04724910b3c9914c013217b7ecb8b209f3d5b5b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["employees"]);
        foreach ($context['_seq'] as $context["_key"] => $context["employees"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["employees"], "enabled", array())) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "nom", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "prenom", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "poste", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["employees"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9f39dbe7b204ebcef4a794d04724910b3c9914c013217b7ecb8b209f3d5b5b53->leave($__internal_9f39dbe7b204ebcef4a794d04724910b3c9914c013217b7ecb8b209f3d5b5b53_prof);

        
        $__internal_103adb03f87089b509b93dcf560d060476fd8d4ee16086cfb76f39b268e855b0->leave($__internal_103adb03f87089b509b93dcf560d060476fd8d4ee16086cfb76f39b268e855b0_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dac89bf014302726082d576a139f1bc445d32ec2cbd90d44b65111b3ddacd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dac89bf014302726082d576a139f1bc445d32ec2cbd90d44b65111b3ddacd1f->enter($__internal_6dac89bf014302726082d576a139f1bc445d32ec2cbd90d44b65111b3ddacd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_340dd4074ee5bea1b953edf55d19c68af806c864aaf55dd36018d56d4309ecbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340dd4074ee5bea1b953edf55d19c68af806c864aaf55dd36018d56d4309ecbf->enter($__internal_340dd4074ee5bea1b953edf55d19c68af806c864aaf55dd36018d56d4309ecbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_340dd4074ee5bea1b953edf55d19c68af806c864aaf55dd36018d56d4309ecbf->leave($__internal_340dd4074ee5bea1b953edf55d19c68af806c864aaf55dd36018d56d4309ecbf_prof);

        
        $__internal_6dac89bf014302726082d576a139f1bc445d32ec2cbd90d44b65111b3ddacd1f->leave($__internal_6dac89bf014302726082d576a139f1bc445d32ec2cbd90d44b65111b3ddacd1f_prof);

    }

    public function getTemplateName()
    {
        return ":default:employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 19,  120 => 18,  106 => 15,  99 => 13,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    {% for employees in employees %}
        {% if employees.enabled %}
            {{ employees.nom}}<br \\>
            {{ employees.prenom }}<br \\>
            {{ employees.poste }}<br \\>
            <img src=\"{{ vich_uploader_asset(employees, 'imageFile') }}\" alt=\"{{ employees.image }}\" /><br \\><br \\>
        {% endif %}
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:employees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/employees.html.twig");
    }
}
