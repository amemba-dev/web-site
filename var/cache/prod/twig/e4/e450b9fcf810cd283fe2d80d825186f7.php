<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.pages.html.twig */
class __TwigTemplate_d1b1c7896f81b8a4b57fb5be9ce86412 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
            'content' => [$this, 'block_content'],
            'part' => [$this, 'block_part'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- META & CONFIG -->
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>
        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 14
        yield "    </title>
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_draw.ico"), "html", null, true);
        yield "\" rel=\"shortcut icon\" type=\"image/x-icon\">
    <!-- Slick Carousel  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css\" integrity=\"sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <!-- IntelTel Input CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/intlTelInput.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">
</head>
<body>
    <!-- NAVBAR START -->
    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container h-100\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" style=\"text-decoration: none\" >
                <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_draw.png"), "html", null, true);
        yield "\" alt=\"\">
                <p class= \"logo-title\">AMEMBA</p>
            </a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"nav-link\">Accueil</a>
                    </li>

                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">A propos</a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\">Amemba Life</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
        yield "\" class=\"dropdown-item nav-link\">Activite/Agenda</a></li>
                            <li><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_partenariat");
        yield "\" class=\"dropdown-item nav-link\">Partenariat</a></li>
                            ";
        // line 52
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52))) {
            // line 53
            yield "                                ";
            if (CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53))) {
                // line 54
                yield "                                    <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emplois");
                yield "\" class=\"dropdown-item nav-link\">Offres d'emplois</a></li>
                                ";
            }
            // line 56
            yield "                            ";
        }
        // line 57
        yield "                        </ul>
                    </li>
                    ";
        // line 59
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59))) {
            // line 60
            yield "                        ";
            if (!CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60), "roles", [], "any", false, false, false, 60))) {
                // line 61
                yield "                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\">Shop</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                // line 64
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
                yield "\" class=\"dropdown-item nav-link\">Boutique</a></li>
                                <li><a href=\"";
                // line 65
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
                yield "\" class=\"dropdown-item nav-link\">Panier</a></li>
                                ";
                // line 66
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66)) {
                    // line 67
                    yield "                                <li><a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_client");
                    yield "\" class=\"dropdown-item nav-link\">Commandes</a></li>
                                ";
                }
                // line 69
                yield "                            </ul>
                        </li>
                        ";
            } else {
                // line 72
                yield "                        <li class=\"nav-item mx-2\">
                            <a href=\"";
                // line 73
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
                yield "\" class=\"nav-link\">Boutique</a>
                        </li>
                        ";
            }
            // line 76
            yield "                    ";
        } else {
            // line 77
            yield "                    <li class=\"nav-item mx-2\">
                        <a href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
            yield "\" class=\"nav-link\">Boutique</a>
                    </li>
                    ";
        }
        // line 81
        yield "
                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        yield "\" class=\"nav-link\">Blog</a>
                    </li>
                   
                </ul>
            </div>
            ";
        // line 88
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <div class=\"navbar-buttons\">
                    <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-primary mx-2\">Adhésion</a>
                    <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">Connexion <i class=\"fa-solid fa-angle-right\"></i></a>
                </div>
            ";
        } else {
            // line 94
            yield "                ";
            if (CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94), "roles", [], "any", false, false, false, 94))) {
                // line 95
                yield "                <div class=\"membre\">
                    <a href=\"#\">
                        ";
                // line 97
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 97), "profile", [], "any", false, false, false, 97)) {
                    yield " 
                            <img src=\"/pp/";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "profile", [], "any", false, false, false, 98), "html", null, true);
                    yield "\" alt=\"avatar\" id=\"show\">
                        ";
                } else {
                    // line 100
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" id=\"show\">
                        ";
                }
                // line 102
                yield "                    </a>
                </div>
                ";
            }
            // line 105
            yield "                ";
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), "roles", [], "any", false, false, false, 105))) {
                // line 106
                yield "                <div class=\"navbar-buttons\">
                    <a href=\"";
                // line 107
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande");
                yield "\" class=\"btn btn-outline-primary mx-2\">Dashboard</a>
                </div>
                
                ";
            }
            // line 111
            yield "                <div class=\"navbar-buttons\">
                    <a href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-outline-danger mx-2\">Déconnexion</a>
                </div>
            ";
        }
        // line 115
        yield "            

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"fa-solid fa-bars\"></i></span>
            </button>
        </div>
    </nav>
    <!-- NAVBAR END -->


    <div class=\"top\" id=\"top\"></div>
    <div id=\"scroll-to-top\"><a href=\"#top\"><i class=\"fa-2x fa-solid fa-angle-up\"></i></a></div>


    ";
        // line 129
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 129))) {
            // line 130
            yield "    ";
            if (CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 130), "roles", [], "any", false, false, false, 130))) {
                // line 131
                yield "    <!-- MENU MEMBER START -->
    <div class=\"menu-membre pt-3\" style=\"height : 500px\">
        <ul class=\"list-group list-group-flush \">

            ";
                // line 135
                if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 135), "statut", [], "any", false, false, false, 135)) {
                    // line 136
                    yield "            <li class=\"list-group-item text-center\">
                <a href=\"";
                    // line 137
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_looking_for_job_activate");
                    yield "\" class=\"btn btn-primary btn-sm \">Activer mode recherche d'emploi </a>
            </li>
            ";
                } else {
                    // line 140
                    yield "            <li class=\"list-group-item text-center\">
                <a href=\"";
                    // line 141
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_looking_for_job_disable");
                    yield "\" class=\"btn btn-warning btn-sm \">Desactiver mode recherche d'emploi</a>
            </li>
            ";
                }
                // line 144
                yield "            

            <li class=\"list-group-item\">
                <a href=\"";
                // line 147
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_profile");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-user\"></i> Compte
                </a>
            </li>

            <li class=\"list-group-item\">
                <a href=\"";
                // line 153
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-money-bill-transfer\"></i> Cotisations
                </a>
            </li>

            <li class=\"list-group-item\">
                <a href=\"";
                // line 159
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-cart-arrow-down\"></i>
                   Panier
                </a>
            </li class=\"list-group-item\">

            <li class=\"list-group-item\">
                <a href=\"";
                // line 166
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_client");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-cart-shopping\"></i>   Commandes
                </a>
            </li class=\"list-group-item\">

            
            <li class=\"list-group-item\">
                <a href=\"";
                // line 173
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-money-bill\"></i> Portefeuille
                </a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
                // line 178
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annuaire");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-book\"></i> Annuaire
                </a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
                // line 183
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_entreprise");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-w\"></i> Mon entreprise
                </a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
                // line 188
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_emplois");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-briefcase\"></i> Offres d'emplois
                </a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
                // line 193
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-comments\"></i> Forum
                </a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
                // line 198
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_article_add");
                yield "\" class=\"btn\">
                    <i class=\"fa-solid fa-pen\"></i> Ecrire un article
                </a>
            </li>

            <li class=\"list-group-item\">
                <a href=\"";
                // line 204
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\" class=\"btn\">
                    <span class=\"badge rounded-pill alert-danger\">Deconnexion</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- MENU MEMBER END -->
    ";
            }
            // line 213
            yield "    ";
        }
        // line 214
        yield "    

    ";
        // line 216
        yield from $this->unwrap()->yieldBlock('page', $context, $blocks);
        // line 228
        yield "

