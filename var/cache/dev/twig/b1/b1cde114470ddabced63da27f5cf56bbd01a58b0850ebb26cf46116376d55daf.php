<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d4186ab72ce9dae966b2f4a9eddc641099bda19d9b05efee34b6c37afaac3dc7 extends Twig_Template
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
        $__internal_58b98c21c9cc889e4c2f938d4c9e2491be820ef72583d7267ab89ccff3e23e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b98c21c9cc889e4c2f938d4c9e2491be820ef72583d7267ab89ccff3e23e84->enter($__internal_58b98c21c9cc889e4c2f938d4c9e2491be820ef72583d7267ab89ccff3e23e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f84bbc113da1a0ed5f71e8203d87de336c25a382a30af52822a64610fe9602d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84bbc113da1a0ed5f71e8203d87de336c25a382a30af52822a64610fe9602d8->enter($__internal_f84bbc113da1a0ed5f71e8203d87de336c25a382a30af52822a64610fe9602d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_58b98c21c9cc889e4c2f938d4c9e2491be820ef72583d7267ab89ccff3e23e84->leave($__internal_58b98c21c9cc889e4c2f938d4c9e2491be820ef72583d7267ab89ccff3e23e84_prof);

        
        $__internal_f84bbc113da1a0ed5f71e8203d87de336c25a382a30af52822a64610fe9602d8->leave($__internal_f84bbc113da1a0ed5f71e8203d87de336c25a382a30af52822a64610fe9602d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
