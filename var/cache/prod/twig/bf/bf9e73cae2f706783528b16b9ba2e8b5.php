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

/* panier/panier.html.twig */
class __TwigTemplate_3d2508efcd3a058cea366cf61edea2c4 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "panier/panier.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Panier";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"card\">
                        <div class=\"content-body\">
                            <h4 class=\"card-title mb-4\">Votre panier</h4>
                            <form method=\"POST\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_update");
        yield "\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            yield "                            <article class=\"row gy-3 mb-4\">
                                <div class=\"col-lg-5\">
                                    <figure class=\"itemside me-lg-5\">
                                        <div class=\"aside\"><img src=\"produits/";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = $context["i"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["produit"] ?? null) : null), "images", [], "any", false, false, false, 20)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 20), "html", null, true);
            yield "\" class=\"img-sm img-thumbnail\"></div>
                                        <figcaption class=\"info\">
                                            <p class=\"text-muted\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["i"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["produit"] ?? null) : null), "libelle", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class=\"col-auto\">
                                    <div class=\"form-group\">
                                      <label for=\"\"></label>
                                      <input type=\"Number\"
                                        class=\"form-control\" name=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = $context["i"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["produit"] ?? null) : null), "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["i"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["quantite"] ?? null) : null), "html", null, true);
            yield "\" id=\"\" aria-describedby=\"helpId\" placeholder=\"\">
                                      <small id=\"helpId\" class=\"form-text text-muted\">Quantite</small>
                                    </div>
                                </div>
                                <div class=\"col-lg-2 col-sm-4 col-6\">
                                    <div class=\"price-wrap lh-sm\">
                                        <var class=\"price h6\">Total: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["i"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["produit"] ?? null) : null), "prix", [], "any", false, false, false, 36) * (($_v6 = $context["i"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["quantite"] ?? null) : null)), "html", null, true);
            yield "</var> <br>
                                        <small class=\"text-muted\">PU: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v7 = $context["i"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["produit"] ?? null) : null), "prix", [], "any", false, false, false, 37), "html", null, true);
            yield " </small>
                                    </div>
                                </div>
                                <div class=\"col-lg col-sm-4\">
                                    <div class=\"float-lg-end\">
                                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["i"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["produit"] ?? null) : null), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-light text-danger\"> Supprimer</a>
                                    </div>
                                </div>
                            </article>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                            ";
        if ((($context["total"] ?? null) > 0)) {
            // line 48
            yield "                            <div class=\"cart-buttons\">
\t\t\t\t\t\t\t    <input  type=\"submit\" class=\"btn btn-primary\" value=\"Actualiser le panier\" class=\"boxed-btn\">
\t\t\t\t\t\t    </div>
                            ";
        } else {
            // line 52
            yield "                            <p>Votre panier est vide !!! </p>
                            ";
        }
        // line 54
        yield "                            </form>
                        </div>

                        <!-- <div class=\"content-body border-top\">
                            <p><i class=\"me-2 text-muted fa-lg fa fa-truck\"></i> Free Delivery within 1-2 weeks</p>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        </div> -->

                    </div>

                </div>
                <aside class=\"col-lg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <dl class=\"dlist-align\">
                                <dt>Total:</dt>
                                <dd class=\"text-end text-dark h5\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</dd>
                            </dl>
                            <div class=\"d-grid gap-2 my-3\">
                                ";
        // line 73
        if ((($context["total"] ?? null) > 0)) {
            // line 74
            yield "                                    ";
            if ((($context["membre"] ?? null) == 1)) {
                // line 75
                yield "                                    <div class=\"accordion\" id=\"accordionExample\">
                                        <div class=\"accordion-item\">
                                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                              Valider le panier
                                            </button>
                                          </h2>
                                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                                            <div class=\"accordion-body\">
                                                <a href=\"";
                // line 84
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande");
                yield "\" class=\"btn btn-success w-100\"> Poursuivre l'achat </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class=\"accordion-item\">
                                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                                              Payer avec wallet
                                            </button>
                                          </h2>
                                          <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                                            <div class=\"accordion-body\">
                                              ";
                // line 96
                if ((($context["visible"] ?? null) == 1)) {
                    // line 97
                    yield "                                               Solde : <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solde"] ?? null), "html", null, true);
                    yield " XOF</strong> <br>
                                               <a href=\"";
                    // line 98
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add_with_wallet");
                    yield "\" class=\"btn btn-success w-100\"> Payer </a>
                                              ";
                } else {
                    // line 100
                    yield "                                                    Montant insuffisant pour valider le panier              
                                              ";
                }
                // line 102
                yield "                                            </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    ";
            } else {
                // line 108
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add");
                yield "\" class=\"btn btn-success w-100\"> Poursuivre l'achat </a>
                                    ";
            }
            // line 110
            yield "                                ";
        }
        // line 111
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"btn btn-light w-100\"> Retour à la boutique </a>
                                
                            </div>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->


    
";
        yield from [];
    }

    // line 129
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
        return "panier/panier.html.twig";
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
        return array (  278 => 129,  256 => 111,  253 => 110,  247 => 108,  239 => 102,  235 => 100,  230 => 98,  225 => 97,  223 => 96,  208 => 84,  197 => 75,  194 => 74,  192 => 73,  186 => 70,  168 => 54,  164 => 52,  158 => 48,  155 => 47,  144 => 42,  136 => 37,  132 => 36,  121 => 30,  110 => 22,  105 => 20,  100 => 17,  96 => 16,  92 => 15,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "panier/panier.html.twig", "/workspace/deploy/amemba-site-dev/templates/panier/panier.html.twig");
    }
}
