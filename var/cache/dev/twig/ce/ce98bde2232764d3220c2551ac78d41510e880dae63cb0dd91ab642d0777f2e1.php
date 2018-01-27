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
        $__internal_ecd09c80ad6f256bc97e8d4f33169b47dd14248efc8db516988f25193c539fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd09c80ad6f256bc97e8d4f33169b47dd14248efc8db516988f25193c539fe8->enter($__internal_ecd09c80ad6f256bc97e8d4f33169b47dd14248efc8db516988f25193c539fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_eff37712579e486f32498229bf501df61e2a2a30efe85387608d4bbd2fab93ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff37712579e486f32498229bf501df61e2a2a30efe85387608d4bbd2fab93ef->enter($__internal_eff37712579e486f32498229bf501df61e2a2a30efe85387608d4bbd2fab93ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_ecd09c80ad6f256bc97e8d4f33169b47dd14248efc8db516988f25193c539fe8->leave($__internal_ecd09c80ad6f256bc97e8d4f33169b47dd14248efc8db516988f25193c539fe8_prof);

        
        $__internal_eff37712579e486f32498229bf501df61e2a2a30efe85387608d4bbd2fab93ef->leave($__internal_eff37712579e486f32498229bf501df61e2a2a30efe85387608d4bbd2fab93ef_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1400d791ffe59a03b899e01491c902c5ce573051988da0a00aed1bdaa8fc2d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1400d791ffe59a03b899e01491c902c5ce573051988da0a00aed1bdaa8fc2d19->enter($__internal_1400d791ffe59a03b899e01491c902c5ce573051988da0a00aed1bdaa8fc2d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5812f87c597f34a7954b406f936607dc879ee21d2f104d1a5fa0200f1701e7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5812f87c597f34a7954b406f936607dc879ee21d2f104d1a5fa0200f1701e7ff->enter($__internal_5812f87c597f34a7954b406f936607dc879ee21d2f104d1a5fa0200f1701e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5812f87c597f34a7954b406f936607dc879ee21d2f104d1a5fa0200f1701e7ff->leave($__internal_5812f87c597f34a7954b406f936607dc879ee21d2f104d1a5fa0200f1701e7ff_prof);

        
        $__internal_1400d791ffe59a03b899e01491c902c5ce573051988da0a00aed1bdaa8fc2d19->leave($__internal_1400d791ffe59a03b899e01491c902c5ce573051988da0a00aed1bdaa8fc2d19_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e322033a0d165007508502f68b41e4ed1c05ce83630b2d4adfa5bd8a09b91957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e322033a0d165007508502f68b41e4ed1c05ce83630b2d4adfa5bd8a09b91957->enter($__internal_e322033a0d165007508502f68b41e4ed1c05ce83630b2d4adfa5bd8a09b91957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_097d2ef4ac1f89de792d1408b1fbe283512bae700f1694868805c54c3e13bb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097d2ef4ac1f89de792d1408b1fbe283512bae700f1694868805c54c3e13bb63->enter($__internal_097d2ef4ac1f89de792d1408b1fbe283512bae700f1694868805c54c3e13bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_097d2ef4ac1f89de792d1408b1fbe283512bae700f1694868805c54c3e13bb63->leave($__internal_097d2ef4ac1f89de792d1408b1fbe283512bae700f1694868805c54c3e13bb63_prof);

        
        $__internal_e322033a0d165007508502f68b41e4ed1c05ce83630b2d4adfa5bd8a09b91957->leave($__internal_e322033a0d165007508502f68b41e4ed1c05ce83630b2d4adfa5bd8a09b91957_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9ffe6f22d6236f648f5d7d3f2278e59bb03f454646c32698e7588120ed05043f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffe6f22d6236f648f5d7d3f2278e59bb03f454646c32698e7588120ed05043f->enter($__internal_9ffe6f22d6236f648f5d7d3f2278e59bb03f454646c32698e7588120ed05043f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b697df0d78a891245892baae4c80af3e914eda6045dd6de7afe3fbecc8fcff62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b697df0d78a891245892baae4c80af3e914eda6045dd6de7afe3fbecc8fcff62->enter($__internal_b697df0d78a891245892baae4c80af3e914eda6045dd6de7afe3fbecc8fcff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b697df0d78a891245892baae4c80af3e914eda6045dd6de7afe3fbecc8fcff62->leave($__internal_b697df0d78a891245892baae4c80af3e914eda6045dd6de7afe3fbecc8fcff62_prof);

        
        $__internal_9ffe6f22d6236f648f5d7d3f2278e59bb03f454646c32698e7588120ed05043f->leave($__internal_9ffe6f22d6236f648f5d7d3f2278e59bb03f454646c32698e7588120ed05043f_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1cb7e6f9d28b844462ea53922a9c5a218ef77baeb9d642097f9b07ac68f2defc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb7e6f9d28b844462ea53922a9c5a218ef77baeb9d642097f9b07ac68f2defc->enter($__internal_1cb7e6f9d28b844462ea53922a9c5a218ef77baeb9d642097f9b07ac68f2defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2b778a820bd9fd6fc47a861109e9bc1a8474ca46a2c55e4c58ba40eb85cc33bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b778a820bd9fd6fc47a861109e9bc1a8474ca46a2c55e4c58ba40eb85cc33bd->enter($__internal_2b778a820bd9fd6fc47a861109e9bc1a8474ca46a2c55e4c58ba40eb85cc33bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_b6369ddf19e24ab618755d3b5f51728713ea93d1a1753ce552970cdb46389d34 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ef1f65360ebf0741689d552751f9feff731824b43473d7b2057ccb5fd9814462 = "{{") && ('' === $__internal_ef1f65360ebf0741689d552751f9feff731824b43473d7b2057ccb5fd9814462 || 0 === strpos($__internal_b6369ddf19e24ab618755d3b5f51728713ea93d1a1753ce552970cdb46389d34, $__internal_ef1f65360ebf0741689d552751f9feff731824b43473d7b2057ccb5fd9814462)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_6c5f8ff45d9747bf68aebc01ace6e3e509c4f3856bd944e6e83f7c772719a9d7 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_f4d473014c5792c31bca754ff651c407b5758e79451997dd3fa06f4396892eed = "}}") && ('' === $__internal_f4d473014c5792c31bca754ff651c407b5758e79451997dd3fa06f4396892eed || $__internal_f4d473014c5792c31bca754ff651c407b5758e79451997dd3fa06f4396892eed === substr($__internal_6c5f8ff45d9747bf68aebc01ace6e3e509c4f3856bd944e6e83f7c772719a9d7, -strlen($__internal_f4d473014c5792c31bca754ff651c407b5758e79451997dd3fa06f4396892eed))));
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
        
        $__internal_2b778a820bd9fd6fc47a861109e9bc1a8474ca46a2c55e4c58ba40eb85cc33bd->leave($__internal_2b778a820bd9fd6fc47a861109e9bc1a8474ca46a2c55e4c58ba40eb85cc33bd_prof);

        
        $__internal_1cb7e6f9d28b844462ea53922a9c5a218ef77baeb9d642097f9b07ac68f2defc->leave($__internal_1cb7e6f9d28b844462ea53922a9c5a218ef77baeb9d642097f9b07ac68f2defc_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2aa560afeaba8c21c97fb6dc86d643da97ff799c88bed767d4b4f7d516e8243b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa560afeaba8c21c97fb6dc86d643da97ff799c88bed767d4b4f7d516e8243b->enter($__internal_2aa560afeaba8c21c97fb6dc86d643da97ff799c88bed767d4b4f7d516e8243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_11f63116aa3b71bfcec438acbd7ee2149b2de3a457b44dea1ed1046a044c697c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f63116aa3b71bfcec438acbd7ee2149b2de3a457b44dea1ed1046a044c697c->enter($__internal_11f63116aa3b71bfcec438acbd7ee2149b2de3a457b44dea1ed1046a044c697c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_11f63116aa3b71bfcec438acbd7ee2149b2de3a457b44dea1ed1046a044c697c->leave($__internal_11f63116aa3b71bfcec438acbd7ee2149b2de3a457b44dea1ed1046a044c697c_prof);

        
        $__internal_2aa560afeaba8c21c97fb6dc86d643da97ff799c88bed767d4b4f7d516e8243b->leave($__internal_2aa560afeaba8c21c97fb6dc86d643da97ff799c88bed767d4b4f7d516e8243b_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_822bf026d2998f720f67acf10c191f202746c4e5270ee602917ebe785e02941c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822bf026d2998f720f67acf10c191f202746c4e5270ee602917ebe785e02941c->enter($__internal_822bf026d2998f720f67acf10c191f202746c4e5270ee602917ebe785e02941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_38c624ecc67878e4fcc77930924b00f15c1b8a82d543a5977cbf17afe602d243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c624ecc67878e4fcc77930924b00f15c1b8a82d543a5977cbf17afe602d243->enter($__internal_38c624ecc67878e4fcc77930924b00f15c1b8a82d543a5977cbf17afe602d243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_38c624ecc67878e4fcc77930924b00f15c1b8a82d543a5977cbf17afe602d243->leave($__internal_38c624ecc67878e4fcc77930924b00f15c1b8a82d543a5977cbf17afe602d243_prof);

        
        $__internal_822bf026d2998f720f67acf10c191f202746c4e5270ee602917ebe785e02941c->leave($__internal_822bf026d2998f720f67acf10c191f202746c4e5270ee602917ebe785e02941c_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0cbd5a8ac9299aa11652603065d5e097b78d86ab0f836369edc64d7259bd046b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbd5a8ac9299aa11652603065d5e097b78d86ab0f836369edc64d7259bd046b->enter($__internal_0cbd5a8ac9299aa11652603065d5e097b78d86ab0f836369edc64d7259bd046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d71006c5ffd3e7429c8e0c19d9e69f44733e9f52ee7463fe75451066eda72360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71006c5ffd3e7429c8e0c19d9e69f44733e9f52ee7463fe75451066eda72360->enter($__internal_d71006c5ffd3e7429c8e0c19d9e69f44733e9f52ee7463fe75451066eda72360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d71006c5ffd3e7429c8e0c19d9e69f44733e9f52ee7463fe75451066eda72360->leave($__internal_d71006c5ffd3e7429c8e0c19d9e69f44733e9f52ee7463fe75451066eda72360_prof);

        
        $__internal_0cbd5a8ac9299aa11652603065d5e097b78d86ab0f836369edc64d7259bd046b->leave($__internal_0cbd5a8ac9299aa11652603065d5e097b78d86ab0f836369edc64d7259bd046b_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6f14a7cfb2be98f045432dc16891c53fb37c762ccf8d73134fce00cdf4477445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f14a7cfb2be98f045432dc16891c53fb37c762ccf8d73134fce00cdf4477445->enter($__internal_6f14a7cfb2be98f045432dc16891c53fb37c762ccf8d73134fce00cdf4477445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0238c62c55f8c794a7d9a010eb26887582318e96590128fb6d3f21871e7f8146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0238c62c55f8c794a7d9a010eb26887582318e96590128fb6d3f21871e7f8146->enter($__internal_0238c62c55f8c794a7d9a010eb26887582318e96590128fb6d3f21871e7f8146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_0238c62c55f8c794a7d9a010eb26887582318e96590128fb6d3f21871e7f8146->leave($__internal_0238c62c55f8c794a7d9a010eb26887582318e96590128fb6d3f21871e7f8146_prof);

        
        $__internal_6f14a7cfb2be98f045432dc16891c53fb37c762ccf8d73134fce00cdf4477445->leave($__internal_6f14a7cfb2be98f045432dc16891c53fb37c762ccf8d73134fce00cdf4477445_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_fb8c1f014a9f58a9b2bc018df86e4966aa0f658d35c364212ec399adda5240ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8c1f014a9f58a9b2bc018df86e4966aa0f658d35c364212ec399adda5240ca->enter($__internal_fb8c1f014a9f58a9b2bc018df86e4966aa0f658d35c364212ec399adda5240ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_0cf0154919daf2c7e10b85df6c1242f5842280cac607474093a30eb22d1822d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf0154919daf2c7e10b85df6c1242f5842280cac607474093a30eb22d1822d9->enter($__internal_0cf0154919daf2c7e10b85df6c1242f5842280cac607474093a30eb22d1822d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_0cf0154919daf2c7e10b85df6c1242f5842280cac607474093a30eb22d1822d9->leave($__internal_0cf0154919daf2c7e10b85df6c1242f5842280cac607474093a30eb22d1822d9_prof);

        
        $__internal_fb8c1f014a9f58a9b2bc018df86e4966aa0f658d35c364212ec399adda5240ca->leave($__internal_fb8c1f014a9f58a9b2bc018df86e4966aa0f658d35c364212ec399adda5240ca_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_53ce168c439b8457f51792f102c4d538435357d2b2142b5d38a17786064ebccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ce168c439b8457f51792f102c4d538435357d2b2142b5d38a17786064ebccf->enter($__internal_53ce168c439b8457f51792f102c4d538435357d2b2142b5d38a17786064ebccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f537007e70e0680c0f6a8b56f744c090e09e75c43e6faf2890dece4c44480f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f537007e70e0680c0f6a8b56f744c090e09e75c43e6faf2890dece4c44480f4->enter($__internal_6f537007e70e0680c0f6a8b56f744c090e09e75c43e6faf2890dece4c44480f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f537007e70e0680c0f6a8b56f744c090e09e75c43e6faf2890dece4c44480f4->leave($__internal_6f537007e70e0680c0f6a8b56f744c090e09e75c43e6faf2890dece4c44480f4_prof);

        
        $__internal_53ce168c439b8457f51792f102c4d538435357d2b2142b5d38a17786064ebccf->leave($__internal_53ce168c439b8457f51792f102c4d538435357d2b2142b5d38a17786064ebccf_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_954f24f892a894e774ba7ef0a6275dc929ab874f3cac4a467b55fefe659806b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954f24f892a894e774ba7ef0a6275dc929ab874f3cac4a467b55fefe659806b0->enter($__internal_954f24f892a894e774ba7ef0a6275dc929ab874f3cac4a467b55fefe659806b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c2da2ca820f87a7ece162790ca8530e54b670a90d68b04bcec8bc603808006d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2da2ca820f87a7ece162790ca8530e54b670a90d68b04bcec8bc603808006d9->enter($__internal_c2da2ca820f87a7ece162790ca8530e54b670a90d68b04bcec8bc603808006d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c2da2ca820f87a7ece162790ca8530e54b670a90d68b04bcec8bc603808006d9->leave($__internal_c2da2ca820f87a7ece162790ca8530e54b670a90d68b04bcec8bc603808006d9_prof);

        
        $__internal_954f24f892a894e774ba7ef0a6275dc929ab874f3cac4a467b55fefe659806b0->leave($__internal_954f24f892a894e774ba7ef0a6275dc929ab874f3cac4a467b55fefe659806b0_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0e2be0614c87da5f30fc7598fd527141495802dac52519b5d0e82979099a51ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2be0614c87da5f30fc7598fd527141495802dac52519b5d0e82979099a51ae->enter($__internal_0e2be0614c87da5f30fc7598fd527141495802dac52519b5d0e82979099a51ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_abb6755483f06ab1c01a177110865da183684c97fc85ac8b8cec0fb72eb7eb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb6755483f06ab1c01a177110865da183684c97fc85ac8b8cec0fb72eb7eb81->enter($__internal_abb6755483f06ab1c01a177110865da183684c97fc85ac8b8cec0fb72eb7eb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_abb6755483f06ab1c01a177110865da183684c97fc85ac8b8cec0fb72eb7eb81->leave($__internal_abb6755483f06ab1c01a177110865da183684c97fc85ac8b8cec0fb72eb7eb81_prof);

        
        $__internal_0e2be0614c87da5f30fc7598fd527141495802dac52519b5d0e82979099a51ae->leave($__internal_0e2be0614c87da5f30fc7598fd527141495802dac52519b5d0e82979099a51ae_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8e3d1082d4d13a92406ac16af39ebe59cfa32b2063e2f50f2ccf2aa42424cec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3d1082d4d13a92406ac16af39ebe59cfa32b2063e2f50f2ccf2aa42424cec3->enter($__internal_8e3d1082d4d13a92406ac16af39ebe59cfa32b2063e2f50f2ccf2aa42424cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5e7d7cf953de6db78d53eca8c0d5f5b39ece9c778ae146af7fa6f877595d40be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7d7cf953de6db78d53eca8c0d5f5b39ece9c778ae146af7fa6f877595d40be->enter($__internal_5e7d7cf953de6db78d53eca8c0d5f5b39ece9c778ae146af7fa6f877595d40be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_5e7d7cf953de6db78d53eca8c0d5f5b39ece9c778ae146af7fa6f877595d40be->leave($__internal_5e7d7cf953de6db78d53eca8c0d5f5b39ece9c778ae146af7fa6f877595d40be_prof);

        
        $__internal_8e3d1082d4d13a92406ac16af39ebe59cfa32b2063e2f50f2ccf2aa42424cec3->leave($__internal_8e3d1082d4d13a92406ac16af39ebe59cfa32b2063e2f50f2ccf2aa42424cec3_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_155ea7f84ac00289742d65b7eca0943f167b2136c167f86a4c4fb77240eb73a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155ea7f84ac00289742d65b7eca0943f167b2136c167f86a4c4fb77240eb73a3->enter($__internal_155ea7f84ac00289742d65b7eca0943f167b2136c167f86a4c4fb77240eb73a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_44177ebca4e97f57627ba59a9e58f0febe140c55aa9ade356dfe92641ad245ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44177ebca4e97f57627ba59a9e58f0febe140c55aa9ade356dfe92641ad245ba->enter($__internal_44177ebca4e97f57627ba59a9e58f0febe140c55aa9ade356dfe92641ad245ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_44177ebca4e97f57627ba59a9e58f0febe140c55aa9ade356dfe92641ad245ba->leave($__internal_44177ebca4e97f57627ba59a9e58f0febe140c55aa9ade356dfe92641ad245ba_prof);

        
        $__internal_155ea7f84ac00289742d65b7eca0943f167b2136c167f86a4c4fb77240eb73a3->leave($__internal_155ea7f84ac00289742d65b7eca0943f167b2136c167f86a4c4fb77240eb73a3_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7509ec784e1e6e7bb1badd95d3163eddf74ffa647b2b381086a54a959f4e0639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7509ec784e1e6e7bb1badd95d3163eddf74ffa647b2b381086a54a959f4e0639->enter($__internal_7509ec784e1e6e7bb1badd95d3163eddf74ffa647b2b381086a54a959f4e0639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0636edae49c4a0e79ae6d9a33c864bfd93c806ff5eb6ef21b498228bc3df793b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0636edae49c4a0e79ae6d9a33c864bfd93c806ff5eb6ef21b498228bc3df793b->enter($__internal_0636edae49c4a0e79ae6d9a33c864bfd93c806ff5eb6ef21b498228bc3df793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0636edae49c4a0e79ae6d9a33c864bfd93c806ff5eb6ef21b498228bc3df793b->leave($__internal_0636edae49c4a0e79ae6d9a33c864bfd93c806ff5eb6ef21b498228bc3df793b_prof);

        
        $__internal_7509ec784e1e6e7bb1badd95d3163eddf74ffa647b2b381086a54a959f4e0639->leave($__internal_7509ec784e1e6e7bb1badd95d3163eddf74ffa647b2b381086a54a959f4e0639_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4315fdc890b614a4a20a24e1d3ed06f0308539bf114f1ca2ce81d2d25ae9ea0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4315fdc890b614a4a20a24e1d3ed06f0308539bf114f1ca2ce81d2d25ae9ea0d->enter($__internal_4315fdc890b614a4a20a24e1d3ed06f0308539bf114f1ca2ce81d2d25ae9ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_811c6f0f94e931512b38d7a738f60d5204e409190aaafe2ec3b00b2c81911b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811c6f0f94e931512b38d7a738f60d5204e409190aaafe2ec3b00b2c81911b9d->enter($__internal_811c6f0f94e931512b38d7a738f60d5204e409190aaafe2ec3b00b2c81911b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_811c6f0f94e931512b38d7a738f60d5204e409190aaafe2ec3b00b2c81911b9d->leave($__internal_811c6f0f94e931512b38d7a738f60d5204e409190aaafe2ec3b00b2c81911b9d_prof);

        
        $__internal_4315fdc890b614a4a20a24e1d3ed06f0308539bf114f1ca2ce81d2d25ae9ea0d->leave($__internal_4315fdc890b614a4a20a24e1d3ed06f0308539bf114f1ca2ce81d2d25ae9ea0d_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_759f5cbbfeb7fe75be5e99f25f18b612fe8632dd3eb7a3051bea565041da5de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759f5cbbfeb7fe75be5e99f25f18b612fe8632dd3eb7a3051bea565041da5de5->enter($__internal_759f5cbbfeb7fe75be5e99f25f18b612fe8632dd3eb7a3051bea565041da5de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3693d49640af02264c31420ae08e7b2be61e469a101ae0ad74f28c3be704b4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3693d49640af02264c31420ae08e7b2be61e469a101ae0ad74f28c3be704b4d6->enter($__internal_3693d49640af02264c31420ae08e7b2be61e469a101ae0ad74f28c3be704b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3693d49640af02264c31420ae08e7b2be61e469a101ae0ad74f28c3be704b4d6->leave($__internal_3693d49640af02264c31420ae08e7b2be61e469a101ae0ad74f28c3be704b4d6_prof);

        
        $__internal_759f5cbbfeb7fe75be5e99f25f18b612fe8632dd3eb7a3051bea565041da5de5->leave($__internal_759f5cbbfeb7fe75be5e99f25f18b612fe8632dd3eb7a3051bea565041da5de5_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3215196c702497d2edab8603e43e6e9defb528e169a7c349dc787a1c46f9b972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3215196c702497d2edab8603e43e6e9defb528e169a7c349dc787a1c46f9b972->enter($__internal_3215196c702497d2edab8603e43e6e9defb528e169a7c349dc787a1c46f9b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d1123191e0fe77c5a7eafb0ce0d1b0b79cb04f8ed79a7b1f6ad82556d277c630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1123191e0fe77c5a7eafb0ce0d1b0b79cb04f8ed79a7b1f6ad82556d277c630->enter($__internal_d1123191e0fe77c5a7eafb0ce0d1b0b79cb04f8ed79a7b1f6ad82556d277c630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d1123191e0fe77c5a7eafb0ce0d1b0b79cb04f8ed79a7b1f6ad82556d277c630->leave($__internal_d1123191e0fe77c5a7eafb0ce0d1b0b79cb04f8ed79a7b1f6ad82556d277c630_prof);

        
        $__internal_3215196c702497d2edab8603e43e6e9defb528e169a7c349dc787a1c46f9b972->leave($__internal_3215196c702497d2edab8603e43e6e9defb528e169a7c349dc787a1c46f9b972_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae816ce5cc554c52b0121e2c083e90af29e9ec0b69089ad914c24c206686a701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae816ce5cc554c52b0121e2c083e90af29e9ec0b69089ad914c24c206686a701->enter($__internal_ae816ce5cc554c52b0121e2c083e90af29e9ec0b69089ad914c24c206686a701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_264ef5b9350102376445ca7473bcf1fb464e89fff6f05a8c82c8cf0cddcc83ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264ef5b9350102376445ca7473bcf1fb464e89fff6f05a8c82c8cf0cddcc83ad->enter($__internal_264ef5b9350102376445ca7473bcf1fb464e89fff6f05a8c82c8cf0cddcc83ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_264ef5b9350102376445ca7473bcf1fb464e89fff6f05a8c82c8cf0cddcc83ad->leave($__internal_264ef5b9350102376445ca7473bcf1fb464e89fff6f05a8c82c8cf0cddcc83ad_prof);

        
        $__internal_ae816ce5cc554c52b0121e2c083e90af29e9ec0b69089ad914c24c206686a701->leave($__internal_ae816ce5cc554c52b0121e2c083e90af29e9ec0b69089ad914c24c206686a701_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4305a51dc667954b00dbb3b044e6cd6235b16df6a7bb1590fdb36a08485a2b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4305a51dc667954b00dbb3b044e6cd6235b16df6a7bb1590fdb36a08485a2b29->enter($__internal_4305a51dc667954b00dbb3b044e6cd6235b16df6a7bb1590fdb36a08485a2b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a8311801d1eb2aa3afaa33d3427f00f6719beb2329b285b798914202119800b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8311801d1eb2aa3afaa33d3427f00f6719beb2329b285b798914202119800b6->enter($__internal_a8311801d1eb2aa3afaa33d3427f00f6719beb2329b285b798914202119800b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_a8311801d1eb2aa3afaa33d3427f00f6719beb2329b285b798914202119800b6->leave($__internal_a8311801d1eb2aa3afaa33d3427f00f6719beb2329b285b798914202119800b6_prof);

        
        $__internal_4305a51dc667954b00dbb3b044e6cd6235b16df6a7bb1590fdb36a08485a2b29->leave($__internal_4305a51dc667954b00dbb3b044e6cd6235b16df6a7bb1590fdb36a08485a2b29_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_06473dff0c0efe1821fd64a232f4a5ee2d8505d25fdb4f683b74d749a74fe649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06473dff0c0efe1821fd64a232f4a5ee2d8505d25fdb4f683b74d749a74fe649->enter($__internal_06473dff0c0efe1821fd64a232f4a5ee2d8505d25fdb4f683b74d749a74fe649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7f78eb24067f75f2a9ba5dbef28cec26519aa0cbe62dd9ac15fa8e4d7cfc5f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f78eb24067f75f2a9ba5dbef28cec26519aa0cbe62dd9ac15fa8e4d7cfc5f64->enter($__internal_7f78eb24067f75f2a9ba5dbef28cec26519aa0cbe62dd9ac15fa8e4d7cfc5f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f78eb24067f75f2a9ba5dbef28cec26519aa0cbe62dd9ac15fa8e4d7cfc5f64->leave($__internal_7f78eb24067f75f2a9ba5dbef28cec26519aa0cbe62dd9ac15fa8e4d7cfc5f64_prof);

        
        $__internal_06473dff0c0efe1821fd64a232f4a5ee2d8505d25fdb4f683b74d749a74fe649->leave($__internal_06473dff0c0efe1821fd64a232f4a5ee2d8505d25fdb4f683b74d749a74fe649_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_883d8aa6141298c8a58be62daa54a3dbcdd32e8d911cb0cb745a28e0459d1740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883d8aa6141298c8a58be62daa54a3dbcdd32e8d911cb0cb745a28e0459d1740->enter($__internal_883d8aa6141298c8a58be62daa54a3dbcdd32e8d911cb0cb745a28e0459d1740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_660aa1d73a76eb7c36f8d7d154be044d4a9e303f4ac66b76dbf1da8c3fd36a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660aa1d73a76eb7c36f8d7d154be044d4a9e303f4ac66b76dbf1da8c3fd36a85->enter($__internal_660aa1d73a76eb7c36f8d7d154be044d4a9e303f4ac66b76dbf1da8c3fd36a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_660aa1d73a76eb7c36f8d7d154be044d4a9e303f4ac66b76dbf1da8c3fd36a85->leave($__internal_660aa1d73a76eb7c36f8d7d154be044d4a9e303f4ac66b76dbf1da8c3fd36a85_prof);

        
        $__internal_883d8aa6141298c8a58be62daa54a3dbcdd32e8d911cb0cb745a28e0459d1740->leave($__internal_883d8aa6141298c8a58be62daa54a3dbcdd32e8d911cb0cb745a28e0459d1740_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4509bfa1873c030d6d8630dd7aca37fb52ca31a074ff69018ca1c541c74c9e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4509bfa1873c030d6d8630dd7aca37fb52ca31a074ff69018ca1c541c74c9e9a->enter($__internal_4509bfa1873c030d6d8630dd7aca37fb52ca31a074ff69018ca1c541c74c9e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_afce058fc9c624504dc9864bc007376f06b12ad49d925b51d63c204e7d22e06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afce058fc9c624504dc9864bc007376f06b12ad49d925b51d63c204e7d22e06d->enter($__internal_afce058fc9c624504dc9864bc007376f06b12ad49d925b51d63c204e7d22e06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_afce058fc9c624504dc9864bc007376f06b12ad49d925b51d63c204e7d22e06d->leave($__internal_afce058fc9c624504dc9864bc007376f06b12ad49d925b51d63c204e7d22e06d_prof);

        
        $__internal_4509bfa1873c030d6d8630dd7aca37fb52ca31a074ff69018ca1c541c74c9e9a->leave($__internal_4509bfa1873c030d6d8630dd7aca37fb52ca31a074ff69018ca1c541c74c9e9a_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8e74ba27e7198d64fceb7910266a03be785b4ffda8836f5908442eb1da3ff3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e74ba27e7198d64fceb7910266a03be785b4ffda8836f5908442eb1da3ff3be->enter($__internal_8e74ba27e7198d64fceb7910266a03be785b4ffda8836f5908442eb1da3ff3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_05a0b7e98300c54db20fb2a4cc262232c374ff3e034e679f672e345073a457de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a0b7e98300c54db20fb2a4cc262232c374ff3e034e679f672e345073a457de->enter($__internal_05a0b7e98300c54db20fb2a4cc262232c374ff3e034e679f672e345073a457de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_05a0b7e98300c54db20fb2a4cc262232c374ff3e034e679f672e345073a457de->leave($__internal_05a0b7e98300c54db20fb2a4cc262232c374ff3e034e679f672e345073a457de_prof);

        
        $__internal_8e74ba27e7198d64fceb7910266a03be785b4ffda8836f5908442eb1da3ff3be->leave($__internal_8e74ba27e7198d64fceb7910266a03be785b4ffda8836f5908442eb1da3ff3be_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5b7417e52cfe2e2507786d67b19f5be334e5683cd3990ba3846f40c7a1382286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7417e52cfe2e2507786d67b19f5be334e5683cd3990ba3846f40c7a1382286->enter($__internal_5b7417e52cfe2e2507786d67b19f5be334e5683cd3990ba3846f40c7a1382286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f8b80019ec18119002092f684f2d66d09385e6040644581c9f01ed143656f535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b80019ec18119002092f684f2d66d09385e6040644581c9f01ed143656f535->enter($__internal_f8b80019ec18119002092f684f2d66d09385e6040644581c9f01ed143656f535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f8b80019ec18119002092f684f2d66d09385e6040644581c9f01ed143656f535->leave($__internal_f8b80019ec18119002092f684f2d66d09385e6040644581c9f01ed143656f535_prof);

        
        $__internal_5b7417e52cfe2e2507786d67b19f5be334e5683cd3990ba3846f40c7a1382286->leave($__internal_5b7417e52cfe2e2507786d67b19f5be334e5683cd3990ba3846f40c7a1382286_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cee45b4c6d5aec324b79e69acf7efd8c9a19cc2f86d9b8bc7b3d0a2e14584ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee45b4c6d5aec324b79e69acf7efd8c9a19cc2f86d9b8bc7b3d0a2e14584ddb->enter($__internal_cee45b4c6d5aec324b79e69acf7efd8c9a19cc2f86d9b8bc7b3d0a2e14584ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_af58422cd7cabf246174a2ad92a66044d8dd4239eff6356efe3f5a063b24de6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af58422cd7cabf246174a2ad92a66044d8dd4239eff6356efe3f5a063b24de6c->enter($__internal_af58422cd7cabf246174a2ad92a66044d8dd4239eff6356efe3f5a063b24de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_af58422cd7cabf246174a2ad92a66044d8dd4239eff6356efe3f5a063b24de6c->leave($__internal_af58422cd7cabf246174a2ad92a66044d8dd4239eff6356efe3f5a063b24de6c_prof);

        
        $__internal_cee45b4c6d5aec324b79e69acf7efd8c9a19cc2f86d9b8bc7b3d0a2e14584ddb->leave($__internal_cee45b4c6d5aec324b79e69acf7efd8c9a19cc2f86d9b8bc7b3d0a2e14584ddb_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0fc65f6b73a4f740ac966529ff8ea6c9f9de0e1e85556618f31819b0526585dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc65f6b73a4f740ac966529ff8ea6c9f9de0e1e85556618f31819b0526585dc->enter($__internal_0fc65f6b73a4f740ac966529ff8ea6c9f9de0e1e85556618f31819b0526585dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_884e0f6e16ee43160c4d2650c1e2ff9ae54722e62dbc84670a9b7907be3cc396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e0f6e16ee43160c4d2650c1e2ff9ae54722e62dbc84670a9b7907be3cc396->enter($__internal_884e0f6e16ee43160c4d2650c1e2ff9ae54722e62dbc84670a9b7907be3cc396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_884e0f6e16ee43160c4d2650c1e2ff9ae54722e62dbc84670a9b7907be3cc396->leave($__internal_884e0f6e16ee43160c4d2650c1e2ff9ae54722e62dbc84670a9b7907be3cc396_prof);

        
        $__internal_0fc65f6b73a4f740ac966529ff8ea6c9f9de0e1e85556618f31819b0526585dc->leave($__internal_0fc65f6b73a4f740ac966529ff8ea6c9f9de0e1e85556618f31819b0526585dc_prof);

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
