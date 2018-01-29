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
        $__internal_997221ec88a42f3c47ae6e90e4977fcb812a1b79d7c44374a4f45fc10ff5085d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997221ec88a42f3c47ae6e90e4977fcb812a1b79d7c44374a4f45fc10ff5085d->enter($__internal_997221ec88a42f3c47ae6e90e4977fcb812a1b79d7c44374a4f45fc10ff5085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8ef37d2d974dd97926e15816a823b96a454eb39964ef56c5c10e54c203d5e97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef37d2d974dd97926e15816a823b96a454eb39964ef56c5c10e54c203d5e97b->enter($__internal_8ef37d2d974dd97926e15816a823b96a454eb39964ef56c5c10e54c203d5e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_997221ec88a42f3c47ae6e90e4977fcb812a1b79d7c44374a4f45fc10ff5085d->leave($__internal_997221ec88a42f3c47ae6e90e4977fcb812a1b79d7c44374a4f45fc10ff5085d_prof);

        
        $__internal_8ef37d2d974dd97926e15816a823b96a454eb39964ef56c5c10e54c203d5e97b->leave($__internal_8ef37d2d974dd97926e15816a823b96a454eb39964ef56c5c10e54c203d5e97b_prof);

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
