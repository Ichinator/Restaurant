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
        $__internal_abd723d7d96871ba183335d6cde46139ba219ce774fd2afe635c0107c1777abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd723d7d96871ba183335d6cde46139ba219ce774fd2afe635c0107c1777abc->enter($__internal_abd723d7d96871ba183335d6cde46139ba219ce774fd2afe635c0107c1777abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_baa4b8e0c5cb2ce97cbd6ee5b149e0e579b328df08c5cc31b0bdb9b2a0ff4669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa4b8e0c5cb2ce97cbd6ee5b149e0e579b328df08c5cc31b0bdb9b2a0ff4669->enter($__internal_baa4b8e0c5cb2ce97cbd6ee5b149e0e579b328df08c5cc31b0bdb9b2a0ff4669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_abd723d7d96871ba183335d6cde46139ba219ce774fd2afe635c0107c1777abc->leave($__internal_abd723d7d96871ba183335d6cde46139ba219ce774fd2afe635c0107c1777abc_prof);

        
        $__internal_baa4b8e0c5cb2ce97cbd6ee5b149e0e579b328df08c5cc31b0bdb9b2a0ff4669->leave($__internal_baa4b8e0c5cb2ce97cbd6ee5b149e0e579b328df08c5cc31b0bdb9b2a0ff4669_prof);

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
