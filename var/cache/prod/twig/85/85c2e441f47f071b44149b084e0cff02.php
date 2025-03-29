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

/* agenda/index.html.twig */
class __TwigTemplate_061fac01276ddebe7e9b2989f3414f9f extends Template
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
            'page' => [$this, 'block_page'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "agenda/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
<!-- EVENTS SECTION START -->
<section class=\"events container position-relative\">
    <h2 class=\"text-center pt-5\">Evènements à venir</h2>
    <div class=\"events-carousel-container my-5 position-relative\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["future"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 12
            yield "        <div class=\"event-card event-card1 position-relative\" style=\"background-image: linear-gradient(rgba(0, 24, 69, 0.7), rgba(0, 24, 69, 0.7)), url('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("evenements/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "images", [], "any", false, false, false, 12)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 12), "html", null, true);
            yield "');\">
            <div class=\"event-card-badge position-absolute\">
                <span class=\"text-center\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "date", [], "any", false, false, false, 14), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</span>
            </div>
            <div class=\"event-card-content\">
                <h3>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "title", [], "any", false, false, false, 17), "html", null, true);
            yield "</h3>
                
                <div class = \"row mb-2\">
                    <div class = \"col-8\"><h5>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "startAt", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "endAt", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            yield "</h5></div>
                    <div class = \"col-4\"> <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\"> Details </a> </div>
                </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "       
      
        
    </div>
    <div class=\"events-btn position-absolute\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
            <button type=\"button\" id=\"events-arrow-left\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-left\"></i></button>
            <button type=\"button\" id=\"events-arrow-right\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-angle-right\"></i></button>
        </div>
    </div>
</section>
<!-- EVENTS SECTION END -->

<!-- SECOND SECTION START -->
<section class=\"second\">
    <div class=\"container\">
        <main class=\"col-lg-12\">
            <h2 class=\"text-center second-title pt-5\">Activités passées</h2>
            <header class=\"d-sm-flex align-items-center border-bottom mb-4 pb-3\">
                <strong class=\"d-block py-2\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numberPast"] ?? null), "html", null, true);
        yield " articles trouvés </strong>
                <div class=\"ms-auto\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                          Categories
                        </button>
                        <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"#\">Toutes les catégories</a></li>
                          <li><hr class=\"dropdown-divider\"></li>
                          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 55
            yield "                          <li><a class=\"dropdown-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</a></li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                          
                        </ul>
                      </div>
                   
                </div>
            </header>
            
            
            <div class=\"row\">
              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["past"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 67
            yield "              <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <figure class=\"card card-product-grid\">
                        
                        <div class=\"img-wrap\" style=\"background-image: url('";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("evenements/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "images", [], "any", false, false, false, 70)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "path", [], "any", false, false, false, 70), "html", null, true);
            yield "');\"> </div>
                        <figcaption class=\"info-wrap border-top\">
                            <h3>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "title", [], "any", false, false, false, 72), "html", null, true);
            yield "</h3>
                            <div class=\"article-infos\">
                                <a class=\"btn btn-outline-primary btn-sm mb-2\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\"> Details </a> 
                                <div class=\"article-date\"><i class=\"fa-solid fa-calendar-days pb-2\"></i> Le ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "date", [], "any", false, false, false, 75), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "startAt", [], "any", false, false, false, 75), "H:i"), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "endAt", [], "any", false, false, false, 75), "H:i"), "html", null, true);
            yield "</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                


            </div>
           
        </main>
    </div>
</section>
<!-- SECOND SECTION END -->

<!-- PARTNERS SECTION START -->
<section class=\"partners container\">
    <h2 class=\"text-center py-5\">Nos partenaires</h2>
    <div class=\"partners-carousel-container pb-5\">
        
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 97
            yield "        <div class=\"d-flex justify-content-center align-items center\">
            <img src=\"/partenaires/";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "logo", [], "any", false, false, false, 98), "html", null, true);
            yield "\" alt=\"\" style=\"width: 200px; object-fit: cover\">    
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "    </div>
</section>
<!-- PARTNERS SECTION END -->


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agenda/index.html.twig";
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
        return array (  248 => 101,  239 => 98,  236 => 97,  232 => 96,  215 => 81,  199 => 75,  195 => 74,  190 => 72,  184 => 70,  179 => 67,  175 => 66,  164 => 57,  153 => 55,  149 => 54,  137 => 45,  116 => 26,  105 => 21,  99 => 20,  93 => 17,  87 => 14,  80 => 12,  76 => 11,  69 => 6,  62 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "agenda/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/agenda/index.html.twig");
    }
}
