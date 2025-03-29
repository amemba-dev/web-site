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

/* annuaire/index.html.twig */
class __TwigTemplate_f720b9191497f0d1a426fa7b9522d736 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "annuaire/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Annuaire";
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
    <section class=\"second py-5\">
        <div class=\"container\">
            <form class=\"search-box row mb-5 justify-content-center\" method=\"POST\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annuaire_details_recherche");
        yield "\">
                <div class=\"input col-7\">
                    <input type=\"text\" name=\"search\" placeholder=\"Rechercher des mots cles...\" class=\"form-control\">
                </div>
                <div class=\"search-btn col-2\">
                   <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
               
            </form>
            <div class=\"phone-book row row-cols-2 row-cols-md-4 gy-3\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 21
            yield "                
                <div class=\"phone-book-card\">
                    <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annuaire_details", ["prenom" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 23), "nom" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\">
                        <div class=\"phone-book-card-cont\" style=\"background-image: url(' ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "profile", [], "any", false, false, false, 24)) {
                yield " /pp/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "profile", [], "any", false, false, false, 24), "html", null, true);
                yield " ";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                yield " ";
            }
            yield " ');\">
                            ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "statut", [], "any", false, false, false, 25)) {
                // line 26
                yield "                            <button class=\"btn btn-primary mt-1 mx-1\">Recherche d'emplois</button>
                            ";
            }
            // line 28
            yield "                           
                            <span>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 29), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 29), "html", null, true);
            yield "</span>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['membre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                
                
            </div>
            <hr>
            <div class=\"d-flex justify-content-center\">
                    ";
        // line 39
        CoreExtension::getAttribute($this->env, $this->source, ($context["membres"] ?? null), "setPageRange", [2], "method", false, false, false, 39);
        // line 40
        yield "                    ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["membres"] ?? null));
        yield "
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 48
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
        return "annuaire/index.html.twig";
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
        return array (  166 => 48,  154 => 40,  152 => 39,  145 => 34,  132 => 29,  129 => 28,  125 => 26,  123 => 25,  112 => 24,  108 => 23,  104 => 21,  100 => 20,  87 => 10,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annuaire/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/annuaire/index.html.twig");
    }
}
