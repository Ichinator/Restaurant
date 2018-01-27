<?php

/* :default:desserts.html.twig */
class __TwigTemplate_cb759733b811553b9147aab983795e14d815e86ef8f9643fb0423960ecf81200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:desserts.html.twig", 1);
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
        $__internal_0e840f62bb056f96cb2e05ede63320a8a74ce4f17004c2785f99d4f89e6c6619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e840f62bb056f96cb2e05ede63320a8a74ce4f17004c2785f99d4f89e6c6619->enter($__internal_0e840f62bb056f96cb2e05ede63320a8a74ce4f17004c2785f99d4f89e6c6619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:desserts.html.twig"));

        $__internal_71e0c83b44d06160146f2f4950c0226b524f9cc17b6a277439b3985fa986a59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e0c83b44d06160146f2f4950c0226b524f9cc17b6a277439b3985fa986a59f->enter($__internal_71e0c83b44d06160146f2f4950c0226b524f9cc17b6a277439b3985fa986a59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:desserts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e840f62bb056f96cb2e05ede63320a8a74ce4f17004c2785f99d4f89e6c6619->leave($__internal_0e840f62bb056f96cb2e05ede63320a8a74ce4f17004c2785f99d4f89e6c6619_prof);

        
        $__internal_71e0c83b44d06160146f2f4950c0226b524f9cc17b6a277439b3985fa986a59f->leave($__internal_71e0c83b44d06160146f2f4950c0226b524f9cc17b6a277439b3985fa986a59f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9c27417fec04f3ea96f174e4f16bafe4cbc469a26fcc90239f1ae89a05fe2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c27417fec04f3ea96f174e4f16bafe4cbc469a26fcc90239f1ae89a05fe2d8->enter($__internal_a9c27417fec04f3ea96f174e4f16bafe4cbc469a26fcc90239f1ae89a05fe2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_491f7143d8141efbdb6f6d023fb30d85bfdd19e31c17cfce5d574fae68b57c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491f7143d8141efbdb6f6d023fb30d85bfdd19e31c17cfce5d574fae68b57c1d->enter($__internal_491f7143d8141efbdb6f6d023fb30d85bfdd19e31c17cfce5d574fae68b57c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_491f7143d8141efbdb6f6d023fb30d85bfdd19e31c17cfce5d574fae68b57c1d->leave($__internal_491f7143d8141efbdb6f6d023fb30d85bfdd19e31c17cfce5d574fae68b57c1d_prof);

        
        $__internal_a9c27417fec04f3ea96f174e4f16bafe4cbc469a26fcc90239f1ae89a05fe2d8->leave($__internal_a9c27417fec04f3ea96f174e4f16bafe4cbc469a26fcc90239f1ae89a05fe2d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf92766233df5eb2611950e76e2be0af58e79eda5705e6c64aa7eb6aa421b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf92766233df5eb2611950e76e2be0af58e79eda5705e6c64aa7eb6aa421b38->enter($__internal_4cf92766233df5eb2611950e76e2be0af58e79eda5705e6c64aa7eb6aa421b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1eec79e41b46831c10357948937981d32e83e55a3890b1508ebc7f33cc3e043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1eec79e41b46831c10357948937981d32e83e55a3890b1508ebc7f33cc3e043->enter($__internal_d1eec79e41b46831c10357948937981d32e83e55a3890b1508ebc7f33cc3e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["desserts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["desserts"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["desserts"], "enabled", array())) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["desserts"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desserts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d1eec79e41b46831c10357948937981d32e83e55a3890b1508ebc7f33cc3e043->leave($__internal_d1eec79e41b46831c10357948937981d32e83e55a3890b1508ebc7f33cc3e043_prof);

        
        $__internal_4cf92766233df5eb2611950e76e2be0af58e79eda5705e6c64aa7eb6aa421b38->leave($__internal_4cf92766233df5eb2611950e76e2be0af58e79eda5705e6c64aa7eb6aa421b38_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15624013cd6324c21cf6bf064bd3312023a580b7f1d1193de5725abc1e8e3100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15624013cd6324c21cf6bf064bd3312023a580b7f1d1193de5725abc1e8e3100->enter($__internal_15624013cd6324c21cf6bf064bd3312023a580b7f1d1193de5725abc1e8e3100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_677e205e5768df030f669756b56823047aa964b49ee7f8ab3cab50e8150d9491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677e205e5768df030f669756b56823047aa964b49ee7f8ab3cab50e8150d9491->enter($__internal_677e205e5768df030f669756b56823047aa964b49ee7f8ab3cab50e8150d9491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_677e205e5768df030f669756b56823047aa964b49ee7f8ab3cab50e8150d9491->leave($__internal_677e205e5768df030f669756b56823047aa964b49ee7f8ab3cab50e8150d9491_prof);

        
        $__internal_15624013cd6324c21cf6bf064bd3312023a580b7f1d1193de5725abc1e8e3100->leave($__internal_15624013cd6324c21cf6bf064bd3312023a580b7f1d1193de5725abc1e8e3100_prof);

    }

    public function getTemplateName()
    {
        return ":default:desserts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 18,  116 => 17,  102 => 14,  95 => 12,  91 => 11,  86 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    {% for desserts in desserts %}
        {% if desserts.enabled %}
            {{ desserts.name}}<br \\>
            {{ desserts.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(desserts, 'imageFile') }}\" alt=\"{{ desserts.image }}\" /><br \\><br \\>
        {% endif %}
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:desserts.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/desserts.html.twig");
    }
}
