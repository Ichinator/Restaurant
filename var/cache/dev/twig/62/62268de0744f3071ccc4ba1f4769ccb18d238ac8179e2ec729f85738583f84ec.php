<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c9b694c994623bb909c0a9e6dd5f4f1c9709167ec92ae52d7ecd2e16aa9423cd extends Twig_Template
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
        $__internal_38b214df028ffde50705af9481de88aa470192900f8abc0eeb51de769ccea9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b214df028ffde50705af9481de88aa470192900f8abc0eeb51de769ccea9c9->enter($__internal_38b214df028ffde50705af9481de88aa470192900f8abc0eeb51de769ccea9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a0159e461f24b8eb18e454fa53c3051fe43ff51bae11eeefe33acd2c9a57c12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0159e461f24b8eb18e454fa53c3051fe43ff51bae11eeefe33acd2c9a57c12c->enter($__internal_a0159e461f24b8eb18e454fa53c3051fe43ff51bae11eeefe33acd2c9a57c12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_38b214df028ffde50705af9481de88aa470192900f8abc0eeb51de769ccea9c9->leave($__internal_38b214df028ffde50705af9481de88aa470192900f8abc0eeb51de769ccea9c9_prof);

        
        $__internal_a0159e461f24b8eb18e454fa53c3051fe43ff51bae11eeefe33acd2c9a57c12c->leave($__internal_a0159e461f24b8eb18e454fa53c3051fe43ff51bae11eeefe33acd2c9a57c12c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
