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

/* cotisation/admin.cotisation.html.twig */
class __TwigTemplate_eef14ee7c56fcc54bf674770ff669bfb extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "cotisation/admin.cotisation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Cotisations";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<section class=\"row\">
    <div class=\"col-12 \">
        <div class=\"row\">
            <div class=\"col-6 col-lg-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body px-3 py-4-5\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"stats-icon green\">
                                    <i class=\"iconly-boldCalendar\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <h6 class=\"text-muted font-semibold\">Nombre de cotisations</h6>
                                <h6 class=\"font-extrabold mb-0\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["cotisations"] ?? null)), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        
    </div>
    
</section>

<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"card \">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Ajouter une cotisation </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <form class=\"form form-horizontal\" method='POST' >
                                        <div class=\"form-body\">

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label>Titre</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"text\" id=\"first-name\" class=\"form-control\" name=\"titre\" required>
                                                </div>
                                            </div>


                                            

                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"desc\">";
        // line 66
        if (array_key_exists("selected", $context)) {
            yield " Nouvelle description ";
        } else {
            yield " Description ";
        }
        yield "</label>
                                                    <textarea class=\"form-control\" id=\"desc\" rows=\"2\" name=\"description\" ";
        // line 67
        if (array_key_exists("selected", $context)) {
            yield " value=\"lol\" ";
        }
        yield " required></textarea>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label>Montant</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"number\" id=\"first-name\" class=\"form-control\" name=\"montant\" required>
                                                </div>
                                            </div>

                                            <div class=\"form-check form-switch\">
                                                <input class=\"form-check-input\" name=\"type\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                                <label class=\"form-check-label\"  for=\"flexSwitchCheckChecked\">Cotisation Obligatoire</label>
                                            </div>

                                                ";
        // line 86
        yield "                                                <div class=\"col-sm-12 d-flex justify-content-end\">
                                                    ";
        // line 87
        if (array_key_exists("selected", $context)) {
            yield " 
                                                    <button type=\"submit\" class=\"btn btn-warning me-1 mb-1\">Modifier</button>
                                                    ";
        } else {
            // line 90
            yield "                                                    <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Ajouter</button>
                                                    ";
        }
        // line 92
        yield "                                                </div>
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
                    <h4 class=\"card-title\">Liste des cotisations</h4>
                </div>
                <div class=\"card-content\">
                    <!-- Table with no outer spacing -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0 table-lg\">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>Solde</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                             ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cotisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
            // line 123
            yield "                                <tr>
                                    <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "titre", [], "any", false, false, false, 124), "html", null, true);
            yield " </td>
                                    <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "createdAt", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td> ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["co"], "solde", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_details_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["co"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a>
                                        ";
            // line 129
            if (CoreExtension::getAttribute($this->env, $this->source, $context["co"], "etat", [], "any", false, false, false, 129)) {
                // line 130
                yield "                                         <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_cloture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["co"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary\">Clore</a>
                                        ";
            }
            // line 132
            yield "                                    </td>    
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['co'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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
        return "cotisation/admin.cotisation.html.twig";
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
        return array (  252 => 136,  243 => 132,  237 => 130,  235 => 129,  231 => 128,  226 => 126,  222 => 125,  218 => 124,  215 => 123,  211 => 122,  179 => 92,  175 => 90,  169 => 87,  166 => 86,  143 => 67,  135 => 66,  86 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cotisation/admin.cotisation.html.twig", "/workspace/deploy/amemba-site-dev/templates/cotisation/admin.cotisation.html.twig");
    }
}
