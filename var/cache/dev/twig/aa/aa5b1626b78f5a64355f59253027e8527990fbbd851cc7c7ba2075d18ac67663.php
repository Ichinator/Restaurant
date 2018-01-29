<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_824bee009a356f25a0540f169497ca2d10696dea78820733a297a05c7d4fa7be extends Twig_Template
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
        $__internal_80d6ed320d9aed7c417e431505d6db0f0aae8c70ee27d26032eddcbd515b11c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d6ed320d9aed7c417e431505d6db0f0aae8c70ee27d26032eddcbd515b11c9->enter($__internal_80d6ed320d9aed7c417e431505d6db0f0aae8c70ee27d26032eddcbd515b11c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_0cef2e0df59ab8795fd527d91d4d3eb75cd14aae870d83cde93338471cd7b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef2e0df59ab8795fd527d91d4d3eb75cd14aae870d83cde93338471cd7b0c9->enter($__internal_0cef2e0df59ab8795fd527d91d4d3eb75cd14aae870d83cde93338471cd7b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_80d6ed320d9aed7c417e431505d6db0f0aae8c70ee27d26032eddcbd515b11c9->leave($__internal_80d6ed320d9aed7c417e431505d6db0f0aae8c70ee27d26032eddcbd515b11c9_prof);

        
        $__internal_0cef2e0df59ab8795fd527d91d4d3eb75cd14aae870d83cde93338471cd7b0c9->leave($__internal_0cef2e0df59ab8795fd527d91d4d3eb75cd14aae870d83cde93338471cd7b0c9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
