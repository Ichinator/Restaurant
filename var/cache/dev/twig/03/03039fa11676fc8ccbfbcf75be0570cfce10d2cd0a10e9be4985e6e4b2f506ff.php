<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0e9911e76749b7980adfaa45e5e480d152f6694765903dc99802fa2730e3d4b2 extends Twig_Template
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
        $__internal_efdcdcc03d82822fc2ffa5de1d0b60021384b643b2c0227b8d22101cadd1cb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdcdcc03d82822fc2ffa5de1d0b60021384b643b2c0227b8d22101cadd1cb96->enter($__internal_efdcdcc03d82822fc2ffa5de1d0b60021384b643b2c0227b8d22101cadd1cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_985d98f2860f3aac1b1883d3c8eb8c8775fb4e2fdd3c6a7f6c29fe97aa1f07b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985d98f2860f3aac1b1883d3c8eb8c8775fb4e2fdd3c6a7f6c29fe97aa1f07b2->enter($__internal_985d98f2860f3aac1b1883d3c8eb8c8775fb4e2fdd3c6a7f6c29fe97aa1f07b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_efdcdcc03d82822fc2ffa5de1d0b60021384b643b2c0227b8d22101cadd1cb96->leave($__internal_efdcdcc03d82822fc2ffa5de1d0b60021384b643b2c0227b8d22101cadd1cb96_prof);

        
        $__internal_985d98f2860f3aac1b1883d3c8eb8c8775fb4e2fdd3c6a7f6c29fe97aa1f07b2->leave($__internal_985d98f2860f3aac1b1883d3c8eb8c8775fb4e2fdd3c6a7f6c29fe97aa1f07b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
