<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_0a686140c91e4ca389f187a7c65349eb7b4c33bfb315552cc3f1ddaf3898993c extends Twig_Template
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
        $__internal_9333903aef59a416f33ea35c7a7389d6be27ef4976d5ec713ca0b996c0aafd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9333903aef59a416f33ea35c7a7389d6be27ef4976d5ec713ca0b996c0aafd17->enter($__internal_9333903aef59a416f33ea35c7a7389d6be27ef4976d5ec713ca0b996c0aafd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_6493c5e725305739844d52cd044aa01ce9540463e892a41cec04aac119f12be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6493c5e725305739844d52cd044aa01ce9540463e892a41cec04aac119f12be4->enter($__internal_6493c5e725305739844d52cd044aa01ce9540463e892a41cec04aac119f12be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9333903aef59a416f33ea35c7a7389d6be27ef4976d5ec713ca0b996c0aafd17->leave($__internal_9333903aef59a416f33ea35c7a7389d6be27ef4976d5ec713ca0b996c0aafd17_prof);

        
        $__internal_6493c5e725305739844d52cd044aa01ce9540463e892a41cec04aac119f12be4->leave($__internal_6493c5e725305739844d52cd044aa01ce9540463e892a41cec04aac119f12be4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
