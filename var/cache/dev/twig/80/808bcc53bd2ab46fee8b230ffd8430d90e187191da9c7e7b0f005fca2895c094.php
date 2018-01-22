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
        $__internal_e1b5a59b94c22dad86e5800c918399de23611dc37e181b282833be2fbd1e478a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b5a59b94c22dad86e5800c918399de23611dc37e181b282833be2fbd1e478a->enter($__internal_e1b5a59b94c22dad86e5800c918399de23611dc37e181b282833be2fbd1e478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5d7d889ef28d42ae4086a5d3254312e96e42c92011fd6dff2c106e1275dfb7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7d889ef28d42ae4086a5d3254312e96e42c92011fd6dff2c106e1275dfb7fa->enter($__internal_5d7d889ef28d42ae4086a5d3254312e96e42c92011fd6dff2c106e1275dfb7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e1b5a59b94c22dad86e5800c918399de23611dc37e181b282833be2fbd1e478a->leave($__internal_e1b5a59b94c22dad86e5800c918399de23611dc37e181b282833be2fbd1e478a_prof);

        
        $__internal_5d7d889ef28d42ae4086a5d3254312e96e42c92011fd6dff2c106e1275dfb7fa->leave($__internal_5d7d889ef28d42ae4086a5d3254312e96e42c92011fd6dff2c106e1275dfb7fa_prof);

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
