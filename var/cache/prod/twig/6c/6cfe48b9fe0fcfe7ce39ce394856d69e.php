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

/* admin/admin_partenaire/index.html.twig */
class __TwigTemplate_550c0d6ac415f209793797cc751e3939 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_partenaire/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Gestion des partenaires ";
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
        yield "<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"card\">
                    <div class=\"container my-3\">
                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_partenaire_add");
        yield "\">
                       
                        <div class=\"row mt-2\">
                            <div class=\"col-md-4\">
                                <label for='phonr' class=\"form-label col-12\">Nom du partenaire </label>
                            </div>
                            <div class=\"col-md-8 form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" aria-describedby=\"helpId\"  required>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <label for='phonr' class=\"form-label col-12\">Description</label>
                            </div>
                            <div class=\"col-md-8 form-group\">
                                <textarea class=\"form-control\" name=\"description\" rows=\"3\" required></textarea>
                            </div>
                        </div>
                        

                        
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <label for='phonr' class=\"form-label col-12\">Logo du partenaire </label>
                            </div>
                            <div class=\"col-md-8 form-group\">
                                <input class=\"form-control\" name=\"logo\" type=\"file\" required>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter le partenaire </button> 
                    </form>
                    </div>   
                </div>
            </div>
        </div>
    </section>    
</div>


<div class=\"card\">
    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"panelsStayOpen-heading3\">
            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse3\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapse3\">
                <strong> Liste des partenaires </strong> 
            </button>
            </h2>
            <div id=\"panelsStayOpen-collapse3\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-heading3\">
                <div class=\"accordion-body\">
                    <table class=\"table table-hover mb-0 table-lg\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Etat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 71
            yield "                            <tr>
                                <td class=\"text-bold-500\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                                <td class=\"text-bold-500\">";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 73)) {
                yield " PUBLIE ";
            } else {
                yield " ARCHIVE ";
            }
            yield "</td>
                                <td class=\"text-bold-500\"> 
                                    <a type=\"button\" class=\"btn btn-outline-primary\" href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_partenaire_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["part"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["part"], "etat", [], "any", false, false, false, 75)) {
                yield " ARCHIVER ";
            } else {
                yield " PUBLIER ";
            }
            yield "</a> 
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_partenaire/index.html.twig";
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
        return array (  176 => 79,  160 => 75,  151 => 73,  147 => 72,  144 => 71,  140 => 70,  78 => 11,  70 => 5,  63 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_partenaire/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_partenaire/index.html.twig");
    }
}
