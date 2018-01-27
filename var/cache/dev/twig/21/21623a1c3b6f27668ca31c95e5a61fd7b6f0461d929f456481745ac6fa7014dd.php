<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_26d6d1e44324f7a1f9f7ffa6216e7aff467b39e03c191ef64e4588f16f7147c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a620a43782eb171105cbf2a7d749cb9585b7fdc0596edb41d8bc531e52922ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a620a43782eb171105cbf2a7d749cb9585b7fdc0596edb41d8bc531e52922ab->enter($__internal_8a620a43782eb171105cbf2a7d749cb9585b7fdc0596edb41d8bc531e52922ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_39741ccaed9187d12f6b32b52679f0f0ce92640dfe0d6f20878eb969e61c659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39741ccaed9187d12f6b32b52679f0f0ce92640dfe0d6f20878eb969e61c659f->enter($__internal_39741ccaed9187d12f6b32b52679f0f0ce92640dfe0d6f20878eb969e61c659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_8a620a43782eb171105cbf2a7d749cb9585b7fdc0596edb41d8bc531e52922ab->leave($__internal_8a620a43782eb171105cbf2a7d749cb9585b7fdc0596edb41d8bc531e52922ab_prof);

        
        $__internal_39741ccaed9187d12f6b32b52679f0f0ce92640dfe0d6f20878eb969e61c659f->leave($__internal_39741ccaed9187d12f6b32b52679f0f0ce92640dfe0d6f20878eb969e61c659f_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dd3647df54a3b35187e96185df5193f0b94c3e01438aa038fc8d86332e26c55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3647df54a3b35187e96185df5193f0b94c3e01438aa038fc8d86332e26c55f->enter($__internal_dd3647df54a3b35187e96185df5193f0b94c3e01438aa038fc8d86332e26c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_250c5936c5d1143a332a5b6ee227f33d0a71fc189b8604bda4b9c0ee9ba6f29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250c5936c5d1143a332a5b6ee227f33d0a71fc189b8604bda4b9c0ee9ba6f29e->enter($__internal_250c5936c5d1143a332a5b6ee227f33d0a71fc189b8604bda4b9c0ee9ba6f29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_250c5936c5d1143a332a5b6ee227f33d0a71fc189b8604bda4b9c0ee9ba6f29e->leave($__internal_250c5936c5d1143a332a5b6ee227f33d0a71fc189b8604bda4b9c0ee9ba6f29e_prof);

        
        $__internal_dd3647df54a3b35187e96185df5193f0b94c3e01438aa038fc8d86332e26c55f->leave($__internal_dd3647df54a3b35187e96185df5193f0b94c3e01438aa038fc8d86332e26c55f_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_95a1ea270e58eefa688ab9bc673c7e810473345f19663dfcbc01f8abf49cf97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a1ea270e58eefa688ab9bc673c7e810473345f19663dfcbc01f8abf49cf97d->enter($__internal_95a1ea270e58eefa688ab9bc673c7e810473345f19663dfcbc01f8abf49cf97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6036155a63721eca4833df25227679e505719658bf98390e416580f024b1fedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6036155a63721eca4833df25227679e505719658bf98390e416580f024b1fedc->enter($__internal_6036155a63721eca4833df25227679e505719658bf98390e416580f024b1fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_6036155a63721eca4833df25227679e505719658bf98390e416580f024b1fedc->leave($__internal_6036155a63721eca4833df25227679e505719658bf98390e416580f024b1fedc_prof);

        
        $__internal_95a1ea270e58eefa688ab9bc673c7e810473345f19663dfcbc01f8abf49cf97d->leave($__internal_95a1ea270e58eefa688ab9bc673c7e810473345f19663dfcbc01f8abf49cf97d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_7e33e5448221679cfa2745980e67465cccf2bb59d37ed67d6266727a44c02322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e33e5448221679cfa2745980e67465cccf2bb59d37ed67d6266727a44c02322->enter($__internal_7e33e5448221679cfa2745980e67465cccf2bb59d37ed67d6266727a44c02322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_e0b8d95163104a56f7cb845cf2fe26b1a8f0b80c0471d576f6ba62a804ac4c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b8d95163104a56f7cb845cf2fe26b1a8f0b80c0471d576f6ba62a804ac4c4f->enter($__internal_e0b8d95163104a56f7cb845cf2fe26b1a8f0b80c0471d576f6ba62a804ac4c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e0b8d95163104a56f7cb845cf2fe26b1a8f0b80c0471d576f6ba62a804ac4c4f->leave($__internal_e0b8d95163104a56f7cb845cf2fe26b1a8f0b80c0471d576f6ba62a804ac4c4f_prof);

        
        $__internal_7e33e5448221679cfa2745980e67465cccf2bb59d37ed67d6266727a44c02322->leave($__internal_7e33e5448221679cfa2745980e67465cccf2bb59d37ed67d6266727a44c02322_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_fa06646b335d9844b155d7f194b69335c11ef0ca59851157b09160ae74c52da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa06646b335d9844b155d7f194b69335c11ef0ca59851157b09160ae74c52da1->enter($__internal_fa06646b335d9844b155d7f194b69335c11ef0ca59851157b09160ae74c52da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_02d24db3ccbe77d24145011bea06098adc52282c598099fd553d3dc810937afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d24db3ccbe77d24145011bea06098adc52282c598099fd553d3dc810937afe->enter($__internal_02d24db3ccbe77d24145011bea06098adc52282c598099fd553d3dc810937afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_02d24db3ccbe77d24145011bea06098adc52282c598099fd553d3dc810937afe->leave($__internal_02d24db3ccbe77d24145011bea06098adc52282c598099fd553d3dc810937afe_prof);

        
        $__internal_fa06646b335d9844b155d7f194b69335c11ef0ca59851157b09160ae74c52da1->leave($__internal_fa06646b335d9844b155d7f194b69335c11ef0ca59851157b09160ae74c52da1_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_d74f54112cc6e213a5ae06bb8f18ed9ad3f49bdd4eb961705d1e4c56f7e15ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74f54112cc6e213a5ae06bb8f18ed9ad3f49bdd4eb961705d1e4c56f7e15ef8->enter($__internal_d74f54112cc6e213a5ae06bb8f18ed9ad3f49bdd4eb961705d1e4c56f7e15ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_19c97326861830cc037012787d8480bd65452e6c2fbe1aa9ead385b23916a9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c97326861830cc037012787d8480bd65452e6c2fbe1aa9ead385b23916a9e5->enter($__internal_19c97326861830cc037012787d8480bd65452e6c2fbe1aa9ead385b23916a9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_19c97326861830cc037012787d8480bd65452e6c2fbe1aa9ead385b23916a9e5->leave($__internal_19c97326861830cc037012787d8480bd65452e6c2fbe1aa9ead385b23916a9e5_prof);

        
        $__internal_d74f54112cc6e213a5ae06bb8f18ed9ad3f49bdd4eb961705d1e4c56f7e15ef8->leave($__internal_d74f54112cc6e213a5ae06bb8f18ed9ad3f49bdd4eb961705d1e4c56f7e15ef8_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa847b3d8d8bedde33e88097e92753bc578ec94dbd9c68c89a5cdecaa683673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa847b3d8d8bedde33e88097e92753bc578ec94dbd9c68c89a5cdecaa683673->enter($__internal_daa847b3d8d8bedde33e88097e92753bc578ec94dbd9c68c89a5cdecaa683673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db06a51250d19a4ebabefcdd24d2a351977c294a24c9450d5117b9eaeb0ff566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db06a51250d19a4ebabefcdd24d2a351977c294a24c9450d5117b9eaeb0ff566->enter($__internal_db06a51250d19a4ebabefcdd24d2a351977c294a24c9450d5117b9eaeb0ff566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_db06a51250d19a4ebabefcdd24d2a351977c294a24c9450d5117b9eaeb0ff566->leave($__internal_db06a51250d19a4ebabefcdd24d2a351977c294a24c9450d5117b9eaeb0ff566_prof);

        
        $__internal_daa847b3d8d8bedde33e88097e92753bc578ec94dbd9c68c89a5cdecaa683673->leave($__internal_daa847b3d8d8bedde33e88097e92753bc578ec94dbd9c68c89a5cdecaa683673_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1064cd316056ce33abeb46e0218f583cce49242da7d613d506b52c946f838bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1064cd316056ce33abeb46e0218f583cce49242da7d613d506b52c946f838bd8->enter($__internal_1064cd316056ce33abeb46e0218f583cce49242da7d613d506b52c946f838bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_56242dbaa2289f9e83921e6c0b685afd715e2f12cf8361037e36940a2ad29fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56242dbaa2289f9e83921e6c0b685afd715e2f12cf8361037e36940a2ad29fca->enter($__internal_56242dbaa2289f9e83921e6c0b685afd715e2f12cf8361037e36940a2ad29fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_56242dbaa2289f9e83921e6c0b685afd715e2f12cf8361037e36940a2ad29fca->leave($__internal_56242dbaa2289f9e83921e6c0b685afd715e2f12cf8361037e36940a2ad29fca_prof);

        
        $__internal_1064cd316056ce33abeb46e0218f583cce49242da7d613d506b52c946f838bd8->leave($__internal_1064cd316056ce33abeb46e0218f583cce49242da7d613d506b52c946f838bd8_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_348f754be1ee3a807fb9f2f0c62e4c4700e0f57b762d05a41ea9d73831045d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348f754be1ee3a807fb9f2f0c62e4c4700e0f57b762d05a41ea9d73831045d26->enter($__internal_348f754be1ee3a807fb9f2f0c62e4c4700e0f57b762d05a41ea9d73831045d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_28fb18f6a570b65a0ebca829576d68debb3a6537abe3fe4f01cbbaede44ec1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fb18f6a570b65a0ebca829576d68debb3a6537abe3fe4f01cbbaede44ec1c1->enter($__internal_28fb18f6a570b65a0ebca829576d68debb3a6537abe3fe4f01cbbaede44ec1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_28fb18f6a570b65a0ebca829576d68debb3a6537abe3fe4f01cbbaede44ec1c1->leave($__internal_28fb18f6a570b65a0ebca829576d68debb3a6537abe3fe4f01cbbaede44ec1c1_prof);

        
        $__internal_348f754be1ee3a807fb9f2f0c62e4c4700e0f57b762d05a41ea9d73831045d26->leave($__internal_348f754be1ee3a807fb9f2f0c62e4c4700e0f57b762d05a41ea9d73831045d26_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_862835b6de94e0969bfd9a394b08821aa1c023ecb5cc8fa1db7575898da5a1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862835b6de94e0969bfd9a394b08821aa1c023ecb5cc8fa1db7575898da5a1e3->enter($__internal_862835b6de94e0969bfd9a394b08821aa1c023ecb5cc8fa1db7575898da5a1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6761f67137d193ab37ec5b9e025fbe29bcd8332c0db7cbec62f402cf1858879c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6761f67137d193ab37ec5b9e025fbe29bcd8332c0db7cbec62f402cf1858879c->enter($__internal_6761f67137d193ab37ec5b9e025fbe29bcd8332c0db7cbec62f402cf1858879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_6761f67137d193ab37ec5b9e025fbe29bcd8332c0db7cbec62f402cf1858879c->leave($__internal_6761f67137d193ab37ec5b9e025fbe29bcd8332c0db7cbec62f402cf1858879c_prof);

        
        $__internal_862835b6de94e0969bfd9a394b08821aa1c023ecb5cc8fa1db7575898da5a1e3->leave($__internal_862835b6de94e0969bfd9a394b08821aa1c023ecb5cc8fa1db7575898da5a1e3_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_f5d27583d3ca0cf41b50894d80fb7c314519f569df8fb8511275a7a30a5573ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d27583d3ca0cf41b50894d80fb7c314519f569df8fb8511275a7a30a5573ca->enter($__internal_f5d27583d3ca0cf41b50894d80fb7c314519f569df8fb8511275a7a30a5573ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aac8ff59481f15a0126fe61b99b65560af7b6b8439e96c167ec2c00380d5ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac8ff59481f15a0126fe61b99b65560af7b6b8439e96c167ec2c00380d5ae90->enter($__internal_aac8ff59481f15a0126fe61b99b65560af7b6b8439e96c167ec2c00380d5ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_aac8ff59481f15a0126fe61b99b65560af7b6b8439e96c167ec2c00380d5ae90->leave($__internal_aac8ff59481f15a0126fe61b99b65560af7b6b8439e96c167ec2c00380d5ae90_prof);

        
        $__internal_f5d27583d3ca0cf41b50894d80fb7c314519f569df8fb8511275a7a30a5573ca->leave($__internal_f5d27583d3ca0cf41b50894d80fb7c314519f569df8fb8511275a7a30a5573ca_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_35595da033fe061849529528bdec4eb708e60e00dd5eadc2a83bcd3d3cf0aa0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35595da033fe061849529528bdec4eb708e60e00dd5eadc2a83bcd3d3cf0aa0a->enter($__internal_35595da033fe061849529528bdec4eb708e60e00dd5eadc2a83bcd3d3cf0aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_5c7cf316fb2622dc3fe9172731757e7f2d7fd615d54a06a8bf2081c40b11d5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7cf316fb2622dc3fe9172731757e7f2d7fd615d54a06a8bf2081c40b11d5e8->enter($__internal_5c7cf316fb2622dc3fe9172731757e7f2d7fd615d54a06a8bf2081c40b11d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_5c7cf316fb2622dc3fe9172731757e7f2d7fd615d54a06a8bf2081c40b11d5e8->leave($__internal_5c7cf316fb2622dc3fe9172731757e7f2d7fd615d54a06a8bf2081c40b11d5e8_prof);

        
        $__internal_35595da033fe061849529528bdec4eb708e60e00dd5eadc2a83bcd3d3cf0aa0a->leave($__internal_35595da033fe061849529528bdec4eb708e60e00dd5eadc2a83bcd3d3cf0aa0a_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_e0d8af6b22a94243833189b94709b21f7f1876c0ee55421a4e4910bf0ffb8c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d8af6b22a94243833189b94709b21f7f1876c0ee55421a4e4910bf0ffb8c4c->enter($__internal_e0d8af6b22a94243833189b94709b21f7f1876c0ee55421a4e4910bf0ffb8c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_58f4956725466ed2ec5bee86db8f11d6e3c12effcda05fe8ae56e5d99b7efdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f4956725466ed2ec5bee86db8f11d6e3c12effcda05fe8ae56e5d99b7efdc8->enter($__internal_58f4956725466ed2ec5bee86db8f11d6e3c12effcda05fe8ae56e5d99b7efdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_58f4956725466ed2ec5bee86db8f11d6e3c12effcda05fe8ae56e5d99b7efdc8->leave($__internal_58f4956725466ed2ec5bee86db8f11d6e3c12effcda05fe8ae56e5d99b7efdc8_prof);

        
        $__internal_e0d8af6b22a94243833189b94709b21f7f1876c0ee55421a4e4910bf0ffb8c4c->leave($__internal_e0d8af6b22a94243833189b94709b21f7f1876c0ee55421a4e4910bf0ffb8c4c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_3ff6912955081c1f6073cae9aaa0db3b4aeb29ae56446526857e61a53a0604ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff6912955081c1f6073cae9aaa0db3b4aeb29ae56446526857e61a53a0604ee->enter($__internal_3ff6912955081c1f6073cae9aaa0db3b4aeb29ae56446526857e61a53a0604ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_70cf6ba0360f5394abf45613c6ee3a5a5e58b30185a15d6ebbce8dbabeb3136c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cf6ba0360f5394abf45613c6ee3a5a5e58b30185a15d6ebbce8dbabeb3136c->enter($__internal_70cf6ba0360f5394abf45613c6ee3a5a5e58b30185a15d6ebbce8dbabeb3136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_70cf6ba0360f5394abf45613c6ee3a5a5e58b30185a15d6ebbce8dbabeb3136c->leave($__internal_70cf6ba0360f5394abf45613c6ee3a5a5e58b30185a15d6ebbce8dbabeb3136c_prof);

        
        $__internal_3ff6912955081c1f6073cae9aaa0db3b4aeb29ae56446526857e61a53a0604ee->leave($__internal_3ff6912955081c1f6073cae9aaa0db3b4aeb29ae56446526857e61a53a0604ee_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_d4bb0f1505c1af9a8920027a28e4f0dcbab873151e37f562d3e1dd594200644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bb0f1505c1af9a8920027a28e4f0dcbab873151e37f562d3e1dd594200644c->enter($__internal_d4bb0f1505c1af9a8920027a28e4f0dcbab873151e37f562d3e1dd594200644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_a62db0e270b8cf0a14a6fb4de5ebfd937edea9f35cb5b0cfeae4b3b9fcc5d7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62db0e270b8cf0a14a6fb4de5ebfd937edea9f35cb5b0cfeae4b3b9fcc5d7b4->enter($__internal_a62db0e270b8cf0a14a6fb4de5ebfd937edea9f35cb5b0cfeae4b3b9fcc5d7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_a62db0e270b8cf0a14a6fb4de5ebfd937edea9f35cb5b0cfeae4b3b9fcc5d7b4->leave($__internal_a62db0e270b8cf0a14a6fb4de5ebfd937edea9f35cb5b0cfeae4b3b9fcc5d7b4_prof);

        
        $__internal_d4bb0f1505c1af9a8920027a28e4f0dcbab873151e37f562d3e1dd594200644c->leave($__internal_d4bb0f1505c1af9a8920027a28e4f0dcbab873151e37f562d3e1dd594200644c_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_96313f6b2e418c3e284f48ed2384b062d647c273a19b937bc3740b9f4212951e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96313f6b2e418c3e284f48ed2384b062d647c273a19b937bc3740b9f4212951e->enter($__internal_96313f6b2e418c3e284f48ed2384b062d647c273a19b937bc3740b9f4212951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d0078bb9055bef67b3aac7d8139b96e9a59f4270d66fa10e61985f3d922f03d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0078bb9055bef67b3aac7d8139b96e9a59f4270d66fa10e61985f3d922f03d9->enter($__internal_d0078bb9055bef67b3aac7d8139b96e9a59f4270d66fa10e61985f3d922f03d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_d0078bb9055bef67b3aac7d8139b96e9a59f4270d66fa10e61985f3d922f03d9->leave($__internal_d0078bb9055bef67b3aac7d8139b96e9a59f4270d66fa10e61985f3d922f03d9_prof);

        
        $__internal_96313f6b2e418c3e284f48ed2384b062d647c273a19b937bc3740b9f4212951e->leave($__internal_96313f6b2e418c3e284f48ed2384b062d647c273a19b937bc3740b9f4212951e_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_31fabec733fc7fd613fa90f694d008e632e0d213c61c671bb7cfbadb79c13e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31fabec733fc7fd613fa90f694d008e632e0d213c61c671bb7cfbadb79c13e20->enter($__internal_31fabec733fc7fd613fa90f694d008e632e0d213c61c671bb7cfbadb79c13e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_062aca62f323cb0c3ba15edbc94b4cb1a3c2251cca54dac68b1686745a8e35e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062aca62f323cb0c3ba15edbc94b4cb1a3c2251cca54dac68b1686745a8e35e8->enter($__internal_062aca62f323cb0c3ba15edbc94b4cb1a3c2251cca54dac68b1686745a8e35e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_062aca62f323cb0c3ba15edbc94b4cb1a3c2251cca54dac68b1686745a8e35e8->leave($__internal_062aca62f323cb0c3ba15edbc94b4cb1a3c2251cca54dac68b1686745a8e35e8_prof);

        
        $__internal_31fabec733fc7fd613fa90f694d008e632e0d213c61c671bb7cfbadb79c13e20->leave($__internal_31fabec733fc7fd613fa90f694d008e632e0d213c61c671bb7cfbadb79c13e20_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3ffae12f8c925d726044ae8e603120bd34e775ce463dda4d26c0f50bc68561e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ffae12f8c925d726044ae8e603120bd34e775ce463dda4d26c0f50bc68561e->enter($__internal_e3ffae12f8c925d726044ae8e603120bd34e775ce463dda4d26c0f50bc68561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64f388de14bfddbbf46bdd834df8ba33586db18074f451b5ac0c8c34208b461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f388de14bfddbbf46bdd834df8ba33586db18074f451b5ac0c8c34208b461c->enter($__internal_64f388de14bfddbbf46bdd834df8ba33586db18074f451b5ac0c8c34208b461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_64f388de14bfddbbf46bdd834df8ba33586db18074f451b5ac0c8c34208b461c->leave($__internal_64f388de14bfddbbf46bdd834df8ba33586db18074f451b5ac0c8c34208b461c_prof);

        
        $__internal_e3ffae12f8c925d726044ae8e603120bd34e775ce463dda4d26c0f50bc68561e->leave($__internal_e3ffae12f8c925d726044ae8e603120bd34e775ce463dda4d26c0f50bc68561e_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_fea1f48703acb55a18099b5811d690e2089103b6a0bbb0ac0674fcd6db2c8542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea1f48703acb55a18099b5811d690e2089103b6a0bbb0ac0674fcd6db2c8542->enter($__internal_fea1f48703acb55a18099b5811d690e2089103b6a0bbb0ac0674fcd6db2c8542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_7ade984e9d88af9bc48ee2d6eff5fe1eb74a9714e371f05100afa10620a14d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ade984e9d88af9bc48ee2d6eff5fe1eb74a9714e371f05100afa10620a14d04->enter($__internal_7ade984e9d88af9bc48ee2d6eff5fe1eb74a9714e371f05100afa10620a14d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_7ade984e9d88af9bc48ee2d6eff5fe1eb74a9714e371f05100afa10620a14d04->leave($__internal_7ade984e9d88af9bc48ee2d6eff5fe1eb74a9714e371f05100afa10620a14d04_prof);

        
        $__internal_fea1f48703acb55a18099b5811d690e2089103b6a0bbb0ac0674fcd6db2c8542->leave($__internal_fea1f48703acb55a18099b5811d690e2089103b6a0bbb0ac0674fcd6db2c8542_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_6ef4a26d959be58f59abb9567b5a549230e0409f6bf3c47347c3c007dd9a1aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef4a26d959be58f59abb9567b5a549230e0409f6bf3c47347c3c007dd9a1aec->enter($__internal_6ef4a26d959be58f59abb9567b5a549230e0409f6bf3c47347c3c007dd9a1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_274815f3db66e87e4f53c80ae862ac5a4fdaf0de0b33be354e86ea7beafc31f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274815f3db66e87e4f53c80ae862ac5a4fdaf0de0b33be354e86ea7beafc31f1->enter($__internal_274815f3db66e87e4f53c80ae862ac5a4fdaf0de0b33be354e86ea7beafc31f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_274815f3db66e87e4f53c80ae862ac5a4fdaf0de0b33be354e86ea7beafc31f1->leave($__internal_274815f3db66e87e4f53c80ae862ac5a4fdaf0de0b33be354e86ea7beafc31f1_prof);

        
        $__internal_6ef4a26d959be58f59abb9567b5a549230e0409f6bf3c47347c3c007dd9a1aec->leave($__internal_6ef4a26d959be58f59abb9567b5a549230e0409f6bf3c47347c3c007dd9a1aec_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2e3b2e0ea407711fcdb61925f3329fbfa1e506e7bbc248299f7d5a5a3b399976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3b2e0ea407711fcdb61925f3329fbfa1e506e7bbc248299f7d5a5a3b399976->enter($__internal_2e3b2e0ea407711fcdb61925f3329fbfa1e506e7bbc248299f7d5a5a3b399976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_77b4c5ba957b05eaa6a85fe56748d230ae67ef065e7f9eeeec3a55e963a15706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b4c5ba957b05eaa6a85fe56748d230ae67ef065e7f9eeeec3a55e963a15706->enter($__internal_77b4c5ba957b05eaa6a85fe56748d230ae67ef065e7f9eeeec3a55e963a15706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_77b4c5ba957b05eaa6a85fe56748d230ae67ef065e7f9eeeec3a55e963a15706->leave($__internal_77b4c5ba957b05eaa6a85fe56748d230ae67ef065e7f9eeeec3a55e963a15706_prof);

        
        $__internal_2e3b2e0ea407711fcdb61925f3329fbfa1e506e7bbc248299f7d5a5a3b399976->leave($__internal_2e3b2e0ea407711fcdb61925f3329fbfa1e506e7bbc248299f7d5a5a3b399976_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_97bf9f0fb3138aef57067928e71247a2626420faffc2ea3655f9a1f8a3c0c391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bf9f0fb3138aef57067928e71247a2626420faffc2ea3655f9a1f8a3c0c391->enter($__internal_97bf9f0fb3138aef57067928e71247a2626420faffc2ea3655f9a1f8a3c0c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_07e1c02080d44482a95cb8d654b991cf2f903b9bad0547faf7d59d94344d4dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e1c02080d44482a95cb8d654b991cf2f903b9bad0547faf7d59d94344d4dc2->enter($__internal_07e1c02080d44482a95cb8d654b991cf2f903b9bad0547faf7d59d94344d4dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_07e1c02080d44482a95cb8d654b991cf2f903b9bad0547faf7d59d94344d4dc2->leave($__internal_07e1c02080d44482a95cb8d654b991cf2f903b9bad0547faf7d59d94344d4dc2_prof);

        
        $__internal_97bf9f0fb3138aef57067928e71247a2626420faffc2ea3655f9a1f8a3c0c391->leave($__internal_97bf9f0fb3138aef57067928e71247a2626420faffc2ea3655f9a1f8a3c0c391_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_22bf9080d20a65dd2cc6359cb66b7167c2295c077598222ad923a15d3e959cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bf9080d20a65dd2cc6359cb66b7167c2295c077598222ad923a15d3e959cce->enter($__internal_22bf9080d20a65dd2cc6359cb66b7167c2295c077598222ad923a15d3e959cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_48e43398f27855d7d3cb051db83fa1248ad4d4e11d60218fcf49708d10491c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e43398f27855d7d3cb051db83fa1248ad4d4e11d60218fcf49708d10491c98->enter($__internal_48e43398f27855d7d3cb051db83fa1248ad4d4e11d60218fcf49708d10491c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_48e43398f27855d7d3cb051db83fa1248ad4d4e11d60218fcf49708d10491c98->leave($__internal_48e43398f27855d7d3cb051db83fa1248ad4d4e11d60218fcf49708d10491c98_prof);

        
        $__internal_22bf9080d20a65dd2cc6359cb66b7167c2295c077598222ad923a15d3e959cce->leave($__internal_22bf9080d20a65dd2cc6359cb66b7167c2295c077598222ad923a15d3e959cce_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_1c074b4c0de37fa5df282156ea44a02f79f6edadbb124b86dbac01b04c817558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c074b4c0de37fa5df282156ea44a02f79f6edadbb124b86dbac01b04c817558->enter($__internal_1c074b4c0de37fa5df282156ea44a02f79f6edadbb124b86dbac01b04c817558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_49727357b480ff42400f6eab2ef74cdf000bf895ed3eaa9fd2da822296ff9c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49727357b480ff42400f6eab2ef74cdf000bf895ed3eaa9fd2da822296ff9c5d->enter($__internal_49727357b480ff42400f6eab2ef74cdf000bf895ed3eaa9fd2da822296ff9c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_49727357b480ff42400f6eab2ef74cdf000bf895ed3eaa9fd2da822296ff9c5d->leave($__internal_49727357b480ff42400f6eab2ef74cdf000bf895ed3eaa9fd2da822296ff9c5d_prof);

        
        $__internal_1c074b4c0de37fa5df282156ea44a02f79f6edadbb124b86dbac01b04c817558->leave($__internal_1c074b4c0de37fa5df282156ea44a02f79f6edadbb124b86dbac01b04c817558_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
