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

/* thematique/index.html.twig */
class __TwigTemplate_43440c1e2db3c9bc6e3487a6f06635af extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "thematique/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "thematiques Produit";
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
        yield "    <br>
    <div class=\"container\">
    <h2>Thematiques de blog</h2>
        <div class=\"row\">
            <div class=\"col-6\">        
                <table class=\"table\">
                    <thead>
                        <tr>
                        <th scope=\"col\">Libelle</th>
                        <th scope=\"col\">Etat</th>
                        <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["thematiques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            yield "                        <tr>
                        <th>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "libelle", [], "any", false, false, false, 22), "html", null, true);
            yield "</th>
                        <td>";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "status", [], "any", false, false, false, 23)) {
                yield "Actif";
            } else {
                yield "Archivé";
            }
            yield "</td>
                        <td><a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_thematique_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\"><i class=\"bi bi-pencil-square\"></i></a>
                        <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_thematique_archive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "status", [], "any", false, false, false, 25)) {
                yield "<i class=\"bi bi-trash\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" ></i>";
            } else {
                yield "<i class=\"bi bi-check2-circle\"></i>";
            }
            yield "</a>                            
                        </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"col-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-3\">Nouvelle Thematique</h5>
                        <form method=\"POST\" action=\"";
        // line 36
        if (array_key_exists("thematique", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_thematique_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["thematique"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_thematique_add");
        }
        yield "\">
                            <div class=\"mb-4\">
                                <label for=\"categorie_libelle\" class=\"form-label\">Libelle</label>
                                <input type=\"text\" placeholder=\"Type here\" class=\"form-control\" id=\"order_created_date\"
                                name=\"libelle\" value=\"";
        // line 40
        if (array_key_exists("thematique", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["thematique"] ?? null), "libelle", [], "any", false, false, false, 40), "html", null, true);
        } else {
        }
        yield "\">
                            </div>
                            <div class=\"mb-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        if (array_key_exists("thematique", $context)) {
            yield "Modifier";
        } else {
            yield "Ajouter";
        }
        yield "</button>
                            </div>
                        </form>
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
        return "thematique/index.html.twig";
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
        return array (  154 => 43,  145 => 40,  134 => 36,  125 => 29,  109 => 25,  105 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 20,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "thematique/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/thematique/index.html.twig");
    }
}
