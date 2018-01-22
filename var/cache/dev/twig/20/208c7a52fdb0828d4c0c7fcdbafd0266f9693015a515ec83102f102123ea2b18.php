<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a0faaf0dadc2f3031a3a549a94cd585d0c8f392eba72f2e7eab6e174eec54e04 extends Twig_Template
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
        $__internal_a2ce81a4770e152d28d164d59a4acb097a7021ea5abea48a19e5a06135ac92af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ce81a4770e152d28d164d59a4acb097a7021ea5abea48a19e5a06135ac92af->enter($__internal_a2ce81a4770e152d28d164d59a4acb097a7021ea5abea48a19e5a06135ac92af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5e706433b7b254d5140bd40a0716223a6e653420b606a3d3272a8d4513d02a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e706433b7b254d5140bd40a0716223a6e653420b606a3d3272a8d4513d02a28->enter($__internal_5e706433b7b254d5140bd40a0716223a6e653420b606a3d3272a8d4513d02a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a2ce81a4770e152d28d164d59a4acb097a7021ea5abea48a19e5a06135ac92af->leave($__internal_a2ce81a4770e152d28d164d59a4acb097a7021ea5abea48a19e5a06135ac92af_prof);

        
        $__internal_5e706433b7b254d5140bd40a0716223a6e653420b606a3d3272a8d4513d02a28->leave($__internal_5e706433b7b254d5140bd40a0716223a6e653420b606a3d3272a8d4513d02a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
