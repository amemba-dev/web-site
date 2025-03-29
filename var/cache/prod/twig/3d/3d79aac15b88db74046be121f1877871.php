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

/* commande/admin.commandes.html.twig */
class __TwigTemplate_5c0c29d4f86b448417214f68b6e74687 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "commande/admin.commandes.html.twig", 1);
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

        <h2 class=\"content-title my-2\">Commandes</h2>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card mb-4\">
                    <!--
                    <header class=\"card-header\">
                        <div class=\"row gx-3\">
                            <div class=\"col-lg-2 col-md-3 col-6 me-auto\">
                                <select class=\"form-select\">
                                    <option>EN COURS</option>
                                    <option>EXPEDIE</option>
                                    <option>VALIDE</option>
                                </select>
                            </div>
                            <div class=\"col-lg-2 col-md-3 col-6\">
                                <select class=\"form-select\">
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                </select>
                            </div>
                        </div>
                    </header>-->
                    <!-- card-header end// -->
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class=\"text-end\"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 47
            yield "                                    <tr>
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "client", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "getPrixTotal", [], "method", false, false, false, 50), "html", null, true);
            yield "</td>
                                        <td><span class=\"badge rounded-pill alert-success\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "etat", [], "any", false, false, false, 51), "html", null, true);
            yield "</span></td>
                                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 52), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                                        <td class=\"text-end d-flex\">
                                            <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-light\">Detail</a>
                                            
                                            <!-- dropdown //end -->
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive //end -->
                    </div>
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
            </div>
            ";
        // line 98
        yield "            <div class=\"d-flex justify-content-center\">
                ";
        // line 99
        CoreExtension::getAttribute($this->env, $this->source, ($context["commandes"] ?? null), "setPageRange", [3], "method", false, false, false, 99);
        // line 100
        yield "                ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["commandes"] ?? null));
        yield "
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
        return "commande/admin.commandes.html.twig";
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
        return array (  158 => 100,  156 => 99,  153 => 98,  142 => 60,  130 => 54,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  106 => 47,  102 => 46,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "commande/admin.commandes.html.twig", "/workspace/deploy/amemba-site-dev/templates/commande/admin.commandes.html.twig");
    }
}
