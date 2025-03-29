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

/* base.admin.html.twig */
class __TwigTemplate_4ffb943bb3113be1abff9c64de1975fd extends Template
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
            'style' => [$this, 'block_style'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/bootstrap.css"), "html", null, true);
        yield "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendors/iconly/bold.css"), "html", null, true);
        yield "\">
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 15
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendors/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/app.css"), "html", null, true);
        yield "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/favicon.svg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
</head>

<body>
    <div id=\"app\">
        <div id=\"sidebar\" class=\"active\">
            <div class=\"sidebar-wrapper active\">
    <div class=\"sidebar-header\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"logo\">
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/images/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Logo\" srcset=\"\"></a>
            </div>
        </div>
    </div>
    <div class=\"sidebar-menu\">
        <ul class=\"menu\">
            <li
                class=\"sidebar-item active \">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-grid-fill\"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            
            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-person-lines-fill\"></i>
                    <span>Demandes</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande");
        yield "\">Adhésion</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_demande_partenariat");
        yield "\">Partenariat</a>
                    </li>
                    
                </ul>
            </li>

            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-calendar-event-fill\"></i>
                    <span>Agenda</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_evenement");
        yield "\">Catégorie d'evenements</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evenement");
        yield "\">Evenements</a>
                    </li>
                </ul>
            </li>

            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-cart-check-fill\"></i>
                    <span>Boutique</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_produit");
        yield "\">Catégorie de produit</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_admin");
        yield "\">Gestion des produit</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes");
        yield "\">Gestion des commandes</a>
                    </li>
                </ul>
            </li>
            <!--

            <li
                class=\"sidebar-item  \">
                <a href=\"\" class='sidebar-link'>
                    <i class=\"bi bi-grid-1x2-fill\"></i>
                    <span>Commandes</span>
                </a>
            </li>
            -->
            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-stickies-fill\"></i>
                    <span>Entreprises/emplois</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entreprise");
        yield "\">Gestion des entreprises</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_emplois");
        yield "\">Offres d'emplois</a>
                    </li>
                </ul>
            </li>
            
            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-file-earmark-font-fill\"></i>
                    <span>Blog/Forum</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_article");
        yield "\">Gestion des catégorie d'article</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article");
        yield "\">Gestion des articles</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_thematique");
        yield "\">Thématique de forum</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_forum");
        yield "\">Gestion des questions</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_admin");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-person-plus-fill\"></i>
                    <span>Depots Wallet</span>
                </a>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_admin");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-wallet-fill\"></i>
                    <span>Cotisations</span>
                </a>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_membre");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-person-plus-fill\"></i>
                    <span>Ajout de membre</span>
                </a>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_membre_modif");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-person-plus-fill\"></i>
                    <span>Mettre à jour un membre</span>
                </a>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_bureau");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-people-fill\"></i>
                    <span>Bureau</span>
                </a>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_partenaire");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-people-fill\"></i>
                    <span>Partenaires</span>
                </a>
            </li>
            
            <li
                class=\"sidebar-item  \">
                <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-puzzle-fill\"></i>
                    <span>News letter</span>
                </a>
            </li>

            <li
                class=\"sidebar-item  has-sub\">
                <a href=\"#\" class='sidebar-link'>
                    <i class=\"bi bi-calendar-event-fill\"></i>
                    <span>Contenu des pages</span>
                </a>
                <ul class=\"submenu \">
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_page_accueil");
        yield "\">Page d'accueil</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_page_about");
        yield "\">Page About</a>
                    </li>
                    <li class=\"submenu-item \">
                        <a href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer");
        yield "\">Réseaux Sociaux</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_account");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-person-lines-fill\"></i>
                    <span>Gestion des admin</span>
                </a>
            </li>
            
            

            <li class=\"sidebar-item  \">
                <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class='sidebar-link'>
                    <i class=\"bi bi-box-arrow-left\"></i>
                    <span class=\"text-danger\">Déconnexion</span>
                </a>
            </li>
            
           
            
        </ul>
    </div>
    <button class=\"sidebar-toggler btn x\"><i data-feather=\"x\"></i></button>
</div>
        </div>
        <div id=\"main\">
            <header class=\"mb-3\">
                <a href=\"#\" class=\"burger-btn d-block d-xl-none\">
                    <i class=\"bi bi-justify fs-3\"></i>
                </a>
            </header>

            <div class=\"page-heading\">
                <h3>";
        // line 242
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h3>
            </div>

            <div class=\"page-content\">
               

                ";
        // line 248
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 250
        yield "
            </div>


            <footer>
                <div class=\"footer clearfix mb-0 text-muted\">
                    <div class=\"float-start\">
                        <p>2022 &copy; WinigaJordan</p>
                    </div>
                    
                </div>
            </footer>
        </div>
    </div>
    ";
        // line 264
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 265
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/script.js"), "html", null, true);
        yield "\" defer></script>
    <script src=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendors/apexcharts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/pages/dashboard.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/mazer.js"), "html", null, true);
        yield "\"></script>
</body>

</html>
";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Admin ";
        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 249
        yield "                ";
        yield from [];
    }

    // line 264
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
        return "base.admin.html.twig";
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
        return array (  482 => 264,  477 => 249,  470 => 248,  459 => 242,  449 => 14,  439 => 270,  435 => 269,  431 => 268,  427 => 267,  423 => 266,  418 => 265,  416 => 264,  400 => 250,  398 => 248,  389 => 242,  365 => 221,  353 => 212,  344 => 206,  338 => 203,  332 => 200,  315 => 186,  304 => 178,  294 => 171,  284 => 164,  274 => 157,  264 => 150,  254 => 143,  245 => 137,  239 => 134,  233 => 131,  227 => 128,  211 => 115,  205 => 112,  180 => 90,  174 => 87,  168 => 84,  152 => 71,  146 => 68,  129 => 54,  123 => 51,  95 => 28,  82 => 18,  78 => 17,  74 => 16,  69 => 15,  67 => 14,  63 => 13,  58 => 11,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.admin.html.twig", "/workspace/deploy/amemba-site-dev/templates/base.admin.html.twig");
    }
}
