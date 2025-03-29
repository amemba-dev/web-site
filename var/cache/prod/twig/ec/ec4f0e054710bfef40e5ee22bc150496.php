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

/* admin/categorie_evenement/index.html.twig */
class __TwigTemplate_b08e5a32e9f0f798aa6ec02aa064180a extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/categorie_evenement/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Catégorie d'évènement ";
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
                                <h6 class=\"text-muted font-semibold\">Nombre de catégorie</h6>
                                <h6 class=\"font-extrabold mb-0\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nombreCategorie"] ?? null), "html", null, true);
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
            
            <div class=\"col-12 col-md-7\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des catégories</h4>
                    </div>
                    <div class=\"card-content\">
                        <!-- Table with no outer spacing -->
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0 table-lg\">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nom</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 56
            yield "                                    <tr>
                                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield " </td>
                                        <td class=\"text-bold-500\">
                                            ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            


            <div class=\"col-12 col-md-5\">
                <div class=\"card \">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Ajouter une catégorie</strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <form class=\"form form-horizontal\" method=\"POST\" action=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_categorie_evenement");
        yield "\">
                                        <div class=\"form-body\">
                                            <div class=\"row\">
                                                <div class=\"col-12\">
                                                    <div class=\"form-group\">
                                                        <label for=\"first-name-vertical\">Nom de la catégorie</label>
                                                        <input type=\"text\" id=\"first-name-vertical\" class=\"form-control my-3\" name=\"name\" required>
                                                    </div>
                                                </div>
                                                
                                                <div class=\"col-sm-12 d-flex justify-content-end\">
                                                    <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Ajouter</button>
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
        return "admin/categorie_evenement/index.html.twig";
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
        return array (  171 => 85,  147 => 63,  137 => 59,  132 => 57,  129 => 56,  125 => 55,  86 => 19,  70 => 5,  63 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/categorie_evenement/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/categorie_evenement/index.html.twig");
    }
}
