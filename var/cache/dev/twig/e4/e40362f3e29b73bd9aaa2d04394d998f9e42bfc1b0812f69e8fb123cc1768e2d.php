<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_59b1b982fb10458c8806188e7d6f02afe18d9aa10f31818498e963372fa8692b extends Twig_Template
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
        $__internal_ecf6a27ff03bc5e999ee56a2d5537678b8c17b9f892eb5e2ea18b05e8413e0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf6a27ff03bc5e999ee56a2d5537678b8c17b9f892eb5e2ea18b05e8413e0fa->enter($__internal_ecf6a27ff03bc5e999ee56a2d5537678b8c17b9f892eb5e2ea18b05e8413e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6209d64599a0fd66ac441409e2e80665e75c7e3cf31392a9d97117a56bfd05a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6209d64599a0fd66ac441409e2e80665e75c7e3cf31392a9d97117a56bfd05a9->enter($__internal_6209d64599a0fd66ac441409e2e80665e75c7e3cf31392a9d97117a56bfd05a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ecf6a27ff03bc5e999ee56a2d5537678b8c17b9f892eb5e2ea18b05e8413e0fa->leave($__internal_ecf6a27ff03bc5e999ee56a2d5537678b8c17b9f892eb5e2ea18b05e8413e0fa_prof);

        
        $__internal_6209d64599a0fd66ac441409e2e80665e75c7e3cf31392a9d97117a56bfd05a9->leave($__internal_6209d64599a0fd66ac441409e2e80665e75c7e3cf31392a9d97117a56bfd05a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
