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
        $__internal_0a96f264ee97f18ec0db18fc3b835261bef027c7b27c4c3a140cd68993cf450b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a96f264ee97f18ec0db18fc3b835261bef027c7b27c4c3a140cd68993cf450b->enter($__internal_0a96f264ee97f18ec0db18fc3b835261bef027c7b27c4c3a140cd68993cf450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c0adc8831a5fe553eb777d532caeaeac6f6cd93f4dab148f6a67e947d228516b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0adc8831a5fe553eb777d532caeaeac6f6cd93f4dab148f6a67e947d228516b->enter($__internal_c0adc8831a5fe553eb777d532caeaeac6f6cd93f4dab148f6a67e947d228516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0a96f264ee97f18ec0db18fc3b835261bef027c7b27c4c3a140cd68993cf450b->leave($__internal_0a96f264ee97f18ec0db18fc3b835261bef027c7b27c4c3a140cd68993cf450b_prof);

        
        $__internal_c0adc8831a5fe553eb777d532caeaeac6f6cd93f4dab148f6a67e947d228516b->leave($__internal_c0adc8831a5fe553eb777d532caeaeac6f6cd93f4dab148f6a67e947d228516b_prof);

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
