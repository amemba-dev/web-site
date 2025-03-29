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

/* accueil/index.html.twig */
class __TwigTemplate_bfedccc85f87b0d52814a8d0d7f09092 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
            'content' => [$this, 'block_content'],
            'part' => [$this, 'block_part'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.pages.html.twig", "accueil/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Accueil";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
<!-- HERO SECTION START -->
<section class=\"slider-section\">
    <i class=\"fas fa-angle-left fa-3x arrow arrow-left\" id=\"arrow-left\"></i>
    <div class=\"sliders-container\">
        <div class=\"slider sl-1\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage1", [], "any", false, false, false, 13), "html", null, true);
        yield "');\">
            <div class=\"sl-content\">
                <div class=\"sl-content-content\">
                    <h2>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre1", [], "any", false, false, false, 16), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText1", [], "any", false, false, false, 18), "html", null, true);
        yield "
                    </p>
                </div>
            </div>
        </div>
        <div class=\"slider sl-2\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage2", [], "any", false, false, false, 23), "html", null, true);
        yield "');\">
            <div class=\"sl-content\">
                <div class=\"sl-content-content\">
                    <h2>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre2", [], "any", false, false, false, 26), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText2", [], "any", false, false, false, 28), "html", null, true);
        yield "
                    </p>
                </div>
            </div>
        </div>
        <div class=\"slider sl-3\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage3", [], "any", false, false, false, 33), "html", null, true);
        yield "');\">
            <div class=\"sl-content\">
                <div class=\"sl-content-content\">
                    <h2>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre3", [], "any", false, false, false, 36), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText3", [], "any", false, false, false, 38), "html", null, true);
        yield "
                    </p>
                </div>
            </div>
        </div>
    </div>
    <i class=\"fas fa-angle-right fa-3x arrow arrow-right\" id=\"arrow-right\"></i>
</section>
<!-- HERO SECTION END -->




<!-- MISSION SECTION START -->
<section class=\"mission-section row row-cols-1 row-cols-md-2 container my-5 mx-auto\">
    <div class=\"mission-left col\">
        <div class=\"blue-bg d-flex align-items-center\">
            <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionImg", [], "any", false, false, false, 55), "html", null, true);
        yield "\">
        </div>
    </div>
    <div class=\"mission-right col\">
        <div class=\"\">
            <h3>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionTitre", [], "any", false, false, false, 60), "html", null, true);
        yield "</h3>
            <p>
                ";
        // line 62
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionText", [], "any", false, false, false, 62);
        yield "
            </p>
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"btn btn-primary\">Lire plus <i class=\"fa-solid fa-angle-right\"></i></a>
        </div>
    </div>
</section>
<!-- MISSION SECTION END -->


<!-- STATS SECTION START -->
<section class=\"stats container d-flex flex-column justify-content-between mt-5\">
    <h2 class=\"text-center my-5\" style=\"margin-bottom: 50px\">L'Amicale en chiffres</h2>
    <div class=\"stats-cards w-100 h-50 d-flex justify-content-around my-5\">
        <div class=\"stats-card\">
            <div class=\"stats-ico d-flex justify-content-center align-items-center grad\">
                <i class=\"fa-solid fa-graduation-cap fa-2x\"></i>
            </div>
            <h4 class=\"text-center\">
                <span class=\"count\"> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreAlumni", [], "any", false, false, false, 80), "html", null, true);
        yield " </span> Alumnis
            </h4>
            <p class=\"text-center\"> ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreAlumniText", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
        </div>
        <div class=\"stats-card\">
            <div class=\"stats-ico d-flex justify-content-center align-items-center chart\">
                <i class=\"fa-solid fa-chart-line fa-2x\"></i>
            </div>
            <h4 class=\"text-center\">
                <span class=\"count\"> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreProjet", [], "any", false, false, false, 89), "html", null, true);
        yield " </span> Projets
            </h4>
            <p class=\"text-center\"> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreProjetText", [], "any", false, false, false, 91), "html", null, true);
        yield "</p>
         </div>
        <div class=\"stats-card\">
            <div class=\"stats-ico d-flex justify-content-center align-items-center money\">
                <i class=\"fa-solid fa-money-bill fa-2x\"></i>
            </div>
            <h4 class=\"text-center\">
                <span class=\"count\"> ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreFonds", [], "any", false, false, false, 98), "html", null, true);
        yield " </span> Millions
            </h4>
            <p class=\"text-center\"> ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreFondsText", [], "any", false, false, false, 100), "html", null, true);
        yield " </p>
        </div>
    </div>
</section>
<!-- STATS SECTION END -->

