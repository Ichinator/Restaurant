<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5420bc19e60aa5b54a7f565395eb55728bac625a33b7e5506741e940f2ac82f5 extends Twig_Template
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
        $__internal_124a5b493c9335d07beae184c49ef3383f01ca918e8d8e6f4f61910abe8ece76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124a5b493c9335d07beae184c49ef3383f01ca918e8d8e6f4f61910abe8ece76->enter($__internal_124a5b493c9335d07beae184c49ef3383f01ca918e8d8e6f4f61910abe8ece76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_44bf09b652977411f0edf138070d172d97d74ecacd2e8ed468847e545121cb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bf09b652977411f0edf138070d172d97d74ecacd2e8ed468847e545121cb86->enter($__internal_44bf09b652977411f0edf138070d172d97d74ecacd2e8ed468847e545121cb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_124a5b493c9335d07beae184c49ef3383f01ca918e8d8e6f4f61910abe8ece76->leave($__internal_124a5b493c9335d07beae184c49ef3383f01ca918e8d8e6f4f61910abe8ece76_prof);

        
        $__internal_44bf09b652977411f0edf138070d172d97d74ecacd2e8ed468847e545121cb86->leave($__internal_44bf09b652977411f0edf138070d172d97d74ecacd2e8ed468847e545121cb86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
