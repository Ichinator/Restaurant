<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b0c09a1158bfb9f2fcff4d80606b8432366286f92dbbc4c36578e399ff8196bf extends Twig_Template
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
        $__internal_ede37650ddbe10508e5401692e4de494585dcfff54b45d127f9d6d6c07ae1767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede37650ddbe10508e5401692e4de494585dcfff54b45d127f9d6d6c07ae1767->enter($__internal_ede37650ddbe10508e5401692e4de494585dcfff54b45d127f9d6d6c07ae1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_41947a9d4c389bdacbe5c1d47e7b4ac06d00d4b7dc37c6f8a7f988ad0364e886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41947a9d4c389bdacbe5c1d47e7b4ac06d00d4b7dc37c6f8a7f988ad0364e886->enter($__internal_41947a9d4c389bdacbe5c1d47e7b4ac06d00d4b7dc37c6f8a7f988ad0364e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ede37650ddbe10508e5401692e4de494585dcfff54b45d127f9d6d6c07ae1767->leave($__internal_ede37650ddbe10508e5401692e4de494585dcfff54b45d127f9d6d6c07ae1767_prof);

        
        $__internal_41947a9d4c389bdacbe5c1d47e7b4ac06d00d4b7dc37c6f8a7f988ad0364e886->leave($__internal_41947a9d4c389bdacbe5c1d47e7b4ac06d00d4b7dc37c6f8a7f988ad0364e886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
