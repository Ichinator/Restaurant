<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // access
            if ('/access' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accessAction',  '_route' => 'access',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // easyadmin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

            }

            elseif (0 === strpos($pathinfo, '/api/threads')) {
                // fos_comment_new_threads
                if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_new_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_threads:

                // fos_comment_edit_thread_commentable
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_edit_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_commentable:

                // fos_comment_new_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_new_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comments:

                // fos_comment_remove_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_remove_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_remove_thread_comment:

                // fos_comment_edit_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_edit_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_edit_thread_comment:

                // fos_comment_new_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_new_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_new_thread_comment_votes:

                // fos_comment_get_thread
                if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_get_thread;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread:

                // fos_comment_get_threads
                if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_get_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
                }
                not_fos_comment_get_threads:

                // fos_comment_post_threads
                if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_threads;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_threads:

                // fos_comment_patch_thread_commentable
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('PATCH' !== $canonicalMethod) {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_commentable;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_commentable:

                // fos_comment_get_thread_comment
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_get_thread_comment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment:

                // fos_comment_patch_thread_comment_state
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('PATCH' !== $canonicalMethod) {
                        $allow[] = 'PATCH';
                        goto not_fos_comment_patch_thread_comment_state;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
                }
                not_fos_comment_patch_thread_comment_state:

                // fos_comment_put_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_fos_comment_put_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_put_thread_comments:

                // fos_comment_get_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_get_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comments:

                // fos_comment_post_thread_comments
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comments:

                // fos_comment_get_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_comment_get_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_get_thread_comment_votes:

                // fos_comment_post_thread_comment_votes
                if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_comment_post_thread_comment_votes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
                }
                not_fos_comment_post_thread_comment_votes:

            }

        }

        elseif (0 === strpos($pathinfo, '/show')) {
            // employees
            if ('/showEmployees' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'employees');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EmployeesController::showAction',  '_route' => 'employees',);
            }

            // entrees
            if ('/showEntrees' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FoodController::showEntreesAction',  '_route' => 'entrees',);
            }

            if (0 === strpos($pathinfo, '/showOne')) {
                // showOneEmployee
                if (0 === strpos($pathinfo, '/showOneEmployee') && preg_match('#^/showOneEmployee/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showOneEmployee')), array (  '_controller' => 'AppBundle\\Controller\\EmployeesController::showOneEmployeeAction',));
                }

                // showOneEntree
                if (0 === strpos($pathinfo, '/showOneEntree') && preg_match('#^/showOneEntree/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showOneEntree')), array (  '_controller' => 'AppBundle\\Controller\\FoodController::showOneEntreeAction',));
                }

                // showOnePlat
                if (0 === strpos($pathinfo, '/showOnePlat') && preg_match('#^/showOnePlat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showOnePlat')), array (  '_controller' => 'AppBundle\\Controller\\FoodController::showOneEmployeeAction',));
                }

                // showOneBoisson
                if (0 === strpos($pathinfo, '/showOneBoisson') && preg_match('#^/showOneBoisson/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showOneBoisson')), array (  '_controller' => 'AppBundle\\Controller\\FoodController::showOneBoissonAction',));
                }

                // showOneDessert
                if (0 === strpos($pathinfo, '/showOneDessert') && preg_match('#^/showOneDessert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showOneDessert')), array (  '_controller' => 'AppBundle\\Controller\\FoodController::showOneDessertAction',));
                }

            }

            // plats
            if ('/showPlats' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FoodController::showPlatsAction',  '_route' => 'plats',);
            }

            // desserts
            if ('/showDesserts' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FoodController::showDessertsAction',  '_route' => 'desserts',);
            }

            // boissons
            if ('/showBoissons' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FoodController::showBoissonsAction',  '_route' => 'boissons',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/froalaeditor')) {
            if (0 === strpos($pathinfo, '/froalaeditor/upload_')) {
                // kms_froala_editor_upload_image
                if ('/froalaeditor/upload_image' === $pathinfo) {
                    return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadImageAction',  '_route' => 'kms_froala_editor_upload_image',);
                }

                // kms_froala_editor_upload_file
                if ('/froalaeditor/upload_file' === $pathinfo) {
                    return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadFileAction',  '_route' => 'kms_froala_editor_upload_file',);
                }

                // kms_froala_editor_upload_video
                if ('/froalaeditor/upload_video' === $pathinfo) {
                    return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadVideoAction',  '_route' => 'kms_froala_editor_upload_video',);
                }

            }

            // kms_froala_editor_delete_image
            if ('/froalaeditor/delete_image' === $pathinfo) {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::deleteImageAction',  '_route' => 'kms_froala_editor_delete_image',);
            }

            // kms_froala_editor_load_images
            if ('/froalaeditor/load_images' === $pathinfo) {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::loadImagesAction',  '_route' => 'kms_froala_editor_load_images',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
