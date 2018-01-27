<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1125d3d45c7f75486f84ef102a2c647e63ecead721d2cf4b390059b2ce471b2d extends Twig_Template
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
        $__internal_dfd06326cd3ccf53618214d634c39404464f25f09150a48e9c8e8dfbbc907e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd06326cd3ccf53618214d634c39404464f25f09150a48e9c8e8dfbbc907e6b->enter($__internal_dfd06326cd3ccf53618214d634c39404464f25f09150a48e9c8e8dfbbc907e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b499eb7d6bbe3d0dec986adf20e61eca8d43087f5aab32c7f134e4f9400edf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b499eb7d6bbe3d0dec986adf20e61eca8d43087f5aab32c7f134e4f9400edf35->enter($__internal_b499eb7d6bbe3d0dec986adf20e61eca8d43087f5aab32c7f134e4f9400edf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_dfd06326cd3ccf53618214d634c39404464f25f09150a48e9c8e8dfbbc907e6b->leave($__internal_dfd06326cd3ccf53618214d634c39404464f25f09150a48e9c8e8dfbbc907e6b_prof);

        
        $__internal_b499eb7d6bbe3d0dec986adf20e61eca8d43087f5aab32c7f134e4f9400edf35->leave($__internal_b499eb7d6bbe3d0dec986adf20e61eca8d43087f5aab32c7f134e4f9400edf35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
