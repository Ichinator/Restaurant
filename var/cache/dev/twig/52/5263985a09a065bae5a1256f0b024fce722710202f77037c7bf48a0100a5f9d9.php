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
        $__internal_12c90a56077f56a5e09bc1aeddac1bf17d7edcbbcc988dc1da84c9ae1a16fd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c90a56077f56a5e09bc1aeddac1bf17d7edcbbcc988dc1da84c9ae1a16fd8b->enter($__internal_12c90a56077f56a5e09bc1aeddac1bf17d7edcbbcc988dc1da84c9ae1a16fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c7f8129dd4188c31e814da4c20d61a39a7f26679a8a48f7b1e286143ecb356e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f8129dd4188c31e814da4c20d61a39a7f26679a8a48f7b1e286143ecb356e1->enter($__internal_c7f8129dd4188c31e814da4c20d61a39a7f26679a8a48f7b1e286143ecb356e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_12c90a56077f56a5e09bc1aeddac1bf17d7edcbbcc988dc1da84c9ae1a16fd8b->leave($__internal_12c90a56077f56a5e09bc1aeddac1bf17d7edcbbcc988dc1da84c9ae1a16fd8b_prof);

        
        $__internal_c7f8129dd4188c31e814da4c20d61a39a7f26679a8a48f7b1e286143ecb356e1->leave($__internal_c7f8129dd4188c31e814da4c20d61a39a7f26679a8a48f7b1e286143ecb356e1_prof);

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
