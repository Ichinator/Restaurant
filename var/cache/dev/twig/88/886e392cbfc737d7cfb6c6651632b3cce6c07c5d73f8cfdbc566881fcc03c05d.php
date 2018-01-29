<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b8393d152451bafbd6b0e050ba241db1c251a58f93769724c48a25913d4933a extends Twig_Template
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
        $__internal_bfe6554bf51e73b90e4fadc96653111b199821450bc07bc131540cc5c5aa1b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe6554bf51e73b90e4fadc96653111b199821450bc07bc131540cc5c5aa1b22->enter($__internal_bfe6554bf51e73b90e4fadc96653111b199821450bc07bc131540cc5c5aa1b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1eafac5192db8b51bd41807007f7b017e45b71b38c428ad45abf6b57b3457a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eafac5192db8b51bd41807007f7b017e45b71b38c428ad45abf6b57b3457a2c->enter($__internal_1eafac5192db8b51bd41807007f7b017e45b71b38c428ad45abf6b57b3457a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bfe6554bf51e73b90e4fadc96653111b199821450bc07bc131540cc5c5aa1b22->leave($__internal_bfe6554bf51e73b90e4fadc96653111b199821450bc07bc131540cc5c5aa1b22_prof);

        
        $__internal_1eafac5192db8b51bd41807007f7b017e45b71b38c428ad45abf6b57b3457a2c->leave($__internal_1eafac5192db8b51bd41807007f7b017e45b71b38c428ad45abf6b57b3457a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
