<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonne' => [[['_route' => 'app_abonne', '_controller' => 'App\\Controller\\AbonneController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/account' => [[['_route' => 'app_admin_account', '_controller' => 'App\\Controller\\AdminAddAccountController::index'], null, null, null, false, false, null]],
        '/admin/account/add' => [[['_route' => 'app_admin_account_add', '_controller' => 'App\\Controller\\AdminAddAccountController::add'], null, null, null, false, false, null]],
        '/admin/bureau' => [[['_route' => 'app_admin_bureau', '_controller' => 'App\\Controller\\AdminBureauController::index'], null, null, null, false, false, null]],
        '/admin/bureau/add' => [[['_route' => 'app_add_poste', '_controller' => 'App\\Controller\\AdminBureauController::addPoste'], null, null, null, false, false, null]],
        '/admin/bureau/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\AdminBureauController::search'], null, null, null, false, false, null]],
        '/admin/bureau/add/membre' => [[['_route' => 'app_add_membre', '_controller' => 'App\\Controller\\AdminBureauController::addMembre'], null, null, null, false, false, null]],
        '/admin/demande/partenariat' => [[['_route' => 'app_admin_demande_partenariat', '_controller' => 'App\\Controller\\AdminDemandePartenariatController::index'], null, null, null, false, false, null]],
        '/admin/emplois' => [[['_route' => 'app_admin_emplois', '_controller' => 'App\\Controller\\AdminEmploisController::index'], null, null, null, false, false, null]],
        '/admin/emplois/add' => [[['_route' => 'app_admin_emplois_add', '_controller' => 'App\\Controller\\AdminEmploisController::add'], null, null, null, false, false, null]],
        '/admin/emplois/update' => [[['_route' => 'app_admin_emplois_update', '_controller' => 'App\\Controller\\AdminEmploisController::update'], null, null, null, false, false, null]],
        '/admin/entreprise' => [[['_route' => 'app_admin_entreprise', '_controller' => 'App\\Controller\\AdminEntrepriseController::index'], null, null, null, false, false, null]],
        '/admin/evenement' => [[['_route' => 'app_admin_evenement', '_controller' => 'App\\Controller\\AdminEvenementController::index'], null, null, null, false, false, null]],
        '/admin/evenement/add' => [[['_route' => 'admin_evenement_add', '_controller' => 'App\\Controller\\AdminEvenementController::add'], null, null, null, false, false, null]],
        '/admin/evenement/update' => [[['_route' => 'admin_evenement_update', '_controller' => 'App\\Controller\\AdminEvenementController::mo'], null, null, null, true, false, null]],
        '/admin/membre' => [[['_route' => 'app_admin_membre', '_controller' => 'App\\Controller\\AdminMembreController::index'], null, null, null, false, false, null]],
        '/admin/membre/add' => [[['_route' => 'admin_membre_add', '_controller' => 'App\\Controller\\AdminMembreController::addMembre'], null, null, null, false, false, null]],
        '/admin/membre/modif' => [[['_route' => 'admin_membre_modif', '_controller' => 'App\\Controller\\AdminMembreController::modifMembre'], null, null, null, false, false, null]],
        '/admin/page/about' => [[['_route' => 'app_admin_page_about', '_controller' => 'App\\Controller\\AdminPageAboutController::index'], null, null, null, false, false, null]],
        '/admin/page/about/section1/update' => [[['_route' => 'page_about_section1', '_controller' => 'App\\Controller\\AdminPageAboutController::section1'], null, null, null, false, false, null]],
        '/admin/page/about/section2/update' => [[['_route' => 'page_about_section2', '_controller' => 'App\\Controller\\AdminPageAboutController::section2'], null, null, null, false, false, null]],
        '/admin/page/about/section3/update' => [[['_route' => 'page_about_section3', '_controller' => 'App\\Controller\\AdminPageAboutController::section3'], null, null, null, false, false, null]],
        '/admin/page/accueil' => [[['_route' => 'app_admin_page_accueil', '_controller' => 'App\\Controller\\AdminPageAccueilController::index'], null, null, null, false, false, null]],
        '/admin/page/accueil/section1/update' => [[['_route' => 'page_accueil_section1', '_controller' => 'App\\Controller\\AdminPageAccueilController::section1'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section2/update' => [[['_route' => 'page_accueil_section2', '_controller' => 'App\\Controller\\AdminPageAccueilController::section2'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section3/update' => [[['_route' => 'page_accueil_section3', '_controller' => 'App\\Controller\\AdminPageAccueilController::section3'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section4/update' => [[['_route' => 'page_accueil_section4', '_controller' => 'App\\Controller\\AdminPageAccueilController::section4'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section5/update' => [[['_route' => 'page_accueil_section5', '_controller' => 'App\\Controller\\AdminPageAccueilController::section5'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section6/update' => [[['_route' => 'page_accueil_section6', '_controller' => 'App\\Controller\\AdminPageAccueilController::section6'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/accueil/section7/update' => [[['_route' => 'page_accueil_section7', '_controller' => 'App\\Controller\\AdminPageAccueilController::section7'], null, ['POST' => 0], null, false, false, null]],
        '/admin/partenaire' => [[['_route' => 'app_admin_partenaire', '_controller' => 'App\\Controller\\AdminPartenaireController::index'], null, null, null, false, false, null]],
        '/admin/partenaires/add' => [[['_route' => 'app_admin_partenaire_add', '_controller' => 'App\\Controller\\AdminPartenaireController::add'], null, null, null, false, false, null]],
        '/agenda' => [[['_route' => 'app_agenda', '_controller' => 'App\\Controller\\AgendaController::index'], null, null, null, false, false, null]],
        '/agenda/details/commentaire/add' => [[['_route' => 'app_agenda_commentaire', '_controller' => 'App\\Controller\\AgendaDetailsController::commenter'], null, null, null, false, false, null]],
        '/annuaire' => [[['_route' => 'app_annuaire', '_controller' => 'App\\Controller\\AnnuaireController::index'], null, null, null, false, false, null]],
        '/annuaire/recherche' => [[['_route' => 'app_annuaire_details_recherche', '_controller' => 'App\\Controller\\AnnuaireController::recherche'], null, ['POST' => 0], null, false, false, null]],
        '/actualite' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::blog'], null, null, null, false, false, null]],
        '/membre/blog/article/add' => [[['_route' => 'app_blog_article_add', '_controller' => 'App\\Controller\\BlogController::addArticle'], null, null, null, false, false, null]],
        '/blog/auteur/articles' => [[['_route' => 'app_article_auteur', '_controller' => 'App\\Controller\\BlogController::myArticles'], null, null, null, false, false, null]],
        '/admin/blog' => [[['_route' => 'app_admin_article', '_controller' => 'App\\Controller\\BlogController::adminIndex'], null, null, null, false, false, null]],
        '/comment/article' => [[['_route' => 'app_article_comment', '_controller' => 'App\\Controller\\BlogController::addComment'], null, null, null, false, false, null]],
        '/alter/categorie/article' => [[['_route' => 'app_article_change_categorie', '_controller' => 'App\\Controller\\BlogController::changeCategorieArticle'], null, null, null, false, false, null]],
        '/admin/categorie/article' => [[['_route' => 'app_categorie_article', '_controller' => 'App\\Controller\\CategorieArticleController::index'], null, null, null, false, false, null]],
        '/admin/article/categorie/add' => [[['_route' => 'app_categorie_article_add', '_controller' => 'App\\Controller\\CategorieArticleController::addCategorie'], null, null, null, false, false, null]],
        '/admin/evenement/categorie' => [[['_route' => 'app_categorie_evenement', '_controller' => 'App\\Controller\\CategorieEvenementController::index'], null, null, null, false, false, null]],
        '/admin/evenement/categorie/add' => [[['_route' => 'add_categorie_evenement', '_controller' => 'App\\Controller\\CategorieEvenementController::add'], null, null, null, false, false, null]],
        '/admin/produit/categorie' => [[['_route' => 'app_categorie_produit', '_controller' => 'App\\Controller\\CategorieProduitController::index'], null, null, null, false, false, null]],
        '/admin/produit/categorie/add' => [[['_route' => 'app_produit_categorie_add', '_controller' => 'App\\Controller\\CategorieProduitController::addCategorie'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/commande/add' => [[['_route' => 'app_commande_add', '_controller' => 'App\\Controller\\CommandeController::addCommande'], null, null, null, false, false, null]],
        '/commande/add/wallet' => [[['_route' => 'app_commande_add_with_wallet', '_controller' => 'App\\Controller\\CommandeController::addCommandeWithWallet'], null, null, null, false, false, null]],
        '/client/commandes' => [[['_route' => 'app_commandes_client', '_controller' => 'App\\Controller\\CommandeController::clientCommandes'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'app_commandes', '_controller' => 'App\\Controller\\CommandeController::allCommandes'], null, null, null, false, false, null]],
        '/cotisation' => [[['_route' => 'app_cotisation', '_controller' => 'App\\Controller\\CotisationController::index'], null, null, null, false, false, null]],
        '/admin/cotisation' => [[['_route' => 'app_cotisation_admin', '_controller' => 'App\\Controller\\CotisationController::addCotisation'], null, null, null, false, false, null]],
        '/admin/cotisation/update/content' => [[['_route' => 'app_admin_cotisation_update_content', '_controller' => 'App\\Controller\\CotisationController::updateContent'], null, null, null, false, false, null]],
        '/cotisation/with/wallet' => [[['_route' => 'app_cotisation_make', '_controller' => 'App\\Controller\\CotisationController::makeCotisationWithWallet'], null, null, null, false, false, null]],
        '/cotisation/add/cont' => [[['_route' => 'app_cotisation_add_cont', '_controller' => 'App\\Controller\\CotisationController::addCont'], null, null, null, false, false, null]],
        '/admin/demande' => [[['_route' => 'demande', '_controller' => 'App\\Controller\\DemandeController::index'], null, null, null, false, false, null]],
        '/demande/partenariat' => [[['_route' => 'app_demande_partenariat', '_controller' => 'App\\Controller\\DemandePartenariatController::index'], null, null, null, false, false, null]],
        '/demande/partenariat/add' => [[['_route' => 'app_demande_partenariat_add', '_controller' => 'App\\Controller\\DemandePartenariatController::add'], null, ['POST' => 0], null, false, false, null]],
        '/depot/admin' => [[['_route' => 'app_depot_admin', '_controller' => 'App\\Controller\\DepotAdminController::index'], null, null, null, false, false, null]],
        '/emplois' => [[['_route' => 'app_emplois', '_controller' => 'App\\Controller\\EmploisController::index'], null, null, null, false, false, null]],
        '/emplois/recherche' => [[['_route' => 'app_emplois_search', '_controller' => 'App\\Controller\\EmploisController::recherche'], null, null, null, false, false, null]],
        '/footer' => [[['_route' => 'app_footer', '_controller' => 'App\\Controller\\FooterController::index'], null, null, null, false, false, null]],
        '/admin/forum' => [[['_route' => 'app_admin_forum', '_controller' => 'App\\Controller\\ForumController::adminIndex'], null, null, null, false, false, null]],
        '/membre/forum/add' => [[['_route' => 'app_forum_add', '_controller' => 'App\\Controller\\ForumController::addSujet'], null, null, null, false, false, null]],
        '/forum/auteur/sujets' => [[['_route' => 'app_forum_auteur', '_controller' => 'App\\Controller\\ForumController::mySubjects'], null, null, null, false, false, null]],
        '/comment/forum' => [[['_route' => 'app_sujet_comment', '_controller' => 'App\\Controller\\ForumController::addComment'], null, null, null, false, false, null]],
        '/alter/categorie/sujet' => [[['_route' => 'app_sujet_change_categorie', '_controller' => 'App\\Controller\\ForumController::changeThematiqueSujet'], null, null, null, false, false, null]],
        '/looking/for/job' => [[['_route' => 'app_looking_for_job', '_controller' => 'App\\Controller\\LookingForJobController::index'], null, null, null, false, false, null]],
        '/looking/for/job/activate' => [[['_route' => 'app_looking_for_job_activate', '_controller' => 'App\\Controller\\LookingForJobController::acive'], null, null, null, false, false, null]],
        '/looking/for/job/disable' => [[['_route' => 'app_looking_for_job_disable', '_controller' => 'App\\Controller\\LookingForJobController::desactive'], null, null, null, false, false, null]],
        '/membre/emplois' => [[['_route' => 'app_membre_emplois', '_controller' => 'App\\Controller\\MembreEmploisController::index'], null, null, null, false, false, null]],
        '/membre/emplois/add' => [[['_route' => 'membre_emplois_add', '_controller' => 'App\\Controller\\MembreEmploisController::ajout'], null, ['POST' => 0], null, false, false, null]],
        '/membre/emplois/update' => [[['_route' => 'membre_emplois_update', '_controller' => 'App\\Controller\\MembreEmploisController::update'], null, ['POST' => 0], null, false, false, null]],
        '/membre/entreprise' => [[['_route' => 'app_membre_entreprise', '_controller' => 'App\\Controller\\MembreEntrepriseController::index'], null, null, null, false, false, null]],
        '/membre/entreprise/add' => [[['_route' => 'app_membre_entreprise_add', '_controller' => 'App\\Controller\\MembreEntrepriseController::add'], null, ['POST' => 0], null, false, false, null]],
        '/membre/entreprise/update' => [[['_route' => 'app_membre_entreprise_update', '_controller' => 'App\\Controller\\MembreEntrepriseController::update'], null, ['POST' => 0], null, false, false, null]],
        '/membre/profile' => [[['_route' => 'app_membre_profile', '_controller' => 'App\\Controller\\MembreProfileController::index'], null, null, null, false, false, null]],
        '/membre/profile/update' => [[['_route' => 'app_membre_profile_edit', '_controller' => 'App\\Controller\\MembreProfileController::update'], null, ['POST' => 0], null, false, false, null]],
        '/newsletter' => [[['_route' => 'app_newsletter', '_controller' => 'App\\Controller\\NewsletterController::index'], null, null, null, false, false, null]],
        '/newsletter/add' => [[['_route' => 'app_newletter_add', '_controller' => 'App\\Controller\\NewsletterController::add'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/update' => [[['_route' => 'app_panier_update', '_controller' => 'App\\Controller\\PanierController::updateCart'], null, null, null, false, false, null]],
        '/admin/produit' => [[['_route' => 'app_produit_admin', '_controller' => 'App\\Controller\\ProduitAdminController::index'], null, null, null, false, false, null]],
        '/admin/produit/add' => [[['_route' => 'app_produit_add', '_controller' => 'App\\Controller\\ProduitAdminController::addProduit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/register/send' => [[['_route' => 'add_demande', '_controller' => 'App\\Controller\\RegisterController::aaddDemande'], null, ['POST' => 0], null, false, false, null]],
        '/register/client' => [[['_route' => 'add_client', '_controller' => 'App\\Controller\\RegisterController::addClient'], null, null, null, false, false, null]],
        '/reset/password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'checkData', '_controller' => 'App\\Controller\\ResetPasswordController::checkData'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/admin/thematique' => [[['_route' => 'app_thematique', '_controller' => 'App\\Controller\\ThematiqueController::index'], null, null, null, false, false, null]],
        '/admin/thematique/add' => [[['_route' => 'app_thematique_add', '_controller' => 'App\\Controller\\ThematiqueController::addThematique'], null, null, null, false, false, null]],
        '/wallet' => [[['_route' => 'app_wallet', '_controller' => 'App\\Controller\\WalletController::index'], null, null, null, false, false, null]],
        '/wallet/recharge' => [[['_route' => 'app_wallet_recharge', '_controller' => 'App\\Controller\\WalletController::recharge'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|account/delete/([^/]++)(*:43)'
                        .'|b(?'
                            .'|ureau/update/([^/]++)(*:75)'
                            .'|log/article/([^/]++)(*:102)'
                        .')'
                        .'|demande/(?'
                            .'|partenariat/(?'
                                .'|([^/]++)(*:145)'
                                .'|traitement(*:163)'
                            .')'
                            .'|details/([^/]++)(*:188)'
                            .'|valider/([^/]++)(*:212)'
                            .'|annuler/([^/]++)(*:236)'
                        .')'
                        .'|e(?'
                            .'|mplois/details/([^/]++)(*:272)'
                            .'|ntreprise/(?'
                                .'|details/([^/]++)(*:309)'
                                .'|update/([^/]++)/([^/]++)(*:341)'
                            .')'
                            .'|venement/details/([^/]++)(*:375)'
                        .')'
                        .'|realisation/(?'
                            .'|([^/]++)(*:407)'
                            .'|delete/([^/]++)(*:430)'
                            .'|update/([^/]++)(*:453)'
                        .')'
                        .'|p(?'
                            .'|a(?'
                                .'|ge/about/section2/edit/([^/]++)(*:501)'
                                .'|rtenaire/update/([^/]++)(*:533)'
                            .')'
                            .'|roduit/(?'
                                .'|edit/([^/]++)(*:565)'
                                .'|archive/([^/]++)(*:589)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategorie/(?'
                                .'|article/(?'
                                    .'|([^/]++)(*:634)'
                                    .'|archive/([^/]++)(*:658)'
                                .')'
                                .'|produit/([^/]++)(*:683)'
                            .')'
                            .'|o(?'
                                .'|mmandes/details/([^/]++)(*:720)'
                                .'|tisation/(?'
                                    .'|clore/([^/]++)(*:754)'
                                    .'|([^/]++)(*:770)'
                                .')'
                            .')'
                        .')'
                        .'|forum/sujet/([^/]++)(*:801)'
                        .'|thematique/(?'
                            .'|update/([^/]++)(*:838)'
                            .'|archive/([^/]++)(*:862)'
                        .')'
                    .')'
                    .'|genda/(?'
                        .'|([^/]++)(*:889)'
                        .'|details/([^/]++)(*:913)'
                    .')'
                    .'|nnuaire/([^/_]++)_([^/]++)(*:948)'
                    .'|lter/comment/([^/]++)(*:977)'
                .')'
                .'|/blog/(?'
                    .'|categorie(?:/([^/]++))?(*:1018)'
                    .'|article/([^/]++)(*:1043)'
                .')'
                .'|/c(?'
                    .'|lient/commandes/details/([^/]++)(*:1090)'
                    .'|o(?'
                        .'|mmande/success/([^/]++)(*:1126)'
                        .'|tisation/(?'
                            .'|([^/]++)(*:1155)'
                            .'|make/([^/]++)(*:1177)'
                            .'|sucess/memba/([^/]++)(*:1207)'
                        .')'
                    .')'
                    .'|hange/comment/([^/]++)(*:1240)'
                .')'
                .'|/depot/admin/(?'
                    .'|accept/([^/]++)(*:1281)'
                    .'|reject/([^/]++)(*:1305)'
                .')'
                .'|/emplois/details/([^/]++)(*:1340)'
                .'|/forum(?'
                    .'|(?:/([^/]++))?(*:1372)'
                    .'|/sujet/([^/]++)(*:1396)'
                .')'
                .'|/membre/emplois/details/([^/]++)(*:1438)'
                .'|/newsletter/details/([^/]++)(*:1475)'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:1507)'
                    .'|remove/([^/]++)(*:1531)'
                .')'
                .'|/shop/(?'
                    .'|details/([^/]++)(*:1566)'
                    .'|categorie/([^/]++)(*:1593)'
                .')'
                .'|/recharge/([^/]++)(*:1621)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_admin_account_delete', '_controller' => 'App\\Controller\\AdminAddAccountController::update'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'app_update_membre', '_controller' => 'App\\Controller\\AdminBureauController::updateMembre'], ['id'], null, null, false, true, null]],
        102 => [[['_route' => 'app_admin_article_details', '_controller' => 'App\\Controller\\BlogController::AdminArticleDetails'], ['slug'], null, null, false, true, null]],
        145 => [[['_route' => 'admin_demande_partenariat_details', '_controller' => 'App\\Controller\\AdminDemandePartenariatController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => 'admin_demande_partenariat_traitement', '_controller' => 'App\\Controller\\AdminDemandePartenariatController::traitement'], [], ['POST' => 0], null, false, false, null]],
        188 => [[['_route' => 'details_demande', '_controller' => 'App\\Controller\\DemandeController::details'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'valider_demande', '_controller' => 'App\\Controller\\DemandeController::validationDemande'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'annuler_demande', '_controller' => 'App\\Controller\\DemandeController::annulationDemande'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'admin_emplois_details', '_controller' => 'App\\Controller\\AdminEmploisController::details'], ['slug'], null, null, false, true, null]],
        309 => [[['_route' => 'admin_entreprise_details', '_controller' => 'App\\Controller\\AdminEntrepriseController::details'], ['slug'], null, null, false, true, null]],
        341 => [[['_route' => 'admin_entreprise_update', '_controller' => 'App\\Controller\\AdminEntrepriseController::update'], ['slug', 'etat'], null, null, false, true, null]],
        375 => [[['_route' => 'admin_evenement_details', '_controller' => 'App\\Controller\\AdminEvenementController::details'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'app_realisation_details', '_controller' => 'App\\Controller\\AdminPageAboutController::realisationDetails'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'app_delete_realisation', '_controller' => 'App\\Controller\\AdminPageAboutController::deleteRealisation'], ['id'], null, null, false, true, null]],
        453 => [[['_route' => 'app_realisation_update', '_controller' => 'App\\Controller\\AdminPageAboutController::updateRealisation'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'page_about_section2_edit', '_controller' => 'App\\Controller\\AdminPageAboutController::section2edit'], ['id'], null, null, false, true, null]],
        533 => [[['_route' => 'app_admin_partenaire_update', '_controller' => 'App\\Controller\\AdminPartenaireController::update'], ['id'], null, null, false, true, null]],
        565 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitAdminController::editProduit'], ['slug'], null, null, false, true, null]],
        589 => [[['_route' => 'app_produit_archive', '_controller' => 'App\\Controller\\ProduitAdminController::archiveProduit'], ['slug'], null, null, false, true, null]],
        634 => [[['_route' => 'app_categorie_article_update', '_controller' => 'App\\Controller\\CategorieArticleController::updateCategorie'], ['id'], null, null, false, true, null]],
        658 => [[['_route' => 'app_categorie_article_archive', '_controller' => 'App\\Controller\\CategorieArticleController::removeCategorie'], ['id'], null, null, false, true, null]],
        683 => [[['_route' => 'app_produit_categorie_update', '_controller' => 'App\\Controller\\CategorieProduitController::updateCategorie'], ['id'], null, null, false, true, null]],
        720 => [[['_route' => 'app_commande_details', '_controller' => 'App\\Controller\\CommandeController::commandeDetails'], ['id'], null, null, false, true, null]],
        754 => [[['_route' => 'app_cotisation_cloture', '_controller' => 'App\\Controller\\CotisationController::cloreCotisation'], ['id'], null, null, false, true, null]],
        770 => [[['_route' => 'app_cotisation_details_admin', '_controller' => 'App\\Controller\\CotisationController::detailsCotisationAdmin'], ['id'], null, null, false, true, null]],
        801 => [[['_route' => 'app_forum_admin_sujet_details', '_controller' => 'App\\Controller\\ForumController::SujetDetailsAdmin'], ['slug'], null, null, false, true, null]],
        838 => [[['_route' => 'app_thematique_update', '_controller' => 'App\\Controller\\ThematiqueController::updateThematique'], ['id'], null, null, false, true, null]],
        862 => [[['_route' => 'app_thematique_archive', '_controller' => 'App\\Controller\\ThematiqueController::removeThematique'], ['id'], null, null, false, true, null]],
        889 => [[['_route' => 'app_agenda_categorie', '_controller' => 'App\\Controller\\AgendaController::filterByCategorie'], ['id'], null, null, false, true, null]],
        913 => [[['_route' => 'app_agenda_details', '_controller' => 'App\\Controller\\AgendaDetailsController::index'], ['id'], null, null, false, true, null]],
        948 => [[['_route' => 'app_annuaire_details', '_controller' => 'App\\Controller\\AnnuaireController::details'], ['prenom', 'nom'], ['GET' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_article_alter_comment', '_controller' => 'App\\Controller\\BlogController::changeCommentState'], ['id'], null, null, false, true, null]],
        1018 => [[['_route' => 'app_blog', 'filter' => 'all', '_controller' => 'App\\Controller\\BlogController::index'], ['filter'], null, null, false, true, null]],
        1043 => [[['_route' => 'app_blog_article_details', '_controller' => 'App\\Controller\\BlogController::articleDetails'], ['slug'], null, null, false, true, null]],
        1090 => [[['_route' => 'app_client_commande_details', '_controller' => 'App\\Controller\\CommandeController::commandeClientDetails'], ['id'], null, null, false, true, null]],
        1126 => [[['_route' => 'app_client_commande_success', '_controller' => 'App\\Controller\\CommandeController::commandeValide'], ['ref'], null, null, false, true, null]],
        1155 => [[['_route' => 'app_cotisation_details', '_controller' => 'App\\Controller\\CotisationController::detailsCotisation'], ['id'], null, null, false, true, null]],
        1177 => [[['_route' => 'app_cotisation_make_1', '_controller' => 'App\\Controller\\CotisationController::make'], ['id'], null, null, false, true, null]],
        1207 => [[['_route' => 'app_cotisation_make_1_success', '_controller' => 'App\\Controller\\CotisationController::makeSucess'], ['id'], null, null, false, true, null]],
        1240 => [[['_route' => 'app_sujet_alter_comment', '_controller' => 'App\\Controller\\ForumController::changeCommentState'], ['id'], null, null, false, true, null]],
        1281 => [[['_route' => 'app_depot_accept', '_controller' => 'App\\Controller\\DepotAdminController::accepteDepot'], ['ref'], null, null, false, true, null]],
        1305 => [[['_route' => 'app_depot_reject', '_controller' => 'App\\Controller\\DepotAdminController::rejectDepot'], ['ref'], null, null, false, true, null]],
        1340 => [[['_route' => 'app_emplois_details', '_controller' => 'App\\Controller\\EmploisDetailsController::index'], ['slug'], null, null, false, true, null]],
        1372 => [[['_route' => 'app_forum', 'filter' => 'all', '_controller' => 'App\\Controller\\ForumController::index'], ['filter'], null, null, false, true, null]],
        1396 => [[['_route' => 'app_forum_sujet_details', '_controller' => 'App\\Controller\\ForumController::SujetDetails'], ['slug'], null, null, false, true, null]],
        1438 => [[['_route' => 'membre_emplois_details', '_controller' => 'App\\Controller\\MembreEmploisController::details'], ['slug'], null, null, false, true, null]],
        1475 => [[['_route' => 'app_newsletter_details', '_controller' => 'App\\Controller\\NewsletterController::letterDetails'], ['id'], null, null, false, true, null]],
        1507 => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\PanierController::addToCart'], ['id'], null, null, false, true, null]],
        1531 => [[['_route' => 'app_panier_remove', '_controller' => 'App\\Controller\\PanierController::removeFromCart'], ['id'], null, null, false, true, null]],
        1566 => [[['_route' => 'app_produit_detail', '_controller' => 'App\\Controller\\ShopController::details'], ['slug'], null, null, false, true, null]],
        1593 => [[['_route' => 'app_produit_by_category', '_controller' => 'App\\Controller\\ShopController::byCategorie'], ['id'], null, null, false, true, null]],
        1621 => [
            [['_route' => 'recharge_success', '_controller' => 'App\\Controller\\WalletController::success'], ['ref'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
