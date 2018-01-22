<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b7e0b15b4c6bbd53a930ba9197d3ef3614fcb0095fa67a52fef6064a7580bf83 extends Twig_Template
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
        $__internal_0bfba3a308a0bc9b979c0adbd5d78f503dc9fc5deaf1cfbd3b578adfecfe56fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfba3a308a0bc9b979c0adbd5d78f503dc9fc5deaf1cfbd3b578adfecfe56fb->enter($__internal_0bfba3a308a0bc9b979c0adbd5d78f503dc9fc5deaf1cfbd3b578adfecfe56fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f802f46b0558678a221557479bb779db2ced397c3f0cf5faaa8574abc551433e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f802f46b0558678a221557479bb779db2ced397c3f0cf5faaa8574abc551433e->enter($__internal_f802f46b0558678a221557479bb779db2ced397c3f0cf5faaa8574abc551433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0bfba3a308a0bc9b979c0adbd5d78f503dc9fc5deaf1cfbd3b578adfecfe56fb->leave($__internal_0bfba3a308a0bc9b979c0adbd5d78f503dc9fc5deaf1cfbd3b578adfecfe56fb_prof);

        
        $__internal_f802f46b0558678a221557479bb779db2ced397c3f0cf5faaa8574abc551433e->leave($__internal_f802f46b0558678a221557479bb779db2ced397c3f0cf5faaa8574abc551433e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
