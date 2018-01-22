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
        $__internal_70ff87a55dccbda7316df17ef23512d19c807fdaac07d6b9f3e559b5e50924bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ff87a55dccbda7316df17ef23512d19c807fdaac07d6b9f3e559b5e50924bb->enter($__internal_70ff87a55dccbda7316df17ef23512d19c807fdaac07d6b9f3e559b5e50924bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_2413b98266eb542d1c02755ac0d90a99ef55501c10a79c956193235a555f8374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2413b98266eb542d1c02755ac0d90a99ef55501c10a79c956193235a555f8374->enter($__internal_2413b98266eb542d1c02755ac0d90a99ef55501c10a79c956193235a555f8374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_70ff87a55dccbda7316df17ef23512d19c807fdaac07d6b9f3e559b5e50924bb->leave($__internal_70ff87a55dccbda7316df17ef23512d19c807fdaac07d6b9f3e559b5e50924bb_prof);

        
        $__internal_2413b98266eb542d1c02755ac0d90a99ef55501c10a79c956193235a555f8374->leave($__internal_2413b98266eb542d1c02755ac0d90a99ef55501c10a79c956193235a555f8374_prof);

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
