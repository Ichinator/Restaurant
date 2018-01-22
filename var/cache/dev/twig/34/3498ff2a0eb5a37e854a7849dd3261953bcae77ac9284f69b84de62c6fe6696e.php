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
        $__internal_403855d96d427a4f7b961b6eaea6342e08be5c352b1f6d071e43d52eeceb25eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403855d96d427a4f7b961b6eaea6342e08be5c352b1f6d071e43d52eeceb25eb->enter($__internal_403855d96d427a4f7b961b6eaea6342e08be5c352b1f6d071e43d52eeceb25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_40504ff1bf5c954e9e9e5ca98781fea9721d357269679e8c498ea48ab9c2a55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40504ff1bf5c954e9e9e5ca98781fea9721d357269679e8c498ea48ab9c2a55c->enter($__internal_40504ff1bf5c954e9e9e5ca98781fea9721d357269679e8c498ea48ab9c2a55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

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
        
        $__internal_403855d96d427a4f7b961b6eaea6342e08be5c352b1f6d071e43d52eeceb25eb->leave($__internal_403855d96d427a4f7b961b6eaea6342e08be5c352b1f6d071e43d52eeceb25eb_prof);

        
        $__internal_40504ff1bf5c954e9e9e5ca98781fea9721d357269679e8c498ea48ab9c2a55c->leave($__internal_40504ff1bf5c954e9e9e5ca98781fea9721d357269679e8c498ea48ab9c2a55c_prof);

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
