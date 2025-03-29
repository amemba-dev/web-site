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

/* depot_admin/index.html.twig */
class __TwigTemplate_8a4cb1cea082dfa2f5bb524dd351bd93 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "depot_admin/index.html.twig", 1);
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
        yield "        <!-- SECOND SECTION START -->
    <section class=\"content-main container\">

        <h2 class=\"content-title my-2\">Depots Wallet</h2>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card mb-4\">

                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Numero</th>
                                        <th> Nom - Promotion </th>
                                        <th>Montant</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Moyen</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["depots"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 29
            yield "                                    <tr>
                                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "numero", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "wallet", [], "any", false, false, false, 31), "membre", [], "any", false, false, false, 31), "prenom", [], "any", false, false, false, 31), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "wallet", [], "any", false, false, false, 31), "membre", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "wallet", [], "any", false, false, false, 31), "membre", [], "any", false, false, false, 31), "promotion", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "montant", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                        <td><span class=\"badge rounded-pill alert-success\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "etat", [], "any", false, false, false, 33), "html", null, true);
            yield "</span></td>
                                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "getDate", [], "method", false, false, false, 34), "d/m/Y"), "html", null, true);
            yield "</td>
                                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "moyen", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 37
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "etat", [], "any", false, false, false, 37) != "REJETE") && (CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "etat", [], "any", false, false, false, 37) != "VALIDE"))) {
                // line 38
                yield "                                            <a class=\"btn btn-primary\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_accept", ["ref" => CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "reference", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" role=\"button\">Valider</i></a>
                                            <a class=\"btn btn-primary\" href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_reject", ["ref" => CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "reference", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" role=\"button\">Rejeter</a>";
            }
            // line 40
            yield "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dep'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                                </tbody>
                            </table>
                            <div class=\"d-flex justify-content-center\">
                                ";
        // line 46
        CoreExtension::getAttribute($this->env, $this->source, ($context["depots"] ?? null), "setPageRange", [2], "method", false, false, false, 46);
        // line 47
        yield "                                ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["depots"] ?? null));
        yield "
                            </div>
                        </div>
                        <!-- table-responsive //end -->
                    </div>
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
            </div>
        </div>
        <!-- .row end// -->


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
        return "depot_admin/index.html.twig";
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
        return array (  146 => 47,  144 => 46,  139 => 43,  131 => 40,  127 => 39,  122 => 38,  120 => 37,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  95 => 31,  91 => 30,  88 => 29,  84 => 28,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "depot_admin/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/depot_admin/index.html.twig");
    }
}
