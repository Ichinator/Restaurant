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
        $__internal_b9edd02aa2aeb5e7d0d419192b78a473f57d558077952621e2417080bcc54adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9edd02aa2aeb5e7d0d419192b78a473f57d558077952621e2417080bcc54adf->enter($__internal_b9edd02aa2aeb5e7d0d419192b78a473f57d558077952621e2417080bcc54adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f9e7bff38f43824182670cec3f3de9f49c09665086a29cf3d040ecacb7de25e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7bff38f43824182670cec3f3de9f49c09665086a29cf3d040ecacb7de25e3->enter($__internal_f9e7bff38f43824182670cec3f3de9f49c09665086a29cf3d040ecacb7de25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b9edd02aa2aeb5e7d0d419192b78a473f57d558077952621e2417080bcc54adf->leave($__internal_b9edd02aa2aeb5e7d0d419192b78a473f57d558077952621e2417080bcc54adf_prof);

        
        $__internal_f9e7bff38f43824182670cec3f3de9f49c09665086a29cf3d040ecacb7de25e3->leave($__internal_f9e7bff38f43824182670cec3f3de9f49c09665086a29cf3d040ecacb7de25e3_prof);

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
