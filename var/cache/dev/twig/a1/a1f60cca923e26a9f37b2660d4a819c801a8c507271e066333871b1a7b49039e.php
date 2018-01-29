<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_9b4e3ed6a776a8cdbeb3ddc8a3238dd137bd92841cac33feff6509ddf8016400 extends Twig_Template
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
        $__internal_3b1bca3ee914566f14482f158b255c4cd354fa26cd7b6c16a926881e8f280b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1bca3ee914566f14482f158b255c4cd354fa26cd7b6c16a926881e8f280b6d->enter($__internal_3b1bca3ee914566f14482f158b255c4cd354fa26cd7b6c16a926881e8f280b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_05486c1bef20166ed164627f3ae4a0c0682ab10c5a3adeb7cee171e3e0b6877d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05486c1bef20166ed164627f3ae4a0c0682ab10c5a3adeb7cee171e3e0b6877d->enter($__internal_05486c1bef20166ed164627f3ae4a0c0682ab10c5a3adeb7cee171e3e0b6877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_3b1bca3ee914566f14482f158b255c4cd354fa26cd7b6c16a926881e8f280b6d->leave($__internal_3b1bca3ee914566f14482f158b255c4cd354fa26cd7b6c16a926881e8f280b6d_prof);

        
        $__internal_05486c1bef20166ed164627f3ae4a0c0682ab10c5a3adeb7cee171e3e0b6877d->leave($__internal_05486c1bef20166ed164627f3ae4a0c0682ab10c5a3adeb7cee171e3e0b6877d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
