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

/* membre_emplois/index.html.twig */
class __TwigTemplate_ea1f240d447bd721f2a824067c8678d4 extends Template
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
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "membre_emplois/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Offres d'emplois";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield "<!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container py-5\">
            <form method=\"POST\" enctype=\"multipart/form-data\" ";
        // line 10
        if (array_key_exists("selected", $context)) {
            yield "action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_emplois_update");
            yield "\"";
        } else {
            yield "action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_emplois_add");
            yield "\"";
        }
        yield " >
                <div class=\"form-top d-flex\">
                    <div class=\" w-100\">
                        <div class=\"card\" style=\"background-color: #F2F7FF;\">
                            <div class =\" mx-3 my-3\">
                                <h2 class=\"mb-5\"> ";
        // line 15
        if (array_key_exists("selected", $context)) {
            yield "Modifier une offre d'emplois";
        } else {
            yield "Ajouter une offre d'emplois";
        }
        yield "  </h2>
                                <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"title\">Titre de l'offre</label>
                                        <input type=\"number\" name = \"id\"  ";
        // line 20
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\" ";
        }
        yield "  hidden>
                                        <input type=\"text\" class=\"form-control mb-3\" name=\"titre\" ";
        // line 21
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "titre", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
        }
        yield ">
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                     <div class=\"form-group form-row\">
                                        <label for=\"title\">Domaine <span class=\"require\">*</span></label>
                                        <input type=\"text\" class=\"form-control mb-3\" name=\"domaine\" ";
        // line 27
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "domaine", [], "any", false, false, false, 27), "html", null, true);
            yield "\" ";
        }
        yield ">
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"mb-3\">
                                        <label for=\"exampleFormControlFile1\">Date d'expiration de l'offre</label>
                                        <input class=\"form-control mb-4\" type=\"date\" id=\"formFileImage\" min=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["today"] ?? null), "html", null, true);
        yield "\" ";
        if (array_key_exists("selected", $context)) {
            yield "  value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "endAt", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
            yield "\" ";
        }
        yield " >
                                    </div>

                                </div>
                            </div>

                            <div class=\"form-group my-3\">
                                <label for=\"article\">Description de l'offre d'emploi</label>
                                <textarea rows=\"4\" minlength=\"20\" class=\"form-control\" name=\"description\"> ";
        // line 41
        if (array_key_exists("selected", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "description", [], "any", false, false, false, 41), "html", null, true);
            yield " ";
        }
        yield "  </textarea>
                            </div>

                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"flexSwitchCheckChecked\" name=\"archive\">
                                <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Archiver l'offre d'emplois</label>
                            </div>
                            
                            <div class=\"form-group mt-2\">
                                ";
        // line 50
        if (array_key_exists("selected", $context)) {
            yield " 
                                <button type=\"submit\" class=\"btn btn-warning\"> Modifier l'offre </button>
                                ";
        } else {
            // line 53
            yield "                                <button type=\"submit\" class=\"btn btn-primary\"> Publier l'offre </button>
                                ";
        }
        // line 55
        yield "                                
                                   
                                
                            </div>
                            </div>
                            
                        </div>
                        
                       
                        
                    </div>
                </div>
                
            </form>

            <div class=\"col-12 mt-5\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste de mes emplois</h4>
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
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["emplois"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 92
            yield "                                    <tr>
                                        <td> ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "titre", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                        <td class=\"text-bold-500\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "domaine", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                                        <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "createAt", [], "any", false, false, false, 95), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " </td>
                                        <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "endAt", [], "any", false, false, false, 96), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge rounded-pill alert-success\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "etat", [], "any", false, false, false, 98), "html", null, true);
            yield "</span>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_emplois_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "slug", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>    
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 119
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
        return "membre_emplois/index.html.twig";
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
        return array (  286 => 119,  270 => 105,  260 => 101,  254 => 98,  249 => 96,  245 => 95,  241 => 94,  237 => 93,  234 => 92,  230 => 91,  192 => 55,  188 => 53,  182 => 50,  166 => 41,  149 => 33,  136 => 27,  123 => 21,  115 => 20,  103 => 15,  87 => 10,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "membre_emplois/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/membre_emplois/index.html.twig");
    }
}
