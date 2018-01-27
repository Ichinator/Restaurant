<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f6f19082aa54755906dc2caf0f9c6eb92028b578b819661575eb99e19c10c68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b80f8214acc7ad261ed473abc2ebf683eef53cd4e3ab1df8d5c31d27b5fe5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b80f8214acc7ad261ed473abc2ebf683eef53cd4e3ab1df8d5c31d27b5fe5a2->enter($__internal_1b80f8214acc7ad261ed473abc2ebf683eef53cd4e3ab1df8d5c31d27b5fe5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_5cbb1a2907e099423d33371d2b57b91a478d9eff66ba29b6124bb517f0610a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbb1a2907e099423d33371d2b57b91a478d9eff66ba29b6124bb517f0610a4f->enter($__internal_5cbb1a2907e099423d33371d2b57b91a478d9eff66ba29b6124bb517f0610a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_1b80f8214acc7ad261ed473abc2ebf683eef53cd4e3ab1df8d5c31d27b5fe5a2->leave($__internal_1b80f8214acc7ad261ed473abc2ebf683eef53cd4e3ab1df8d5c31d27b5fe5a2_prof);

        
        $__internal_5cbb1a2907e099423d33371d2b57b91a478d9eff66ba29b6124bb517f0610a4f->leave($__internal_5cbb1a2907e099423d33371d2b57b91a478d9eff66ba29b6124bb517f0610a4f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_99ff7b19220f7e484cf919d4937d5b2957ca31215f2b06a8e21f187208174081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ff7b19220f7e484cf919d4937d5b2957ca31215f2b06a8e21f187208174081->enter($__internal_99ff7b19220f7e484cf919d4937d5b2957ca31215f2b06a8e21f187208174081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_36d1ac8386337a8971d1a1b0bb29d725c87476e22c45f515a82b7ec9a60d477e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d1ac8386337a8971d1a1b0bb29d725c87476e22c45f515a82b7ec9a60d477e->enter($__internal_36d1ac8386337a8971d1a1b0bb29d725c87476e22c45f515a82b7ec9a60d477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_36d1ac8386337a8971d1a1b0bb29d725c87476e22c45f515a82b7ec9a60d477e->leave($__internal_36d1ac8386337a8971d1a1b0bb29d725c87476e22c45f515a82b7ec9a60d477e_prof);

        
        $__internal_99ff7b19220f7e484cf919d4937d5b2957ca31215f2b06a8e21f187208174081->leave($__internal_99ff7b19220f7e484cf919d4937d5b2957ca31215f2b06a8e21f187208174081_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_01241920a139835434024cb467e8351177479cdacbaba1c056e43ec211316e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01241920a139835434024cb467e8351177479cdacbaba1c056e43ec211316e67->enter($__internal_01241920a139835434024cb467e8351177479cdacbaba1c056e43ec211316e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d903203d37442e503ebcb4d8fad35b7c561ab6af38d6536cff11819849e80dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d903203d37442e503ebcb4d8fad35b7c561ab6af38d6536cff11819849e80dc8->enter($__internal_d903203d37442e503ebcb4d8fad35b7c561ab6af38d6536cff11819849e80dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d903203d37442e503ebcb4d8fad35b7c561ab6af38d6536cff11819849e80dc8->leave($__internal_d903203d37442e503ebcb4d8fad35b7c561ab6af38d6536cff11819849e80dc8_prof);

        
        $__internal_01241920a139835434024cb467e8351177479cdacbaba1c056e43ec211316e67->leave($__internal_01241920a139835434024cb467e8351177479cdacbaba1c056e43ec211316e67_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_4a5797b648c2012afd96d8869e433e7b94e67488ac888ba967b42b3bdbee79c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5797b648c2012afd96d8869e433e7b94e67488ac888ba967b42b3bdbee79c6->enter($__internal_4a5797b648c2012afd96d8869e433e7b94e67488ac888ba967b42b3bdbee79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_302c1e8733d7da8d8d72f77ca8a8c95e8f72e714047326c20b50ff9295c97ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302c1e8733d7da8d8d72f77ca8a8c95e8f72e714047326c20b50ff9295c97ead->enter($__internal_302c1e8733d7da8d8d72f77ca8a8c95e8f72e714047326c20b50ff9295c97ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_302c1e8733d7da8d8d72f77ca8a8c95e8f72e714047326c20b50ff9295c97ead->leave($__internal_302c1e8733d7da8d8d72f77ca8a8c95e8f72e714047326c20b50ff9295c97ead_prof);

        
        $__internal_4a5797b648c2012afd96d8869e433e7b94e67488ac888ba967b42b3bdbee79c6->leave($__internal_4a5797b648c2012afd96d8869e433e7b94e67488ac888ba967b42b3bdbee79c6_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3b3e0691eff270a98523ded5ee94bdc5ca50771fefc500845dc534dea7b617ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3e0691eff270a98523ded5ee94bdc5ca50771fefc500845dc534dea7b617ad->enter($__internal_3b3e0691eff270a98523ded5ee94bdc5ca50771fefc500845dc534dea7b617ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_475500fee9384e33f14b93e287afae4031af6b3393487d5c8a638e7ea9edaaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475500fee9384e33f14b93e287afae4031af6b3393487d5c8a638e7ea9edaaef->enter($__internal_475500fee9384e33f14b93e287afae4031af6b3393487d5c8a638e7ea9edaaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_475500fee9384e33f14b93e287afae4031af6b3393487d5c8a638e7ea9edaaef->leave($__internal_475500fee9384e33f14b93e287afae4031af6b3393487d5c8a638e7ea9edaaef_prof);

        
        $__internal_3b3e0691eff270a98523ded5ee94bdc5ca50771fefc500845dc534dea7b617ad->leave($__internal_3b3e0691eff270a98523ded5ee94bdc5ca50771fefc500845dc534dea7b617ad_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5372c001567dd609078bc74ce448a12cc9ba3f099e4320a7960ff18dd85a43fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5372c001567dd609078bc74ce448a12cc9ba3f099e4320a7960ff18dd85a43fa->enter($__internal_5372c001567dd609078bc74ce448a12cc9ba3f099e4320a7960ff18dd85a43fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_02c43400d9e2d0f78bf27d5203e724d4224c4c167822ce8e4139a1b36f830038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c43400d9e2d0f78bf27d5203e724d4224c4c167822ce8e4139a1b36f830038->enter($__internal_02c43400d9e2d0f78bf27d5203e724d4224c4c167822ce8e4139a1b36f830038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_02c43400d9e2d0f78bf27d5203e724d4224c4c167822ce8e4139a1b36f830038->leave($__internal_02c43400d9e2d0f78bf27d5203e724d4224c4c167822ce8e4139a1b36f830038_prof);

        
        $__internal_5372c001567dd609078bc74ce448a12cc9ba3f099e4320a7960ff18dd85a43fa->leave($__internal_5372c001567dd609078bc74ce448a12cc9ba3f099e4320a7960ff18dd85a43fa_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_439c9ede9ece4132ed35c35f3cfc5a570a722cfe29022b5f47d6bfe0a2d48e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439c9ede9ece4132ed35c35f3cfc5a570a722cfe29022b5f47d6bfe0a2d48e87->enter($__internal_439c9ede9ece4132ed35c35f3cfc5a570a722cfe29022b5f47d6bfe0a2d48e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_91cdd9906b1272a115858d2890746ecb809923d03e896cc214e3fa199d1dd148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cdd9906b1272a115858d2890746ecb809923d03e896cc214e3fa199d1dd148->enter($__internal_91cdd9906b1272a115858d2890746ecb809923d03e896cc214e3fa199d1dd148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_91cdd9906b1272a115858d2890746ecb809923d03e896cc214e3fa199d1dd148->leave($__internal_91cdd9906b1272a115858d2890746ecb809923d03e896cc214e3fa199d1dd148_prof);

        
        $__internal_439c9ede9ece4132ed35c35f3cfc5a570a722cfe29022b5f47d6bfe0a2d48e87->leave($__internal_439c9ede9ece4132ed35c35f3cfc5a570a722cfe29022b5f47d6bfe0a2d48e87_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ed563d61a8d4562bd163dba7a9666466040174fb567cb1b1e41af35ee9466bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed563d61a8d4562bd163dba7a9666466040174fb567cb1b1e41af35ee9466bea->enter($__internal_ed563d61a8d4562bd163dba7a9666466040174fb567cb1b1e41af35ee9466bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c4d88fc4c9197f2cec7db44a9dd6e54a51100bdfaeab820aea86d0a493714987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d88fc4c9197f2cec7db44a9dd6e54a51100bdfaeab820aea86d0a493714987->enter($__internal_c4d88fc4c9197f2cec7db44a9dd6e54a51100bdfaeab820aea86d0a493714987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4d88fc4c9197f2cec7db44a9dd6e54a51100bdfaeab820aea86d0a493714987->leave($__internal_c4d88fc4c9197f2cec7db44a9dd6e54a51100bdfaeab820aea86d0a493714987_prof);

        
        $__internal_ed563d61a8d4562bd163dba7a9666466040174fb567cb1b1e41af35ee9466bea->leave($__internal_ed563d61a8d4562bd163dba7a9666466040174fb567cb1b1e41af35ee9466bea_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_21bb8744a787e96b60b90ede9ca77beccf483c09b5c082d2fa7b20684628e0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bb8744a787e96b60b90ede9ca77beccf483c09b5c082d2fa7b20684628e0b3->enter($__internal_21bb8744a787e96b60b90ede9ca77beccf483c09b5c082d2fa7b20684628e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_dc695120ee5cbb23885629c5d9e9c5b909564e0f67f63af3e37bfc44cd9d9fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc695120ee5cbb23885629c5d9e9c5b909564e0f67f63af3e37bfc44cd9d9fc9->enter($__internal_dc695120ee5cbb23885629c5d9e9c5b909564e0f67f63af3e37bfc44cd9d9fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc695120ee5cbb23885629c5d9e9c5b909564e0f67f63af3e37bfc44cd9d9fc9->leave($__internal_dc695120ee5cbb23885629c5d9e9c5b909564e0f67f63af3e37bfc44cd9d9fc9_prof);

        
        $__internal_21bb8744a787e96b60b90ede9ca77beccf483c09b5c082d2fa7b20684628e0b3->leave($__internal_21bb8744a787e96b60b90ede9ca77beccf483c09b5c082d2fa7b20684628e0b3_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4c4b02ed528bd7540fbfaba53f7962251b32c8a756ea27f017000f143e834f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4b02ed528bd7540fbfaba53f7962251b32c8a756ea27f017000f143e834f0e->enter($__internal_4c4b02ed528bd7540fbfaba53f7962251b32c8a756ea27f017000f143e834f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c504538c462ae070bf8a31d3f6ca2d6a090d24484f68e71c840fdd7e2cf254fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c504538c462ae070bf8a31d3f6ca2d6a090d24484f68e71c840fdd7e2cf254fd->enter($__internal_c504538c462ae070bf8a31d3f6ca2d6a090d24484f68e71c840fdd7e2cf254fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c504538c462ae070bf8a31d3f6ca2d6a090d24484f68e71c840fdd7e2cf254fd->leave($__internal_c504538c462ae070bf8a31d3f6ca2d6a090d24484f68e71c840fdd7e2cf254fd_prof);

        
        $__internal_4c4b02ed528bd7540fbfaba53f7962251b32c8a756ea27f017000f143e834f0e->leave($__internal_4c4b02ed528bd7540fbfaba53f7962251b32c8a756ea27f017000f143e834f0e_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b79c2cd2996e164c1fe9194116e3cbcd74442490f686c8265f289ca51a1b6733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79c2cd2996e164c1fe9194116e3cbcd74442490f686c8265f289ca51a1b6733->enter($__internal_b79c2cd2996e164c1fe9194116e3cbcd74442490f686c8265f289ca51a1b6733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8e1f2bc704dfc8db4b567112ef51b245554c85da7b7360b488ced005e1d4d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1f2bc704dfc8db4b567112ef51b245554c85da7b7360b488ced005e1d4d94d->enter($__internal_8e1f2bc704dfc8db4b567112ef51b245554c85da7b7360b488ced005e1d4d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8e1f2bc704dfc8db4b567112ef51b245554c85da7b7360b488ced005e1d4d94d->leave($__internal_8e1f2bc704dfc8db4b567112ef51b245554c85da7b7360b488ced005e1d4d94d_prof);

        
        $__internal_b79c2cd2996e164c1fe9194116e3cbcd74442490f686c8265f289ca51a1b6733->leave($__internal_b79c2cd2996e164c1fe9194116e3cbcd74442490f686c8265f289ca51a1b6733_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
