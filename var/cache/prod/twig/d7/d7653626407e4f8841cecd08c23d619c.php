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

/* commande/client.commandes.html.twig */
class __TwigTemplate_8a68765234edbd19dffdd746cc101355 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "commande/client.commandes.html.twig", 1);
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
        yield "        <!-- SECOND SECTION START -->
    <section class=\"content-main container\">

        <h2 class=\"content-title my-2\">Mes commandes</h2>

        <div class=\"row\">
            <div class=\"col-md-9\">
                <div class=\"card mb-4\">
                    <!-- card-header end// -->
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Prix</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 26
            yield "                                    <tr>
                                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "getPrixTotal", [], "method", false, false, false, 27), "html", null, true);
            yield "</td>
                                        <td><span class=\"badge rounded-pill alert-success\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "etat", [], "any", false, false, false, 28), "html", null, true);
            yield "</span></td>
                                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 29), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " </td>
                                        <td class=\"text-end d-flex\">
                                            <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_commande_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-light\">Details</a>
                                            
                                            <!-- dropdown //end -->
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive //end -->
                    </div>
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
            </div>
            <div class=\"col-md-3\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-3\">Filtre par</h5>
                        <form method=\"POST\" action=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_client");
        yield "\">
                            <div class=\"mb-4\">
                                <label class=\"form-label\">Statut de la commande</label>
                                <select class=\"form-select\" name=\"etat\">
                                    <option value=\"EN COURS\">EN COURS</option>
                                    <option value=\"EN ATTENTE DE CONFIRMATION\">EN ATTENTE DE CONFIRMATION</option>
                                    <option value=\"TERMINE\">TERMINE</option>
                                </select>
                            </div>
                            ";
        // line 63
        yield "                            <div class=\"mb-4\">
                                <button type=\"submit\" class=\"btn btn-primary\"> Filtre </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- card end// -->
            </div>
        </div>
        <!-- .row end// -->
        <div class=\"d-flex justify-content-center\">
            ";
        // line 74
        CoreExtension::getAttribute($this->env, $this->source, ($context["commandes"] ?? null), "setPageRange", [3], "method", false, false, false, 74);
        // line 75
        yield "            ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["commandes"] ?? null));
        yield "
        </div>

    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 83
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
        return "commande/client.commandes.html.twig";
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
        return array (  179 => 83,  167 => 75,  165 => 74,  152 => 63,  140 => 50,  125 => 37,  113 => 31,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  93 => 25,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "commande/client.commandes.html.twig", "/workspace/deploy/amemba-site-dev/templates/commande/client.commandes.html.twig");
    }
}
