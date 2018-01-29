<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2f98d0a930abf348077582a86430d672e9be34c083cfd5c0771dbbe3e46f4dc4 extends Twig_Template
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
        $__internal_4b8a4b4f71900d748f40395dc622a26222165c9d1f880becd7160708d7e33739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8a4b4f71900d748f40395dc622a26222165c9d1f880becd7160708d7e33739->enter($__internal_4b8a4b4f71900d748f40395dc622a26222165c9d1f880becd7160708d7e33739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0ca6ff770f8d35ef73526d069cfec8b64d94b7283b6608c54b94de82cc6d2d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca6ff770f8d35ef73526d069cfec8b64d94b7283b6608c54b94de82cc6d2d29->enter($__internal_0ca6ff770f8d35ef73526d069cfec8b64d94b7283b6608c54b94de82cc6d2d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4b8a4b4f71900d748f40395dc622a26222165c9d1f880becd7160708d7e33739->leave($__internal_4b8a4b4f71900d748f40395dc622a26222165c9d1f880becd7160708d7e33739_prof);

        
        $__internal_0ca6ff770f8d35ef73526d069cfec8b64d94b7283b6608c54b94de82cc6d2d29->leave($__internal_0ca6ff770f8d35ef73526d069cfec8b64d94b7283b6608c54b94de82cc6d2d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
