<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2e32f6255837e60e43bca650d850e8065987b58378c900b89e5f4c1c1af4e4ef extends Twig_Template
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
        $__internal_a8d40394216d50ea70836deef8b379125d2f56b4a62466a25b8621f7ab9c37fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d40394216d50ea70836deef8b379125d2f56b4a62466a25b8621f7ab9c37fe->enter($__internal_a8d40394216d50ea70836deef8b379125d2f56b4a62466a25b8621f7ab9c37fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e3c2421a3aaaa3d3b6ecb16a4fb08ab963a3f96b6ed40699b055ed10820fd67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c2421a3aaaa3d3b6ecb16a4fb08ab963a3f96b6ed40699b055ed10820fd67b->enter($__internal_e3c2421a3aaaa3d3b6ecb16a4fb08ab963a3f96b6ed40699b055ed10820fd67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a8d40394216d50ea70836deef8b379125d2f56b4a62466a25b8621f7ab9c37fe->leave($__internal_a8d40394216d50ea70836deef8b379125d2f56b4a62466a25b8621f7ab9c37fe_prof);

        
        $__internal_e3c2421a3aaaa3d3b6ecb16a4fb08ab963a3f96b6ed40699b055ed10820fd67b->leave($__internal_e3c2421a3aaaa3d3b6ecb16a4fb08ab963a3f96b6ed40699b055ed10820fd67b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
