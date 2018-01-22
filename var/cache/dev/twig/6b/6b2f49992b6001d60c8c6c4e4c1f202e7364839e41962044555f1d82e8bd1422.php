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
        $__internal_04d034be17527a30b1b4ef7e2e09ff5bc5753bc48a004844a97adc95c8f882dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d034be17527a30b1b4ef7e2e09ff5bc5753bc48a004844a97adc95c8f882dd->enter($__internal_04d034be17527a30b1b4ef7e2e09ff5bc5753bc48a004844a97adc95c8f882dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:employees.html.twig"));

        $__internal_1b53880da202b8461722dfa2a71cbf7fd0ddeeb92c54d25282aed801c2a18ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b53880da202b8461722dfa2a71cbf7fd0ddeeb92c54d25282aed801c2a18ef4->enter($__internal_1b53880da202b8461722dfa2a71cbf7fd0ddeeb92c54d25282aed801c2a18ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:employees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d034be17527a30b1b4ef7e2e09ff5bc5753bc48a004844a97adc95c8f882dd->leave($__internal_04d034be17527a30b1b4ef7e2e09ff5bc5753bc48a004844a97adc95c8f882dd_prof);

        
        $__internal_1b53880da202b8461722dfa2a71cbf7fd0ddeeb92c54d25282aed801c2a18ef4->leave($__internal_1b53880da202b8461722dfa2a71cbf7fd0ddeeb92c54d25282aed801c2a18ef4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c91276d9b2a27677f6b453b3f8dedeaf164cdf6c1cf2372961a7967b43371ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c91276d9b2a27677f6b453b3f8dedeaf164cdf6c1cf2372961a7967b43371ec->enter($__internal_9c91276d9b2a27677f6b453b3f8dedeaf164cdf6c1cf2372961a7967b43371ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49f75eb7ab9a346223e64c9281c0fd4814baddeaebec9c45ef68aaf12203d603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f75eb7ab9a346223e64c9281c0fd4814baddeaebec9c45ef68aaf12203d603->enter($__internal_49f75eb7ab9a346223e64c9281c0fd4814baddeaebec9c45ef68aaf12203d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_49f75eb7ab9a346223e64c9281c0fd4814baddeaebec9c45ef68aaf12203d603->leave($__internal_49f75eb7ab9a346223e64c9281c0fd4814baddeaebec9c45ef68aaf12203d603_prof);

        
        $__internal_9c91276d9b2a27677f6b453b3f8dedeaf164cdf6c1cf2372961a7967b43371ec->leave($__internal_9c91276d9b2a27677f6b453b3f8dedeaf164cdf6c1cf2372961a7967b43371ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c346f728ba334be5d74e809a5ab5f0ca3f14663aeb06b5576744e94417420fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c346f728ba334be5d74e809a5ab5f0ca3f14663aeb06b5576744e94417420fd->enter($__internal_5c346f728ba334be5d74e809a5ab5f0ca3f14663aeb06b5576744e94417420fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa2aeab1f80090a7e730811b73cc0e9e83c4fa6271925ea4d4e1bc1799e24ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2aeab1f80090a7e730811b73cc0e9e83c4fa6271925ea4d4e1bc1799e24ed6->enter($__internal_fa2aeab1f80090a7e730811b73cc0e9e83c4fa6271925ea4d4e1bc1799e24ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa2aeab1f80090a7e730811b73cc0e9e83c4fa6271925ea4d4e1bc1799e24ed6->leave($__internal_fa2aeab1f80090a7e730811b73cc0e9e83c4fa6271925ea4d4e1bc1799e24ed6_prof);

        
        $__internal_5c346f728ba334be5d74e809a5ab5f0ca3f14663aeb06b5576744e94417420fd->leave($__internal_5c346f728ba334be5d74e809a5ab5f0ca3f14663aeb06b5576744e94417420fd_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06c0d1c83b7219e5c4ac49414f7aa60e8cb1b6b03a9b050950818fea3ac57251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c0d1c83b7219e5c4ac49414f7aa60e8cb1b6b03a9b050950818fea3ac57251->enter($__internal_06c0d1c83b7219e5c4ac49414f7aa60e8cb1b6b03a9b050950818fea3ac57251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4521babc64de845e5721566412a75940d72da85f23b1e754dff1721ccf14f67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4521babc64de845e5721566412a75940d72da85f23b1e754dff1721ccf14f67d->enter($__internal_4521babc64de845e5721566412a75940d72da85f23b1e754dff1721ccf14f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4521babc64de845e5721566412a75940d72da85f23b1e754dff1721ccf14f67d->leave($__internal_4521babc64de845e5721566412a75940d72da85f23b1e754dff1721ccf14f67d_prof);

        
        $__internal_06c0d1c83b7219e5c4ac49414f7aa60e8cb1b6b03a9b050950818fea3ac57251->leave($__internal_06c0d1c83b7219e5c4ac49414f7aa60e8cb1b6b03a9b050950818fea3ac57251_prof);

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
        return array (  123 => 17,  114 => 16,  96 => 12,  92 => 11,  88 => 10,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        {{ employees.nom}}<br \\>
        {{ employees.prenom }}<br \\>
        {{ employees.poste }}<br \\>
        <img src=\"{{ vich_uploader_asset(employees, 'imageFile') }}\" alt=\"{{ employees.image }}\" /><br \\><br \\>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:employees.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/employees.html.twig");
    }
}
