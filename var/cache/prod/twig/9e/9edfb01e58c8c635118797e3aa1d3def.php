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

/* shop/produit.details.html.twig */
class __TwigTemplate_e326f324d11d11187c9ed8f6fe65e480 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "shop/produit.details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<!-- SECOND SECTION START -->
    <section class=\"second \">
        <div class=\"container pt-5 \">
            <div class=\"row \">
                <aside class=\"col-lg-6 \">
                    <article class=\"gallery-wrap \">
                        <div class=\"img-big-wrap img-thumbnail \">
                            <a data-fslightbox=\"mygalley \" data-type=\"image \" href=\"/produits/";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "images", [], "any", false, false, false, 11)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "getPath", [], "method", false, false, false, 11), "html", null, true);
        yield "\">
                                <img height=\"560 \" src=\"/produits/";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "images", [], "any", false, false, false, 12)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "path", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
                            </a>
                        </div>
                    </article>
                </aside>
                <main class=\"col-lg-6 \">
                    <article class=\"ps-lg-3 \">
                        <h4 class=\"title text-dark \">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "libelle", [], "any", false, false, false, 19), "html", null, true);
        yield "</h4>
                        <div class=\"mb-3 \">
                            <span class=\"price h5 \">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "prix", [], "any", false, false, false, 21), "html", null, true);
        yield " F CFA</span>
                        </div>
                        <p>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                        <hr>
                        <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"btn btn-primary \"> <i class=\"me-1 fa fa-shopping-basket \"></i> Mettre au panier </a>
                    </article>
                </main>
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->

    <section class=\"padding-y border-top\">
        <div class=\"container\">
            <header class=\"section-heading\">
                <h4 class=\"section-title\">Produits similaires</h4>
            </header>

            <div class=\"row\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["similaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 41
            yield "                <div class=\"col-lg-3 col-sm-6 col-12\">
                    <figure class=\"card card-product-grid\">
                        <div class=\"img-wrap\">
                            <img src=\"/produits/";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "images", [], "any", false, false, false, 44)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "path", [], "any", false, false, false, 44), "html", null, true);
            yield "\">
                        </div>
                        <figcaption class=\"info-wrap border-top\">
                            <a href=\"#\" class=\"title\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "libelle", [], "any", false, false, false, 47), "html", null, true);
            yield "</a>
                            <div class=\"price-wrap mb-3\">
                                <strong class=\"price\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "prix", [], "any", false, false, false, 49), "html", null, true);
            yield " F CFA</strong>
                            </div>
                            <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary w-100\">Ajouter au panier</a>
                        </figcaption>
                    </figure>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "            </div>
        </div>
        <!-- container .//  -->
    </section>
";
        yield from [];
    }

    // line 63
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
        return "shop/produit.details.html.twig";
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
        return array (  171 => 63,  162 => 56,  151 => 51,  146 => 49,  141 => 47,  135 => 44,  130 => 41,  126 => 40,  108 => 25,  103 => 23,  98 => 21,  93 => 19,  83 => 12,  79 => 11,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shop/produit.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/shop/produit.details.html.twig");
    }
}
