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
        $__internal_1b94ad7eb007d3cc19f87bbdf6c8a13861325fb5ffcaa3a8fa6bcb7e5183dc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b94ad7eb007d3cc19f87bbdf6c8a13861325fb5ffcaa3a8fa6bcb7e5183dc1c->enter($__internal_1b94ad7eb007d3cc19f87bbdf6c8a13861325fb5ffcaa3a8fa6bcb7e5183dc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1523d4c7098c12d0322b075ae0b8e02b6bfda55c7b4619f80e2fc622dcad0fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1523d4c7098c12d0322b075ae0b8e02b6bfda55c7b4619f80e2fc622dcad0fb3->enter($__internal_1523d4c7098c12d0322b075ae0b8e02b6bfda55c7b4619f80e2fc622dcad0fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1b94ad7eb007d3cc19f87bbdf6c8a13861325fb5ffcaa3a8fa6bcb7e5183dc1c->leave($__internal_1b94ad7eb007d3cc19f87bbdf6c8a13861325fb5ffcaa3a8fa6bcb7e5183dc1c_prof);

        
        $__internal_1523d4c7098c12d0322b075ae0b8e02b6bfda55c7b4619f80e2fc622dcad0fb3->leave($__internal_1523d4c7098c12d0322b075ae0b8e02b6bfda55c7b4619f80e2fc622dcad0fb3_prof);

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
