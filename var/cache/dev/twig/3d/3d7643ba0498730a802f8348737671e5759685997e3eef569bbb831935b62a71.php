<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_95ce3aaf93f6e8acd0da75212565de602b83a017c5ab9124cb42d326329c9727 extends Twig_Template
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
        $__internal_a87efa4c95e65827773df8dc384d8bee70fedd1f36d96b6e2ef03fa0bc99d711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87efa4c95e65827773df8dc384d8bee70fedd1f36d96b6e2ef03fa0bc99d711->enter($__internal_a87efa4c95e65827773df8dc384d8bee70fedd1f36d96b6e2ef03fa0bc99d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_266f43519ec7bf64533d5acb59c0af7444bc4bf382277e0a2949b295e4a93354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266f43519ec7bf64533d5acb59c0af7444bc4bf382277e0a2949b295e4a93354->enter($__internal_266f43519ec7bf64533d5acb59c0af7444bc4bf382277e0a2949b295e4a93354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a87efa4c95e65827773df8dc384d8bee70fedd1f36d96b6e2ef03fa0bc99d711->leave($__internal_a87efa4c95e65827773df8dc384d8bee70fedd1f36d96b6e2ef03fa0bc99d711_prof);

        
        $__internal_266f43519ec7bf64533d5acb59c0af7444bc4bf382277e0a2949b295e4a93354->leave($__internal_266f43519ec7bf64533d5acb59c0af7444bc4bf382277e0a2949b295e4a93354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
