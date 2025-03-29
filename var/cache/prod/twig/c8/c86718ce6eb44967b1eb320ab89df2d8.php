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

/* base.front.html.twig */
class __TwigTemplate_3375627c81da6d0b537392a2122e6778 extends Template
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
            'content' => [$this, 'block_content'],
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
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield "front/css/style.css";
        yield "\">
</head>
<body>
    <!-- NAVBAR START -->
    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container h-100\">
            <a href=\"#\"><img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_draw.png"), "html", null, true);
        yield "\"  style=\"width: 50px;\" alt=\"\"></a>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\"\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\" class=\"nav-link\">Acceuil</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\">Amemba Life</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
        yield "\" class=\"dropdown-item nav-link\">Activite/Agenda</a></li>
                            <li><a href=\"#\" class=\"dropdown-item nav-link\">Programme WEN</a></li>
                            <li><a href=\"#\" class=\"dropdown-item nav-link\">Partenariat</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item mx-2\">
                        <a href=\"#\" class=\"nav-link\">Blog</a>
                    </li>
                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">A propos</a>
                    </li>
                    <li class=\"nav-item mx-2\">
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"nav-link\">Boutique</a>
                    </li>
                </ul>
            </div>
            <div class=\"navbar-buttons\">
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-outline-primary mx-2\">Adhésion</a>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-primary\">Connexion <i class=\"fa-solid fa-angle-right\"></i></a>
            </div>

            


            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"fa-solid fa-bars\"></i></span>
            </button>
        </div>
    </nav>
    <!-- NAVBAR END -->
    <div class=\"top\" id=\"top\"></div>
    <div id=\"scroll-to-top\"><a href=\"#top\"><i class=\"fa-2x fa-solid fa-angle-up\"></i></a></div>
    


";
        // line 74
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 75
        yield "

<!-- FOOTER START -->
<footer>
    <div class=\"container h-100 d-flex\">
        <div class=\"card-footer\">
            <div class=\"logos my-5\">
                <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_txt/white.png"), "html", null, true);
        yield "\" alt=\"\">
                <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/identity/logo_txt/txt_white.png"), "html", null, true);
        yield "\" alt=\"\">
            </div>
            <ul class=\"coordonnees list-group\">
                <li><i class=\"fa-solid fa-location-dot\"></i>   Adresse</li>
                <li><i class=\"fa-solid fa-phone\"></i>   Numéro de téléphone </li>
                <li><i class=\"fa-solid fa-at\"></i> Adresse email</li>
            </ul>
        </div>
        <div class=\"card-footer\">
            <h4 class=\"my-5\">MEMBA LIFE</h4>
            <ul class=\"memba-life list-group\">
                <li><a href=\"#\">Activités</a></li>
                <li><a href=\"#\">Calendrier</a> </li>
                <li><a href=\"#\">Programme WEN</a></li>
                <li><a href=\"#\">Partenariats</a></li>
            </ul>
        </div>
        <div class=\"card-footer\">
            <h4 class=\"my-5\"> Mentions légales</h4>
            <ul class=\"mentions-legales list-group\">
                <li><a href=\"#\">Politique de confidentialité</a></li>
                <li><a href=\"#\">Termes et Conditions</a></li>
            </ul>
        </div>
        <div class=\"card-footer\">
            <h4 class=\"my-5\"> Nos réseaux sociaux</h4>
            <ul class=\"reseaux-sociaux list-group d-flex\">
                <li><a href=\"#\"><i class=\"fa-brands fa-instagram fa-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa-brands fa-facebook fa-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa-brands fa-twitter fa-2x\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa-brands fa-youtube fa-2x\"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- Slick JS -->
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

<!-- JavaScript Bootstrap with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 127
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

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.front.html.twig";
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
        return array (  230 => 74,  224 => 12,  217 => 11,  209 => 127,  162 => 83,  158 => 82,  149 => 75,  147 => 74,  127 => 57,  123 => 56,  115 => 51,  109 => 48,  97 => 39,  89 => 34,  82 => 30,  73 => 24,  61 => 15,  58 => 14,  56 => 11,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.front.html.twig", "/workspace/deploy/amemba-site-dev/templates/base.front.html.twig");
    }
}
