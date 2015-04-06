<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/contact')) {
            // mremi_contact_form
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'mremi_contact.contact_controller:indexAction',  '_route' => 'mremi_contact_form',);
            }

            // mremi_contact_confirmation
            if ($pathinfo === '/contact/confirmation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mremi_contact_confirmation;
                }

                return array (  '_controller' => 'mremi_contact.contact_controller:confirmAction',  '_route' => 'mremi_contact_confirmation',);
            }
            not_mremi_contact_confirmation:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ap')) {
                if (0 === strpos($pathinfo, '/api')) {
                    // api_pokemon
                    if (0 === strpos($pathinfo, '/api/article') && preg_match('#^/api/article(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_pokemon')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\ApiController::ArticleAction',));
                    }

                    // api_type
                    if (0 === strpos($pathinfo, '/api/tag') && preg_match('#^/api/tag(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_type')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\ApiController::TagAction',));
                    }

                    // api_trainer
                    if (0 === strpos($pathinfo, '/api/category') && preg_match('#^/api/category(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_trainer')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\ApiController::CategoryAction',));
                    }

                }

                // homepage
                if ($pathinfo === '/app/example') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admin/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/admin/app')) {
                    if (0 === strpos($pathinfo, '/admin/app/article')) {
                        // admin_app_article_list
                        if ($pathinfo === '/admin/app/article/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_list',  '_route' => 'admin_app_article_list',);
                        }

                        // admin_app_article_create
                        if ($pathinfo === '/admin/app/article/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_create',  '_route' => 'admin_app_article_create',);
                        }

                        // admin_app_article_batch
                        if ($pathinfo === '/admin/app/article/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_batch',  '_route' => 'admin_app_article_batch',);
                        }

                        // admin_app_article_edit
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_edit',));
                        }

                        // admin_app_article_delete
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_delete',));
                        }

                        // admin_app_article_show
                        if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_show',));
                        }

                        // admin_app_article_export
                        if ($pathinfo === '/admin/app/article/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.articles',  '_sonata_name' => 'admin_app_article_export',  '_route' => 'admin_app_article_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/tag')) {
                        // admin_app_tag_list
                        if ($pathinfo === '/admin/app/tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_list',  '_route' => 'admin_app_tag_list',);
                        }

                        // admin_app_tag_create
                        if ($pathinfo === '/admin/app/tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_create',  '_route' => 'admin_app_tag_create',);
                        }

                        // admin_app_tag_batch
                        if ($pathinfo === '/admin/app/tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_batch',  '_route' => 'admin_app_tag_batch',);
                        }

                        // admin_app_tag_edit
                        if (preg_match('#^/admin/app/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_edit',));
                        }

                        // admin_app_tag_delete
                        if (preg_match('#^/admin/app/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_delete',));
                        }

                        // admin_app_tag_show
                        if (preg_match('#^/admin/app/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_show',));
                        }

                        // admin_app_tag_export
                        if ($pathinfo === '/admin/app/tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_app_tag_export',  '_route' => 'admin_app_tag_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/category')) {
                        // admin_app_category_list
                        if ($pathinfo === '/admin/app/category/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_list',  '_route' => 'admin_app_category_list',);
                        }

                        // admin_app_category_create
                        if ($pathinfo === '/admin/app/category/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_create',  '_route' => 'admin_app_category_create',);
                        }

                        // admin_app_category_batch
                        if ($pathinfo === '/admin/app/category/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_batch',  '_route' => 'admin_app_category_batch',);
                        }

                        // admin_app_category_edit
                        if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_edit',));
                        }

                        // admin_app_category_delete
                        if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_delete',));
                        }

                        // admin_app_category_show
                        if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_show',));
                        }

                        // admin_app_category_export
                        if ($pathinfo === '/admin/app/category/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.category',  '_sonata_name' => 'admin_app_category_export',  '_route' => 'admin_app_category_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/user')) {
                        // admin_app_user_list
                        if ($pathinfo === '/admin/app/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_list',  '_route' => 'admin_app_user_list',);
                        }

                        // admin_app_user_create
                        if ($pathinfo === '/admin/app/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_create',  '_route' => 'admin_app_user_create',);
                        }

                        // admin_app_user_batch
                        if ($pathinfo === '/admin/app/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_batch',  '_route' => 'admin_app_user_batch',);
                        }

                        // admin_app_user_edit
                        if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_edit',));
                        }

                        // admin_app_user_delete
                        if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_delete',));
                        }

                        // admin_app_user_show
                        if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_show',));
                        }

                        // admin_app_user_export
                        if ($pathinfo === '/admin/app/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_app_user_export',  '_route' => 'admin_app_user_export',);
                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
