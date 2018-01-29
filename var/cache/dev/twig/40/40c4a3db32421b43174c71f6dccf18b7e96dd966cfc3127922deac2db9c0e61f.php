<?php

/* :default:oneEmployee.html.twig */
class __TwigTemplate_ab18ef9a466bd57cb2076cd76b6b306c47d6fad8c3dc0725074aecdff092be9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:oneEmployee.html.twig", 1);
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
        $__internal_a68d925ea759aa70020ab20c75b9db31cf6c3b443abd72911ba7b037e35b61bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d925ea759aa70020ab20c75b9db31cf6c3b443abd72911ba7b037e35b61bc->enter($__internal_a68d925ea759aa70020ab20c75b9db31cf6c3b443abd72911ba7b037e35b61bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneEmployee.html.twig"));

        $__internal_9691d6d7642aae50f4886a1940843582f59e7678c368024667dc028092324937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9691d6d7642aae50f4886a1940843582f59e7678c368024667dc028092324937->enter($__internal_9691d6d7642aae50f4886a1940843582f59e7678c368024667dc028092324937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:oneEmployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a68d925ea759aa70020ab20c75b9db31cf6c3b443abd72911ba7b037e35b61bc->leave($__internal_a68d925ea759aa70020ab20c75b9db31cf6c3b443abd72911ba7b037e35b61bc_prof);

        
        $__internal_9691d6d7642aae50f4886a1940843582f59e7678c368024667dc028092324937->leave($__internal_9691d6d7642aae50f4886a1940843582f59e7678c368024667dc028092324937_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_246e430a21ebfb0b85ff2ced49f403b15805e4b68c1aa54cd4e00f00f30a406b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246e430a21ebfb0b85ff2ced49f403b15805e4b68c1aa54cd4e00f00f30a406b->enter($__internal_246e430a21ebfb0b85ff2ced49f403b15805e4b68c1aa54cd4e00f00f30a406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f8a8b1863568ceba07393fcf0ad561dbd45932cbd19589311f16faf32dcc99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8a8b1863568ceba07393fcf0ad561dbd45932cbd19589311f16faf32dcc99a->enter($__internal_9f8a8b1863568ceba07393fcf0ad561dbd45932cbd19589311f16faf32dcc99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9f8a8b1863568ceba07393fcf0ad561dbd45932cbd19589311f16faf32dcc99a->leave($__internal_9f8a8b1863568ceba07393fcf0ad561dbd45932cbd19589311f16faf32dcc99a_prof);

        
        $__internal_246e430a21ebfb0b85ff2ced49f403b15805e4b68c1aa54cd4e00f00f30a406b->leave($__internal_246e430a21ebfb0b85ff2ced49f403b15805e4b68c1aa54cd4e00f00f30a406b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b4715ff3392395a2bc016a9f7a0776d6d12bcbffea0ab7b25bdd93603c0088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b4715ff3392395a2bc016a9f7a0776d6d12bcbffea0ab7b25bdd93603c0088->enter($__internal_27b4715ff3392395a2bc016a9f7a0776d6d12bcbffea0ab7b25bdd93603c0088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_541156627fc16f836d6967ff8abe4d6f30fcad982a987302ff0b033f1a8722ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541156627fc16f836d6967ff8abe4d6f30fcad982a987302ff0b033f1a8722ac->enter($__internal_541156627fc16f836d6967ff8abe4d6f30fcad982a987302ff0b033f1a8722ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")), "nom", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")), "prenom", array()), "html", null, true);
        echo "<br \\>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")), "poste", array()), "html", null, true);
        echo "<br \\>
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneEmployee"] ?? $this->getContext($context, "oneEmployee")), "image", array()), "html", null, true);
        echo "\" /><br \\><br \\>
";
        
        $__internal_541156627fc16f836d6967ff8abe4d6f30fcad982a987302ff0b033f1a8722ac->leave($__internal_541156627fc16f836d6967ff8abe4d6f30fcad982a987302ff0b033f1a8722ac_prof);

        
        $__internal_27b4715ff3392395a2bc016a9f7a0776d6d12bcbffea0ab7b25bdd93603c0088->leave($__internal_27b4715ff3392395a2bc016a9f7a0776d6d12bcbffea0ab7b25bdd93603c0088_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6a38de810d3f196d68124e6f1e7a27ea309b27785949ff5cadd15de329bfcb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a38de810d3f196d68124e6f1e7a27ea309b27785949ff5cadd15de329bfcb4->enter($__internal_f6a38de810d3f196d68124e6f1e7a27ea309b27785949ff5cadd15de329bfcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3bae0b065bf8eb89e6ad12589751c5927603c64c6d46cc01281338fc75820db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bae0b065bf8eb89e6ad12589751c5927603c64c6d46cc01281338fc75820db->enter($__internal_f3bae0b065bf8eb89e6ad12589751c5927603c64c6d46cc01281338fc75820db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f3bae0b065bf8eb89e6ad12589751c5927603c64c6d46cc01281338fc75820db->leave($__internal_f3bae0b065bf8eb89e6ad12589751c5927603c64c6d46cc01281338fc75820db_prof);

        
        $__internal_f6a38de810d3f196d68124e6f1e7a27ea309b27785949ff5cadd15de329bfcb4->leave($__internal_f6a38de810d3f196d68124e6f1e7a27ea309b27785949ff5cadd15de329bfcb4_prof);

    }

    public function getTemplateName()
    {
        return ":default:oneEmployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 14,  104 => 13,  90 => 10,  86 => 9,  82 => 8,  78 => 7,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    {{ oneEmployee.nom}}<br \\>
    {{ oneEmployee.prenom }}<br \\>
    {{ oneEmployee.poste }}<br \\>
    <img src=\"{{ vich_uploader_asset(oneEmployee, 'imageFile') }}\" alt=\"{{ oneEmployee.image }}\" /><br \\><br \\>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", ":default:oneEmployee.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/default/oneEmployee.html.twig");
    }
}
