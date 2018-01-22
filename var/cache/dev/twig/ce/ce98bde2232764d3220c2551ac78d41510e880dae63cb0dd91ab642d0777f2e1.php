<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6e9eaaff776d13b42f09542a95d630baa6ce2a7b69a8e6d51061941699774694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_206cc746b36c2838ac23faa686141fa03235d77fa7c04f4279945e1702034b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206cc746b36c2838ac23faa686141fa03235d77fa7c04f4279945e1702034b31->enter($__internal_206cc746b36c2838ac23faa686141fa03235d77fa7c04f4279945e1702034b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_ff044af4f000e65b310d396c42c48c56a42064256e4bb1c91a0aaaabd3b75825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff044af4f000e65b310d396c42c48c56a42064256e4bb1c91a0aaaabd3b75825->enter($__internal_ff044af4f000e65b310d396c42c48c56a42064256e4bb1c91a0aaaabd3b75825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_206cc746b36c2838ac23faa686141fa03235d77fa7c04f4279945e1702034b31->leave($__internal_206cc746b36c2838ac23faa686141fa03235d77fa7c04f4279945e1702034b31_prof);

        
        $__internal_ff044af4f000e65b310d396c42c48c56a42064256e4bb1c91a0aaaabd3b75825->leave($__internal_ff044af4f000e65b310d396c42c48c56a42064256e4bb1c91a0aaaabd3b75825_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ceb1ab87b43e5cd8e4f5e9862ce8aa2dfc390da22f1a316aefc6af0c7c6f1962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb1ab87b43e5cd8e4f5e9862ce8aa2dfc390da22f1a316aefc6af0c7c6f1962->enter($__internal_ceb1ab87b43e5cd8e4f5e9862ce8aa2dfc390da22f1a316aefc6af0c7c6f1962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f47d74c12b7c4b8474d120450657d2e47f6a799301c0af260cc2cf0dff434f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47d74c12b7c4b8474d120450657d2e47f6a799301c0af260cc2cf0dff434f4c->enter($__internal_f47d74c12b7c4b8474d120450657d2e47f6a799301c0af260cc2cf0dff434f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f47d74c12b7c4b8474d120450657d2e47f6a799301c0af260cc2cf0dff434f4c->leave($__internal_f47d74c12b7c4b8474d120450657d2e47f6a799301c0af260cc2cf0dff434f4c_prof);

        
        $__internal_ceb1ab87b43e5cd8e4f5e9862ce8aa2dfc390da22f1a316aefc6af0c7c6f1962->leave($__internal_ceb1ab87b43e5cd8e4f5e9862ce8aa2dfc390da22f1a316aefc6af0c7c6f1962_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_28a2348aed7c4937fa0b023c13b4313bd18cfd73ff6d3e047fcd0de6e234a252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a2348aed7c4937fa0b023c13b4313bd18cfd73ff6d3e047fcd0de6e234a252->enter($__internal_28a2348aed7c4937fa0b023c13b4313bd18cfd73ff6d3e047fcd0de6e234a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fa0d0a80294dff83ba0fb3fb1b4896eea12837647c2e52fea866bcbac0cb7e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0d0a80294dff83ba0fb3fb1b4896eea12837647c2e52fea866bcbac0cb7e4a->enter($__internal_fa0d0a80294dff83ba0fb3fb1b4896eea12837647c2e52fea866bcbac0cb7e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fa0d0a80294dff83ba0fb3fb1b4896eea12837647c2e52fea866bcbac0cb7e4a->leave($__internal_fa0d0a80294dff83ba0fb3fb1b4896eea12837647c2e52fea866bcbac0cb7e4a_prof);

        
        $__internal_28a2348aed7c4937fa0b023c13b4313bd18cfd73ff6d3e047fcd0de6e234a252->leave($__internal_28a2348aed7c4937fa0b023c13b4313bd18cfd73ff6d3e047fcd0de6e234a252_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fe4d00416fcb47f7fff54fe62d3294510897c04b4f03fcee5d730f081e57fbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4d00416fcb47f7fff54fe62d3294510897c04b4f03fcee5d730f081e57fbf0->enter($__internal_fe4d00416fcb47f7fff54fe62d3294510897c04b4f03fcee5d730f081e57fbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c83e3d9abd53b4dd0f78dd121612fe85c9c3f9498ca4332ad470bb8b2e921aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83e3d9abd53b4dd0f78dd121612fe85c9c3f9498ca4332ad470bb8b2e921aec->enter($__internal_c83e3d9abd53b4dd0f78dd121612fe85c9c3f9498ca4332ad470bb8b2e921aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c83e3d9abd53b4dd0f78dd121612fe85c9c3f9498ca4332ad470bb8b2e921aec->leave($__internal_c83e3d9abd53b4dd0f78dd121612fe85c9c3f9498ca4332ad470bb8b2e921aec_prof);

        
        $__internal_fe4d00416fcb47f7fff54fe62d3294510897c04b4f03fcee5d730f081e57fbf0->leave($__internal_fe4d00416fcb47f7fff54fe62d3294510897c04b4f03fcee5d730f081e57fbf0_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d64889c1dd7c092cf09bf390061337ebd6246fe72e4487c75e49a70e9f8219c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64889c1dd7c092cf09bf390061337ebd6246fe72e4487c75e49a70e9f8219c0->enter($__internal_d64889c1dd7c092cf09bf390061337ebd6246fe72e4487c75e49a70e9f8219c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4437e494af4fc229ed00d3ca89590d12d65abfad24c947f8e596356f0c181cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4437e494af4fc229ed00d3ca89590d12d65abfad24c947f8e596356f0c181cbc->enter($__internal_4437e494af4fc229ed00d3ca89590d12d65abfad24c947f8e596356f0c181cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_4afa74ec2bad8b7628083bf14e6c7d0c39a84e0d95fb8384b36dc1daeac1c670 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e56410409f58b47d05adb1d632ba4b0eb487b1e866b53b27bab3f9fc8d80dbfe = "{{") && ('' === $__internal_e56410409f58b47d05adb1d632ba4b0eb487b1e866b53b27bab3f9fc8d80dbfe || 0 === strpos($__internal_4afa74ec2bad8b7628083bf14e6c7d0c39a84e0d95fb8384b36dc1daeac1c670, $__internal_e56410409f58b47d05adb1d632ba4b0eb487b1e866b53b27bab3f9fc8d80dbfe)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_085c5254c8a35874988b8a014f19f92c4426e4dc6915f51206242ef0e40c1c22 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1303ae643874c8fa3b9b7ffe6843a3130e5ed1131d1411bd5ba8b96418518301 = "}}") && ('' === $__internal_1303ae643874c8fa3b9b7ffe6843a3130e5ed1131d1411bd5ba8b96418518301 || $__internal_1303ae643874c8fa3b9b7ffe6843a3130e5ed1131d1411bd5ba8b96418518301 === substr($__internal_085c5254c8a35874988b8a014f19f92c4426e4dc6915f51206242ef0e40c1c22, -strlen($__internal_1303ae643874c8fa3b9b7ffe6843a3130e5ed1131d1411bd5ba8b96418518301))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_4437e494af4fc229ed00d3ca89590d12d65abfad24c947f8e596356f0c181cbc->leave($__internal_4437e494af4fc229ed00d3ca89590d12d65abfad24c947f8e596356f0c181cbc_prof);

        
        $__internal_d64889c1dd7c092cf09bf390061337ebd6246fe72e4487c75e49a70e9f8219c0->leave($__internal_d64889c1dd7c092cf09bf390061337ebd6246fe72e4487c75e49a70e9f8219c0_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_10e6f1575e35e091b8094acda94ad5c1ccb4ae7c580f0229accc38eebe9a1b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e6f1575e35e091b8094acda94ad5c1ccb4ae7c580f0229accc38eebe9a1b1a->enter($__internal_10e6f1575e35e091b8094acda94ad5c1ccb4ae7c580f0229accc38eebe9a1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_165fe858124db3b326c40dfac03d192f41aaf05f8480a156b0721f0e6e0f0e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165fe858124db3b326c40dfac03d192f41aaf05f8480a156b0721f0e6e0f0e61->enter($__internal_165fe858124db3b326c40dfac03d192f41aaf05f8480a156b0721f0e6e0f0e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_165fe858124db3b326c40dfac03d192f41aaf05f8480a156b0721f0e6e0f0e61->leave($__internal_165fe858124db3b326c40dfac03d192f41aaf05f8480a156b0721f0e6e0f0e61_prof);

        
        $__internal_10e6f1575e35e091b8094acda94ad5c1ccb4ae7c580f0229accc38eebe9a1b1a->leave($__internal_10e6f1575e35e091b8094acda94ad5c1ccb4ae7c580f0229accc38eebe9a1b1a_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_80b5731bc4529f4835e958a21a1f528910c33706ce55b6d1d90e805d0d13df53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b5731bc4529f4835e958a21a1f528910c33706ce55b6d1d90e805d0d13df53->enter($__internal_80b5731bc4529f4835e958a21a1f528910c33706ce55b6d1d90e805d0d13df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_35081fbf37110a6398f21af6e76fedf9529b9bf1b2c8d5301330551fc128eeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35081fbf37110a6398f21af6e76fedf9529b9bf1b2c8d5301330551fc128eeed->enter($__internal_35081fbf37110a6398f21af6e76fedf9529b9bf1b2c8d5301330551fc128eeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_35081fbf37110a6398f21af6e76fedf9529b9bf1b2c8d5301330551fc128eeed->leave($__internal_35081fbf37110a6398f21af6e76fedf9529b9bf1b2c8d5301330551fc128eeed_prof);

        
        $__internal_80b5731bc4529f4835e958a21a1f528910c33706ce55b6d1d90e805d0d13df53->leave($__internal_80b5731bc4529f4835e958a21a1f528910c33706ce55b6d1d90e805d0d13df53_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4811c88268e18564a76fecf8c449084f75d788f4149210461868431561759e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4811c88268e18564a76fecf8c449084f75d788f4149210461868431561759e36->enter($__internal_4811c88268e18564a76fecf8c449084f75d788f4149210461868431561759e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1a423df44f247537af312331bf761fe8da822939603c9dc3a91355afb359c2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a423df44f247537af312331bf761fe8da822939603c9dc3a91355afb359c2bb->enter($__internal_1a423df44f247537af312331bf761fe8da822939603c9dc3a91355afb359c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_1a423df44f247537af312331bf761fe8da822939603c9dc3a91355afb359c2bb->leave($__internal_1a423df44f247537af312331bf761fe8da822939603c9dc3a91355afb359c2bb_prof);

        
        $__internal_4811c88268e18564a76fecf8c449084f75d788f4149210461868431561759e36->leave($__internal_4811c88268e18564a76fecf8c449084f75d788f4149210461868431561759e36_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7e1ad406cfbf8656f7421390b22e823b9ac71b7fcb85538308be402809db28ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1ad406cfbf8656f7421390b22e823b9ac71b7fcb85538308be402809db28ff->enter($__internal_7e1ad406cfbf8656f7421390b22e823b9ac71b7fcb85538308be402809db28ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7ce279f34b38d5b8f26ff0812ae5e49e4b239a1b778d05b3d050e66ea2076659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce279f34b38d5b8f26ff0812ae5e49e4b239a1b778d05b3d050e66ea2076659->enter($__internal_7ce279f34b38d5b8f26ff0812ae5e49e4b239a1b778d05b3d050e66ea2076659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_7ce279f34b38d5b8f26ff0812ae5e49e4b239a1b778d05b3d050e66ea2076659->leave($__internal_7ce279f34b38d5b8f26ff0812ae5e49e4b239a1b778d05b3d050e66ea2076659_prof);

        
        $__internal_7e1ad406cfbf8656f7421390b22e823b9ac71b7fcb85538308be402809db28ff->leave($__internal_7e1ad406cfbf8656f7421390b22e823b9ac71b7fcb85538308be402809db28ff_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_bde5458a40981750b0a8a294244e3354df4c2c59c80864d36df6d6109573a832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde5458a40981750b0a8a294244e3354df4c2c59c80864d36df6d6109573a832->enter($__internal_bde5458a40981750b0a8a294244e3354df4c2c59c80864d36df6d6109573a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_298e88d7405a3dfbc7927f5c4a5892f12798e81663424d1ad8de7f56e190d466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298e88d7405a3dfbc7927f5c4a5892f12798e81663424d1ad8de7f56e190d466->enter($__internal_298e88d7405a3dfbc7927f5c4a5892f12798e81663424d1ad8de7f56e190d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_298e88d7405a3dfbc7927f5c4a5892f12798e81663424d1ad8de7f56e190d466->leave($__internal_298e88d7405a3dfbc7927f5c4a5892f12798e81663424d1ad8de7f56e190d466_prof);

        
        $__internal_bde5458a40981750b0a8a294244e3354df4c2c59c80864d36df6d6109573a832->leave($__internal_bde5458a40981750b0a8a294244e3354df4c2c59c80864d36df6d6109573a832_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d54ce00170c590cc227c4efd78129e9f4b01738ad4a4223a7b7654822d0137aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54ce00170c590cc227c4efd78129e9f4b01738ad4a4223a7b7654822d0137aa->enter($__internal_d54ce00170c590cc227c4efd78129e9f4b01738ad4a4223a7b7654822d0137aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_288b5e2cc16a8be44923d285541a7e68c54a814fbf7e33148b61d113e77c88d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288b5e2cc16a8be44923d285541a7e68c54a814fbf7e33148b61d113e77c88d2->enter($__internal_288b5e2cc16a8be44923d285541a7e68c54a814fbf7e33148b61d113e77c88d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_288b5e2cc16a8be44923d285541a7e68c54a814fbf7e33148b61d113e77c88d2->leave($__internal_288b5e2cc16a8be44923d285541a7e68c54a814fbf7e33148b61d113e77c88d2_prof);

        
        $__internal_d54ce00170c590cc227c4efd78129e9f4b01738ad4a4223a7b7654822d0137aa->leave($__internal_d54ce00170c590cc227c4efd78129e9f4b01738ad4a4223a7b7654822d0137aa_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_32444b96cd4ac364064b792997ab21e0c3780f80b95c379a77057b9d6f8c6528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32444b96cd4ac364064b792997ab21e0c3780f80b95c379a77057b9d6f8c6528->enter($__internal_32444b96cd4ac364064b792997ab21e0c3780f80b95c379a77057b9d6f8c6528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6cbc356996d9fc3697051d4e69536be00818b9bcb6b128b9a3a9260a5c1c2ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbc356996d9fc3697051d4e69536be00818b9bcb6b128b9a3a9260a5c1c2ea0->enter($__internal_6cbc356996d9fc3697051d4e69536be00818b9bcb6b128b9a3a9260a5c1c2ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_6cbc356996d9fc3697051d4e69536be00818b9bcb6b128b9a3a9260a5c1c2ea0->leave($__internal_6cbc356996d9fc3697051d4e69536be00818b9bcb6b128b9a3a9260a5c1c2ea0_prof);

        
        $__internal_32444b96cd4ac364064b792997ab21e0c3780f80b95c379a77057b9d6f8c6528->leave($__internal_32444b96cd4ac364064b792997ab21e0c3780f80b95c379a77057b9d6f8c6528_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2f55e4fcbef11e498bdc108fb465d0d84698bd4de8e2fdf875255b10d6822c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f55e4fcbef11e498bdc108fb465d0d84698bd4de8e2fdf875255b10d6822c97->enter($__internal_2f55e4fcbef11e498bdc108fb465d0d84698bd4de8e2fdf875255b10d6822c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5bca98ff6c2f257ea966c11d02fe118a3cf4301e37602f4a2de5e4b696486ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bca98ff6c2f257ea966c11d02fe118a3cf4301e37602f4a2de5e4b696486ba3->enter($__internal_5bca98ff6c2f257ea966c11d02fe118a3cf4301e37602f4a2de5e4b696486ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_5bca98ff6c2f257ea966c11d02fe118a3cf4301e37602f4a2de5e4b696486ba3->leave($__internal_5bca98ff6c2f257ea966c11d02fe118a3cf4301e37602f4a2de5e4b696486ba3_prof);

        
        $__internal_2f55e4fcbef11e498bdc108fb465d0d84698bd4de8e2fdf875255b10d6822c97->leave($__internal_2f55e4fcbef11e498bdc108fb465d0d84698bd4de8e2fdf875255b10d6822c97_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_01ade64ae5b021f3aa94c3d777b14b0ee13be36b8770a3cdf9f9e6375c766548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ade64ae5b021f3aa94c3d777b14b0ee13be36b8770a3cdf9f9e6375c766548->enter($__internal_01ade64ae5b021f3aa94c3d777b14b0ee13be36b8770a3cdf9f9e6375c766548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6b7daa6662fbf5d30581970a663ba7ebf2f86fb2b1c4766454e2eadf8d45c032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7daa6662fbf5d30581970a663ba7ebf2f86fb2b1c4766454e2eadf8d45c032->enter($__internal_6b7daa6662fbf5d30581970a663ba7ebf2f86fb2b1c4766454e2eadf8d45c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_6b7daa6662fbf5d30581970a663ba7ebf2f86fb2b1c4766454e2eadf8d45c032->leave($__internal_6b7daa6662fbf5d30581970a663ba7ebf2f86fb2b1c4766454e2eadf8d45c032_prof);

        
        $__internal_01ade64ae5b021f3aa94c3d777b14b0ee13be36b8770a3cdf9f9e6375c766548->leave($__internal_01ade64ae5b021f3aa94c3d777b14b0ee13be36b8770a3cdf9f9e6375c766548_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_311186ca0698b20b178474b51a4554b26669f0e3ce49ebe8e3c5553dea38f76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311186ca0698b20b178474b51a4554b26669f0e3ce49ebe8e3c5553dea38f76b->enter($__internal_311186ca0698b20b178474b51a4554b26669f0e3ce49ebe8e3c5553dea38f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_47beac5679a84c702b36f64582702cc3320d259121f640db8ce449bda6a2dbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47beac5679a84c702b36f64582702cc3320d259121f640db8ce449bda6a2dbf4->enter($__internal_47beac5679a84c702b36f64582702cc3320d259121f640db8ce449bda6a2dbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_47beac5679a84c702b36f64582702cc3320d259121f640db8ce449bda6a2dbf4->leave($__internal_47beac5679a84c702b36f64582702cc3320d259121f640db8ce449bda6a2dbf4_prof);

        
        $__internal_311186ca0698b20b178474b51a4554b26669f0e3ce49ebe8e3c5553dea38f76b->leave($__internal_311186ca0698b20b178474b51a4554b26669f0e3ce49ebe8e3c5553dea38f76b_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7d53c3998fbcc6810b17ea4e3ddd06c20e24ea8c5f5550b52b24b8b47b4d5c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d53c3998fbcc6810b17ea4e3ddd06c20e24ea8c5f5550b52b24b8b47b4d5c2e->enter($__internal_7d53c3998fbcc6810b17ea4e3ddd06c20e24ea8c5f5550b52b24b8b47b4d5c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a1f69170793c2c90f7d03418645f03e3ca8f912ae2c21d75bb0ab1198fa46fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f69170793c2c90f7d03418645f03e3ca8f912ae2c21d75bb0ab1198fa46fe7->enter($__internal_a1f69170793c2c90f7d03418645f03e3ca8f912ae2c21d75bb0ab1198fa46fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a1f69170793c2c90f7d03418645f03e3ca8f912ae2c21d75bb0ab1198fa46fe7->leave($__internal_a1f69170793c2c90f7d03418645f03e3ca8f912ae2c21d75bb0ab1198fa46fe7_prof);

        
        $__internal_7d53c3998fbcc6810b17ea4e3ddd06c20e24ea8c5f5550b52b24b8b47b4d5c2e->leave($__internal_7d53c3998fbcc6810b17ea4e3ddd06c20e24ea8c5f5550b52b24b8b47b4d5c2e_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b6349c0848aa1c46bfd99d08820e420125c030035f7f1433371414a64815d0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6349c0848aa1c46bfd99d08820e420125c030035f7f1433371414a64815d0c1->enter($__internal_b6349c0848aa1c46bfd99d08820e420125c030035f7f1433371414a64815d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d30a79da608771357ee4ee5ae2333f2c8bd11068111e6af3745aaafb80879473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30a79da608771357ee4ee5ae2333f2c8bd11068111e6af3745aaafb80879473->enter($__internal_d30a79da608771357ee4ee5ae2333f2c8bd11068111e6af3745aaafb80879473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d30a79da608771357ee4ee5ae2333f2c8bd11068111e6af3745aaafb80879473->leave($__internal_d30a79da608771357ee4ee5ae2333f2c8bd11068111e6af3745aaafb80879473_prof);

        
        $__internal_b6349c0848aa1c46bfd99d08820e420125c030035f7f1433371414a64815d0c1->leave($__internal_b6349c0848aa1c46bfd99d08820e420125c030035f7f1433371414a64815d0c1_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9fa7a006a3d9aad3bc579dd7023510369348abcc34b115a854cf4a0acbc10d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa7a006a3d9aad3bc579dd7023510369348abcc34b115a854cf4a0acbc10d3a->enter($__internal_9fa7a006a3d9aad3bc579dd7023510369348abcc34b115a854cf4a0acbc10d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1411222a97533956d75013e0bd632c9773c13ebe5d3ac258479c19d22fdb9741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1411222a97533956d75013e0bd632c9773c13ebe5d3ac258479c19d22fdb9741->enter($__internal_1411222a97533956d75013e0bd632c9773c13ebe5d3ac258479c19d22fdb9741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1411222a97533956d75013e0bd632c9773c13ebe5d3ac258479c19d22fdb9741->leave($__internal_1411222a97533956d75013e0bd632c9773c13ebe5d3ac258479c19d22fdb9741_prof);

        
        $__internal_9fa7a006a3d9aad3bc579dd7023510369348abcc34b115a854cf4a0acbc10d3a->leave($__internal_9fa7a006a3d9aad3bc579dd7023510369348abcc34b115a854cf4a0acbc10d3a_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_423d9e3144f24873333530cc536091b66662bd20ce40291cd477cd53712f0426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423d9e3144f24873333530cc536091b66662bd20ce40291cd477cd53712f0426->enter($__internal_423d9e3144f24873333530cc536091b66662bd20ce40291cd477cd53712f0426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5bf132303edc8b4f1b9dcf9d7c5564fee830f4b0c92c7f9c1927fdd73893142f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf132303edc8b4f1b9dcf9d7c5564fee830f4b0c92c7f9c1927fdd73893142f->enter($__internal_5bf132303edc8b4f1b9dcf9d7c5564fee830f4b0c92c7f9c1927fdd73893142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_5bf132303edc8b4f1b9dcf9d7c5564fee830f4b0c92c7f9c1927fdd73893142f->leave($__internal_5bf132303edc8b4f1b9dcf9d7c5564fee830f4b0c92c7f9c1927fdd73893142f_prof);

        
        $__internal_423d9e3144f24873333530cc536091b66662bd20ce40291cd477cd53712f0426->leave($__internal_423d9e3144f24873333530cc536091b66662bd20ce40291cd477cd53712f0426_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12771199b5d833c7f676920bb3d7158b47ad1fef5e0d2433d4995d638603d58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12771199b5d833c7f676920bb3d7158b47ad1fef5e0d2433d4995d638603d58f->enter($__internal_12771199b5d833c7f676920bb3d7158b47ad1fef5e0d2433d4995d638603d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a0ec245f36c079d9f522abcc40e788a17c455b881474c197e17d7f534721061b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ec245f36c079d9f522abcc40e788a17c455b881474c197e17d7f534721061b->enter($__internal_a0ec245f36c079d9f522abcc40e788a17c455b881474c197e17d7f534721061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_a0ec245f36c079d9f522abcc40e788a17c455b881474c197e17d7f534721061b->leave($__internal_a0ec245f36c079d9f522abcc40e788a17c455b881474c197e17d7f534721061b_prof);

        
        $__internal_12771199b5d833c7f676920bb3d7158b47ad1fef5e0d2433d4995d638603d58f->leave($__internal_12771199b5d833c7f676920bb3d7158b47ad1fef5e0d2433d4995d638603d58f_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_827db06229f048e3568790d4a40ba7e75392c50379868edd8e7dc46cb55a53e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827db06229f048e3568790d4a40ba7e75392c50379868edd8e7dc46cb55a53e7->enter($__internal_827db06229f048e3568790d4a40ba7e75392c50379868edd8e7dc46cb55a53e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a53a841b47457bc74f55670d5d69fbbb8c3af2a61af679a78b125edabddb11bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53a841b47457bc74f55670d5d69fbbb8c3af2a61af679a78b125edabddb11bf->enter($__internal_a53a841b47457bc74f55670d5d69fbbb8c3af2a61af679a78b125edabddb11bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_a53a841b47457bc74f55670d5d69fbbb8c3af2a61af679a78b125edabddb11bf->leave($__internal_a53a841b47457bc74f55670d5d69fbbb8c3af2a61af679a78b125edabddb11bf_prof);

        
        $__internal_827db06229f048e3568790d4a40ba7e75392c50379868edd8e7dc46cb55a53e7->leave($__internal_827db06229f048e3568790d4a40ba7e75392c50379868edd8e7dc46cb55a53e7_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0bc81aeb0bab8580eace1ff4f854b965092dd56afb747d182b1bdb1ff7ccefe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc81aeb0bab8580eace1ff4f854b965092dd56afb747d182b1bdb1ff7ccefe4->enter($__internal_0bc81aeb0bab8580eace1ff4f854b965092dd56afb747d182b1bdb1ff7ccefe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e074396ed119c748ee7b88c4f26dc5fcc982078b30f2b36bfb0f34956943d4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e074396ed119c748ee7b88c4f26dc5fcc982078b30f2b36bfb0f34956943d4bf->enter($__internal_e074396ed119c748ee7b88c4f26dc5fcc982078b30f2b36bfb0f34956943d4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e074396ed119c748ee7b88c4f26dc5fcc982078b30f2b36bfb0f34956943d4bf->leave($__internal_e074396ed119c748ee7b88c4f26dc5fcc982078b30f2b36bfb0f34956943d4bf_prof);

        
        $__internal_0bc81aeb0bab8580eace1ff4f854b965092dd56afb747d182b1bdb1ff7ccefe4->leave($__internal_0bc81aeb0bab8580eace1ff4f854b965092dd56afb747d182b1bdb1ff7ccefe4_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0eb81344a94be4d5e5f2a6f7057400de51e309845f7a1675f769e8be0db57fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb81344a94be4d5e5f2a6f7057400de51e309845f7a1675f769e8be0db57fec->enter($__internal_0eb81344a94be4d5e5f2a6f7057400de51e309845f7a1675f769e8be0db57fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_73647c90e1b4b9b9c307fa38d373dccc24a32e46d26bebc96383d8f24c143516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73647c90e1b4b9b9c307fa38d373dccc24a32e46d26bebc96383d8f24c143516->enter($__internal_73647c90e1b4b9b9c307fa38d373dccc24a32e46d26bebc96383d8f24c143516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_73647c90e1b4b9b9c307fa38d373dccc24a32e46d26bebc96383d8f24c143516->leave($__internal_73647c90e1b4b9b9c307fa38d373dccc24a32e46d26bebc96383d8f24c143516_prof);

        
        $__internal_0eb81344a94be4d5e5f2a6f7057400de51e309845f7a1675f769e8be0db57fec->leave($__internal_0eb81344a94be4d5e5f2a6f7057400de51e309845f7a1675f769e8be0db57fec_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e4c749a8e788c1c5aa5ec22b0ac7bc7449d029531eb510b52e040fbd84bb75f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c749a8e788c1c5aa5ec22b0ac7bc7449d029531eb510b52e040fbd84bb75f3->enter($__internal_e4c749a8e788c1c5aa5ec22b0ac7bc7449d029531eb510b52e040fbd84bb75f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2b473e5e4d9e7f6adf7db8e7aa8b032b88d11254fb5d4d8f45315771fa34819a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b473e5e4d9e7f6adf7db8e7aa8b032b88d11254fb5d4d8f45315771fa34819a->enter($__internal_2b473e5e4d9e7f6adf7db8e7aa8b032b88d11254fb5d4d8f45315771fa34819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2b473e5e4d9e7f6adf7db8e7aa8b032b88d11254fb5d4d8f45315771fa34819a->leave($__internal_2b473e5e4d9e7f6adf7db8e7aa8b032b88d11254fb5d4d8f45315771fa34819a_prof);

        
        $__internal_e4c749a8e788c1c5aa5ec22b0ac7bc7449d029531eb510b52e040fbd84bb75f3->leave($__internal_e4c749a8e788c1c5aa5ec22b0ac7bc7449d029531eb510b52e040fbd84bb75f3_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f111d01643b5eaf94ed19c2a4acdce4a845a3bee6d581284047e14afbaba377b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f111d01643b5eaf94ed19c2a4acdce4a845a3bee6d581284047e14afbaba377b->enter($__internal_f111d01643b5eaf94ed19c2a4acdce4a845a3bee6d581284047e14afbaba377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_520f11ae55a394097498d275eb4bd7b99a385e6ebbec3268d0a9a8d8a496c5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520f11ae55a394097498d275eb4bd7b99a385e6ebbec3268d0a9a8d8a496c5c6->enter($__internal_520f11ae55a394097498d275eb4bd7b99a385e6ebbec3268d0a9a8d8a496c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_520f11ae55a394097498d275eb4bd7b99a385e6ebbec3268d0a9a8d8a496c5c6->leave($__internal_520f11ae55a394097498d275eb4bd7b99a385e6ebbec3268d0a9a8d8a496c5c6_prof);

        
        $__internal_f111d01643b5eaf94ed19c2a4acdce4a845a3bee6d581284047e14afbaba377b->leave($__internal_f111d01643b5eaf94ed19c2a4acdce4a845a3bee6d581284047e14afbaba377b_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_77f89f4953495a1615351438c4f402ca704ab771f955356157211a01e87e5b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f89f4953495a1615351438c4f402ca704ab771f955356157211a01e87e5b09->enter($__internal_77f89f4953495a1615351438c4f402ca704ab771f955356157211a01e87e5b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_33cf8c399aa9b10de71fd0462f315db53fb0ec288c23249be63b6284b69cd18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cf8c399aa9b10de71fd0462f315db53fb0ec288c23249be63b6284b69cd18a->enter($__internal_33cf8c399aa9b10de71fd0462f315db53fb0ec288c23249be63b6284b69cd18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_33cf8c399aa9b10de71fd0462f315db53fb0ec288c23249be63b6284b69cd18a->leave($__internal_33cf8c399aa9b10de71fd0462f315db53fb0ec288c23249be63b6284b69cd18a_prof);

        
        $__internal_77f89f4953495a1615351438c4f402ca704ab771f955356157211a01e87e5b09->leave($__internal_77f89f4953495a1615351438c4f402ca704ab771f955356157211a01e87e5b09_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_df8e406a2c6c9983967625d6eed51b208ed59e65da3f028c8ab54a5d59ec134b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8e406a2c6c9983967625d6eed51b208ed59e65da3f028c8ab54a5d59ec134b->enter($__internal_df8e406a2c6c9983967625d6eed51b208ed59e65da3f028c8ab54a5d59ec134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ae3a7f71959dcfaa753154e7f54b2632e7e9652d91407e23d120e18261a6e22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3a7f71959dcfaa753154e7f54b2632e7e9652d91407e23d120e18261a6e22a->enter($__internal_ae3a7f71959dcfaa753154e7f54b2632e7e9652d91407e23d120e18261a6e22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_ae3a7f71959dcfaa753154e7f54b2632e7e9652d91407e23d120e18261a6e22a->leave($__internal_ae3a7f71959dcfaa753154e7f54b2632e7e9652d91407e23d120e18261a6e22a_prof);

        
        $__internal_df8e406a2c6c9983967625d6eed51b208ed59e65da3f028c8ab54a5d59ec134b->leave($__internal_df8e406a2c6c9983967625d6eed51b208ed59e65da3f028c8ab54a5d59ec134b_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d64fce685dce3443b3ff149413145294c456794a41288b31acb07adf85ea277b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64fce685dce3443b3ff149413145294c456794a41288b31acb07adf85ea277b->enter($__internal_d64fce685dce3443b3ff149413145294c456794a41288b31acb07adf85ea277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3b3e313606de2370eefc7d52d77688f7a117e147ec61bbb5fae2c7a89ecad1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3e313606de2370eefc7d52d77688f7a117e147ec61bbb5fae2c7a89ecad1b0->enter($__internal_3b3e313606de2370eefc7d52d77688f7a117e147ec61bbb5fae2c7a89ecad1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_3b3e313606de2370eefc7d52d77688f7a117e147ec61bbb5fae2c7a89ecad1b0->leave($__internal_3b3e313606de2370eefc7d52d77688f7a117e147ec61bbb5fae2c7a89ecad1b0_prof);

        
        $__internal_d64fce685dce3443b3ff149413145294c456794a41288b31acb07adf85ea277b->leave($__internal_d64fce685dce3443b3ff149413145294c456794a41288b31acb07adf85ea277b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
