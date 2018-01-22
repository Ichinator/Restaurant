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
        $__internal_4f307eab9e103b30dab6e9a30b5d7aae3c1b8717f9d593bd6df93c163f653bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f307eab9e103b30dab6e9a30b5d7aae3c1b8717f9d593bd6df93c163f653bbb->enter($__internal_4f307eab9e103b30dab6e9a30b5d7aae3c1b8717f9d593bd6df93c163f653bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_067141b827ceb0a076f843084b09f422e113959b26060e8b4dc2a2b50e5bb453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067141b827ceb0a076f843084b09f422e113959b26060e8b4dc2a2b50e5bb453->enter($__internal_067141b827ceb0a076f843084b09f422e113959b26060e8b4dc2a2b50e5bb453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4f307eab9e103b30dab6e9a30b5d7aae3c1b8717f9d593bd6df93c163f653bbb->leave($__internal_4f307eab9e103b30dab6e9a30b5d7aae3c1b8717f9d593bd6df93c163f653bbb_prof);

        
        $__internal_067141b827ceb0a076f843084b09f422e113959b26060e8b4dc2a2b50e5bb453->leave($__internal_067141b827ceb0a076f843084b09f422e113959b26060e8b4dc2a2b50e5bb453_prof);

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