<!-- CTA SECTION START -->
<section class=\"cta\">
    <div class=\"container d-flex flex-column justify-content-around h-100 py-5\">
        <h2 class=\"text-center\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "entrepriseTitre", [], "any", false, false, false, 109), "html", null, true);
        yield "</h2>
        <p class=\"text-center\">
            ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "entrepriseTexte", [], "any", false, false, false, 111), "html", null, true);
        yield "
        </p>
        <div class=\"w-100 d-flex justify-content-center\">
            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_partenariat");
        yield "\" class=\"btn btn-primary\">Demander un partenariat <i class=\"fa-solid fa-angle-right\"></i></a>
        </div>
    </div>
</section>
<!-- CTA SECTION END -->



<!-- WEN SECTION START -->

<section class=\"wen container\">
    <h2 class=\"text-center py-5\">PAROLE AUX ANCIENNES</h2>
    <div class=\"wen-cards container mx-auto\">
        <div class=\"wen-cards-duo\">
            <div class=\"card1 wen-card col position-relative\">
                <p>
                    “";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText3", [], "any", false, false, false, 130), "html", null, true);
        yield "“
                </p>
                <h5 class=\"position-absolute\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur3", [], "any", false, false, false, 132), "html", null, true);
        yield "</h5>
            </div>
            <div class=\"card2 wen-card col d-flex align-items-end\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg1", [], "any", false, false, false, 134), "html", null, true);
        yield "');\">
                <div class=\"wen-card-video\">
                    <h5>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur1", [], "any", false, false, false, 136), "html", null, true);
        yield "</h5>
                    <h3>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageTitre1", [], "any", false, false, false, 137), "html", null, true);
        yield "</h3>
                    <p>“";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText1", [], "any", false, false, false, 138), "html", null, true);
        yield "“ </p>
                </div>
            </div>
        </div>
        <div class=\"wen-cards-duo \">
            <div class=\"card3 wen-card col d-flex align-items-end\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg2", [], "any", false, false, false, 143), "html", null, true);
        yield "');\">
                <div class=\"wen-card-video position-relative\">
                    <h5>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur2", [], "any", false, false, false, 145), "html", null, true);
        yield "</h5>
                    <h3>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageTitre2", [], "any", false, false, false, 146), "html", null, true);
        yield "</h3>
                    <p>“";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText2", [], "any", false, false, false, 147), "html", null, true);
        yield "“ </p>  
                </div>
            </div>
            <div class=\"card4 wen-card col position-relative\">
                <p>
                    “";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText4", [], "any", false, false, false, 152), "html", null, true);
        yield "“ 
                </p>
                <h5 class=\"position-absolute\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur4", [], "any", false, false, false, 154), "html", null, true);
        yield "</h5>
            </div>
        </div>
    </div>
</section>
<!-- WEN SECTION END -->


<!-- BLOG SECTION START -->
<section class=\"blog container position-relative mt-3\">
    <h2 class=\"text-center pt-5\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blogTitre", [], "any", false, false, false, 164), "html", null, true);
        yield "</h2>
    <p>
        ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blogText", [], "any", false, false, false, 166), "html", null, true);
        yield "
    </p>
    <div class=\"blog-carousel-container pb-5\">
        ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 170
            yield "        <div class=\"blog-card\">
            <div class=\"blog-card-top\">
                <img src=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/blog/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["art"], "images", [], "any", false, false, false, 172)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 172), "html", null, true);
            yield "\" alt=\"\">
            </div>
            <div class=\"blog-card-bottom\">
                <h4>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["art"], "titre", [], "any", false, false, false, 175), "html", null, true);
            yield "</h4>
                <a href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["art"], "slug", [], "any", false, false, false, 176)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Lire plus</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['art'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "        
    </div>
    <div class=\"blog-btn position-absolute\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
            <button type=\"button\" id=\"blog-arrow-left\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-left\"></i></button>
            <button type=\"button\" id=\"blog-arrow-right\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-right\"></i></button>
        </div>
        <a class=\"btn btn-primary\" href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        yield "\">Voir tout <i class=\"fa-solid fa-angle-right\"></i></a>
    </div>
</section>
<!-- BLOG SECTION END -->

";
        // line 192
        if ((($context["events"] ?? null) != null)) {
            // line 193
            yield "<!-- EVENTS SECTION START -->
    <section class=\"events container position-relative\">
        <h2 class=\"text-center pt-5\">Evènements à venir</h2>
        <div class=\"events-carousel-container my-5 position-relative\">
            
            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
                // line 199
                yield "            <div class=\"event-card event-card1 position-relative\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('evenements/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "images", [], "any", false, false, false, 199)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "path", [], "any", false, false, false, 199), "html", null, true);
                yield "');\">
                <div class=\"event-card-badge position-absolute\">
                    <span class=\"text-center\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "date", [], "any", false, false, false, 201), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
                yield "</span>
                </div>
                <div class=\"event-card-content\">
                    <h3>";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "title", [], "any", false, false, false, 204), "html", null, true);
                yield "</h3>
                    
                    <div class = \"row mb-2\">
                        <div class = \"col-8\"><h5>";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "startAt", [], "any", false, false, false, 207), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "endAt", [], "any", false, false, false, 207), "H:i"), "html", null, true);
                yield "</h5></div>
                        <div class = \"col-4\"> <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 208)]), "html", null, true);
                yield "\"> Details </a> </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "        </div>
        <div class=\"events-btn position-absolute\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                <button type=\"button\" id=\"events-arrow-left\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-left\"></i></button>
                <button type=\"button\" id=\"events-arrow-right\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-right\"></i></button>
            </div>
            <a class=\"btn btn-primary\" href=\"";
            // line 219
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
            yield "\">Voir tout <i class=\"fa-solid fa-angle-right\"></i></a>
        </div>
    </section>
