<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_495eaf3b4e4c1a4aa161464b0f8a101d60b2aea2435424711d0aa52000db1f1f extends Twig_Template
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
        $__internal_940aac34c1aa59e732bf3de475f4f4a73d64e360bc12b78ee9bace01e437dabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940aac34c1aa59e732bf3de475f4f4a73d64e360bc12b78ee9bace01e437dabb->enter($__internal_940aac34c1aa59e732bf3de475f4f4a73d64e360bc12b78ee9bace01e437dabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4425ae127f79619fb514ec1fcf9c0e7c900ae44136fb4e2453ec25958b2c9a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4425ae127f79619fb514ec1fcf9c0e7c900ae44136fb4e2453ec25958b2c9a63->enter($__internal_4425ae127f79619fb514ec1fcf9c0e7c900ae44136fb4e2453ec25958b2c9a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_940aac34c1aa59e732bf3de475f4f4a73d64e360bc12b78ee9bace01e437dabb->leave($__internal_940aac34c1aa59e732bf3de475f4f4a73d64e360bc12b78ee9bace01e437dabb_prof);

        
        $__internal_4425ae127f79619fb514ec1fcf9c0e7c900ae44136fb4e2453ec25958b2c9a63->leave($__internal_4425ae127f79619fb514ec1fcf9c0e7c900ae44136fb4e2453ec25958b2c9a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
