<?php

/* FOSCommentBundle:Thread:comment_content.html.twig */
class __TwigTemplate_b077f3b5d88a93a887b397197075c107eb98f621848054dfd7d2b11349491474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24c760775e6bcf52dbd9e364b32fc4718e22339391e287b86fdd48674ebceec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c760775e6bcf52dbd9e364b32fc4718e22339391e287b86fdd48674ebceec8->enter($__internal_24c760775e6bcf52dbd9e364b32fc4718e22339391e287b86fdd48674ebceec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        $__internal_f6b15c6a062334df2d42731e281e8e5aa285c80d87ff3b7964fff52240c8e43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b15c6a062334df2d42731e281e8e5aa285c80d87ff3b7964fff52240c8e43c->enter($__internal_f6b15c6a062334df2d42731e281e8e5aa285c80d87ff3b7964fff52240c8e43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
        
        $__internal_24c760775e6bcf52dbd9e364b32fc4718e22339391e287b86fdd48674ebceec8->leave($__internal_24c760775e6bcf52dbd9e364b32fc4718e22339391e287b86fdd48674ebceec8_prof);

        
        $__internal_f6b15c6a062334df2d42731e281e8e5aa285c80d87ff3b7964fff52240c8e43c->leave($__internal_f6b15c6a062334df2d42731e281e8e5aa285c80d87ff3b7964fff52240c8e43c_prof);

    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        $__internal_7800efd383c7c889dce843b4ededa22cff64509ece5662cf9dc0a47fcd9f076c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7800efd383c7c889dce843b4ededa22cff64509ece5662cf9dc0a47fcd9f076c->enter($__internal_7800efd383c7c889dce843b4ededa22cff64509ece5662cf9dc0a47fcd9f076c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        $__internal_5ad46efb6935fc5379d5daab82cb22169ec6630a7335a0e459dde5067307a245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad46efb6935fc5379d5daab82cb22169ec6630a7335a0e459dde5067307a245->enter($__internal_5ad46efb6935fc5379d5daab82cb22169ec6630a7335a0e459dde5067307a245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        // line 13
        echo "<div id=\"fos_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, ($context["depth"] ?? $this->getContext($context, "depth")), "html", null, true);
        echo "\" ";
        if ((array_key_exists("parent", $context) &&  !(null === ($context["parent"] ?? $this->getContext($context, "parent"))))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"fos_comment_comment_metas\">
        ";
        // line 16
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 56
        echo "    </div>

    <div id=\"fos_comment_comment_body_";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
        ";
        // line 59
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 70
        echo "    </div>

    ";
        // line 72
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 93
        echo "
</div>
";
        
        $__internal_5ad46efb6935fc5379d5daab82cb22169ec6630a7335a0e459dde5067307a245->leave($__internal_5ad46efb6935fc5379d5daab82cb22169ec6630a7335a0e459dde5067307a245_prof);

        
        $__internal_7800efd383c7c889dce843b4ededa22cff64509ece5662cf9dc0a47fcd9f076c->leave($__internal_7800efd383c7c889dce843b4ededa22cff64509ece5662cf9dc0a47fcd9f076c_prof);

    }

    // line 16
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        $__internal_70d82ccfad2e41a5bf4c692d551ae781f2c38994581dd598aa9130f07401b5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d82ccfad2e41a5bf4c692d551ae781f2c38994581dd598aa9130f07401b5c1->enter($__internal_70d82ccfad2e41a5bf4c692d551ae781f2c38994581dd598aa9130f07401b5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        $__internal_d80fa903a7d95e12a3f33681533f5ad6cc07d211254cc9a0ffbbb54958547cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80fa903a7d95e12a3f33681533f5ad6cc07d211254cc9a0ffbbb54958547cf3->enter($__internal_d80fa903a7d95e12a3f33681533f5ad6cc07d211254cc9a0ffbbb54958547cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        // line 17
        echo "            ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_d80fa903a7d95e12a3f33681533f5ad6cc07d211254cc9a0ffbbb54958547cf3->leave($__internal_d80fa903a7d95e12a3f33681533f5ad6cc07d211254cc9a0ffbbb54958547cf3_prof);

        
        $__internal_70d82ccfad2e41a5bf4c692d551ae781f2c38994581dd598aa9130f07401b5c1->leave($__internal_70d82ccfad2e41a5bf4c692d551ae781f2c38994581dd598aa9130f07401b5c1_prof);

    }

    // line 17
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        $__internal_8aec9d4123fa025dbfb5ea9897c52e2639072872da8c7527b90fec85c67cc516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aec9d4123fa025dbfb5ea9897c52e2639072872da8c7527b90fec85c67cc516->enter($__internal_8aec9d4123fa025dbfb5ea9897c52e2639072872da8c7527b90fec85c67cc516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        $__internal_bb4049038b6884bf2213b1142b625409d3324a583e2d4e0df4104921459031da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4049038b6884bf2213b1142b625409d3324a583e2d4e0df4104921459031da->enter($__internal_bb4049038b6884bf2213b1142b625409d3324a583e2d4e0df4104921459031da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        // line 18
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 19
        echo "                <span class=\"fos_comment_comment_authorname\">
                    ";
        // line 20
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 22
            echo "                    ";
        } else {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "
            ";
        
        $__internal_bb4049038b6884bf2213b1142b625409d3324a583e2d4e0df4104921459031da->leave($__internal_bb4049038b6884bf2213b1142b625409d3324a583e2d4e0df4104921459031da_prof);

        
        $__internal_8aec9d4123fa025dbfb5ea9897c52e2639072872da8c7527b90fec85c67cc516->leave($__internal_8aec9d4123fa025dbfb5ea9897c52e2639072872da8c7527b90fec85c67cc516_prof);

    }

    // line 28
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        $__internal_c0d9d18d3fce276851c39f48b1d05a8857b75d01aa44f13a0daa0fef59f1986f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d9d18d3fce276851c39f48b1d05a8857b75d01aa44f13a0daa0fef59f1986f->enter($__internal_c0d9d18d3fce276851c39f48b1d05a8857b75d01aa44f13a0daa0fef59f1986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        $__internal_7306cee9a4f41cd915325e22c4374abaefd646eb84b12569304aa4cb96057d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7306cee9a4f41cd915325e22c4374abaefd646eb84b12569304aa4cb96057d4a->enter($__internal_7306cee9a4f41cd915325e22c4374abaefd646eb84b12569304aa4cb96057d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        // line 29
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canEditComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 30
            echo "                <button data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_edit_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                ";
        }
        // line 32
        echo "            ";
        
        $__internal_7306cee9a4f41cd915325e22c4374abaefd646eb84b12569304aa4cb96057d4a->leave($__internal_7306cee9a4f41cd915325e22c4374abaefd646eb84b12569304aa4cb96057d4a_prof);

        
        $__internal_c0d9d18d3fce276851c39f48b1d05a8857b75d01aa44f13a0daa0fef59f1986f->leave($__internal_c0d9d18d3fce276851c39f48b1d05a8857b75d01aa44f13a0daa0fef59f1986f_prof);

    }

    // line 34
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        $__internal_f3e50eb38b1553e30c60037e4bca4e9d9f6887e4512d231dbd6c52c2d997f8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e50eb38b1553e30c60037e4bca4e9d9f6887e4512d231dbd6c52c2d997f8dc->enter($__internal_f3e50eb38b1553e30c60037e4bca4e9d9f6887e4512d231dbd6c52c2d997f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        $__internal_b46f1424207a39d8d835fc969dc66fb602d23bc6bd4d5345e36cb06f3844402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46f1424207a39d8d835fc969dc66fb602d23bc6bd4d5345e36cb06f3844402f->enter($__internal_b46f1424207a39d8d835fc969dc66fb602d23bc6bd4d5345e36cb06f3844402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        // line 35
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canDeleteComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 36
            echo "                    ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            } else {
                // line 40
                echo "                        ";
                // line 41
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            ";
        
        $__internal_b46f1424207a39d8d835fc969dc66fb602d23bc6bd4d5345e36cb06f3844402f->leave($__internal_b46f1424207a39d8d835fc969dc66fb602d23bc6bd4d5345e36cb06f3844402f_prof);

        
        $__internal_f3e50eb38b1553e30c60037e4bca4e9d9f6887e4512d231dbd6c52c2d997f8dc->leave($__internal_f3e50eb38b1553e30c60037e4bca4e9d9f6887e4512d231dbd6c52c2d997f8dc_prof);

    }

    // line 46
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        $__internal_0eff34ae13c0b5f2534e0e53d2498ffb7d8c4bcc0cde1cfd724658832831a9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eff34ae13c0b5f2534e0e53d2498ffb7d8c4bcc0cde1cfd724658832831a9fe->enter($__internal_0eff34ae13c0b5f2534e0e53d2498ffb7d8c4bcc0cde1cfd724658832831a9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        $__internal_2e605844c94720109754f49a74df9b4984160a0b4907efbedbbcf90de59eb976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e605844c94720109754f49a74df9b4984160a0b4907efbedbbcf90de59eb976->enter($__internal_2e605844c94720109754f49a74df9b4984160a0b4907efbedbbcf90de59eb976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        // line 47
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canVote(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 48
            echo "                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                        <button data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" =>  -1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\">";
            $this->loadTemplate("FOSCommentBundle:Thread:comment_votes.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 51)->display(array_merge($context, array("commentScore" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "score", array()))));
            echo "</div>
                    </div>
                ";
        }
        // line 54
        echo "            ";
        
        $__internal_2e605844c94720109754f49a74df9b4984160a0b4907efbedbbcf90de59eb976->leave($__internal_2e605844c94720109754f49a74df9b4984160a0b4907efbedbbcf90de59eb976_prof);

        
        $__internal_0eff34ae13c0b5f2534e0e53d2498ffb7d8c4bcc0cde1cfd724658832831a9fe->leave($__internal_0eff34ae13c0b5f2534e0e53d2498ffb7d8c4bcc0cde1cfd724658832831a9fe_prof);

    }

    // line 59
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        $__internal_d32043e3f2be6dcf6c74242a8032c1ac8bb847392978c7048a2ebca15f33b515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32043e3f2be6dcf6c74242a8032c1ac8bb847392978c7048a2ebca15f33b515->enter($__internal_d32043e3f2be6dcf6c74242a8032c1ac8bb847392978c7048a2ebca15f33b515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        $__internal_c27019784d3311c33684b6d8f9d037cf2e9c55776ecceb2ffdd10b39cc97f8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27019784d3311c33684b6d8f9d037cf2e9c55776ecceb2ffdd10b39cc97f8d6->enter($__internal_c27019784d3311c33684b6d8f9d037cf2e9c55776ecceb2ffdd10b39cc97f8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        // line 60
        echo "            ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isRawComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 64
                echo "                    ";
                echo $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "rawBody", array());
                echo "
                ";
            } else {
                // line 66
                echo "                    ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "body", array()), "html", null, true));
                echo "
                ";
            }
            // line 68
            echo "            ";
        }
        // line 69
        echo "        ";
        
        $__internal_c27019784d3311c33684b6d8f9d037cf2e9c55776ecceb2ffdd10b39cc97f8d6->leave($__internal_c27019784d3311c33684b6d8f9d037cf2e9c55776ecceb2ffdd10b39cc97f8d6_prof);

        
        $__internal_d32043e3f2be6dcf6c74242a8032c1ac8bb847392978c7048a2ebca15f33b515->leave($__internal_d32043e3f2be6dcf6c74242a8032c1ac8bb847392978c7048a2ebca15f33b515_prof);

    }

    // line 72
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        $__internal_340f4c1ddc6a55420b6c356f31dd26d6e92d41e5ebe7a805d6d3df58a588cafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340f4c1ddc6a55420b6c356f31dd26d6e92d41e5ebe7a805d6d3df58a588cafd->enter($__internal_340f4c1ddc6a55420b6c356f31dd26d6e92d41e5ebe7a805d6d3df58a588cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        $__internal_e6c0d75685d7c87ba96f0ef3fb9a20a4cac5a3a63cf4faaab4064be4a5446b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c0d75685d7c87ba96f0ef3fb9a20a4cac5a3a63cf4faaab4064be4a5446b2c->enter($__internal_e6c0d75685d7c87ba96f0ef3fb9a20a4cac5a3a63cf4faaab4064be4a5446b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        // line 73
        echo "        ";
        if ( !(($context["view"] ?? $this->getContext($context, "view")) === "flat")) {
            // line 74
            echo "            ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 75
                echo "                <div class=\"fos_comment_comment_reply\">
                    ";
                // line 76
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 79
                echo "                </div>
            ";
            }
            // line 81
            echo "
            <div class=\"fos_comment_comment_replies\">

                ";
            // line 84
            if (array_key_exists("children", $context)) {
                // line 85
                echo "                    ";
                $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 85)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
                // line 86
                echo "                ";
            }
            // line 87
            echo "
            </div>
        ";
        } elseif (((        // line 89
($context["view"] ?? $this->getContext($context, "view")) === "flat") && array_key_exists("children", $context))) {
            // line 90
            echo "            ";
            $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 90)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
            // line 91
            echo "        ";
        }
        // line 92
        echo "    ";
        
        $__internal_e6c0d75685d7c87ba96f0ef3fb9a20a4cac5a3a63cf4faaab4064be4a5446b2c->leave($__internal_e6c0d75685d7c87ba96f0ef3fb9a20a4cac5a3a63cf4faaab4064be4a5446b2c_prof);

        
        $__internal_340f4c1ddc6a55420b6c356f31dd26d6e92d41e5ebe7a805d6d3df58a588cafd->leave($__internal_340f4c1ddc6a55420b6c356f31dd26d6e92d41e5ebe7a805d6d3df58a588cafd_prof);

    }

    // line 76
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        $__internal_809c2443d2d2a9b4ae34930356c7ab4f54b73251da00aeb4637c1f506a720d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809c2443d2d2a9b4ae34930356c7ab4f54b73251da00aeb4637c1f506a720d35->enter($__internal_809c2443d2d2a9b4ae34930356c7ab4f54b73251da00aeb4637c1f506a720d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        $__internal_dd24676989117d0a6666973671556d6bc30f3acf4de2ae5f4ced0d9f5f7f2698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd24676989117d0a6666973671556d6bc30f3acf4de2ae5f4ced0d9f5f7f2698->enter($__internal_dd24676989117d0a6666973671556d6bc30f3acf4de2ae5f4ced0d9f5f7f2698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        // line 77
        echo "                        <button data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button>
                    ";
        
        $__internal_dd24676989117d0a6666973671556d6bc30f3acf4de2ae5f4ced0d9f5f7f2698->leave($__internal_dd24676989117d0a6666973671556d6bc30f3acf4de2ae5f4ced0d9f5f7f2698_prof);

        
        $__internal_809c2443d2d2a9b4ae34930356c7ab4f54b73251da00aeb4637c1f506a720d35->leave($__internal_809c2443d2d2a9b4ae34930356c7ab4f54b73251da00aeb4637c1f506a720d35_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  418 => 77,  409 => 76,  399 => 92,  396 => 91,  393 => 90,  391 => 89,  387 => 87,  384 => 86,  381 => 85,  379 => 84,  374 => 81,  370 => 79,  368 => 76,  365 => 75,  362 => 74,  359 => 73,  350 => 72,  340 => 69,  337 => 68,  331 => 66,  325 => 64,  322 => 63,  319 => 62,  316 => 61,  313 => 60,  304 => 59,  294 => 54,  286 => 51,  280 => 50,  274 => 49,  271 => 48,  268 => 47,  259 => 46,  249 => 44,  246 => 43,  238 => 41,  236 => 40,  228 => 38,  226 => 37,  223 => 36,  220 => 35,  211 => 34,  201 => 32,  191 => 30,  188 => 29,  179 => 28,  166 => 25,  160 => 23,  157 => 22,  154 => 21,  152 => 20,  149 => 19,  146 => 18,  137 => 17,  127 => 55,  125 => 46,  122 => 45,  120 => 34,  117 => 33,  115 => 28,  112 => 27,  109 => 17,  100 => 16,  88 => 93,  86 => 72,  82 => 70,  80 => 59,  76 => 58,  72 => 56,  70 => 16,  55 => 13,  37 => 12,  34 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% block fos_comment_comment %}
<div id=\"fos_comment_{{ comment.id }}\" class=\"fos_comment_comment_show fos_comment_comment_depth_{{ depth }}\" {% if parent is defined and parent is not null %}data-parent=\"{{ parent.id }}\"{% endif %}>

    <div class=\"fos_comment_comment_metas\">
        {% block fos_comment_comment_metas %}
            {% block fos_comment_comment_metas_authorline %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_show_by{% endtrans %}
                <span class=\"fos_comment_comment_authorname\">
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
                    {% else %}
                        {{ comment.authorName }}
                    {% endif %}
                </span> - {{ comment.createdAt|date }}
            {% endblock fos_comment_comment_metas_authorline %}

            {% block fos_comment_comment_metas_edit %}
                {% if fos_comment_can_edit_comment(comment) %}
                <button data-container=\"#fos_comment_comment_body_{{ comment.id }}\" data-url=\"{{ url(\"fos_comment_edit_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id}) }}\" class=\"fos_comment_comment_edit_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit{% endtrans %}</button>
                {% endif %}
            {% endblock fos_comment_comment_metas_edit %}

            {% block fos_comment_comment_metas_delete %}
                {% if fos_comment_can_delete_comment(comment) %}
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                        {# undelete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_VISIBLE') }) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_undelete{% endtrans %}</button>
                    {% else %}
                        {# delete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\":  constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')}) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_delete{% endtrans %}</button>
                    {% endif %}
                {% endif %}
            {% endblock fos_comment_comment_metas_delete %}

            {% block fos_comment_comment_metas_voting %}
                {% if fos_comment_can_vote(comment) %}
                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": 1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_voteup{% endtrans %}</button>
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": -1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_votedown{% endtrans %}</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_{{ comment.id }}\">{% include \"FOSCommentBundle:Thread:comment_votes.html.twig\" with { 'commentScore': comment.score } %}</div>
                    </div>
                {% endif %}
            {% endblock fos_comment_comment_metas_voting %}
        {% endblock fos_comment_comment_metas %}
    </div>

    <div id=\"fos_comment_comment_body_{{ comment.id }}\" class=\"fos_comment_comment_body\">
        {% block fos_comment_comment_body %}
            {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
            {% else %}
                {% if comment is fos_comment_raw %}
                    {{ comment.rawBody | raw }}
                {% else %}
                    {{ comment.body | nl2br }}
                {% endif %}
            {% endif %}
        {% endblock fos_comment_comment_body %}
    </div>

    {% block fos_comment_comment_children %}
        {% if view is not same as('flat') %}
            {% if fos_comment_can_comment(comment) %}
                <div class=\"fos_comment_comment_reply\">
                    {% block fos_comment_comment_reply %}
                        <button data-url=\"{{ url('fos_comment_new_thread_comments', {\"id\": comment.thread.id}) }}\" data-name=\"{{ comment.authorName }}\" data-parent-id=\"{{ comment.id }}\" class=\"fos_comment_comment_reply_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_reply{% endtrans %}</button>
                    {% endblock fos_comment_comment_reply %}
                </div>
            {% endif %}

            <div class=\"fos_comment_comment_replies\">

                {% if children is defined %}
                    {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
                {% endif %}

            </div>
        {% elseif view is same as('flat') and children is defined %}
            {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
        {% endif %}
    {% endblock fos_comment_comment_children %}

</div>
{% endblock fos_comment_comment %}
", "FOSCommentBundle:Thread:comment_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_content.html.twig");
    }
}
