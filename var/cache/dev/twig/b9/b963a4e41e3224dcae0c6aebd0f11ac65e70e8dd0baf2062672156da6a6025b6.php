<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9daf8c3af69260cca8b25ca5c7eed403bd92746e54291a6a59ab5901d6e1e530 extends Twig_Template
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
        $__internal_d92b65c9ebb2cc14a36392323252a68ffc27bce19d3f7ed7b8e16db08e80ce22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92b65c9ebb2cc14a36392323252a68ffc27bce19d3f7ed7b8e16db08e80ce22->enter($__internal_d92b65c9ebb2cc14a36392323252a68ffc27bce19d3f7ed7b8e16db08e80ce22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4075ec2c8a52f7165e9d0cf398c30827b880941a713456937cf8bc2c9b355e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4075ec2c8a52f7165e9d0cf398c30827b880941a713456937cf8bc2c9b355e85->enter($__internal_4075ec2c8a52f7165e9d0cf398c30827b880941a713456937cf8bc2c9b355e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d92b65c9ebb2cc14a36392323252a68ffc27bce19d3f7ed7b8e16db08e80ce22->leave($__internal_d92b65c9ebb2cc14a36392323252a68ffc27bce19d3f7ed7b8e16db08e80ce22_prof);

        
        $__internal_4075ec2c8a52f7165e9d0cf398c30827b880941a713456937cf8bc2c9b355e85->leave($__internal_4075ec2c8a52f7165e9d0cf398c30827b880941a713456937cf8bc2c9b355e85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
