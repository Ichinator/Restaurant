<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_930096212031112d66ec8bc4d8de44f627e293834f6cf1df6ef1683ed8f4547f extends Twig_Template
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
        $__internal_d4886634fb7b1a9e43e47c611603ea09189158495cf106b5bd5e52ca854a07ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4886634fb7b1a9e43e47c611603ea09189158495cf106b5bd5e52ca854a07ce->enter($__internal_d4886634fb7b1a9e43e47c611603ea09189158495cf106b5bd5e52ca854a07ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d82bdf95c8428a692b216868e4c5bff18d5d23f8b1388238499f27ea10792560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82bdf95c8428a692b216868e4c5bff18d5d23f8b1388238499f27ea10792560->enter($__internal_d82bdf95c8428a692b216868e4c5bff18d5d23f8b1388238499f27ea10792560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4886634fb7b1a9e43e47c611603ea09189158495cf106b5bd5e52ca854a07ce->leave($__internal_d4886634fb7b1a9e43e47c611603ea09189158495cf106b5bd5e52ca854a07ce_prof);

        
        $__internal_d82bdf95c8428a692b216868e4c5bff18d5d23f8b1388238499f27ea10792560->leave($__internal_d82bdf95c8428a692b216868e4c5bff18d5d23f8b1388238499f27ea10792560_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
