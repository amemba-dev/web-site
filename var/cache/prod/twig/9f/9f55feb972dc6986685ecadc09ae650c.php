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

/* shop/index.html.twig */
class __TwigTemplate_e1a0964ea2ffef3fcc0d1f7e5782e490 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "shop/index.html.twig", 1);
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
<section class=\"second p-3\">
    <div class=\"shop-container\">
        <div class=\"row\">
            <aside class=\"col-lg-3\">
                ";
        // line 9
        if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9))) {
            // line 10
            yield "                <a class=\"btn btn-primary mb-3\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_client");
            yield "\">
                    Créer un compte client
                </a>
                ";
        }
        // line 14
        yield "                <button class=\"btn btn-outline-secondary mb-3 w-100  d-lg-none\" data-bs-toggle=\"collapse\" data-bs-target=\"#aside_filter\">Show filter</button>
                <div id=\"aside_filter\" class=\"collapse card d-lg-block mb-5\">
                <article class=\"filter-group\">
                    <header class=\"card-header\">
                    <a href=\"#\" class=\"title\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse_aside1\">
                        <i class=\"icon-control fa fa-chevron-down\"></i>   Categories 
                    </a>
                    </header>
                    <div class=\"collapse show\" id=\"collapse_aside1\">
                        <div class=\"card-body\">
                            <ul class=\"list-menu\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 26
            yield "                                <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_by_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 26), "html", null, true);
            yield "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                            </ul>
                        </div>
                    </div>
                </article> 
                </div>
            </aside>
            <main class=\"col-lg-9\">

                <div class=\"mb-4\">
                    <form method=\"GET\">
                        <div class=\"input-group mb-2\">
                            <input type=\"search\" name=\"search\" class=\"form-control rounded\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"search-addon\" />
                            <button type=\"submit\" class=\"btn btn-outline-primary\">search</button>
                        </div>
                    </form>
                </div>

                <header class=\"d-sm-flex align-items-center border-bottom mb-4 pb-3\">
                <strong class=\"d-block py-2\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count"] ?? null), "html", null, true);
        yield " produits trouvés </strong>
                
            </header>
            ";
        // line 49
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["produits"] ?? null)) > 0)) {
            // line 50
            yield "            <div class=\"row\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["produits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                yield "                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                  <figure class=\"card card-product-grid\">
                    <div class=\"img-wrap text-center\"> 
                      <img src=\"/produits/";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["i"], "images", [], "any", false, false, false, 55)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 55), "html", null, true);
                yield "\"> 
                    </div>
                    <figcaption class=\"info-wrap border-top\">
                      <div class=\"price-wrap\">
                        <strong class=\"price\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 59), "html", null, true);
                yield " F CFA</strong>
                      </div>
                      <p class=\"title mb-2\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "libelle", [], "any", false, false, false, 61), "html", null, true);
                yield "</p>
                      <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_detail", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "slug", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Details</a>
                      <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn btn-light btn-icon\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> </a>
                    </figcaption>
                  </figure>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "            </div>
            
            <hr>
                <div class=\"d-flex mt-4 d-flex justify-content-end\">
                    ";
            // line 72
            CoreExtension::getAttribute($this->env, $this->source, ($context["produits"] ?? null), "setPageRange", [2], "method", false, false, false, 72);
            // line 73
            yield "                    ";
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["produits"] ?? null));
            yield "
                </div>
            ";
        }
        // line 76
        yield "            </main>
        </div>
        
        </div>
</section>
<!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 84
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
        return "shop/index.html.twig";
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
        return array (  212 => 84,  201 => 76,  194 => 73,  192 => 72,  186 => 68,  175 => 63,  171 => 62,  167 => 61,  162 => 59,  155 => 55,  150 => 52,  146 => 51,  143 => 50,  141 => 49,  135 => 46,  115 => 28,  104 => 26,  100 => 25,  87 => 14,  79 => 10,  77 => 9,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "shop/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/shop/index.html.twig");
    }
}
