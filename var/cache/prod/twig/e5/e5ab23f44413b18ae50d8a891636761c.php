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

/* demande/index.html.twig */
class __TwigTemplate_b31e2f63072e4446f7f413955654b55a extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "demande/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Demande d'adhésion ";
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
            <div class=\"col-6 col-lg-4 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body px-3 py-4-5\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"stats-icon green\">
                                    <i class=\"iconly-boldAdd-User\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <h6 class=\"text-muted font-semibold\">Demandes d'adhésion</h6>
                                <h6 class=\"font-extrabold mb-0\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nombreDemandes"] ?? null), "html", null, true);
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
            
            <div class=\"col-12 ";
        // line 37
        if (array_key_exists("selected", $context)) {
            yield "col-md-8";
        }
        yield "\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des demandes</h4>
                    </div>
                    <div class=\"card-content\">

                        <!-- Table with no outer spacing -->
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0 table-lg\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        ";
        // line 50
        if ( !array_key_exists("selected", $context)) {
            // line 51
            yield "                                        <th>Mail</th>
                                        ";
        }
        // line 53
        yield "                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >

                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["demandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 60
            yield "                                    <tr>
                                        <td class=\"text-bold-500\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "prenom", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                                        ";
            // line 62
            if ( !array_key_exists("selected", $context)) {
                // line 63
                yield "                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "mail", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
                                        ";
            }
            // line 65
            yield "                                        <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "date", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true);
            yield "</td>
                                        <td class=\"text-bold-500\">
                                            <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_demande", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 78
        if (array_key_exists("selected", $context)) {
            // line 79
            yield "

            <div class=\"col-12 col-md-4 \">
                <div class=\"card \">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Detail de la demande </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                Date de la demande :  <strong>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "date", [], "any", false, false, false, 92), "d-m-Y"), "html", null, true);
            yield "</strong> 
                                        <br>
                                        <br>
                                        <strong>Nom : </strong> ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "  <br>  <strong>Prenom : </strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "prenom", [], "any", false, false, false, 95), "html", null, true);
            yield "
                                        <br>
                                        <strong>Mail : </strong> ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "mail", [], "any", false, false, false, 97), "html", null, true);
            yield "<br>  
                                        ";
            // line 98
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "telephone", [], "any", false, false, false, 98))) {
                // line 99
                yield "                                        <strong>Téléphone : </strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "telephone", [], "any", false, false, false, 99), "html", null, true);
                yield "<br>  
                                        ";
            }
            // line 101
            yield "                                        <strong>Promotion : </strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "promotion", [], "any", false, false, false, 101), "html", null, true);
            yield "
                                        <br>
                                        <br>
                                        <strong>Résidence </strong> <br>
                                        <strong>Pays : </strong> ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "pays", [], "any", false, false, false, 105), "html", null, true);
            yield "  <br>    <strong>Ville : </strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "ville", [], "any", false, false, false, 105), "html", null, true);
            yield "
        
                            </div>
                          </div>
                        </div>
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                                Valider / Rejeter
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                            <div class=\"accordion-body\">
                                <div class=\"row justify-content-center custom-line\">
                                    <div class=\"col-4\">
                                        <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_demande", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary mr-2\">Valider</a>
                                    </div>
                                    <div class=\"col-4\">
                                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annuler_demande", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning mr-2\">Annuler</a>
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
        // line 134
        yield "
            


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
        return "demande/index.html.twig";
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
        return array (  274 => 134,  260 => 123,  254 => 120,  234 => 105,  226 => 101,  220 => 99,  218 => 98,  214 => 97,  207 => 95,  201 => 92,  186 => 79,  184 => 78,  175 => 71,  165 => 67,  159 => 65,  153 => 63,  151 => 62,  145 => 61,  142 => 60,  138 => 59,  130 => 53,  126 => 51,  124 => 50,  106 => 37,  86 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/demande/index.html.twig");
    }
}
