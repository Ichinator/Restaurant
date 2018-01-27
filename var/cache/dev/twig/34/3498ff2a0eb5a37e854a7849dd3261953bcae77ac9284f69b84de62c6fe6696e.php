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
        $__internal_a38dc93543d19b1c384e251a2dc3c0e12d2a7cf381b67fbd75987213133f4cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38dc93543d19b1c384e251a2dc3c0e12d2a7cf381b67fbd75987213133f4cb7->enter($__internal_a38dc93543d19b1c384e251a2dc3c0e12d2a7cf381b67fbd75987213133f4cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_62258196c5d231f47e3f05503d7324d2ccee8cb115df34850259e14d576c5b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62258196c5d231f47e3f05503d7324d2ccee8cb115df34850259e14d576c5b80->enter($__internal_62258196c5d231f47e3f05503d7324d2ccee8cb115df34850259e14d576c5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

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
        
        $__internal_a38dc93543d19b1c384e251a2dc3c0e12d2a7cf381b67fbd75987213133f4cb7->leave($__internal_a38dc93543d19b1c384e251a2dc3c0e12d2a7cf381b67fbd75987213133f4cb7_prof);

        
        $__internal_62258196c5d231f47e3f05503d7324d2ccee8cb115df34850259e14d576c5b80->leave($__internal_62258196c5d231f47e3f05503d7324d2ccee8cb115df34850259e14d576c5b80_prof);

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