";
        // line 230
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 231
        yield "
";
        // line 232
        yield from $this->unwrap()->yieldBlock('part', $context, $blocks);
        // line 236
        yield "
<!-- FOOTER START -->
<footer>
    <div class=\"px-xxl-5\">
        <div class=\"row\">
            <div class=\"card-footer col-sm\" >
                <div class=\"logos my-5\">
                    <img src=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_txt/white.png"), "html", null, true);
        yield "\" alt=\"\">
                </div>
            </div>
            
            <div class=\"card-footer col-sm\">
                <h4 class=\"my-5\"> Mentions légales</h4>
                <ul class=\"mentions-legales list-group\">
                    <li><a href=\"#\">Politique de confidentialité</a></li>
                    <li><a href=\"#\">Termes et Conditions</a></li>
                </ul>
            </div>

            <div class=\"card-footer col-sm\">
                <h4 class=\"my-5\">Liens utiles</h4>
                <ul class=\"memba-life list-group\">
                    <li><a href=\"http://www.mariamaba.education/\" target=\"_blank\">MEMBA</a></li>
                    <li><a href=\"https://mesr.gouv.sn/\" target=\"_blank\">Ministère de l'Enseignement supérieur</a></li>
                    <li><a href=\"https://www.education.sn/\" target=\"_blank\">Ministère de l’Éducation nationale</a></li>
                </ul>
            </div>
            <div class=\"card-footer col-sm\">
                <h4 class=\"my-5\">Notre site</h4>
                <ul class=\"memba-life list-group\">
                    <li><a href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">A propos</a></li>
                    <li><a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
        yield "\">Notre Agenda</a></li>
                    <li><a href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\">Notre Boutique</a></li>
                    <li><a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Demande d'adhésion</a> </li>
                    <li><a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_partenariat");
        yield "\">Demande de partenariat</a> </li>
                </ul>
            </div>

            <div class=\"card-footer col-sm\">
                <h4 class=\"my-5\"> Nos réseaux sociaux</h4>
                ";
        // line 287
        yield "                ";
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SocialsController::indexFooter"));
        // line 289
        yield "
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->


