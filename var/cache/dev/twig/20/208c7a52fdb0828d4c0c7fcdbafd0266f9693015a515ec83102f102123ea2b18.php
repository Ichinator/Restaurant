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
        $__internal_dd8a1aa101325f69935394e6636a580ca835c4ab3226b6670852d2830a7e6270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8a1aa101325f69935394e6636a580ca835c4ab3226b6670852d2830a7e6270->enter($__internal_dd8a1aa101325f69935394e6636a580ca835c4ab3226b6670852d2830a7e6270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d3648b45cbefe69a3051d7b4d8f9a2096cc468e0910780dd9f5aed3fc76dc6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3648b45cbefe69a3051d7b4d8f9a2096cc468e0910780dd9f5aed3fc76dc6ad->enter($__internal_d3648b45cbefe69a3051d7b4d8f9a2096cc468e0910780dd9f5aed3fc76dc6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dd8a1aa101325f69935394e6636a580ca835c4ab3226b6670852d2830a7e6270->leave($__internal_dd8a1aa101325f69935394e6636a580ca835c4ab3226b6670852d2830a7e6270_prof);

        
        $__internal_d3648b45cbefe69a3051d7b4d8f9a2096cc468e0910780dd9f5aed3fc76dc6ad->leave($__internal_d3648b45cbefe69a3051d7b4d8f9a2096cc468e0910780dd9f5aed3fc76dc6ad_prof);

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
