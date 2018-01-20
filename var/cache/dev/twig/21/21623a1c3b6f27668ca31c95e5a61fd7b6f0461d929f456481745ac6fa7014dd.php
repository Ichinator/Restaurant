<?php

/* @EasyAdmin/default/layout.html.twig */
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
        $__internal_f0dd220fb3eb2ff317bdf5123cabc2251a0654b1848ed9bc021b8bf435151ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dd220fb3eb2ff317bdf5123cabc2251a0654b1848ed9bc021b8bf435151ab1->enter($__internal_f0dd220fb3eb2ff317bdf5123cabc2251a0654b1848ed9bc021b8bf435151ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_b4d133a7f114556f17ca1a61d6f0c68c40a9c75fb97c7fc6ed55e96251dba08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d133a7f114556f17ca1a61d6f0c68c40a9c75fb97c7fc6ed55e96251dba08c->enter($__internal_b4d133a7f114556f17ca1a61d6f0c68c40a9c75fb97c7fc6ed55e96251dba08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_f0dd220fb3eb2ff317bdf5123cabc2251a0654b1848ed9bc021b8bf435151ab1->leave($__internal_f0dd220fb3eb2ff317bdf5123cabc2251a0654b1848ed9bc021b8bf435151ab1_prof);

        
        $__internal_b4d133a7f114556f17ca1a61d6f0c68c40a9c75fb97c7fc6ed55e96251dba08c->leave($__internal_b4d133a7f114556f17ca1a61d6f0c68c40a9c75fb97c7fc6ed55e96251dba08c_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5ae646beb605376982dc507edcca0626a5955ff4f63a162b6cd1dfa1d331fbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae646beb605376982dc507edcca0626a5955ff4f63a162b6cd1dfa1d331fbe8->enter($__internal_5ae646beb605376982dc507edcca0626a5955ff4f63a162b6cd1dfa1d331fbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_04dd5d84e34287b6c086d328496355310935d472dedc4fe0aeed6355d6265bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dd5d84e34287b6c086d328496355310935d472dedc4fe0aeed6355d6265bff->enter($__internal_04dd5d84e34287b6c086d328496355310935d472dedc4fe0aeed6355d6265bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_04dd5d84e34287b6c086d328496355310935d472dedc4fe0aeed6355d6265bff->leave($__internal_04dd5d84e34287b6c086d328496355310935d472dedc4fe0aeed6355d6265bff_prof);

        
        $__internal_5ae646beb605376982dc507edcca0626a5955ff4f63a162b6cd1dfa1d331fbe8->leave($__internal_5ae646beb605376982dc507edcca0626a5955ff4f63a162b6cd1dfa1d331fbe8_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_b405727ba2cddec0b14420287c5cdb595ed95406edf673d1277a9fbdf119ad9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b405727ba2cddec0b14420287c5cdb595ed95406edf673d1277a9fbdf119ad9a->enter($__internal_b405727ba2cddec0b14420287c5cdb595ed95406edf673d1277a9fbdf119ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_ea6eeb1d116642bb1065a96e479f6dd4cadb84dffed4c24884c7ce53275e2d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6eeb1d116642bb1065a96e479f6dd4cadb84dffed4c24884c7ce53275e2d28->enter($__internal_ea6eeb1d116642bb1065a96e479f6dd4cadb84dffed4c24884c7ce53275e2d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_ea6eeb1d116642bb1065a96e479f6dd4cadb84dffed4c24884c7ce53275e2d28->leave($__internal_ea6eeb1d116642bb1065a96e479f6dd4cadb84dffed4c24884c7ce53275e2d28_prof);

        
        $__internal_b405727ba2cddec0b14420287c5cdb595ed95406edf673d1277a9fbdf119ad9a->leave($__internal_b405727ba2cddec0b14420287c5cdb595ed95406edf673d1277a9fbdf119ad9a_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_81210bafbc7645b896b896ce50189c60977dcba120771c91dc0e70a5a95da0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81210bafbc7645b896b896ce50189c60977dcba120771c91dc0e70a5a95da0d4->enter($__internal_81210bafbc7645b896b896ce50189c60977dcba120771c91dc0e70a5a95da0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_9dfb8eda843b67d6265969bd15d4d21677cdbdae0d88963e23df413bafaed181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfb8eda843b67d6265969bd15d4d21677cdbdae0d88963e23df413bafaed181->enter($__internal_9dfb8eda843b67d6265969bd15d4d21677cdbdae0d88963e23df413bafaed181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_9dfb8eda843b67d6265969bd15d4d21677cdbdae0d88963e23df413bafaed181->leave($__internal_9dfb8eda843b67d6265969bd15d4d21677cdbdae0d88963e23df413bafaed181_prof);

        
        $__internal_81210bafbc7645b896b896ce50189c60977dcba120771c91dc0e70a5a95da0d4->leave($__internal_81210bafbc7645b896b896ce50189c60977dcba120771c91dc0e70a5a95da0d4_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_bdf1c2f8103d5ce2f1816296c15ba6b8c5b5529da53d5c32bf24f3c3ac485bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf1c2f8103d5ce2f1816296c15ba6b8c5b5529da53d5c32bf24f3c3ac485bc2->enter($__internal_bdf1c2f8103d5ce2f1816296c15ba6b8c5b5529da53d5c32bf24f3c3ac485bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_f4d89e3cc3e806e0833a5786ac5316af2c4479ea3c286112297af6c3f2de0ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d89e3cc3e806e0833a5786ac5316af2c4479ea3c286112297af6c3f2de0ca8->enter($__internal_f4d89e3cc3e806e0833a5786ac5316af2c4479ea3c286112297af6c3f2de0ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_f4d89e3cc3e806e0833a5786ac5316af2c4479ea3c286112297af6c3f2de0ca8->leave($__internal_f4d89e3cc3e806e0833a5786ac5316af2c4479ea3c286112297af6c3f2de0ca8_prof);

        
        $__internal_bdf1c2f8103d5ce2f1816296c15ba6b8c5b5529da53d5c32bf24f3c3ac485bc2->leave($__internal_bdf1c2f8103d5ce2f1816296c15ba6b8c5b5529da53d5c32bf24f3c3ac485bc2_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_9c3098dffdcd0cf297bf5746e59cb5ee5f29bfdf696b11441720ace560a43082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3098dffdcd0cf297bf5746e59cb5ee5f29bfdf696b11441720ace560a43082->enter($__internal_9c3098dffdcd0cf297bf5746e59cb5ee5f29bfdf696b11441720ace560a43082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_71636d40c42f1b5d641d80a4d67009fddef3b7389a3fc0bda7fc9e317dd21e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71636d40c42f1b5d641d80a4d67009fddef3b7389a3fc0bda7fc9e317dd21e93->enter($__internal_71636d40c42f1b5d641d80a4d67009fddef3b7389a3fc0bda7fc9e317dd21e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_71636d40c42f1b5d641d80a4d67009fddef3b7389a3fc0bda7fc9e317dd21e93->leave($__internal_71636d40c42f1b5d641d80a4d67009fddef3b7389a3fc0bda7fc9e317dd21e93_prof);

        
        $__internal_9c3098dffdcd0cf297bf5746e59cb5ee5f29bfdf696b11441720ace560a43082->leave($__internal_9c3098dffdcd0cf297bf5746e59cb5ee5f29bfdf696b11441720ace560a43082_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_be0142d1abeb335330a9eebbc77d71c7b314fc2706947c25b2ca388ff5d77ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0142d1abeb335330a9eebbc77d71c7b314fc2706947c25b2ca388ff5d77ae3->enter($__internal_be0142d1abeb335330a9eebbc77d71c7b314fc2706947c25b2ca388ff5d77ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a66a293739faaeeb21e6d00a3ada3e5bb4081130205c6dce68369d27b45c62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a66a293739faaeeb21e6d00a3ada3e5bb4081130205c6dce68369d27b45c62c->enter($__internal_8a66a293739faaeeb21e6d00a3ada3e5bb4081130205c6dce68369d27b45c62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a66a293739faaeeb21e6d00a3ada3e5bb4081130205c6dce68369d27b45c62c->leave($__internal_8a66a293739faaeeb21e6d00a3ada3e5bb4081130205c6dce68369d27b45c62c_prof);

        
        $__internal_be0142d1abeb335330a9eebbc77d71c7b314fc2706947c25b2ca388ff5d77ae3->leave($__internal_be0142d1abeb335330a9eebbc77d71c7b314fc2706947c25b2ca388ff5d77ae3_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a0eed1471812f56ca5ffd6d1c012386f29f4609662d88c86911e0111d8a80fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0eed1471812f56ca5ffd6d1c012386f29f4609662d88c86911e0111d8a80fff->enter($__internal_a0eed1471812f56ca5ffd6d1c012386f29f4609662d88c86911e0111d8a80fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5d61e93d653799a9f07d4a702dbb1d9b7405361fea8f1fcbf176efca5f66fe48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d61e93d653799a9f07d4a702dbb1d9b7405361fea8f1fcbf176efca5f66fe48->enter($__internal_5d61e93d653799a9f07d4a702dbb1d9b7405361fea8f1fcbf176efca5f66fe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_5d61e93d653799a9f07d4a702dbb1d9b7405361fea8f1fcbf176efca5f66fe48->leave($__internal_5d61e93d653799a9f07d4a702dbb1d9b7405361fea8f1fcbf176efca5f66fe48_prof);

        
        $__internal_a0eed1471812f56ca5ffd6d1c012386f29f4609662d88c86911e0111d8a80fff->leave($__internal_a0eed1471812f56ca5ffd6d1c012386f29f4609662d88c86911e0111d8a80fff_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fa326d1c832a40c6c3e6209ec334cff74eae737094ff0cc6ec7651a156bfc459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa326d1c832a40c6c3e6209ec334cff74eae737094ff0cc6ec7651a156bfc459->enter($__internal_fa326d1c832a40c6c3e6209ec334cff74eae737094ff0cc6ec7651a156bfc459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_30aeb3f15eb6f3781d6e0470351d959e2da688ceb47793b373fb20a5047f3976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30aeb3f15eb6f3781d6e0470351d959e2da688ceb47793b373fb20a5047f3976->enter($__internal_30aeb3f15eb6f3781d6e0470351d959e2da688ceb47793b373fb20a5047f3976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_30aeb3f15eb6f3781d6e0470351d959e2da688ceb47793b373fb20a5047f3976->leave($__internal_30aeb3f15eb6f3781d6e0470351d959e2da688ceb47793b373fb20a5047f3976_prof);

        
        $__internal_fa326d1c832a40c6c3e6209ec334cff74eae737094ff0cc6ec7651a156bfc459->leave($__internal_fa326d1c832a40c6c3e6209ec334cff74eae737094ff0cc6ec7651a156bfc459_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_2c6fe37a918d11a05835f4363781091136cb4282413feb9e70f3020910648782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6fe37a918d11a05835f4363781091136cb4282413feb9e70f3020910648782->enter($__internal_2c6fe37a918d11a05835f4363781091136cb4282413feb9e70f3020910648782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_05d664f43a739560d0c40d7236ade541bd4499963cafc85f9b3cc40e6d2ad52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d664f43a739560d0c40d7236ade541bd4499963cafc85f9b3cc40e6d2ad52c->enter($__internal_05d664f43a739560d0c40d7236ade541bd4499963cafc85f9b3cc40e6d2ad52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_05d664f43a739560d0c40d7236ade541bd4499963cafc85f9b3cc40e6d2ad52c->leave($__internal_05d664f43a739560d0c40d7236ade541bd4499963cafc85f9b3cc40e6d2ad52c_prof);

        
        $__internal_2c6fe37a918d11a05835f4363781091136cb4282413feb9e70f3020910648782->leave($__internal_2c6fe37a918d11a05835f4363781091136cb4282413feb9e70f3020910648782_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_cbfd2924cacc956d8fc91c1f86f6b541f1463926d2e559da3dfe89be36a96340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfd2924cacc956d8fc91c1f86f6b541f1463926d2e559da3dfe89be36a96340->enter($__internal_cbfd2924cacc956d8fc91c1f86f6b541f1463926d2e559da3dfe89be36a96340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2a90c1548b40206a45384d19f580b6c36de0566a141c3264ebe1dbfeb0eed51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a90c1548b40206a45384d19f580b6c36de0566a141c3264ebe1dbfeb0eed51c->enter($__internal_2a90c1548b40206a45384d19f580b6c36de0566a141c3264ebe1dbfeb0eed51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_2a90c1548b40206a45384d19f580b6c36de0566a141c3264ebe1dbfeb0eed51c->leave($__internal_2a90c1548b40206a45384d19f580b6c36de0566a141c3264ebe1dbfeb0eed51c_prof);

        
        $__internal_cbfd2924cacc956d8fc91c1f86f6b541f1463926d2e559da3dfe89be36a96340->leave($__internal_cbfd2924cacc956d8fc91c1f86f6b541f1463926d2e559da3dfe89be36a96340_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_66d611a23253a65fa2126bac5a8d72ebe3f6b458bb089b9db2f4a07e9450cb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d611a23253a65fa2126bac5a8d72ebe3f6b458bb089b9db2f4a07e9450cb7b->enter($__internal_66d611a23253a65fa2126bac5a8d72ebe3f6b458bb089b9db2f4a07e9450cb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_aa865f503deef35e6d4698f04b49881a170d7c21f69d5d18c7586915e06c7149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa865f503deef35e6d4698f04b49881a170d7c21f69d5d18c7586915e06c7149->enter($__internal_aa865f503deef35e6d4698f04b49881a170d7c21f69d5d18c7586915e06c7149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_aa865f503deef35e6d4698f04b49881a170d7c21f69d5d18c7586915e06c7149->leave($__internal_aa865f503deef35e6d4698f04b49881a170d7c21f69d5d18c7586915e06c7149_prof);

        
        $__internal_66d611a23253a65fa2126bac5a8d72ebe3f6b458bb089b9db2f4a07e9450cb7b->leave($__internal_66d611a23253a65fa2126bac5a8d72ebe3f6b458bb089b9db2f4a07e9450cb7b_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_78985dc00843c6f441f79a19dac87cc1e940115bb85b64c16a0bb6b9d454ec75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78985dc00843c6f441f79a19dac87cc1e940115bb85b64c16a0bb6b9d454ec75->enter($__internal_78985dc00843c6f441f79a19dac87cc1e940115bb85b64c16a0bb6b9d454ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_66ae8f17e2d9a96e1ef152e148a00b063f98cff943847ac8ca287cfe1e63535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ae8f17e2d9a96e1ef152e148a00b063f98cff943847ac8ca287cfe1e63535e->enter($__internal_66ae8f17e2d9a96e1ef152e148a00b063f98cff943847ac8ca287cfe1e63535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_66ae8f17e2d9a96e1ef152e148a00b063f98cff943847ac8ca287cfe1e63535e->leave($__internal_66ae8f17e2d9a96e1ef152e148a00b063f98cff943847ac8ca287cfe1e63535e_prof);

        
        $__internal_78985dc00843c6f441f79a19dac87cc1e940115bb85b64c16a0bb6b9d454ec75->leave($__internal_78985dc00843c6f441f79a19dac87cc1e940115bb85b64c16a0bb6b9d454ec75_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_48a82473e272808d3c6ebf2b97688f074d3cd43ccbac860fa263f93309dc6cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a82473e272808d3c6ebf2b97688f074d3cd43ccbac860fa263f93309dc6cf2->enter($__internal_48a82473e272808d3c6ebf2b97688f074d3cd43ccbac860fa263f93309dc6cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c8fbc302c61004ec691be205a94f1b06abe6ac15b18dcb4225867c00c4e3b71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fbc302c61004ec691be205a94f1b06abe6ac15b18dcb4225867c00c4e3b71c->enter($__internal_c8fbc302c61004ec691be205a94f1b06abe6ac15b18dcb4225867c00c4e3b71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_c8fbc302c61004ec691be205a94f1b06abe6ac15b18dcb4225867c00c4e3b71c->leave($__internal_c8fbc302c61004ec691be205a94f1b06abe6ac15b18dcb4225867c00c4e3b71c_prof);

        
        $__internal_48a82473e272808d3c6ebf2b97688f074d3cd43ccbac860fa263f93309dc6cf2->leave($__internal_48a82473e272808d3c6ebf2b97688f074d3cd43ccbac860fa263f93309dc6cf2_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_de29826c52c3169082e2926d2fbf95ab973758dc22f1a0c67bc7c34af3b12990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de29826c52c3169082e2926d2fbf95ab973758dc22f1a0c67bc7c34af3b12990->enter($__internal_de29826c52c3169082e2926d2fbf95ab973758dc22f1a0c67bc7c34af3b12990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_c85557fed4e1c2517b14506ca3a141da04c0998af83f240b8e614bb651d07b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85557fed4e1c2517b14506ca3a141da04c0998af83f240b8e614bb651d07b3a->enter($__internal_c85557fed4e1c2517b14506ca3a141da04c0998af83f240b8e614bb651d07b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_c85557fed4e1c2517b14506ca3a141da04c0998af83f240b8e614bb651d07b3a->leave($__internal_c85557fed4e1c2517b14506ca3a141da04c0998af83f240b8e614bb651d07b3a_prof);

        
        $__internal_de29826c52c3169082e2926d2fbf95ab973758dc22f1a0c67bc7c34af3b12990->leave($__internal_de29826c52c3169082e2926d2fbf95ab973758dc22f1a0c67bc7c34af3b12990_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_48162ce05ad3954b49eec82eedeeaf26877c574103f42d0c4b59ecfee047bba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48162ce05ad3954b49eec82eedeeaf26877c574103f42d0c4b59ecfee047bba1->enter($__internal_48162ce05ad3954b49eec82eedeeaf26877c574103f42d0c4b59ecfee047bba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_9ac725769900c4e38fb27d693b3049199dd157db4d941094f2d21012f4840f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac725769900c4e38fb27d693b3049199dd157db4d941094f2d21012f4840f9d->enter($__internal_9ac725769900c4e38fb27d693b3049199dd157db4d941094f2d21012f4840f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_9ac725769900c4e38fb27d693b3049199dd157db4d941094f2d21012f4840f9d->leave($__internal_9ac725769900c4e38fb27d693b3049199dd157db4d941094f2d21012f4840f9d_prof);

        
        $__internal_48162ce05ad3954b49eec82eedeeaf26877c574103f42d0c4b59ecfee047bba1->leave($__internal_48162ce05ad3954b49eec82eedeeaf26877c574103f42d0c4b59ecfee047bba1_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_b9134544496286acc52c2c230eec353f7918ac11b24db5124196cf80895b9dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9134544496286acc52c2c230eec353f7918ac11b24db5124196cf80895b9dc4->enter($__internal_b9134544496286acc52c2c230eec353f7918ac11b24db5124196cf80895b9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_16287d9dec7f1ffc75f555bc20a22922af312c9a526ca3cbe58c37be5189c30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16287d9dec7f1ffc75f555bc20a22922af312c9a526ca3cbe58c37be5189c30f->enter($__internal_16287d9dec7f1ffc75f555bc20a22922af312c9a526ca3cbe58c37be5189c30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_16287d9dec7f1ffc75f555bc20a22922af312c9a526ca3cbe58c37be5189c30f->leave($__internal_16287d9dec7f1ffc75f555bc20a22922af312c9a526ca3cbe58c37be5189c30f_prof);

        
        $__internal_b9134544496286acc52c2c230eec353f7918ac11b24db5124196cf80895b9dc4->leave($__internal_b9134544496286acc52c2c230eec353f7918ac11b24db5124196cf80895b9dc4_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_cac588e7a7690bef6620a30f9ce38d40db50e8bd91d2694f3ab8302cb8ccd2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac588e7a7690bef6620a30f9ce38d40db50e8bd91d2694f3ab8302cb8ccd2f2->enter($__internal_cac588e7a7690bef6620a30f9ce38d40db50e8bd91d2694f3ab8302cb8ccd2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0964b110b673a15d2ed217cd6b750b4a015dae7868c65d6f3c88e7655e86db1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0964b110b673a15d2ed217cd6b750b4a015dae7868c65d6f3c88e7655e86db1e->enter($__internal_0964b110b673a15d2ed217cd6b750b4a015dae7868c65d6f3c88e7655e86db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0964b110b673a15d2ed217cd6b750b4a015dae7868c65d6f3c88e7655e86db1e->leave($__internal_0964b110b673a15d2ed217cd6b750b4a015dae7868c65d6f3c88e7655e86db1e_prof);

        
        $__internal_cac588e7a7690bef6620a30f9ce38d40db50e8bd91d2694f3ab8302cb8ccd2f2->leave($__internal_cac588e7a7690bef6620a30f9ce38d40db50e8bd91d2694f3ab8302cb8ccd2f2_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_d7b40e6be9711effe54765301526b1e32f12e7a21cafd377d94764b0f2491b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b40e6be9711effe54765301526b1e32f12e7a21cafd377d94764b0f2491b07->enter($__internal_d7b40e6be9711effe54765301526b1e32f12e7a21cafd377d94764b0f2491b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_1b967adffae35bf553505c2b8a3c8953075cacf391e66d505fc23a976568ab82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b967adffae35bf553505c2b8a3c8953075cacf391e66d505fc23a976568ab82->enter($__internal_1b967adffae35bf553505c2b8a3c8953075cacf391e66d505fc23a976568ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_1b967adffae35bf553505c2b8a3c8953075cacf391e66d505fc23a976568ab82->leave($__internal_1b967adffae35bf553505c2b8a3c8953075cacf391e66d505fc23a976568ab82_prof);

        
        $__internal_d7b40e6be9711effe54765301526b1e32f12e7a21cafd377d94764b0f2491b07->leave($__internal_d7b40e6be9711effe54765301526b1e32f12e7a21cafd377d94764b0f2491b07_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9a1295f5660f357ee2e0416d5b2f0d43bad868237ac9262821e8b303991aa18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1295f5660f357ee2e0416d5b2f0d43bad868237ac9262821e8b303991aa18c->enter($__internal_9a1295f5660f357ee2e0416d5b2f0d43bad868237ac9262821e8b303991aa18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_1f6bef0e7a01d4d52508d08efb76324d4d1d8999349ad22c8382b3be6aff7440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6bef0e7a01d4d52508d08efb76324d4d1d8999349ad22c8382b3be6aff7440->enter($__internal_1f6bef0e7a01d4d52508d08efb76324d4d1d8999349ad22c8382b3be6aff7440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_1f6bef0e7a01d4d52508d08efb76324d4d1d8999349ad22c8382b3be6aff7440->leave($__internal_1f6bef0e7a01d4d52508d08efb76324d4d1d8999349ad22c8382b3be6aff7440_prof);

        
        $__internal_9a1295f5660f357ee2e0416d5b2f0d43bad868237ac9262821e8b303991aa18c->leave($__internal_9a1295f5660f357ee2e0416d5b2f0d43bad868237ac9262821e8b303991aa18c_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d296251e337030b256b9389858fa1024f56992cca42476ce31b8f7c1775c9e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d296251e337030b256b9389858fa1024f56992cca42476ce31b8f7c1775c9e0b->enter($__internal_d296251e337030b256b9389858fa1024f56992cca42476ce31b8f7c1775c9e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_46b4235d954e21071f184216e7bf425bd29a978733fc3d6f63891c4677168318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b4235d954e21071f184216e7bf425bd29a978733fc3d6f63891c4677168318->enter($__internal_46b4235d954e21071f184216e7bf425bd29a978733fc3d6f63891c4677168318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_46b4235d954e21071f184216e7bf425bd29a978733fc3d6f63891c4677168318->leave($__internal_46b4235d954e21071f184216e7bf425bd29a978733fc3d6f63891c4677168318_prof);

        
        $__internal_d296251e337030b256b9389858fa1024f56992cca42476ce31b8f7c1775c9e0b->leave($__internal_d296251e337030b256b9389858fa1024f56992cca42476ce31b8f7c1775c9e0b_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_0db0e14102b1f6f6df6b2650c3395866d15c8f5801e4075a58e2d901dbb33784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db0e14102b1f6f6df6b2650c3395866d15c8f5801e4075a58e2d901dbb33784->enter($__internal_0db0e14102b1f6f6df6b2650c3395866d15c8f5801e4075a58e2d901dbb33784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6394575aa88e2ac19cffb066d4db451611d19b3ad4c2252f0ab1fa0c6e1631a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6394575aa88e2ac19cffb066d4db451611d19b3ad4c2252f0ab1fa0c6e1631a0->enter($__internal_6394575aa88e2ac19cffb066d4db451611d19b3ad4c2252f0ab1fa0c6e1631a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_6394575aa88e2ac19cffb066d4db451611d19b3ad4c2252f0ab1fa0c6e1631a0->leave($__internal_6394575aa88e2ac19cffb066d4db451611d19b3ad4c2252f0ab1fa0c6e1631a0_prof);

        
        $__internal_0db0e14102b1f6f6df6b2650c3395866d15c8f5801e4075a58e2d901dbb33784->leave($__internal_0db0e14102b1f6f6df6b2650c3395866d15c8f5801e4075a58e2d901dbb33784_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_33cd419afb65cde26246c5e77858b765d833bdea5af2cba930671104b6dfe1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cd419afb65cde26246c5e77858b765d833bdea5af2cba930671104b6dfe1dc->enter($__internal_33cd419afb65cde26246c5e77858b765d833bdea5af2cba930671104b6dfe1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_18a6560ea1b4777b6b5d150bc6d0db3290b352acedebe0de31f134af9f157f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a6560ea1b4777b6b5d150bc6d0db3290b352acedebe0de31f134af9f157f64->enter($__internal_18a6560ea1b4777b6b5d150bc6d0db3290b352acedebe0de31f134af9f157f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_18a6560ea1b4777b6b5d150bc6d0db3290b352acedebe0de31f134af9f157f64->leave($__internal_18a6560ea1b4777b6b5d150bc6d0db3290b352acedebe0de31f134af9f157f64_prof);

        
        $__internal_33cd419afb65cde26246c5e77858b765d833bdea5af2cba930671104b6dfe1dc->leave($__internal_33cd419afb65cde26246c5e77858b765d833bdea5af2cba930671104b6dfe1dc_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_465e668222ce1a7864269d7c51a57c7773749b8e7e9ddc7125d1652271b406a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465e668222ce1a7864269d7c51a57c7773749b8e7e9ddc7125d1652271b406a9->enter($__internal_465e668222ce1a7864269d7c51a57c7773749b8e7e9ddc7125d1652271b406a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5d82ced063ba8270f7035f9949895a98910a051294413f37b4e91a007dc49a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d82ced063ba8270f7035f9949895a98910a051294413f37b4e91a007dc49a08->enter($__internal_5d82ced063ba8270f7035f9949895a98910a051294413f37b4e91a007dc49a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_5d82ced063ba8270f7035f9949895a98910a051294413f37b4e91a007dc49a08->leave($__internal_5d82ced063ba8270f7035f9949895a98910a051294413f37b4e91a007dc49a08_prof);

        
        $__internal_465e668222ce1a7864269d7c51a57c7773749b8e7e9ddc7125d1652271b406a9->leave($__internal_465e668222ce1a7864269d7c51a57c7773749b8e7e9ddc7125d1652271b406a9_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
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
", "@EasyAdmin/default/layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
