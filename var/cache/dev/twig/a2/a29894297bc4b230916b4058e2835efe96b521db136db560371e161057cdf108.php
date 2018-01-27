<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0fa7905a73d75ebda45fc57b5d8b917c384271751e71b96c65427385bb73bd56 extends Twig_Template
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
        $__internal_d34a64ae64e1077bc54edaf14f8dfab08eac342511398848411b44851b3becf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34a64ae64e1077bc54edaf14f8dfab08eac342511398848411b44851b3becf8->enter($__internal_d34a64ae64e1077bc54edaf14f8dfab08eac342511398848411b44851b3becf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a20f80d73d8185b0495099bfb4fa2d5f0ed6abffec5b06588e9827bd6cbdfb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20f80d73d8185b0495099bfb4fa2d5f0ed6abffec5b06588e9827bd6cbdfb52->enter($__internal_a20f80d73d8185b0495099bfb4fa2d5f0ed6abffec5b06588e9827bd6cbdfb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d34a64ae64e1077bc54edaf14f8dfab08eac342511398848411b44851b3becf8->leave($__internal_d34a64ae64e1077bc54edaf14f8dfab08eac342511398848411b44851b3becf8_prof);

        
        $__internal_a20f80d73d8185b0495099bfb4fa2d5f0ed6abffec5b06588e9827bd6cbdfb52->leave($__internal_a20f80d73d8185b0495099bfb4fa2d5f0ed6abffec5b06588e9827bd6cbdfb52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
