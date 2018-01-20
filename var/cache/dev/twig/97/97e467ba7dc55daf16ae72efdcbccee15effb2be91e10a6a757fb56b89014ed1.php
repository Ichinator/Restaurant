<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a48bae797c2f0c3ee14f2f704c010a1f7073e0b9693ddc115fbcc05655c6520c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
        $__internal_3f97d93641df59d0a8263baf74e3db5358bc5d68858a3686db4914fed3996d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f97d93641df59d0a8263baf74e3db5358bc5d68858a3686db4914fed3996d60->enter($__internal_3f97d93641df59d0a8263baf74e3db5358bc5d68858a3686db4914fed3996d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_bd81343f86fdd4887dabdf1ee4daf2ea422ba1fed68c838212a876ae74c5ff82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd81343f86fdd4887dabdf1ee4daf2ea422ba1fed68c838212a876ae74c5ff82->enter($__internal_bd81343f86fdd4887dabdf1ee4daf2ea422ba1fed68c838212a876ae74c5ff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_3f97d93641df59d0a8263baf74e3db5358bc5d68858a3686db4914fed3996d60->leave($__internal_3f97d93641df59d0a8263baf74e3db5358bc5d68858a3686db4914fed3996d60_prof);

        
        $__internal_bd81343f86fdd4887dabdf1ee4daf2ea422ba1fed68c838212a876ae74c5ff82->leave($__internal_bd81343f86fdd4887dabdf1ee4daf2ea422ba1fed68c838212a876ae74c5ff82_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2d9de22d9879028c1258ae2f8d9c034cc817b8638caf53132e2aad4c8764417a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9de22d9879028c1258ae2f8d9c034cc817b8638caf53132e2aad4c8764417a->enter($__internal_2d9de22d9879028c1258ae2f8d9c034cc817b8638caf53132e2aad4c8764417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_626a30aa346973eb1375a0e4200ee161b17445510cc0b75a06d4fb2f73038ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626a30aa346973eb1375a0e4200ee161b17445510cc0b75a06d4fb2f73038ede->enter($__internal_626a30aa346973eb1375a0e4200ee161b17445510cc0b75a06d4fb2f73038ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_626a30aa346973eb1375a0e4200ee161b17445510cc0b75a06d4fb2f73038ede->leave($__internal_626a30aa346973eb1375a0e4200ee161b17445510cc0b75a06d4fb2f73038ede_prof);

        
        $__internal_2d9de22d9879028c1258ae2f8d9c034cc817b8638caf53132e2aad4c8764417a->leave($__internal_2d9de22d9879028c1258ae2f8d9c034cc817b8638caf53132e2aad4c8764417a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_919cfe24002a4c1ffff6e16791470665f926dccc5ec1ba3cb5ad7789b33a1080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919cfe24002a4c1ffff6e16791470665f926dccc5ec1ba3cb5ad7789b33a1080->enter($__internal_919cfe24002a4c1ffff6e16791470665f926dccc5ec1ba3cb5ad7789b33a1080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3368143add07b951b47ffa449f174e1ada9f59ec0cdd6da254a9309755a1ddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3368143add07b951b47ffa449f174e1ada9f59ec0cdd6da254a9309755a1ddc5->enter($__internal_3368143add07b951b47ffa449f174e1ada9f59ec0cdd6da254a9309755a1ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3368143add07b951b47ffa449f174e1ada9f59ec0cdd6da254a9309755a1ddc5->leave($__internal_3368143add07b951b47ffa449f174e1ada9f59ec0cdd6da254a9309755a1ddc5_prof);

        
        $__internal_919cfe24002a4c1ffff6e16791470665f926dccc5ec1ba3cb5ad7789b33a1080->leave($__internal_919cfe24002a4c1ffff6e16791470665f926dccc5ec1ba3cb5ad7789b33a1080_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c2ed81a37f86ff4d41ba0472f1d4334f9c24bfe2dbf1cdd2515a6e522e9a2c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ed81a37f86ff4d41ba0472f1d4334f9c24bfe2dbf1cdd2515a6e522e9a2c92->enter($__internal_c2ed81a37f86ff4d41ba0472f1d4334f9c24bfe2dbf1cdd2515a6e522e9a2c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_854530f73b7f6b0076076a4b38580160a261d6f671e9f82d84535d161ddf1034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854530f73b7f6b0076076a4b38580160a261d6f671e9f82d84535d161ddf1034->enter($__internal_854530f73b7f6b0076076a4b38580160a261d6f671e9f82d84535d161ddf1034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_854530f73b7f6b0076076a4b38580160a261d6f671e9f82d84535d161ddf1034->leave($__internal_854530f73b7f6b0076076a4b38580160a261d6f671e9f82d84535d161ddf1034_prof);

        
        $__internal_c2ed81a37f86ff4d41ba0472f1d4334f9c24bfe2dbf1cdd2515a6e522e9a2c92->leave($__internal_c2ed81a37f86ff4d41ba0472f1d4334f9c24bfe2dbf1cdd2515a6e522e9a2c92_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_38b318d80332d09f36777e0336b6dd516ab6f85c5bef7993af9fb35b7cf9b28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b318d80332d09f36777e0336b6dd516ab6f85c5bef7993af9fb35b7cf9b28f->enter($__internal_38b318d80332d09f36777e0336b6dd516ab6f85c5bef7993af9fb35b7cf9b28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d2e6fcb9360724bdbf3834c1c56f5e1a48e02f4f3a2efd5c09560aa2ec1fb7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e6fcb9360724bdbf3834c1c56f5e1a48e02f4f3a2efd5c09560aa2ec1fb7f4->enter($__internal_d2e6fcb9360724bdbf3834c1c56f5e1a48e02f4f3a2efd5c09560aa2ec1fb7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d2e6fcb9360724bdbf3834c1c56f5e1a48e02f4f3a2efd5c09560aa2ec1fb7f4->leave($__internal_d2e6fcb9360724bdbf3834c1c56f5e1a48e02f4f3a2efd5c09560aa2ec1fb7f4_prof);

        
        $__internal_38b318d80332d09f36777e0336b6dd516ab6f85c5bef7993af9fb35b7cf9b28f->leave($__internal_38b318d80332d09f36777e0336b6dd516ab6f85c5bef7993af9fb35b7cf9b28f_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d53f4c3c80fe0ddc5d9370e632d665526569e1420957fc382a782ece0a79b162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53f4c3c80fe0ddc5d9370e632d665526569e1420957fc382a782ece0a79b162->enter($__internal_d53f4c3c80fe0ddc5d9370e632d665526569e1420957fc382a782ece0a79b162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ebed17d39a6ac0a5ba230bf9c01340267deeaad041feb5013329d70cff4d3c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebed17d39a6ac0a5ba230bf9c01340267deeaad041feb5013329d70cff4d3c33->enter($__internal_ebed17d39a6ac0a5ba230bf9c01340267deeaad041feb5013329d70cff4d3c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ebed17d39a6ac0a5ba230bf9c01340267deeaad041feb5013329d70cff4d3c33->leave($__internal_ebed17d39a6ac0a5ba230bf9c01340267deeaad041feb5013329d70cff4d3c33_prof);

        
        $__internal_d53f4c3c80fe0ddc5d9370e632d665526569e1420957fc382a782ece0a79b162->leave($__internal_d53f4c3c80fe0ddc5d9370e632d665526569e1420957fc382a782ece0a79b162_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_836756663b8bbbcaa80d699ebfa90b60862f7f082b50f92359eebfb07f36173d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836756663b8bbbcaa80d699ebfa90b60862f7f082b50f92359eebfb07f36173d->enter($__internal_836756663b8bbbcaa80d699ebfa90b60862f7f082b50f92359eebfb07f36173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_18910579b567efeea6738cc5ebd6c0c91944f4ec9e9862246b41e11b3bc405c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18910579b567efeea6738cc5ebd6c0c91944f4ec9e9862246b41e11b3bc405c5->enter($__internal_18910579b567efeea6738cc5ebd6c0c91944f4ec9e9862246b41e11b3bc405c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_18910579b567efeea6738cc5ebd6c0c91944f4ec9e9862246b41e11b3bc405c5->leave($__internal_18910579b567efeea6738cc5ebd6c0c91944f4ec9e9862246b41e11b3bc405c5_prof);

        
        $__internal_836756663b8bbbcaa80d699ebfa90b60862f7f082b50f92359eebfb07f36173d->leave($__internal_836756663b8bbbcaa80d699ebfa90b60862f7f082b50f92359eebfb07f36173d_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_0dd9f0392204a46da27d1d5617419f40c39f083caab070eb26e504dc668830c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd9f0392204a46da27d1d5617419f40c39f083caab070eb26e504dc668830c9->enter($__internal_0dd9f0392204a46da27d1d5617419f40c39f083caab070eb26e504dc668830c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_60d942f1dfe5c080e76129945eace379dc92ff2c9b1f8e76cf07266e66b1e266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d942f1dfe5c080e76129945eace379dc92ff2c9b1f8e76cf07266e66b1e266->enter($__internal_60d942f1dfe5c080e76129945eace379dc92ff2c9b1f8e76cf07266e66b1e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_60d942f1dfe5c080e76129945eace379dc92ff2c9b1f8e76cf07266e66b1e266->leave($__internal_60d942f1dfe5c080e76129945eace379dc92ff2c9b1f8e76cf07266e66b1e266_prof);

        
        $__internal_0dd9f0392204a46da27d1d5617419f40c39f083caab070eb26e504dc668830c9->leave($__internal_0dd9f0392204a46da27d1d5617419f40c39f083caab070eb26e504dc668830c9_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d81f7f8a7fad9466d385e50b57bca5e677ff4f245c72fe50bbc2e5b468d91e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81f7f8a7fad9466d385e50b57bca5e677ff4f245c72fe50bbc2e5b468d91e7a->enter($__internal_d81f7f8a7fad9466d385e50b57bca5e677ff4f245c72fe50bbc2e5b468d91e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f1c8cdd25e78f8a8cfbdee5073750276aabec1b2006995bae0c40246c36c7d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c8cdd25e78f8a8cfbdee5073750276aabec1b2006995bae0c40246c36c7d72->enter($__internal_f1c8cdd25e78f8a8cfbdee5073750276aabec1b2006995bae0c40246c36c7d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f1c8cdd25e78f8a8cfbdee5073750276aabec1b2006995bae0c40246c36c7d72->leave($__internal_f1c8cdd25e78f8a8cfbdee5073750276aabec1b2006995bae0c40246c36c7d72_prof);

        
        $__internal_d81f7f8a7fad9466d385e50b57bca5e677ff4f245c72fe50bbc2e5b468d91e7a->leave($__internal_d81f7f8a7fad9466d385e50b57bca5e677ff4f245c72fe50bbc2e5b468d91e7a_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fbc6cf911b5eda80a63486327e0374253230c7a423092deff827ec75c43d6c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc6cf911b5eda80a63486327e0374253230c7a423092deff827ec75c43d6c26->enter($__internal_fbc6cf911b5eda80a63486327e0374253230c7a423092deff827ec75c43d6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_da20a79d583a035ad7bdf78d382bb1f540148a339bb2649ad17531e4da6587ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da20a79d583a035ad7bdf78d382bb1f540148a339bb2649ad17531e4da6587ee->enter($__internal_da20a79d583a035ad7bdf78d382bb1f540148a339bb2649ad17531e4da6587ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da20a79d583a035ad7bdf78d382bb1f540148a339bb2649ad17531e4da6587ee->leave($__internal_da20a79d583a035ad7bdf78d382bb1f540148a339bb2649ad17531e4da6587ee_prof);

        
        $__internal_fbc6cf911b5eda80a63486327e0374253230c7a423092deff827ec75c43d6c26->leave($__internal_fbc6cf911b5eda80a63486327e0374253230c7a423092deff827ec75c43d6c26_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_131adcf1745bdb711cdebaa0dc31ff10ca1bcadf460566aa435b6c86f9d86da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131adcf1745bdb711cdebaa0dc31ff10ca1bcadf460566aa435b6c86f9d86da8->enter($__internal_131adcf1745bdb711cdebaa0dc31ff10ca1bcadf460566aa435b6c86f9d86da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_27872786bc46af68970b065a6af645ba48155b710092bd2436ecddf654529c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27872786bc46af68970b065a6af645ba48155b710092bd2436ecddf654529c15->enter($__internal_27872786bc46af68970b065a6af645ba48155b710092bd2436ecddf654529c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_27872786bc46af68970b065a6af645ba48155b710092bd2436ecddf654529c15->leave($__internal_27872786bc46af68970b065a6af645ba48155b710092bd2436ecddf654529c15_prof);

        
        $__internal_131adcf1745bdb711cdebaa0dc31ff10ca1bcadf460566aa435b6c86f9d86da8->leave($__internal_131adcf1745bdb711cdebaa0dc31ff10ca1bcadf460566aa435b6c86f9d86da8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
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

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
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
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
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

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
