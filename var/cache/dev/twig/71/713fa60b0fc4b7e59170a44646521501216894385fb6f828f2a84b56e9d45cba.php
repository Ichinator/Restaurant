<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_ed47dadfaf3061e3bbd45b1e55cccda71c90dc3fe6f3a4b140ae517a0128546d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7338ff7dd62c455bc1a14bc7327275fc519314db2c5bccdba6cd0061f615fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7338ff7dd62c455bc1a14bc7327275fc519314db2c5bccdba6cd0061f615fe44->enter($__internal_7338ff7dd62c455bc1a14bc7327275fc519314db2c5bccdba6cd0061f615fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_5c56f0fbdc464f52cc7328c4549c9ad176ae475e3dd66578f46d9e1d0ad416d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c56f0fbdc464f52cc7328c4549c9ad176ae475e3dd66578f46d9e1d0ad416d9->enter($__internal_5c56f0fbdc464f52cc7328c4549c9ad176ae475e3dd66578f46d9e1d0ad416d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7338ff7dd62c455bc1a14bc7327275fc519314db2c5bccdba6cd0061f615fe44->leave($__internal_7338ff7dd62c455bc1a14bc7327275fc519314db2c5bccdba6cd0061f615fe44_prof);

        
        $__internal_5c56f0fbdc464f52cc7328c4549c9ad176ae475e3dd66578f46d9e1d0ad416d9->leave($__internal_5c56f0fbdc464f52cc7328c4549c9ad176ae475e3dd66578f46d9e1d0ad416d9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
