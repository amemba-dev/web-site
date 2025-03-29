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

/* commande/admin.commande.detail.html.twig */
class __TwigTemplate_d04de4bf1b9e1f1f2f8548329c8b7969 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.admin.html.twig", "commande/admin.commande.detail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
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
    <section class=\"second py-5 bg-gray\">
        <div class=\"container\">
            <div class=\"card\">
                <header class=\"card-header\">
                    <div class=\"row align-items-center\">
                    <form method=\"POST\" action=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\">
                        <div class=\"col-lg-6 col-md-6\">
                            <span>
                        <i class=\"material-icons md-calendar_today\"></i> <b>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "date", [], "any", false, false, false, 13)), "html", null, true);
        yield "</b>  
                      </span> <br>
                            <small class=\"text-muted\">Reference: ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "reference", [], "any", false, false, false, 15), "html", null, true);
        yield "</small>
                        </div>
                        <div class=\"col-lg-6 col-md-6 ms-auto text-md-end\">
                            <select class=\"form-select d-inline-block\" name=\"etat\" style=\"max-width: 200px\">
                                ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "etat", [], "any", false, false, false, 19) == "EN ATTENTE DE CONFIRMATION")) {
            yield "<option value=\"EN COURS\">EN COURS</option><option value=\"ANNULE\">ANNULE</option>";
        }
        // line 20
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "etat", [], "any", false, false, false, 20) == "EN COURS")) {
            yield "<option value=\"TERMINE\">TERMINE</option>";
        }
        yield "   
                            </select>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    </form>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class=\"card-body\">
                    <div class=\"row mb-5 order-info-wrap\">
                        
                        
                        <div class=\"col-md-4\">
                            <article class=\"icontext align-items-start\">
                                <span class=\"icon icon-sm rounded-circle bg-primary-light\">
                                    <i class=\"text-primary fa-solid fa-location-arrow fa-2x\"></i>
                                </span>
                            </article>
                        </div>
                        <!-- col// -->
                    </div>
                    <!-- row // -->

                    <div class=\"row\">
                        
                            <div class=\"table-responsive\">
                                <table class=\"table border table-hover table-lg\">
                                    <thead>
                                        <tr>
                                            <th width=\"40%\">Produit</th>
                                            <th width=\"20%\">Prix unitaire</th>
                                            <th width=\"20%\">Quantite</th>
                                            <th width=\"20%\" class=\"text-end\">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "getDetailCommandes", [], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            yield "                                        <tr>
                                            <td>
                                                <a class=\"itemside\" href=\"#\">
                                                    <div class=\"left\">
                                                        <img src=\"produits/";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 61), "images", [], "any", false, false, false, 61)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 61), "html", null, true);
            yield "\" width=\"40\" height=\"40\" class=\"img-xs\" alt=\"Item\">
                                                    </div>
                                                    <div class=\"info\"> ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 63), "libelle", [], "any", false, false, false, 63), "html", null, true);
            yield " </div>
                                                </a>
                                            </td>
                                            <td> ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 66), "getPrix", [], "method", false, false, false, 66), "html", null, true);
            yield " </td>
                                            <td> ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "quantite", [], "any", false, false, false, 67), "html", null, true);
            yield " </td>
                                            <td class=\"text-end\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                                        <tr>
                                            <td colspan=\"4\">
                                                <article class=\"float-end\">
                                                    <dl class=\"dlist\">
                                                        <dt>Grand total:</dt>
                                                        <dd> <b class=\"h5\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "getPrixTotal", [], "method", false, false, false, 76), "html", null, true);
        yield " FCFA</b> </dd>
                                                    </dl>
                                                    <dl class=\"dlist\">
                                                        <dt class=\"text-muted\">Statut:</dt>
                                                        <dd>
                                                            <span class=\"badge rounded-pill alert-success text-success\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "etat", [], "any", false, false, false, 81), "html", null, true);
        yield "</span>
                                                        </dd>
                                                    </dl>
                                                </article>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive// -->
                       
                        <!-- col// -->
                        <!-- col// -->

                    </div>
                </div>
                <!-- button// -->
                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes");
        yield "\" class=\"btn btn-warning\">Retour</a>
                <!-- card-body end// -->
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/admin.commande.detail.html.twig";
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
        return array (  203 => 98,  183 => 81,  175 => 76,  168 => 71,  159 => 68,  155 => 67,  151 => 66,  145 => 63,  140 => 61,  134 => 57,  130 => 56,  88 => 20,  84 => 19,  77 => 15,  72 => 13,  66 => 10,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "commande/admin.commande.detail.html.twig", "/workspace/deploy/amemba-site-dev/templates/commande/admin.commande.detail.html.twig");
    }
}
