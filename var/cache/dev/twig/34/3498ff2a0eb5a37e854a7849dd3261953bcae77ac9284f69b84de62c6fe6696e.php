<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_c8b994bdab7bb211fd3785929a855dca1231c955be6de08c7a90f3d3505eb4df extends Twig_Template
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
        $__internal_3b55469c885c9f4658870a701285dd26befd34c0ef1c61f322c87f9d46796403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b55469c885c9f4658870a701285dd26befd34c0ef1c61f322c87f9d46796403->enter($__internal_3b55469c885c9f4658870a701285dd26befd34c0ef1c61f322c87f9d46796403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_e207e72c5d254f44d1dce2a944c29680f83fff8ada671032c711b3f968d7dd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e207e72c5d254f44d1dce2a944c29680f83fff8ada671032c711b3f968d7dd0a->enter($__internal_e207e72c5d254f44d1dce2a944c29680f83fff8ada671032c711b3f968d7dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_3b55469c885c9f4658870a701285dd26befd34c0ef1c61f322c87f9d46796403->leave($__internal_3b55469c885c9f4658870a701285dd26befd34c0ef1c61f322c87f9d46796403_prof);

        
        $__internal_e207e72c5d254f44d1dce2a944c29680f83fff8ada671032c711b3f968d7dd0a->leave($__internal_e207e72c5d254f44d1dce2a944c29680f83fff8ada671032c711b3f968d7dd0a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
