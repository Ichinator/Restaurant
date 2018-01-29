<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b70176c81d1c1ebfa53d697781a5315ae598c76d08368bf3f3ebae833299b39 extends Twig_Template
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
        $__internal_40ac0440c3221e686b42c91245eded937422f2efe78d63883e57e57a463c83d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ac0440c3221e686b42c91245eded937422f2efe78d63883e57e57a463c83d5->enter($__internal_40ac0440c3221e686b42c91245eded937422f2efe78d63883e57e57a463c83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b1c1b6a1b60cce52fc73bc12b81a058493dd9d3f2732037cf9844c8e582accce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c1b6a1b60cce52fc73bc12b81a058493dd9d3f2732037cf9844c8e582accce->enter($__internal_b1c1b6a1b60cce52fc73bc12b81a058493dd9d3f2732037cf9844c8e582accce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_40ac0440c3221e686b42c91245eded937422f2efe78d63883e57e57a463c83d5->leave($__internal_40ac0440c3221e686b42c91245eded937422f2efe78d63883e57e57a463c83d5_prof);

        
        $__internal_b1c1b6a1b60cce52fc73bc12b81a058493dd9d3f2732037cf9844c8e582accce->leave($__internal_b1c1b6a1b60cce52fc73bc12b81a058493dd9d3f2732037cf9844c8e582accce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
