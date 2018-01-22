<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7d47bb5bee3b122ef9c8486924519fbce37dce7863d632f6b93f2dff4a305e8f extends Twig_Template
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
        $__internal_14c751550f7ae1e02de06816c92d2cef785435c1c57dab0c7e997f59b36fc6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c751550f7ae1e02de06816c92d2cef785435c1c57dab0c7e997f59b36fc6f7->enter($__internal_14c751550f7ae1e02de06816c92d2cef785435c1c57dab0c7e997f59b36fc6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_505ddf7882b2fb828c5f9e07d11d2629da42443f66b1aec201918f61152b6a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505ddf7882b2fb828c5f9e07d11d2629da42443f66b1aec201918f61152b6a89->enter($__internal_505ddf7882b2fb828c5f9e07d11d2629da42443f66b1aec201918f61152b6a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_14c751550f7ae1e02de06816c92d2cef785435c1c57dab0c7e997f59b36fc6f7->leave($__internal_14c751550f7ae1e02de06816c92d2cef785435c1c57dab0c7e997f59b36fc6f7_prof);

        
        $__internal_505ddf7882b2fb828c5f9e07d11d2629da42443f66b1aec201918f61152b6a89->leave($__internal_505ddf7882b2fb828c5f9e07d11d2629da42443f66b1aec201918f61152b6a89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
