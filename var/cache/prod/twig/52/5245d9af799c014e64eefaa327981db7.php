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

/* cotisation/cotisation.details.html.twig */
class __TwigTemplate_903fcac2cc1c3c0e6c9ccab0b2afe99d extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "cotisation/cotisation.details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Details Cotisation";
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
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                    <div class=\"card\">
                        
                        <div class=\"content-body border-top\">
                            <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "titre", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                            <p class=\"text-muted\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "description", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                        </div>

                    </div>

                </div>
                <aside class=\"col-lg-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">

                            <dl class=\"dlist-align\">
                                <dt>Montant :</dt>
                                <dd class=\"text-end text-dark h5\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "montant", [], "any", false, false, false, 34), "html", null, true);
        yield "</dd>
                            </dl>
                            <form method=\"POST\" action=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_make");
        yield "\">
                                <div class=\"form-group\">
                                    <label for=\"staticEmail\" class=\"col-form-label\">Montant</label>
                                    <div class=\"row\">
                                        <div class=\"col-8\"> <input type=\"number\" name=\"montant\" class=\"form-control\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "montant", [], "any", false, false, false, 40), "html", null, true);
        yield "\"></div>
                                        <div class=\"col-4 mt-1\"> FCFA</div>
                                        <input type=\"text\" name=\"id\" hidden value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\">
                                    </div>
                                    <input type=\"submit\" class=\"form-control mt-3 btn btn-primary\" value=\"Cotiser\">
                                </div>

                            </form>
                            <div class=\"d-grid gap-2 my-3\">
                                ";
        // line 49
        if (!CoreExtension::inFilter(($context["cotisation"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49), "cotisations", [], "any", false, false, false, 49))) {
            // line 50
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation");
            yield "\" class=\"btn btn-light w-100\"> Retour à la liste </a>
                                ";
        } else {
            // line 52
            yield "                                <p>Vous avez déja cotisé !</p>
                                ";
        }
        // line 54
        yield "                            </div>

                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->


";
        yield from [];
    }

    // line 68
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
        return "cotisation/cotisation.details.html.twig";
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
        return array (  185 => 68,  169 => 54,  165 => 52,  159 => 50,  157 => 49,  147 => 42,  142 => 40,  135 => 36,  130 => 34,  115 => 22,  111 => 21,  106 => 18,  96 => 14,  93 => 13,  89 => 12,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cotisation/cotisation.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/cotisation/cotisation.details.html.twig");
    }
}
