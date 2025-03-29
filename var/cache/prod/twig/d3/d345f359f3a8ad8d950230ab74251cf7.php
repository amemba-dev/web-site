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

/* admin/admin_entreprise/index.html.twig */
class __TwigTemplate_b7e74486974327b124ea88bbb8e7d992 extends Template
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
            'page_title' => [$this, 'block_page_title'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_entreprise/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Gestion des entreprises ";
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
        yield "<div class=\"page-content\">
    <section class=\"section\">
        
        ";
        // line 10
        if (array_key_exists("selected_startup", $context)) {
            // line 11
            yield "        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"mb-5\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Detail d'une entreprise </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                        <h5 class=\"card-title mb-5\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield " <span class=\"badge rounded-pill ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "etat", [], "any", false, false, false, 26) == "VALIDE")) {
                yield "alert-success";
            } else {
                yield "alert-warning";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "etat", [], "any", false, false, false, 26), "html", null, true);
            yield "</span></h5> 
                                        Domaine : <strong>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "domaine", [], "any", false, false, false, 27), "html", null, true);
            yield "</strong> <br>
                                        Représentante : <strong>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "proprietaire", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "proprietaire", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            yield " <br>
                                        </div>
                                        <div class=\"card-body\">
                                          <p class=\"\">
                                            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true);
            yield "
                                          </p>
                                          <p class=\"card-text\"> Adresse : ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "adresses", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                                          ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "etat", [], "any", false, false, false, 35) == "VALIDE")) {
                // line 36
                yield "                                          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_update", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "slug", [], "any", false, false, false, 36), "etat" => "ARCHIVE"]), "html", null, true);
                yield "\" class=\"btn btn-warning\">Archiver</a>
                                          ";
            } else {
                // line 38
                yield "                                          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_update", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["selected_startup"] ?? null), "slug", [], "any", false, false, false, 38), "etat" => "VALIDE"]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Valider</a>
                                          ";
            }
            // line 40
            yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 51
        yield "
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Liste des entreprises</h4>
                </div>
                <div class=\"card-content\">
                    <!-- Table with no outer spacing -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0 table-lg\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Domaine</th>
                                    <th>Proprietaire</th>
                                    <th>Etat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                                
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entreprises"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["en"]) {
            // line 73
            yield "                                <tr>
                                    <td> ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["en"], "nom", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                                    <td class=\"text-bold-500\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["en"], "domaine", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                                    <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["en"], "proprietaire", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["en"], "proprietaire", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"badge rounded-pill ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["en"], "etat", [], "any", false, false, false, 78) == "VALIDE")) {
                yield " alert-success ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["en"], "etat", [], "any", false, false, false, 78) == "DEMANDE")) {
                yield " alert-primary ";
            } else {
                yield " alert-warning";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["en"], "etat", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["en"], "slug", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>    
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['en'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_entreprise/index.html.twig";
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
        return array (  224 => 85,  214 => 81,  200 => 78,  193 => 76,  189 => 75,  185 => 74,  182 => 73,  178 => 72,  155 => 51,  142 => 40,  136 => 38,  130 => 36,  128 => 35,  124 => 34,  119 => 32,  110 => 28,  106 => 27,  94 => 26,  77 => 11,  75 => 10,  70 => 7,  63 => 6,  52 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_entreprise/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_entreprise/index.html.twig");
    }
}
