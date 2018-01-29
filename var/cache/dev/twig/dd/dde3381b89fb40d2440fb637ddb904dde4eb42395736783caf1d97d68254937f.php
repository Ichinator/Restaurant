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
        $__internal_38f5d9d7664fab6460d410ba59aada6da304f98aadb5426ddf02016a079aa4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f5d9d7664fab6460d410ba59aada6da304f98aadb5426ddf02016a079aa4f3->enter($__internal_38f5d9d7664fab6460d410ba59aada6da304f98aadb5426ddf02016a079aa4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6dd0352b529a547e23e6687f1c797a4cea7af283020c8776c8945283ac1d0e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd0352b529a547e23e6687f1c797a4cea7af283020c8776c8945283ac1d0e05->enter($__internal_6dd0352b529a547e23e6687f1c797a4cea7af283020c8776c8945283ac1d0e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_38f5d9d7664fab6460d410ba59aada6da304f98aadb5426ddf02016a079aa4f3->leave($__internal_38f5d9d7664fab6460d410ba59aada6da304f98aadb5426ddf02016a079aa4f3_prof);

        
        $__internal_6dd0352b529a547e23e6687f1c797a4cea7af283020c8776c8945283ac1d0e05->leave($__internal_6dd0352b529a547e23e6687f1c797a4cea7af283020c8776c8945283ac1d0e05_prof);

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
