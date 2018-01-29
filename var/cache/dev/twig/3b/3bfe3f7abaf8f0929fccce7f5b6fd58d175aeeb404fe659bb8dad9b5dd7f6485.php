<?php

/* default/desserts.html.twig */
class __TwigTemplate_cb759733b811553b9147aab983795e14d815e86ef8f9643fb0423960ecf81200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/desserts.html.twig", 1);
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
        $__internal_5ff663f0ba721a38fade3875a9fa79a08bde0f456220e323677f89704e2d4691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff663f0ba721a38fade3875a9fa79a08bde0f456220e323677f89704e2d4691->enter($__internal_5ff663f0ba721a38fade3875a9fa79a08bde0f456220e323677f89704e2d4691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/desserts.html.twig"));

        $__internal_643b0464848ae4e04573f8a9f544ee2cadbb21e8dd08e8fb281ee7e9dbffd27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b0464848ae4e04573f8a9f544ee2cadbb21e8dd08e8fb281ee7e9dbffd27d->enter($__internal_643b0464848ae4e04573f8a9f544ee2cadbb21e8dd08e8fb281ee7e9dbffd27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/desserts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff663f0ba721a38fade3875a9fa79a08bde0f456220e323677f89704e2d4691->leave($__internal_5ff663f0ba721a38fade3875a9fa79a08bde0f456220e323677f89704e2d4691_prof);

        
        $__internal_643b0464848ae4e04573f8a9f544ee2cadbb21e8dd08e8fb281ee7e9dbffd27d->leave($__internal_643b0464848ae4e04573f8a9f544ee2cadbb21e8dd08e8fb281ee7e9dbffd27d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eefbca0d4306d1799d0d301acfcbbd6dadb21e5faefa67323abb2a4a0830a059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefbca0d4306d1799d0d301acfcbbd6dadb21e5faefa67323abb2a4a0830a059->enter($__internal_eefbca0d4306d1799d0d301acfcbbd6dadb21e5faefa67323abb2a4a0830a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0971383ce97b87f4bac9dd184ec8ad937de601ca18b6e5f8331ef2f92451e1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0971383ce97b87f4bac9dd184ec8ad937de601ca18b6e5f8331ef2f92451e1cc->enter($__internal_0971383ce97b87f4bac9dd184ec8ad937de601ca18b6e5f8331ef2f92451e1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0971383ce97b87f4bac9dd184ec8ad937de601ca18b6e5f8331ef2f92451e1cc->leave($__internal_0971383ce97b87f4bac9dd184ec8ad937de601ca18b6e5f8331ef2f92451e1cc_prof);

        
        $__internal_eefbca0d4306d1799d0d301acfcbbd6dadb21e5faefa67323abb2a4a0830a059->leave($__internal_eefbca0d4306d1799d0d301acfcbbd6dadb21e5faefa67323abb2a4a0830a059_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bb9ba4c10565be8ac5eaa5a7c16b85fb94891150fb6e2b13dcf274d7219dffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb9ba4c10565be8ac5eaa5a7c16b85fb94891150fb6e2b13dcf274d7219dffa->enter($__internal_2bb9ba4c10565be8ac5eaa5a7c16b85fb94891150fb6e2b13dcf274d7219dffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a90ac1acf9b42ddb282415aa44f6b946fce785b4e8ec363ccabb55c4344afeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a90ac1acf9b42ddb282415aa44f6b946fce785b4e8ec363ccabb55c4344afeb->enter($__internal_5a90ac1acf9b42ddb282415aa44f6b946fce785b4e8ec363ccabb55c4344afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["desserts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["desserts"]) {
            // line 10
            echo "        <div class=\"col-sm-4\">
        ";
            // line 11
            if ($this->getAttribute($context["desserts"], "enabled", array())) {
                // line 12
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "name", array()), "html", null, true);
                echo "<br \\>
            ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "prix", array()), "html", null, true);
                echo "<br \\>
            <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["desserts"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "image", array()), "html", null, true);
                echo "\" /><br \\><br \\>
            <td><a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOneDessert", array("id" => $this->getAttribute($context["desserts"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["desserts"], "name", array()), "html", null, true);
                echo "</a></td>
        ";
            }
            // line 17
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desserts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
    </div>
";
        
        $__internal_5a90ac1acf9b42ddb282415aa44f6b946fce785b4e8ec363ccabb55c4344afeb->leave($__internal_5a90ac1acf9b42ddb282415aa44f6b946fce785b4e8ec363ccabb55c4344afeb_prof);

        
        $__internal_2bb9ba4c10565be8ac5eaa5a7c16b85fb94891150fb6e2b13dcf274d7219dffa->leave($__internal_2bb9ba4c10565be8ac5eaa5a7c16b85fb94891150fb6e2b13dcf274d7219dffa_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_292014a8c13494112413defd9a9977b478593a915d09f8d22ddd53eb64e5ed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292014a8c13494112413defd9a9977b478593a915d09f8d22ddd53eb64e5ed2e->enter($__internal_292014a8c13494112413defd9a9977b478593a915d09f8d22ddd53eb64e5ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_023963306c2454e75dde085d7174f3ca3eaf08a94198c188257e3dcce7932995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023963306c2454e75dde085d7174f3ca3eaf08a94198c188257e3dcce7932995->enter($__internal_023963306c2454e75dde085d7174f3ca3eaf08a94198c188257e3dcce7932995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_023963306c2454e75dde085d7174f3ca3eaf08a94198c188257e3dcce7932995->leave($__internal_023963306c2454e75dde085d7174f3ca3eaf08a94198c188257e3dcce7932995_prof);

        
        $__internal_292014a8c13494112413defd9a9977b478593a915d09f8d22ddd53eb64e5ed2e->leave($__internal_292014a8c13494112413defd9a9977b478593a915d09f8d22ddd53eb64e5ed2e_prof);

    }

    public function getTemplateName()
    {
        return "default/desserts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 24,  130 => 23,  118 => 19,  111 => 17,  104 => 15,  98 => 14,  94 => 13,  89 => 12,  87 => 11,  84 => 10,  80 => 9,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {% for desserts in desserts %}
        <div class=\"col-sm-4\">
        {% if desserts.enabled %}
            {{ desserts.name}}<br \\>
            {{ desserts.prix }}<br \\>
            <img src=\"{{ vich_uploader_asset(desserts, 'imageFile') }}\" alt=\"{{ desserts.image }}\" /><br \\><br \\>
            <td><a href=\"{{ path('showOneDessert', { 'id': desserts.id }) }}\">{{ desserts.name }}</a></td>
        {% endif %}
        </div>
    {% endfor %}
    </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/desserts.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/desserts.html.twig");
    }
}
