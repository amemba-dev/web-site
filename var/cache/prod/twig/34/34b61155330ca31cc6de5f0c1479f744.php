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

/* admin/admin_demande_partenariat/index.html.twig */
class __TwigTemplate_634152f91dd85c4d5bd8f6c3c25300b3 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_demande_partenariat/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Gestion des demandes de partenariat ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div class=\"page-content\">
    <section class=\"section\">
        ";
        // line 8
        if (array_key_exists("selected", $context)) {
            // line 9
            yield "        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"mb-5\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Detail de la demande de partenariat </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                        <h5 class=\"card-title mb-5\"> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "entreprise", [], "any", false, false, false, 24), "html", null, true);
            yield " <span class=\"badge rounded-pill ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "etat", [], "any", false, false, false, 24) == "DEMANDE")) {
                yield " alert-warning ";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "etat", [], "any", false, false, false, 24) == "VALIDE")) {
                yield " alert-primary ";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "etat", [], "any", false, false, false, 24) == "REFUSE")) {
                yield " alert-danger ";
            }
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "etat", [], "any", false, false, false, 24), "html", null, true);
            yield "</span></h5> 
                                        
                                        Représentante : <strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "<br>
                                        </div>
                                        <div class=\"card-body\">
                                          <p class=\"\">
                                           ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "requete", [], "any", false, false, false, 30), "html", null, true);
            yield "
                                          </p>
                                          <p class=\"card-text mt-3\"> Adresse e-mail : ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "mail", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                                          <p class=\"card-text mt-3\"> Numéro de téléphone : ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "telephone", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                                            <form method=\"post\" action=";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_partenariat_traitement");
            yield ">
                                                <div class=\"form-group mb-3\">
                                                  <label for=\"reponse\">Reponse</label>
                                                  <textarea class=\"form-control\" name=\"reponse\" required id=\"reponse\" rows=\"3\" > ";
            // line 37
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "reponse", [], "any", false, false, false, 37))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "reponse", [], "any", false, false, false, 37), "html", null, true);
            }
            yield " </textarea>
                                                  <input type=\"text\" name=\"id\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" hidden>
                                                </div>
                                                <div class=\"form-check form-switch mb-3\">
                                                    <input class=\"form-check-input\" name=\"valide\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                                    <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\"> Accepter la demande de partenariat </label>
                                                </div>
                                                
                                                <button type=\"submit\" class=\"btn btn-primary\" ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "etat", [], "any", false, false, false, 45) != "DEMANDE")) {
                yield " disabled ";
            }
            yield ">Traiter la demande</button>
                                            </form>
                                        </div>
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
        // line 58
        yield "        <div class=\"col-12\">
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
                                    <th>Demandé par</th>
                                    <th>Mail de contact</th>
                                    <th>Entreprise</th>
                                    <th>Etat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenariats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 78
            yield "                                    <tr>
                                        <td class=\"text-bold-500\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "prenom", [], "any", false, false, false, 79), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                        <td> ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "mail", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                                        <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "entreprise", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge rounded-pill ";
            // line 83
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 83) == "DEMANDE")) {
                yield " alert-warning ";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 83) == "VALIDE")) {
                yield " alert-primary ";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 83) == "REFUSE")) {
                yield " alert-danger ";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_demande_partenariat_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["part"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>    
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        return "admin/admin_demande_partenariat/index.html.twig";
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
        return array (  246 => 90,  236 => 86,  218 => 83,  213 => 81,  209 => 80,  203 => 79,  200 => 78,  196 => 77,  175 => 58,  157 => 45,  147 => 38,  141 => 37,  135 => 34,  131 => 33,  127 => 32,  122 => 30,  113 => 26,  94 => 24,  77 => 9,  75 => 8,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_demande_partenariat/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_demande_partenariat/index.html.twig");
    }
}
