<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f33e7664b55a5974a5f14a695467efd780c79a76b031a2061313e8e83d8fea83 extends Twig_Template
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
        $__internal_12bf2dcb18635dfcd961550253785a33e4ca75c70ddb56ffe3c6e184a0b181b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bf2dcb18635dfcd961550253785a33e4ca75c70ddb56ffe3c6e184a0b181b1->enter($__internal_12bf2dcb18635dfcd961550253785a33e4ca75c70ddb56ffe3c6e184a0b181b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_96029f38deb9882c922f65aab09d92178e8128f1c64c658779c6f858c620b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96029f38deb9882c922f65aab09d92178e8128f1c64c658779c6f858c620b092->enter($__internal_96029f38deb9882c922f65aab09d92178e8128f1c64c658779c6f858c620b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_12bf2dcb18635dfcd961550253785a33e4ca75c70ddb56ffe3c6e184a0b181b1->leave($__internal_12bf2dcb18635dfcd961550253785a33e4ca75c70ddb56ffe3c6e184a0b181b1_prof);

        
        $__internal_96029f38deb9882c922f65aab09d92178e8128f1c64c658779c6f858c620b092->leave($__internal_96029f38deb9882c922f65aab09d92178e8128f1c64c658779c6f858c620b092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