<script src=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/form-edit/ckeditor.js"), "html", null, true);
        yield "\"></script>
<!-- Slick JS -->
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
";
        // line 302
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 303
        yield "<!-- JavaScript Bootstrap with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/script.js"), "html", null, true);
        yield "\" defer></script>

</body>
</html>";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "        Amicale des Anciennes Eleves de Mariama Ba
        ";
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 217
        yield "     <!-- FIRST SECTION START -->
    <section class=\"first d-flex justify-content-center align-items-center\">
        <div class=\"container\">
            <h2 class=\"first-title text-center mb-4\">Titre</h2>
            <p class=\"text-center\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna donec nulla eu purus sed pharetra. Enim vel sed posuere ut massa ut. Non sit imperdiet enim at diam orci augue sit ultrices. Rhoncus et ipsum, quis egestas scelerisque viverra id sit
            </p>
        </div>
    </section>
    <!-- FIRST SECTION END -->
    ";
        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    // line 232
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 233
        yield "

";
        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.pages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  604 => 302,  597 => 233,  590 => 232,  579 => 230,  564 => 217,  557 => 216,  551 => 12,  544 => 11,  535 => 305,  531 => 303,  529 => 302,  521 => 297,  511 => 289,  508 => 287,  499 => 270,  495 => 269,  491 => 268,  487 => 267,  483 => 266,  457 => 243,  448 => 236,  446 => 232,  443 => 231,  441 => 230,  437 => 228,  435 => 216,  431 => 214,  428 => 213,  416 => 204,  407 => 198,  399 => 193,  391 => 188,  383 => 183,  375 => 178,  367 => 173,  357 => 166,  347 => 159,  338 => 153,  329 => 147,  324 => 144,  318 => 141,  315 => 140,  309 => 137,  306 => 136,  304 => 135,  298 => 131,  295 => 130,  293 => 129,  277 => 115,  271 => 112,  268 => 111,  261 => 107,  258 => 106,  255 => 105,  250 => 102,  244 => 100,  239 => 98,  235 => 97,  231 => 95,  228 => 94,  222 => 91,  218 => 90,  215 => 89,  213 => 88,  205 => 83,  201 => 81,  195 => 78,  192 => 77,  189 => 76,  183 => 73,  180 => 72,  175 => 69,  169 => 67,  167 => 66,  163 => 65,  159 => 64,  154 => 61,  151 => 60,  149 => 59,  145 => 57,  142 => 56,  136 => 54,  133 => 53,  131 => 52,  127 => 51,  123 => 50,  114 => 44,  107 => 40,  98 => 34,  94 => 33,  85 => 27,  81 => 26,  76 => 24,  64 => 15,  61 => 14,  59 => 11,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.pages.html.twig", "/workspace/deploy/amemba-site-dev/templates/base.pages.html.twig");
    }
}
