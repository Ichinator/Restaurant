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
        $__internal_2c9c765fe896ccd1f534f7a4633a63bf87978e3c7c83211bc5fa953a840bef18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9c765fe896ccd1f534f7a4633a63bf87978e3c7c83211bc5fa953a840bef18->enter($__internal_2c9c765fe896ccd1f534f7a4633a63bf87978e3c7c83211bc5fa953a840bef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_daf26f7d7e8dc8c0476101a8714884fcfb204fc25b562a55d7d379e6f5670f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf26f7d7e8dc8c0476101a8714884fcfb204fc25b562a55d7d379e6f5670f44->enter($__internal_daf26f7d7e8dc8c0476101a8714884fcfb204fc25b562a55d7d379e6f5670f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2c9c765fe896ccd1f534f7a4633a63bf87978e3c7c83211bc5fa953a840bef18->leave($__internal_2c9c765fe896ccd1f534f7a4633a63bf87978e3c7c83211bc5fa953a840bef18_prof);

        
        $__internal_daf26f7d7e8dc8c0476101a8714884fcfb204fc25b562a55d7d379e6f5670f44->leave($__internal_daf26f7d7e8dc8c0476101a8714884fcfb204fc25b562a55d7d379e6f5670f44_prof);

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
