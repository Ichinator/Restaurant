<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_95c1f14313010af388a764d7ea51c1130f031aa29b255edfebb7e1755e7cde51 extends Twig_Template
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
        $__internal_6ba69f8ef3745cdaf12fa125d6f6167043528281ac9ba2e19b79aa2c2ea185b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba69f8ef3745cdaf12fa125d6f6167043528281ac9ba2e19b79aa2c2ea185b0->enter($__internal_6ba69f8ef3745cdaf12fa125d6f6167043528281ac9ba2e19b79aa2c2ea185b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2d852a1461ce5da39fe9263265433344d944f06a1fc642949673897137a243ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d852a1461ce5da39fe9263265433344d944f06a1fc642949673897137a243ef->enter($__internal_2d852a1461ce5da39fe9263265433344d944f06a1fc642949673897137a243ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6ba69f8ef3745cdaf12fa125d6f6167043528281ac9ba2e19b79aa2c2ea185b0->leave($__internal_6ba69f8ef3745cdaf12fa125d6f6167043528281ac9ba2e19b79aa2c2ea185b0_prof);

        
        $__internal_2d852a1461ce5da39fe9263265433344d944f06a1fc642949673897137a243ef->leave($__internal_2d852a1461ce5da39fe9263265433344d944f06a1fc642949673897137a243ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
