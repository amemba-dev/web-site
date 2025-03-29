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

/* admin/admin_bureau/index.html.twig */
class __TwigTemplate_ee159755bc92254c3c0a10729603a378 extends Template
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
            'style' => [$this, 'block_style'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_bureau/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<!-- IntelTel Input CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/intlTelInput.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">

";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Contenue de la page About ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"card\">
                            <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"panelsStayOpen-heading4\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse4\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapse4\">
                                        <strong> Ajout d'un poste </strong> 
                                    </button>
                                    </h2>
                                    <div id=\"panelsStayOpen-collapse4\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-heading4\">
                                        <div class=\"accordion-body\">
                                            <form class=\"form form-horizontal\" method=\"POST\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_poste");
        yield "\">
                                                <div class=\"row\">
                                                    <div class=\"col-6\">
                                                        <div class=\"form-group\">
                                                            <label for=\"motTitre\">Libelle</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"libelle\" id=\"motTitre\" aria-describedby=\"helpId\" placeholder=\"\" >                                               
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter un poste </button>      
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"card\">
                            <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"panelsStayOpen-heading3\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse3\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapse3\">
                                        <strong> Liste des postes </strong> 
                                    </button>
                                    </h2>
                                    <div id=\"panelsStayOpen-collapse3\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-heading3\">
                                        <div class=\"accordion-body\">
                                            <table class=\"table table-hover mb-0 table-lg\">
                                                <thead>
                                                    <tr>
                                                        <th>Libelle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["postes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 63
            yield "                                                    <tr>
                                                        <td class=\"text-bold-500\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "libelle", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mt-3\">
                   
                    <div class=\"col\">
                        <div class=\"card\">
                            <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                                <div class=\"accordion-item\">
                                    <h2 class=\"accordion-header\" id=\"panelsStayOpen-heading2\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse2\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapse2\">
                                        <strong> Liste des membres du bureau </strong> 
                                    </button>
                                    </h2>
                                    <div id=\"panelsStayOpen-collapse2\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-heading2\">
                                        <div class=\"accordion-body\">
                                            <table class=\"table table-hover mb-0 table-lg\">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Poste</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 100
            yield "                                                    <tr>
                                                        <td class=\"text-bold-500\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nomComplet", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                                        <th>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "fonction", [], "any", false, false, false, 102), "libelle", [], "any", false, false, false, 102), "html", null, true);
            yield "</th>
                                                        <th>
                                                            <a name=\"\" id=\"\" class=\"btn btn-outline-primary\" href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" role=\"button\">
                                                                ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "etat", [], "any", false, false, false, 105)) {
                yield "Retirer";
            }
            // line 106
            yield "                                                            </a>
                                                        </th>    
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 121
            yield "                    <div class=\"alert alert-warning alert-dismissible show fade\">
                        ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "              
                
                <div class=\"row\">
                     <div class=\"col-12\">
                        <div class=\"card\">
                           <div class=\"container my-3\">
                                <h5 class=\"my-2\"> Ajouter une membre au bureau </h5>
                            ";
        // line 133
        if ( !array_key_exists("membreFound", $context)) {
            // line 134
            yield "                            <h6 class=\"my-2 mb-3\"> Rechercher une membre e mettre à jour son rôle dans l'amicale </h6>
                            <form class=\"form form-horizontal\" method=\"POST\" action=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
            yield "\">
                                <div class=\"row mt-2\">
                                    <div class=\"col-md-2\">
                                        <label for='phone' class=\"form-label col-12\">E-mail</label>
                                    </div>
                                    <div class=\"col-md-6 form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"nom\" aria-describedby=\"helpId\" placeholder=\"\" required>
                                    </div>
                                    <div class=\"col-md-3 form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher </button>      
                                    </div>
                                </div>
                            </form>
                            ";
        } else {
            // line 149
            yield "                            
                            <form class=\"form form-horizontal mt-3\" method=\"POST\" action=\"";
            // line 150
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_membre");
            yield "\">
                                <div class=\"row mt-2\">
                                    <div class=\"col-md-2\">
                                        <label for='phone' class=\"form-label col-12\">Nom complet | Poste</label>
                                    </div>
                                    <div class=\"col-md-3 form-group\">
                                        <input type=\"text\" disabled class=\"form-control\" id=\"nom\" aria-describedby=\"helpId\" placeholder=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "prenom", [], "any", false, false, false, 156), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "nom", [], "any", false, false, false, 156), "html", null, true);
            yield "\" required>
                                        <input type=\"text\" name=\"id\" value=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "id", [], "any", false, false, false, 157), "html", null, true);
            yield "\" hidden>
                                    </div>
                                    
                                    <div class=\"col-md-3 form-group\">
                                        <select class=\"form-select\" aria-label=\"Default select example\" id=\"role\" name=\"poste\">
                                            ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["postes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 163
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 163), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "libelle", [], "any", false, false, false, 163), "html", null, true);
                yield "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                                          </select>
                                    </div>
                                    <div class=\"col-md-3 form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au bureau </button>      
                                    </div>
                                </div>
                            </form>
                            ";
        }
        // line 173
        yield "                            
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
        return "admin/admin_bureau/index.html.twig";
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
        return array (  341 => 173,  331 => 165,  320 => 163,  316 => 162,  308 => 157,  302 => 156,  293 => 150,  290 => 149,  273 => 135,  270 => 134,  268 => 133,  259 => 126,  249 => 122,  246 => 121,  242 => 120,  230 => 110,  221 => 106,  217 => 105,  213 => 104,  208 => 102,  204 => 101,  201 => 100,  197 => 99,  163 => 67,  154 => 64,  151 => 63,  147 => 62,  108 => 26,  89 => 9,  82 => 8,  71 => 7,  63 => 4,  60 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_bureau/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_bureau/index.html.twig");
    }
}
