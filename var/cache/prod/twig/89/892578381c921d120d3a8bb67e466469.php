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

/* admin/admin_emplois/index.html.twig */
class __TwigTemplate_352954e6edf9065503073de1ade82ce2 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_emplois/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Gestion des offres d'emplois ";
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
        
        
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"card mb-5\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong>  ";
        // line 18
        if (array_key_exists("selected", $context)) {
            yield " Modification d'une offre d'emplois ";
        } else {
            yield " Ajouter une offre d'emplois ";
        }
        yield "  </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    
                                    <form method=\"POST\" ";
        // line 25
        if (array_key_exists("selected", $context)) {
            yield " action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_emplois_update");
            yield "\" ";
        } else {
            yield " action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_emplois_add");
            yield "\"  ";
        }
        yield ">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-4\">
                                                <label for=\"Titre\" class=\"form-label\">Titre</label>
                                                <input type=\"number\" name = \"id\"  ";
        // line 29
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\" ";
        }
        yield "  hidden>
                                                <input type=\"text\" id=\"Titre\" class=\"form-control\" name=\"titre\" ";
        // line 30
        if (array_key_exists("selected", $context)) {
            yield " value=\"  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "titre", [], "any", false, false, false, 30), "html", null, true);
            yield " \" ";
        }
        yield " required>
                                            </div>
                                            <div class=\"col-4\">
                                                <label for=\"Domaine\" class=\"form-label\">Domaine</label>
                                                <input type=\"text\" id=\"Domaine\" class=\"form-control\"  name=\"domaine\" ";
        // line 34
        if (array_key_exists("selected", $context)) {
            yield " value=\"  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "domaine", [], "any", false, false, false, 34), "html", null, true);
            yield " \" ";
        }
        yield " required>
                                            </div>
                                            
                                            <div class=\"col-4\">
                                                <label for=\"Date\" class=\"form-label\">Date de fin ";
        // line 38
        if (array_key_exists("selected", $context)) {
            yield " : <strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "endAt", [], "any", false, false, false, 38), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " </strong>";
        }
        yield " </label>
                                                <input type=\"date\" id=\"Date\" class=\"form-control\"  aria-label=\"Last name\" min=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["today"] ?? null), "html", null, true);
        yield "\" name=\"date\" ";
        if (array_key_exists("selected", $context)) {
            yield "  value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "endAt", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            yield "\" ";
        }
        yield " required >
                                            </div>
                                        </div>
                                        ";
        // line 42
        if (array_key_exists("selected", $context)) {
            // line 43
            yield "                                        ";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "membre", [], "any", false, false, false, 43))) {
                // line 44
                yield "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">
                                                <label for=\"Titre\" class=\"form-label\"> <strong> Publié par : </strong></label>
                                            </div>
                                            <div class=\"\">
                                                <input type=\"text\" id=\"Date\" class=\"form-control\"  aria-label=\"Last name\" value=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "membre", [], "any", false, false, false, 49), "prenom", [], "any", false, false, false, 49), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "membre", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
                yield "\" disabled>
                                            </div>
                                        </div>
                                        ";
            }
            // line 53
            yield "                                        ";
        }
        // line 54
        yield "                                        <div class=\"mb-3\">
                                            <label for=\"Description\" class=\"form-label\">Description</label>
                                            <textarea class=\"form-control\" id=\"Description\" rows=\"4\" name=\"description\" required> ";
        // line 56
        if (array_key_exists("selected", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "description", [], "any", false, false, false, 56), "html", null, true);
            yield " ";
        }
        yield " </textarea>
                                        </div>
                                       
                                        <div class=\"mb-3\">
                                            <div class=\"row\">
                                                <div class=\"col-6\">
                                                    <select class=\"form-select form-select\" aria-label=\".form-select-sm example\" name=\"etat\">
                                                       
                                                        <option value=\"VALIDE\">VALIDE</option>
                                                        <option value=\"ARCHIVE\">ARCHIVE</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-6\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">Publier l'offre</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>


                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Liste des offres d'emplois</h4>
                </div>
                <div class=\"card-content\">
                    <!-- Table with no outer spacing -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0 table-lg\">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Domaine</th>
                                    <th>Publication</th>
                                    <th>Expiration</th>
                                    <th>Etat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                                
                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["emplois"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 110
            yield "                                <tr>
                                    <td> ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "titre", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                    <td class=\"text-bold-500\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "domaine", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                    <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "createAt", [], "any", false, false, false, 113), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " </td>
                                    <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "endAt", [], "any", false, false, false, 114), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"badge rounded-pill alert-success\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "etat", [], "any", false, false, false, 116), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_emplois_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "slug", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>    
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        return "admin/admin_emplois/index.html.twig";
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
        return array (  290 => 123,  280 => 119,  274 => 116,  269 => 114,  265 => 113,  261 => 112,  257 => 111,  254 => 110,  250 => 109,  190 => 56,  186 => 54,  183 => 53,  174 => 49,  167 => 44,  164 => 43,  162 => 42,  150 => 39,  142 => 38,  131 => 34,  120 => 30,  112 => 29,  97 => 25,  83 => 18,  70 => 7,  63 => 6,  52 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_emplois/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_emplois/index.html.twig");
    }
}
