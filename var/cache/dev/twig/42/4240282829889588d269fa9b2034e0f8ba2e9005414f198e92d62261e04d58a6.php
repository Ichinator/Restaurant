<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4954ebecba1cde69954b59bfa637c8ad9b3c16796fc45f0ff1a47f0c790a0a1b extends Twig_Template
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
        $__internal_39db2e7353e7d86de2bc81e83116618084779fbe7fe037d3f131ec7818153601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39db2e7353e7d86de2bc81e83116618084779fbe7fe037d3f131ec7818153601->enter($__internal_39db2e7353e7d86de2bc81e83116618084779fbe7fe037d3f131ec7818153601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3f72e05563bd6bc3f49782bf832135acefae8567873e7f07fe4c929291a4a7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f72e05563bd6bc3f49782bf832135acefae8567873e7f07fe4c929291a4a7c6->enter($__internal_3f72e05563bd6bc3f49782bf832135acefae8567873e7f07fe4c929291a4a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_39db2e7353e7d86de2bc81e83116618084779fbe7fe037d3f131ec7818153601->leave($__internal_39db2e7353e7d86de2bc81e83116618084779fbe7fe037d3f131ec7818153601_prof);

        
        $__internal_3f72e05563bd6bc3f49782bf832135acefae8567873e7f07fe4c929291a4a7c6->leave($__internal_3f72e05563bd6bc3f49782bf832135acefae8567873e7f07fe4c929291a4a7c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
