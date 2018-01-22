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
        $__internal_0f6ec0b280fea3752df37da54ddf3da3e3ec5300bb3b6d63d303764f21b6aca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6ec0b280fea3752df37da54ddf3da3e3ec5300bb3b6d63d303764f21b6aca1->enter($__internal_0f6ec0b280fea3752df37da54ddf3da3e3ec5300bb3b6d63d303764f21b6aca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_1a3b5dc42a1ed5f4e4fdf96b378767e645885872638c27e45dd2c950466b2c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3b5dc42a1ed5f4e4fdf96b378767e645885872638c27e45dd2c950466b2c2c->enter($__internal_1a3b5dc42a1ed5f4e4fdf96b378767e645885872638c27e45dd2c950466b2c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_0f6ec0b280fea3752df37da54ddf3da3e3ec5300bb3b6d63d303764f21b6aca1->leave($__internal_0f6ec0b280fea3752df37da54ddf3da3e3ec5300bb3b6d63d303764f21b6aca1_prof);

        
        $__internal_1a3b5dc42a1ed5f4e4fdf96b378767e645885872638c27e45dd2c950466b2c2c->leave($__internal_1a3b5dc42a1ed5f4e4fdf96b378767e645885872638c27e45dd2c950466b2c2c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f0df47796ffa998fec3854c54e2e548aa2a4dfca3eb48b5c03b726b39872d337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0df47796ffa998fec3854c54e2e548aa2a4dfca3eb48b5c03b726b39872d337->enter($__internal_f0df47796ffa998fec3854c54e2e548aa2a4dfca3eb48b5c03b726b39872d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_289b63d29adace7d91ddd79e7270e2b92c4f7f3e998dcc9fc1e990a212af7b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289b63d29adace7d91ddd79e7270e2b92c4f7f3e998dcc9fc1e990a212af7b07->enter($__internal_289b63d29adace7d91ddd79e7270e2b92c4f7f3e998dcc9fc1e990a212af7b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_289b63d29adace7d91ddd79e7270e2b92c4f7f3e998dcc9fc1e990a212af7b07->leave($__internal_289b63d29adace7d91ddd79e7270e2b92c4f7f3e998dcc9fc1e990a212af7b07_prof);

        
        $__internal_f0df47796ffa998fec3854c54e2e548aa2a4dfca3eb48b5c03b726b39872d337->leave($__internal_f0df47796ffa998fec3854c54e2e548aa2a4dfca3eb48b5c03b726b39872d337_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4340c51a95acfb97a26f833dd1c939f59dc1ac85f61a46f3fec6f03395604467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4340c51a95acfb97a26f833dd1c939f59dc1ac85f61a46f3fec6f03395604467->enter($__internal_4340c51a95acfb97a26f833dd1c939f59dc1ac85f61a46f3fec6f03395604467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_54f25e93f8ae75c988ce28790d5ee084784cdaab43f97570abb4c87778cfb378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f25e93f8ae75c988ce28790d5ee084784cdaab43f97570abb4c87778cfb378->enter($__internal_54f25e93f8ae75c988ce28790d5ee084784cdaab43f97570abb4c87778cfb378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_54f25e93f8ae75c988ce28790d5ee084784cdaab43f97570abb4c87778cfb378->leave($__internal_54f25e93f8ae75c988ce28790d5ee084784cdaab43f97570abb4c87778cfb378_prof);

        
        $__internal_4340c51a95acfb97a26f833dd1c939f59dc1ac85f61a46f3fec6f03395604467->leave($__internal_4340c51a95acfb97a26f833dd1c939f59dc1ac85f61a46f3fec6f03395604467_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f387c20d601accebf89d3c0bf357b4b562921fb68a9eef88cffa606a2eb97b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f387c20d601accebf89d3c0bf357b4b562921fb68a9eef88cffa606a2eb97b96->enter($__internal_f387c20d601accebf89d3c0bf357b4b562921fb68a9eef88cffa606a2eb97b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3f605e6d3f9e3a4081c209892827a540868e38eaa4e88e6d3da4117884d4354d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f605e6d3f9e3a4081c209892827a540868e38eaa4e88e6d3da4117884d4354d->enter($__internal_3f605e6d3f9e3a4081c209892827a540868e38eaa4e88e6d3da4117884d4354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_3f605e6d3f9e3a4081c209892827a540868e38eaa4e88e6d3da4117884d4354d->leave($__internal_3f605e6d3f9e3a4081c209892827a540868e38eaa4e88e6d3da4117884d4354d_prof);

        
        $__internal_f387c20d601accebf89d3c0bf357b4b562921fb68a9eef88cffa606a2eb97b96->leave($__internal_f387c20d601accebf89d3c0bf357b4b562921fb68a9eef88cffa606a2eb97b96_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_33422f10fffe558b9d6e5960efa9bb04a114797c2268862e3c6e08147de27750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33422f10fffe558b9d6e5960efa9bb04a114797c2268862e3c6e08147de27750->enter($__internal_33422f10fffe558b9d6e5960efa9bb04a114797c2268862e3c6e08147de27750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa3d55b69992998c98773f7cc89f7689898f1d4682988c69738999c96c2d41d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3d55b69992998c98773f7cc89f7689898f1d4682988c69738999c96c2d41d0->enter($__internal_fa3d55b69992998c98773f7cc89f7689898f1d4682988c69738999c96c2d41d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fa3d55b69992998c98773f7cc89f7689898f1d4682988c69738999c96c2d41d0->leave($__internal_fa3d55b69992998c98773f7cc89f7689898f1d4682988c69738999c96c2d41d0_prof);

        
        $__internal_33422f10fffe558b9d6e5960efa9bb04a114797c2268862e3c6e08147de27750->leave($__internal_33422f10fffe558b9d6e5960efa9bb04a114797c2268862e3c6e08147de27750_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_814528db72f75e4bf9de42eee9b5bdf7432b2371292b0dcbea68bb494c809f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814528db72f75e4bf9de42eee9b5bdf7432b2371292b0dcbea68bb494c809f49->enter($__internal_814528db72f75e4bf9de42eee9b5bdf7432b2371292b0dcbea68bb494c809f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0d4b1b5bd9e70b0430b7daf28c692dc960031225be57a87c388fa9b86f85605e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4b1b5bd9e70b0430b7daf28c692dc960031225be57a87c388fa9b86f85605e->enter($__internal_0d4b1b5bd9e70b0430b7daf28c692dc960031225be57a87c388fa9b86f85605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0d4b1b5bd9e70b0430b7daf28c692dc960031225be57a87c388fa9b86f85605e->leave($__internal_0d4b1b5bd9e70b0430b7daf28c692dc960031225be57a87c388fa9b86f85605e_prof);

        
        $__internal_814528db72f75e4bf9de42eee9b5bdf7432b2371292b0dcbea68bb494c809f49->leave($__internal_814528db72f75e4bf9de42eee9b5bdf7432b2371292b0dcbea68bb494c809f49_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_90c1fa363bbb3e436a99d96be96dd1f581884c374b8f74f5f9dd6ca06bca2794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c1fa363bbb3e436a99d96be96dd1f581884c374b8f74f5f9dd6ca06bca2794->enter($__internal_90c1fa363bbb3e436a99d96be96dd1f581884c374b8f74f5f9dd6ca06bca2794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4ca106b03d6f3c02ad06808d8339fde43024b15f08415ebf73f7a9dd861c51c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca106b03d6f3c02ad06808d8339fde43024b15f08415ebf73f7a9dd861c51c5->enter($__internal_4ca106b03d6f3c02ad06808d8339fde43024b15f08415ebf73f7a9dd861c51c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4ca106b03d6f3c02ad06808d8339fde43024b15f08415ebf73f7a9dd861c51c5->leave($__internal_4ca106b03d6f3c02ad06808d8339fde43024b15f08415ebf73f7a9dd861c51c5_prof);

        
        $__internal_90c1fa363bbb3e436a99d96be96dd1f581884c374b8f74f5f9dd6ca06bca2794->leave($__internal_90c1fa363bbb3e436a99d96be96dd1f581884c374b8f74f5f9dd6ca06bca2794_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_cac48f496fba166684c4c9c65459d4cfd7d557e8bef79aed863f2da5491ffc8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac48f496fba166684c4c9c65459d4cfd7d557e8bef79aed863f2da5491ffc8a->enter($__internal_cac48f496fba166684c4c9c65459d4cfd7d557e8bef79aed863f2da5491ffc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_e17e622bb4d76ee51893004f99a82d9801aea8cdb52e84fbde9d1997717aa01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17e622bb4d76ee51893004f99a82d9801aea8cdb52e84fbde9d1997717aa01b->enter($__internal_e17e622bb4d76ee51893004f99a82d9801aea8cdb52e84fbde9d1997717aa01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_e17e622bb4d76ee51893004f99a82d9801aea8cdb52e84fbde9d1997717aa01b->leave($__internal_e17e622bb4d76ee51893004f99a82d9801aea8cdb52e84fbde9d1997717aa01b_prof);

        
        $__internal_cac48f496fba166684c4c9c65459d4cfd7d557e8bef79aed863f2da5491ffc8a->leave($__internal_cac48f496fba166684c4c9c65459d4cfd7d557e8bef79aed863f2da5491ffc8a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_dafeb87fc9c10cc4f61e859c569624728490d2344944e1da650bfbd7d34876a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafeb87fc9c10cc4f61e859c569624728490d2344944e1da650bfbd7d34876a4->enter($__internal_dafeb87fc9c10cc4f61e859c569624728490d2344944e1da650bfbd7d34876a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4f846041d8b301bec22e1fd478373ca51b69a97c4d7d4e79f877a8ea5e22806f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f846041d8b301bec22e1fd478373ca51b69a97c4d7d4e79f877a8ea5e22806f->enter($__internal_4f846041d8b301bec22e1fd478373ca51b69a97c4d7d4e79f877a8ea5e22806f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_4f846041d8b301bec22e1fd478373ca51b69a97c4d7d4e79f877a8ea5e22806f->leave($__internal_4f846041d8b301bec22e1fd478373ca51b69a97c4d7d4e79f877a8ea5e22806f_prof);

        
        $__internal_dafeb87fc9c10cc4f61e859c569624728490d2344944e1da650bfbd7d34876a4->leave($__internal_dafeb87fc9c10cc4f61e859c569624728490d2344944e1da650bfbd7d34876a4_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ad1acba98040a5e6023a71d3273cc70454ef2d76bb54c7f4015469259180dc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1acba98040a5e6023a71d3273cc70454ef2d76bb54c7f4015469259180dc04->enter($__internal_ad1acba98040a5e6023a71d3273cc70454ef2d76bb54c7f4015469259180dc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9d92eae8448e92198f3a6d23f498d5a6749d37d944181c1401195adbc013abe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d92eae8448e92198f3a6d23f498d5a6749d37d944181c1401195adbc013abe9->enter($__internal_9d92eae8448e92198f3a6d23f498d5a6749d37d944181c1401195adbc013abe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_9d92eae8448e92198f3a6d23f498d5a6749d37d944181c1401195adbc013abe9->leave($__internal_9d92eae8448e92198f3a6d23f498d5a6749d37d944181c1401195adbc013abe9_prof);

        
        $__internal_ad1acba98040a5e6023a71d3273cc70454ef2d76bb54c7f4015469259180dc04->leave($__internal_ad1acba98040a5e6023a71d3273cc70454ef2d76bb54c7f4015469259180dc04_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_cecd5ae7666a362847390ff1e3cf1157f3d36791b746087a749dea1a7775b64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecd5ae7666a362847390ff1e3cf1157f3d36791b746087a749dea1a7775b64e->enter($__internal_cecd5ae7666a362847390ff1e3cf1157f3d36791b746087a749dea1a7775b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f8f9b6e2fa47ef47f319ab57afb41bf25a5cf129c3ceddac8b9d4c5935a1613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f9b6e2fa47ef47f319ab57afb41bf25a5cf129c3ceddac8b9d4c5935a1613b->enter($__internal_f8f9b6e2fa47ef47f319ab57afb41bf25a5cf129c3ceddac8b9d4c5935a1613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_f8f9b6e2fa47ef47f319ab57afb41bf25a5cf129c3ceddac8b9d4c5935a1613b->leave($__internal_f8f9b6e2fa47ef47f319ab57afb41bf25a5cf129c3ceddac8b9d4c5935a1613b_prof);

        
        $__internal_cecd5ae7666a362847390ff1e3cf1157f3d36791b746087a749dea1a7775b64e->leave($__internal_cecd5ae7666a362847390ff1e3cf1157f3d36791b746087a749dea1a7775b64e_prof);

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
