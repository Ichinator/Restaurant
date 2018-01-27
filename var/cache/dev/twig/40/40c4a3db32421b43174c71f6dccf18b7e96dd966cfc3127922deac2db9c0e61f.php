<?php

/* default/oneEmployee.html.twig */
class __TwigTemplate_ab18ef9a466bd57cb2076cd76b6b306c47d6fad8c3dc0725074aecdff092be9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/oneEmployee.html.twig", 1);
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
        $__internal_a2b00894ba85d4d28b78947456e9725b8753015a25dba80fd468905e63eb11fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b00894ba85d4d28b78947456e9725b8753015a25dba80fd468905e63eb11fd->enter($__internal_a2b00894ba85d4d28b78947456e9725b8753015a25dba80fd468905e63eb11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/oneEmployee.html.twig"));

        $__internal_863ef553839ec61c316c7785ff319871b42e90a2b52fa3310f60700f857b2262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863ef553839ec61c316c7785ff319871b42e90a2b52fa3310f60700f857b2262->enter($__internal_863ef553839ec61c316c7785ff319871b42e90a2b52fa3310f60700f857b2262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/oneEmployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b00894ba85d4d28b78947456e9725b8753015a25dba80fd468905e63eb11fd->leave($__internal_a2b00894ba85d4d28b78947456e9725b8753015a25dba80fd468905e63eb11fd_prof);

        
        $__internal_863ef553839ec61c316c7785ff319871b42e90a2b52fa3310f60700f857b2262->leave($__internal_863ef553839ec61c316c7785ff319871b42e90a2b52fa3310f60700f857b2262_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_764506ab10bbbeb9dd3bc86b4e1f5b16386505469f07cb9f18d26cffe4189897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764506ab10bbbeb9dd3bc86b4e1f5b16386505469f07cb9f18d26cffe4189897->enter($__internal_764506ab10bbbeb9dd3bc86b4e1f5b16386505469f07cb9f18d26cffe4189897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_299c5610b420841b4ef4a3bf434d0493c4acbb89fab742061f57a1855733e733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299c5610b420841b4ef4a3bf434d0493c4acbb89fab742061f57a1855733e733->enter($__internal_299c5610b420841b4ef4a3bf434d0493c4acbb89fab742061f57a1855733e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_299c5610b420841b4ef4a3bf434d0493c4acbb89fab742061f57a1855733e733->leave($__internal_299c5610b420841b4ef4a3bf434d0493c4acbb89fab742061f57a1855733e733_prof);

        
        $__internal_764506ab10bbbeb9dd3bc86b4e1f5b16386505469f07cb9f18d26cffe4189897->leave($__internal_764506ab10bbbeb9dd3bc86b4e1f5b16386505469f07cb9f18d26cffe4189897_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8976ffa3700e52852c859f2a5e97bd6cd382b0f002f6928f5168132be5955f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8976ffa3700e52852c859f2a5e97bd6cd382b0f002f6928f5168132be5955f8a->enter($__internal_8976ffa3700e52852c859f2a5e97bd6cd382b0f002f6928f5168132be5955f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed3e41be7949ab9b1b54a14ec71e647bbbe1ccf27ab7fdbbfedc31b13d8b7f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3e41be7949ab9b1b54a14ec71e647bbbe1ccf27ab7fdbbfedc31b13d8b7f8e->enter($__internal_ed3e41be7949ab9b1b54a14ec71e647bbbe1ccf27ab7fdbbfedc31b13d8b7f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")));
        foreach ($context['_seq'] as $context["_key"] => $context["employees"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "nom", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "prenom", array()), "html", null, true);
            echo "<br \\>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "poste", array()), "html", null, true);
            echo "<br \\>
        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["employees"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employees"], "image", array()), "html", null, true);
            echo "\" /><br \\><br \\>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <p>Vu ok</p>
";
        
        $__internal_ed3e41be7949ab9b1b54a14ec71e647bbbe1ccf27ab7fdbbfedc31b13d8b7f8e->leave($__internal_ed3e41be7949ab9b1b54a14ec71e647bbbe1ccf27ab7fdbbfedc31b13d8b7f8e_prof);

        
        $__internal_8976ffa3700e52852c859f2a5e97bd6cd382b0f002f6928f5168132be5955f8a->leave($__internal_8976ffa3700e52852c859f2a5e97bd6cd382b0f002f6928f5168132be5955f8a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb5fa9211e0a80073296030db694c06ef1986a0cb033810c18c8b57efcc13cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5fa9211e0a80073296030db694c06ef1986a0cb033810c18c8b57efcc13cb9->enter($__internal_cb5fa9211e0a80073296030db694c06ef1986a0cb033810c18c8b57efcc13cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52d54b8da8851ecb558858354269a46224311fe0c3eeeb834e6b34b6bb6f4604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d54b8da8851ecb558858354269a46224311fe0c3eeeb834e6b34b6bb6f4604->enter($__internal_52d54b8da8851ecb558858354269a46224311fe0c3eeeb834e6b34b6bb6f4604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_52d54b8da8851ecb558858354269a46224311fe0c3eeeb834e6b34b6bb6f4604->leave($__internal_52d54b8da8851ecb558858354269a46224311fe0c3eeeb834e6b34b6bb6f4604_prof);

        
        $__internal_cb5fa9211e0a80073296030db694c06ef1986a0cb033810c18c8b57efcc13cb9->leave($__internal_cb5fa9211e0a80073296030db694c06ef1986a0cb033810c18c8b57efcc13cb9_prof);

    }

    public function getTemplateName()
    {
        return "default/oneEmployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 18,  117 => 17,  106 => 14,  96 => 12,  92 => 11,  88 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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

    {% for employees in oneEmployee %}
        {{ employees.nom}}<br \\>
        {{ employees.prenom }}<br \\>
        {{ employees.poste }}<br \\>
        <img src=\"{{ vich_uploader_asset(employees, 'imageFile') }}\" alt=\"{{ employees.image }}\" /><br \\><br \\>
    {% endfor %}
    <p>Vu ok</p>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/oneEmployee.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/oneEmployee.html.twig");
    }
}
