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
        $__internal_79c4312c4f81e2e0ad9b7e0fde87e1818ed554ed9a3d78a3c3b01149f89e9bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c4312c4f81e2e0ad9b7e0fde87e1818ed554ed9a3d78a3c3b01149f89e9bb7->enter($__internal_79c4312c4f81e2e0ad9b7e0fde87e1818ed554ed9a3d78a3c3b01149f89e9bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_90d1d62a43f6b314f594e9ca53e2d37033dd0c250a527a77b740c0668c5797f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d1d62a43f6b314f594e9ca53e2d37033dd0c250a527a77b740c0668c5797f4->enter($__internal_90d1d62a43f6b314f594e9ca53e2d37033dd0c250a527a77b740c0668c5797f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_79c4312c4f81e2e0ad9b7e0fde87e1818ed554ed9a3d78a3c3b01149f89e9bb7->leave($__internal_79c4312c4f81e2e0ad9b7e0fde87e1818ed554ed9a3d78a3c3b01149f89e9bb7_prof);

        
        $__internal_90d1d62a43f6b314f594e9ca53e2d37033dd0c250a527a77b740c0668c5797f4->leave($__internal_90d1d62a43f6b314f594e9ca53e2d37033dd0c250a527a77b740c0668c5797f4_prof);

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
