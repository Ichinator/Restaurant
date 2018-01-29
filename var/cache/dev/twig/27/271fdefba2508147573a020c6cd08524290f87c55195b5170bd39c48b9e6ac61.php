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
        $__internal_376007b2186544f3eea5ae43bc9faea67bbeae13f7bda35bbf4e4f2b7a909879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376007b2186544f3eea5ae43bc9faea67bbeae13f7bda35bbf4e4f2b7a909879->enter($__internal_376007b2186544f3eea5ae43bc9faea67bbeae13f7bda35bbf4e4f2b7a909879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_81782c057bbeef230756d45cd4647a8b5fd118786ce745f14c4583c9f46cc618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81782c057bbeef230756d45cd4647a8b5fd118786ce745f14c4583c9f46cc618->enter($__internal_81782c057bbeef230756d45cd4647a8b5fd118786ce745f14c4583c9f46cc618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_376007b2186544f3eea5ae43bc9faea67bbeae13f7bda35bbf4e4f2b7a909879->leave($__internal_376007b2186544f3eea5ae43bc9faea67bbeae13f7bda35bbf4e4f2b7a909879_prof);

        
        $__internal_81782c057bbeef230756d45cd4647a8b5fd118786ce745f14c4583c9f46cc618->leave($__internal_81782c057bbeef230756d45cd4647a8b5fd118786ce745f14c4583c9f46cc618_prof);

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