<!-- EVENTS SECTION END -->
";
        }
        // line 224
        yield "
<!-- OLD SECTION START -->
<section class=\"old\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg3", [], "any", false, false, false, 226), "html", null, true);
        yield "');\">
    <div class=\"container d-flex flex-column justify-content-around h-100 py-5\">
        <h2 class=\"text-center\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "membreTitre", [], "any", false, false, false, 228), "html", null, true);
        yield "</h2>
        <p class=\"text-center\">
            ";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "membreText", [], "any", false, false, false, 230), "html", null, true);
        yield "
        </p>
        <div class=\"w-100 d-flex justify-content-center\">
            <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary btn-lg\">Adhérer</a>
        </div>
    </div>
</section>
<!-- OLD SECTION END -->

<!-- PARTNERS SECTION START -->
<section class=\"partners container\">
    <h2 class=\"text-center py-5\">Nos partenaires</h2>
    <div class=\"partners-carousel-container pb-5\">

        ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 245
            yield "        <div class=\"d-flex justify-content-center align-items center\">
            <img src=\"/partenaires/";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "logo", [], "any", false, false, false, 246), "html", null, true);
            yield "\" alt=\"\" style=\"width: 200px; object-fit: cover\">
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "    </div>
</section>
<!-- PARTNERS SECTION END -->


<!-- NEWSLETTER SECTION START -->
    <section class=\"login-register\">
        <div class=\"container d-flex\">
            <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
                <div>
                    <img src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/mail_vector.svg"), "html", null, true);
        yield "\" alt=\"\">
                    <h2 class=\"mt-5 mb-3\">Inscrivez-vous à notre mailing-list</h2>
                    <p>Inscrivez-vous à notre newsletter pour être informé(e) des dernières nouvelles de l’AMEMBA en temps réel. Pas plus d'un mail par semaine.</p>
                </div>
            </div>
            <div class=\"login-right login-card\">
                <div class=\"container\">
                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 266));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 267
            yield "                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "                    <form method=\"POST\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonne");
        yield "\">
                        <h2>Entrez vos coordonnees</h2>
                        <div class=\"mt-4 row\">
                            <div class=\"col\">
                                <label class=\"form-label\">Nom</label>
                                <input name=\"nom\" class=\"form-control\" placeholder=\"Doe\" type=\"text\" required>
                            </div>
                            <div class=\"col\">
                                <label class=\"form-label\">Prénom</label>
                                <input input name=\"prenom\" class=\"form-control\" placeholder=\"John\" type=\"text\" required>
                            </div>
                        </div>
                        <div class=\"mt-4\">
                            <label class=\"form-label\">Email</label>
                            <input  input name=\"mail\" class=\"form-control\" placeholder=\"john@xyz.com\" type=\"email\" required>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary mt-4\">M'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER SECTION END -->

";
        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "accueil/index.html.twig";
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
        return array (  590 => 299,  559 => 272,  549 => 268,  546 => 267,  542 => 266,  532 => 259,  520 => 249,  511 => 246,  508 => 245,  504 => 244,  490 => 233,  484 => 230,  479 => 228,  473 => 226,  469 => 224,  461 => 219,  453 => 213,  442 => 208,  436 => 207,  430 => 204,  424 => 201,  418 => 199,  414 => 198,  407 => 193,  405 => 192,  397 => 187,  388 => 180,  378 => 176,  374 => 175,  367 => 172,  363 => 170,  359 => 169,  353 => 166,  348 => 164,  335 => 154,  330 => 152,  322 => 147,  318 => 146,  314 => 145,  308 => 143,  300 => 138,  296 => 137,  292 => 136,  286 => 134,  281 => 132,  276 => 130,  257 => 114,  251 => 111,  246 => 109,  234 => 100,  229 => 98,  219 => 91,  214 => 89,  204 => 82,  199 => 80,  180 => 64,  175 => 62,  170 => 60,  161 => 55,  141 => 38,  136 => 36,  129 => 33,  121 => 28,  116 => 26,  109 => 23,  101 => 18,  96 => 16,  89 => 13,  82 => 8,  75 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "accueil/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/accueil/index.html.twig");
    }
}
