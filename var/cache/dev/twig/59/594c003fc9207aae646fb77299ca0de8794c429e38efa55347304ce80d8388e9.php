<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_f99b950c30214356c1af84e80bfaf7a8cf5fee1c3b19ee22daaa69f44d9204aa extends Twig_Template
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
        $__internal_df85458d01d4b394e7f51480e529673b9d9149d957eb7b7d9c75592555521578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df85458d01d4b394e7f51480e529673b9d9149d957eb7b7d9c75592555521578->enter($__internal_df85458d01d4b394e7f51480e529673b9d9149d957eb7b7d9c75592555521578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_3e9963ecf23fd52c8285eb2e19cea42edec87c8e92a73e9e5e5a99f31d6714c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9963ecf23fd52c8285eb2e19cea42edec87c8e92a73e9e5e5a99f31d6714c0->enter($__internal_3e9963ecf23fd52c8285eb2e19cea42edec87c8e92a73e9e5e5a99f31d6714c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_df85458d01d4b394e7f51480e529673b9d9149d957eb7b7d9c75592555521578->leave($__internal_df85458d01d4b394e7f51480e529673b9d9149d957eb7b7d9c75592555521578_prof);

        
        $__internal_3e9963ecf23fd52c8285eb2e19cea42edec87c8e92a73e9e5e5a99f31d6714c0->leave($__internal_3e9963ecf23fd52c8285eb2e19cea42edec87c8e92a73e9e5e5a99f31d6714c0_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_39c86c16009b59597b6e57791a8e8f2df6f755ccbf0cd74a66deeb2d4ccaacc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c86c16009b59597b6e57791a8e8f2df6f755ccbf0cd74a66deeb2d4ccaacc7->enter($__internal_39c86c16009b59597b6e57791a8e8f2df6f755ccbf0cd74a66deeb2d4ccaacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a4007b3944bf9316521ed7dcf02966b78505fa345fdc408916c6c812ae65b2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4007b3944bf9316521ed7dcf02966b78505fa345fdc408916c6c812ae65b2c8->enter($__internal_a4007b3944bf9316521ed7dcf02966b78505fa345fdc408916c6c812ae65b2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_a4007b3944bf9316521ed7dcf02966b78505fa345fdc408916c6c812ae65b2c8->leave($__internal_a4007b3944bf9316521ed7dcf02966b78505fa345fdc408916c6c812ae65b2c8_prof);

        
        $__internal_39c86c16009b59597b6e57791a8e8f2df6f755ccbf0cd74a66deeb2d4ccaacc7->leave($__internal_39c86c16009b59597b6e57791a8e8f2df6f755ccbf0cd74a66deeb2d4ccaacc7_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_03eec012306adecc2bb4666be4290604bc7ae93d68563feeca39e22c2cbd8891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03eec012306adecc2bb4666be4290604bc7ae93d68563feeca39e22c2cbd8891->enter($__internal_03eec012306adecc2bb4666be4290604bc7ae93d68563feeca39e22c2cbd8891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_4cea9726cd6ac29f6bb1bb0b13f5464cbae16986ff11ebf6dcf88dbbc997ca72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cea9726cd6ac29f6bb1bb0b13f5464cbae16986ff11ebf6dcf88dbbc997ca72->enter($__internal_4cea9726cd6ac29f6bb1bb0b13f5464cbae16986ff11ebf6dcf88dbbc997ca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_4cea9726cd6ac29f6bb1bb0b13f5464cbae16986ff11ebf6dcf88dbbc997ca72->leave($__internal_4cea9726cd6ac29f6bb1bb0b13f5464cbae16986ff11ebf6dcf88dbbc997ca72_prof);

        
        $__internal_03eec012306adecc2bb4666be4290604bc7ae93d68563feeca39e22c2cbd8891->leave($__internal_03eec012306adecc2bb4666be4290604bc7ae93d68563feeca39e22c2cbd8891_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_6212b4a3df52d7ef4a3dea6a06a9a2f2604c9c0ca823037427cc274c3ee5afee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6212b4a3df52d7ef4a3dea6a06a9a2f2604c9c0ca823037427cc274c3ee5afee->enter($__internal_6212b4a3df52d7ef4a3dea6a06a9a2f2604c9c0ca823037427cc274c3ee5afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_f23daac5b959d7cab64fdd3f227515d19ca49b864cac60ff1ec29fb72af82746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23daac5b959d7cab64fdd3f227515d19ca49b864cac60ff1ec29fb72af82746->enter($__internal_f23daac5b959d7cab64fdd3f227515d19ca49b864cac60ff1ec29fb72af82746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_f23daac5b959d7cab64fdd3f227515d19ca49b864cac60ff1ec29fb72af82746->leave($__internal_f23daac5b959d7cab64fdd3f227515d19ca49b864cac60ff1ec29fb72af82746_prof);

        
        $__internal_6212b4a3df52d7ef4a3dea6a06a9a2f2604c9c0ca823037427cc274c3ee5afee->leave($__internal_6212b4a3df52d7ef4a3dea6a06a9a2f2604c9c0ca823037427cc274c3ee5afee_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5b41545305d796a717b289c2888b85302ab59abc90d7c4c1da1734635759500a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b41545305d796a717b289c2888b85302ab59abc90d7c4c1da1734635759500a->enter($__internal_5b41545305d796a717b289c2888b85302ab59abc90d7c4c1da1734635759500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_965ad8852fc7d551d117053a4f083e5207045b0e6fe30dc34d777bb7fadcda58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ad8852fc7d551d117053a4f083e5207045b0e6fe30dc34d777bb7fadcda58->enter($__internal_965ad8852fc7d551d117053a4f083e5207045b0e6fe30dc34d777bb7fadcda58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_965ad8852fc7d551d117053a4f083e5207045b0e6fe30dc34d777bb7fadcda58->leave($__internal_965ad8852fc7d551d117053a4f083e5207045b0e6fe30dc34d777bb7fadcda58_prof);

        
        $__internal_5b41545305d796a717b289c2888b85302ab59abc90d7c4c1da1734635759500a->leave($__internal_5b41545305d796a717b289c2888b85302ab59abc90d7c4c1da1734635759500a_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_217e0e531d3ceb82f205e53569610d5de553a38e52d967a90cf3fd61a4e092ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217e0e531d3ceb82f205e53569610d5de553a38e52d967a90cf3fd61a4e092ad->enter($__internal_217e0e531d3ceb82f205e53569610d5de553a38e52d967a90cf3fd61a4e092ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_4feb40360d1ca385ae19be2ef760889b9e947c860488ab0b6011203d724fdb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feb40360d1ca385ae19be2ef760889b9e947c860488ab0b6011203d724fdb14->enter($__internal_4feb40360d1ca385ae19be2ef760889b9e947c860488ab0b6011203d724fdb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_4feb40360d1ca385ae19be2ef760889b9e947c860488ab0b6011203d724fdb14->leave($__internal_4feb40360d1ca385ae19be2ef760889b9e947c860488ab0b6011203d724fdb14_prof);

        
        $__internal_217e0e531d3ceb82f205e53569610d5de553a38e52d967a90cf3fd61a4e092ad->leave($__internal_217e0e531d3ceb82f205e53569610d5de553a38e52d967a90cf3fd61a4e092ad_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ecfa733d9d5b22fc9abfb26b4e5983e55f168f7b980f350a5014e782d65932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecfa733d9d5b22fc9abfb26b4e5983e55f168f7b980f350a5014e782d65932e->enter($__internal_1ecfa733d9d5b22fc9abfb26b4e5983e55f168f7b980f350a5014e782d65932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1912a07de51710de93b754775f1f3323deec2d1fea288d90100b65251434d1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1912a07de51710de93b754775f1f3323deec2d1fea288d90100b65251434d1b0->enter($__internal_1912a07de51710de93b754775f1f3323deec2d1fea288d90100b65251434d1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1912a07de51710de93b754775f1f3323deec2d1fea288d90100b65251434d1b0->leave($__internal_1912a07de51710de93b754775f1f3323deec2d1fea288d90100b65251434d1b0_prof);

        
        $__internal_1ecfa733d9d5b22fc9abfb26b4e5983e55f168f7b980f350a5014e782d65932e->leave($__internal_1ecfa733d9d5b22fc9abfb26b4e5983e55f168f7b980f350a5014e782d65932e_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e3d97dae7933fbf52fef8980986ca7ad3ee10719c038ec128cd92207b700025e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d97dae7933fbf52fef8980986ca7ad3ee10719c038ec128cd92207b700025e->enter($__internal_e3d97dae7933fbf52fef8980986ca7ad3ee10719c038ec128cd92207b700025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_fae67701e593844423be81b6f626604b606eae63add46807f2e3e6f4808bbaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae67701e593844423be81b6f626604b606eae63add46807f2e3e6f4808bbaff->enter($__internal_fae67701e593844423be81b6f626604b606eae63add46807f2e3e6f4808bbaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_fae67701e593844423be81b6f626604b606eae63add46807f2e3e6f4808bbaff->leave($__internal_fae67701e593844423be81b6f626604b606eae63add46807f2e3e6f4808bbaff_prof);

        
        $__internal_e3d97dae7933fbf52fef8980986ca7ad3ee10719c038ec128cd92207b700025e->leave($__internal_e3d97dae7933fbf52fef8980986ca7ad3ee10719c038ec128cd92207b700025e_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_04200849faeaef12440041d89c93029ffa0569f1668a665940af2a6eea6cb711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04200849faeaef12440041d89c93029ffa0569f1668a665940af2a6eea6cb711->enter($__internal_04200849faeaef12440041d89c93029ffa0569f1668a665940af2a6eea6cb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_9919229da33aa5b26cebdfa75c6b34e24b7fd3feed83ca61428f36c80cb4df89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9919229da33aa5b26cebdfa75c6b34e24b7fd3feed83ca61428f36c80cb4df89->enter($__internal_9919229da33aa5b26cebdfa75c6b34e24b7fd3feed83ca61428f36c80cb4df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_9919229da33aa5b26cebdfa75c6b34e24b7fd3feed83ca61428f36c80cb4df89->leave($__internal_9919229da33aa5b26cebdfa75c6b34e24b7fd3feed83ca61428f36c80cb4df89_prof);

        
        $__internal_04200849faeaef12440041d89c93029ffa0569f1668a665940af2a6eea6cb711->leave($__internal_04200849faeaef12440041d89c93029ffa0569f1668a665940af2a6eea6cb711_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_a3af2895aabe0ea010ba087a0b8157c6162b91e19bf228adf62257d49055f4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3af2895aabe0ea010ba087a0b8157c6162b91e19bf228adf62257d49055f4cd->enter($__internal_a3af2895aabe0ea010ba087a0b8157c6162b91e19bf228adf62257d49055f4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_592c996403745fb3e4286bc474f5611a6304657af99731f5c78c578c503e699e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592c996403745fb3e4286bc474f5611a6304657af99731f5c78c578c503e699e->enter($__internal_592c996403745fb3e4286bc474f5611a6304657af99731f5c78c578c503e699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_592c996403745fb3e4286bc474f5611a6304657af99731f5c78c578c503e699e->leave($__internal_592c996403745fb3e4286bc474f5611a6304657af99731f5c78c578c503e699e_prof);

        
        $__internal_a3af2895aabe0ea010ba087a0b8157c6162b91e19bf228adf62257d49055f4cd->leave($__internal_a3af2895aabe0ea010ba087a0b8157c6162b91e19bf228adf62257d49055f4cd_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_f561f24218ddeb1eb196fbad2695f7ab054686da53267e4ab54a8e197b556dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f561f24218ddeb1eb196fbad2695f7ab054686da53267e4ab54a8e197b556dd8->enter($__internal_f561f24218ddeb1eb196fbad2695f7ab054686da53267e4ab54a8e197b556dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_37cdd09da471e8177e9ce8576afd7c75cfbbc66bc74f4d8bcae7c9e0c1e3ad24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cdd09da471e8177e9ce8576afd7c75cfbbc66bc74f4d8bcae7c9e0c1e3ad24->enter($__internal_37cdd09da471e8177e9ce8576afd7c75cfbbc66bc74f4d8bcae7c9e0c1e3ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_37cdd09da471e8177e9ce8576afd7c75cfbbc66bc74f4d8bcae7c9e0c1e3ad24->leave($__internal_37cdd09da471e8177e9ce8576afd7c75cfbbc66bc74f4d8bcae7c9e0c1e3ad24_prof);

        
        $__internal_f561f24218ddeb1eb196fbad2695f7ab054686da53267e4ab54a8e197b556dd8->leave($__internal_f561f24218ddeb1eb196fbad2695f7ab054686da53267e4ab54a8e197b556dd8_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_5b5d9cc7db6bf843c157b2f7a3493fe7ff2191aac1ae67ddcc73b57e12f3c147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5d9cc7db6bf843c157b2f7a3493fe7ff2191aac1ae67ddcc73b57e12f3c147->enter($__internal_5b5d9cc7db6bf843c157b2f7a3493fe7ff2191aac1ae67ddcc73b57e12f3c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_478c6f8e4b0dd160a9e8853f752d967f7dcd8d0e409b546ebb5d435ec44cff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c6f8e4b0dd160a9e8853f752d967f7dcd8d0e409b546ebb5d435ec44cff39->enter($__internal_478c6f8e4b0dd160a9e8853f752d967f7dcd8d0e409b546ebb5d435ec44cff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_478c6f8e4b0dd160a9e8853f752d967f7dcd8d0e409b546ebb5d435ec44cff39->leave($__internal_478c6f8e4b0dd160a9e8853f752d967f7dcd8d0e409b546ebb5d435ec44cff39_prof);

        
        $__internal_5b5d9cc7db6bf843c157b2f7a3493fe7ff2191aac1ae67ddcc73b57e12f3c147->leave($__internal_5b5d9cc7db6bf843c157b2f7a3493fe7ff2191aac1ae67ddcc73b57e12f3c147_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_cb86b7e750407c453118ff9d613adb7460d077e8c7b85946614a4e6ffa5e2827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb86b7e750407c453118ff9d613adb7460d077e8c7b85946614a4e6ffa5e2827->enter($__internal_cb86b7e750407c453118ff9d613adb7460d077e8c7b85946614a4e6ffa5e2827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_b4e3f3a48f7cf1db3436dc442bcfd49f1881e0296732b0088d20cae979da7a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e3f3a48f7cf1db3436dc442bcfd49f1881e0296732b0088d20cae979da7a7f->enter($__internal_b4e3f3a48f7cf1db3436dc442bcfd49f1881e0296732b0088d20cae979da7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_b4e3f3a48f7cf1db3436dc442bcfd49f1881e0296732b0088d20cae979da7a7f->leave($__internal_b4e3f3a48f7cf1db3436dc442bcfd49f1881e0296732b0088d20cae979da7a7f_prof);

        
        $__internal_cb86b7e750407c453118ff9d613adb7460d077e8c7b85946614a4e6ffa5e2827->leave($__internal_cb86b7e750407c453118ff9d613adb7460d077e8c7b85946614a4e6ffa5e2827_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_f3b4e70b8777692ec040cefb6ffc334e9d0bcb772d3898268c7eace912b196ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b4e70b8777692ec040cefb6ffc334e9d0bcb772d3898268c7eace912b196ff->enter($__internal_f3b4e70b8777692ec040cefb6ffc334e9d0bcb772d3898268c7eace912b196ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_0702949d2f1e9f712605839cb2b934caa2a9927fa84102db53868cf322e9ac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0702949d2f1e9f712605839cb2b934caa2a9927fa84102db53868cf322e9ac7a->enter($__internal_0702949d2f1e9f712605839cb2b934caa2a9927fa84102db53868cf322e9ac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_0702949d2f1e9f712605839cb2b934caa2a9927fa84102db53868cf322e9ac7a->leave($__internal_0702949d2f1e9f712605839cb2b934caa2a9927fa84102db53868cf322e9ac7a_prof);

        
        $__internal_f3b4e70b8777692ec040cefb6ffc334e9d0bcb772d3898268c7eace912b196ff->leave($__internal_f3b4e70b8777692ec040cefb6ffc334e9d0bcb772d3898268c7eace912b196ff_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_f751b17fc75a8a279678c8efb85fd2f6969f561664cb27ec3d0351fdfc5c4fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f751b17fc75a8a279678c8efb85fd2f6969f561664cb27ec3d0351fdfc5c4fe6->enter($__internal_f751b17fc75a8a279678c8efb85fd2f6969f561664cb27ec3d0351fdfc5c4fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_4d2f596d067fbab82e50363e26b7c84c65b5e7bcfa7c811f73c2f416a5868621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2f596d067fbab82e50363e26b7c84c65b5e7bcfa7c811f73c2f416a5868621->enter($__internal_4d2f596d067fbab82e50363e26b7c84c65b5e7bcfa7c811f73c2f416a5868621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_4d2f596d067fbab82e50363e26b7c84c65b5e7bcfa7c811f73c2f416a5868621->leave($__internal_4d2f596d067fbab82e50363e26b7c84c65b5e7bcfa7c811f73c2f416a5868621_prof);

        
        $__internal_f751b17fc75a8a279678c8efb85fd2f6969f561664cb27ec3d0351fdfc5c4fe6->leave($__internal_f751b17fc75a8a279678c8efb85fd2f6969f561664cb27ec3d0351fdfc5c4fe6_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_effa5653a1db1590a44ac571b7c3fe7a12b6b6e01c869b9dfd4f762c9b6e3bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effa5653a1db1590a44ac571b7c3fe7a12b6b6e01c869b9dfd4f762c9b6e3bf2->enter($__internal_effa5653a1db1590a44ac571b7c3fe7a12b6b6e01c869b9dfd4f762c9b6e3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_5d1f02311e9d8251167a59e613c0e59b28b1a8284e7b5a93d4fd30104b1ac0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1f02311e9d8251167a59e613c0e59b28b1a8284e7b5a93d4fd30104b1ac0d6->enter($__internal_5d1f02311e9d8251167a59e613c0e59b28b1a8284e7b5a93d4fd30104b1ac0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_5d1f02311e9d8251167a59e613c0e59b28b1a8284e7b5a93d4fd30104b1ac0d6->leave($__internal_5d1f02311e9d8251167a59e613c0e59b28b1a8284e7b5a93d4fd30104b1ac0d6_prof);

        
        $__internal_effa5653a1db1590a44ac571b7c3fe7a12b6b6e01c869b9dfd4f762c9b6e3bf2->leave($__internal_effa5653a1db1590a44ac571b7c3fe7a12b6b6e01c869b9dfd4f762c9b6e3bf2_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_69019a75a5e3b776b64e2b6db13c4c57d813f228d959fef677db354946c94314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69019a75a5e3b776b64e2b6db13c4c57d813f228d959fef677db354946c94314->enter($__internal_69019a75a5e3b776b64e2b6db13c4c57d813f228d959fef677db354946c94314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_b251c98390a4cc01e4ff89fad1b0f1b1cd082c4c29b3bb993a96dca951691f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b251c98390a4cc01e4ff89fad1b0f1b1cd082c4c29b3bb993a96dca951691f7f->enter($__internal_b251c98390a4cc01e4ff89fad1b0f1b1cd082c4c29b3bb993a96dca951691f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_b251c98390a4cc01e4ff89fad1b0f1b1cd082c4c29b3bb993a96dca951691f7f->leave($__internal_b251c98390a4cc01e4ff89fad1b0f1b1cd082c4c29b3bb993a96dca951691f7f_prof);

        
        $__internal_69019a75a5e3b776b64e2b6db13c4c57d813f228d959fef677db354946c94314->leave($__internal_69019a75a5e3b776b64e2b6db13c4c57d813f228d959fef677db354946c94314_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c585579cb9560d2b55b410d7361e846d43a4b4fd11cedc5102c3b6e6149a8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c585579cb9560d2b55b410d7361e846d43a4b4fd11cedc5102c3b6e6149a8dd->enter($__internal_0c585579cb9560d2b55b410d7361e846d43a4b4fd11cedc5102c3b6e6149a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0cd80ee1711a58470e75f3aed436e809b8a3168c960df7907b5333742732e09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd80ee1711a58470e75f3aed436e809b8a3168c960df7907b5333742732e09b->enter($__internal_0cd80ee1711a58470e75f3aed436e809b8a3168c960df7907b5333742732e09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0cd80ee1711a58470e75f3aed436e809b8a3168c960df7907b5333742732e09b->leave($__internal_0cd80ee1711a58470e75f3aed436e809b8a3168c960df7907b5333742732e09b_prof);

        
        $__internal_0c585579cb9560d2b55b410d7361e846d43a4b4fd11cedc5102c3b6e6149a8dd->leave($__internal_0c585579cb9560d2b55b410d7361e846d43a4b4fd11cedc5102c3b6e6149a8dd_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_03cafc87f830e21f22abbff5923dd29c0b093887608422503cc242fa5fbc3546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cafc87f830e21f22abbff5923dd29c0b093887608422503cc242fa5fbc3546->enter($__internal_03cafc87f830e21f22abbff5923dd29c0b093887608422503cc242fa5fbc3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_af3c21257807055adf7d815d34ddd02ba788ee5d7af12269b58362862dad117b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3c21257807055adf7d815d34ddd02ba788ee5d7af12269b58362862dad117b->enter($__internal_af3c21257807055adf7d815d34ddd02ba788ee5d7af12269b58362862dad117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_af3c21257807055adf7d815d34ddd02ba788ee5d7af12269b58362862dad117b->leave($__internal_af3c21257807055adf7d815d34ddd02ba788ee5d7af12269b58362862dad117b_prof);

        
        $__internal_03cafc87f830e21f22abbff5923dd29c0b093887608422503cc242fa5fbc3546->leave($__internal_03cafc87f830e21f22abbff5923dd29c0b093887608422503cc242fa5fbc3546_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_431f3edac1793c3f2e259ce53f9cc67901428ca73be86acc7be8e94651c29d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431f3edac1793c3f2e259ce53f9cc67901428ca73be86acc7be8e94651c29d43->enter($__internal_431f3edac1793c3f2e259ce53f9cc67901428ca73be86acc7be8e94651c29d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_ce6cde9b2531ab6ee4762672c1a7d3ae5e8a58cba8a5399b1eb50a472f008c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6cde9b2531ab6ee4762672c1a7d3ae5e8a58cba8a5399b1eb50a472f008c06->enter($__internal_ce6cde9b2531ab6ee4762672c1a7d3ae5e8a58cba8a5399b1eb50a472f008c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_ce6cde9b2531ab6ee4762672c1a7d3ae5e8a58cba8a5399b1eb50a472f008c06->leave($__internal_ce6cde9b2531ab6ee4762672c1a7d3ae5e8a58cba8a5399b1eb50a472f008c06_prof);

        
        $__internal_431f3edac1793c3f2e259ce53f9cc67901428ca73be86acc7be8e94651c29d43->leave($__internal_431f3edac1793c3f2e259ce53f9cc67901428ca73be86acc7be8e94651c29d43_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_972ee9fed3a5b568a51a95db894425672c452518bbcb800c943ca6f8e7360c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972ee9fed3a5b568a51a95db894425672c452518bbcb800c943ca6f8e7360c35->enter($__internal_972ee9fed3a5b568a51a95db894425672c452518bbcb800c943ca6f8e7360c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_b6cfee393850cd2de44eab4ecb2101208277d49f2ec51a02f9acc567990885bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cfee393850cd2de44eab4ecb2101208277d49f2ec51a02f9acc567990885bb->enter($__internal_b6cfee393850cd2de44eab4ecb2101208277d49f2ec51a02f9acc567990885bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_b6cfee393850cd2de44eab4ecb2101208277d49f2ec51a02f9acc567990885bb->leave($__internal_b6cfee393850cd2de44eab4ecb2101208277d49f2ec51a02f9acc567990885bb_prof);

        
        $__internal_972ee9fed3a5b568a51a95db894425672c452518bbcb800c943ca6f8e7360c35->leave($__internal_972ee9fed3a5b568a51a95db894425672c452518bbcb800c943ca6f8e7360c35_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_c696238d2ff73c8df40b8cddf733090e0e68d42e6a624ecf63ae72c94d440091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c696238d2ff73c8df40b8cddf733090e0e68d42e6a624ecf63ae72c94d440091->enter($__internal_c696238d2ff73c8df40b8cddf733090e0e68d42e6a624ecf63ae72c94d440091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_db1e243a1bcffebeb31c743e05a5d394af2d665c7273da4dedda8b63881318a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1e243a1bcffebeb31c743e05a5d394af2d665c7273da4dedda8b63881318a4->enter($__internal_db1e243a1bcffebeb31c743e05a5d394af2d665c7273da4dedda8b63881318a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_db1e243a1bcffebeb31c743e05a5d394af2d665c7273da4dedda8b63881318a4->leave($__internal_db1e243a1bcffebeb31c743e05a5d394af2d665c7273da4dedda8b63881318a4_prof);

        
        $__internal_c696238d2ff73c8df40b8cddf733090e0e68d42e6a624ecf63ae72c94d440091->leave($__internal_c696238d2ff73c8df40b8cddf733090e0e68d42e6a624ecf63ae72c94d440091_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_19e8d9b71308d6bffdb833a55a0f17ffc6029aa0a16f0f0589586090d6880267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e8d9b71308d6bffdb833a55a0f17ffc6029aa0a16f0f0589586090d6880267->enter($__internal_19e8d9b71308d6bffdb833a55a0f17ffc6029aa0a16f0f0589586090d6880267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a4ee81f60890b66c743eea942492f5188010834fe3bdf74efda4bd40fde96857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ee81f60890b66c743eea942492f5188010834fe3bdf74efda4bd40fde96857->enter($__internal_a4ee81f60890b66c743eea942492f5188010834fe3bdf74efda4bd40fde96857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_a4ee81f60890b66c743eea942492f5188010834fe3bdf74efda4bd40fde96857->leave($__internal_a4ee81f60890b66c743eea942492f5188010834fe3bdf74efda4bd40fde96857_prof);

        
        $__internal_19e8d9b71308d6bffdb833a55a0f17ffc6029aa0a16f0f0589586090d6880267->leave($__internal_19e8d9b71308d6bffdb833a55a0f17ffc6029aa0a16f0f0589586090d6880267_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6ec7cd7ffc317228eab97029c844a32e514888e052fd78eb4727552b85c767bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec7cd7ffc317228eab97029c844a32e514888e052fd78eb4727552b85c767bf->enter($__internal_6ec7cd7ffc317228eab97029c844a32e514888e052fd78eb4727552b85c767bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_4b5b2c6ada60bd56ece763c2b8c3cca72607f3ef0efa8c695f8265276b6bedcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5b2c6ada60bd56ece763c2b8c3cca72607f3ef0efa8c695f8265276b6bedcf->enter($__internal_4b5b2c6ada60bd56ece763c2b8c3cca72607f3ef0efa8c695f8265276b6bedcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_4b5b2c6ada60bd56ece763c2b8c3cca72607f3ef0efa8c695f8265276b6bedcf->leave($__internal_4b5b2c6ada60bd56ece763c2b8c3cca72607f3ef0efa8c695f8265276b6bedcf_prof);

        
        $__internal_6ec7cd7ffc317228eab97029c844a32e514888e052fd78eb4727552b85c767bf->leave($__internal_6ec7cd7ffc317228eab97029c844a32e514888e052fd78eb4727552b85c767bf_prof);

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
