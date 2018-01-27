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
        $__internal_e2b661f2584bc7e27c0f36cb719c460434dad328fd40030435a99bb5bc8e2a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b661f2584bc7e27c0f36cb719c460434dad328fd40030435a99bb5bc8e2a7e->enter($__internal_e2b661f2584bc7e27c0f36cb719c460434dad328fd40030435a99bb5bc8e2a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e529e511be409e8124bc496d72e51effd6b5fe7fa47c58dc7bc479a5afe6a040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e529e511be409e8124bc496d72e51effd6b5fe7fa47c58dc7bc479a5afe6a040->enter($__internal_e529e511be409e8124bc496d72e51effd6b5fe7fa47c58dc7bc479a5afe6a040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e2b661f2584bc7e27c0f36cb719c460434dad328fd40030435a99bb5bc8e2a7e->leave($__internal_e2b661f2584bc7e27c0f36cb719c460434dad328fd40030435a99bb5bc8e2a7e_prof);

        
        $__internal_e529e511be409e8124bc496d72e51effd6b5fe7fa47c58dc7bc479a5afe6a040->leave($__internal_e529e511be409e8124bc496d72e51effd6b5fe7fa47c58dc7bc479a5afe6a040_prof);

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
