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

/* cotisation/membre.cotisation.html.twig */
class __TwigTemplate_86974286f1ac9b90ca3ec5ea00b245d7 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "cotisation/membre.cotisation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Cotisations";
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
    <section class=\"second\">
        <div class=\"container p-5\">
            <h4>Nouvelles cotisations</h4>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\">Titre</th>
                        <th scope=\"col\">Date de création</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["myCotisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            yield "                        ";
            if (!CoreExtension::inFilter($context["c"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "cotisations", [], "any", false, false, false, 21))) {
                // line 22
                yield "                        <tr>
                            <th scope=\"row\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 23), "html", null, true);
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "type", [], "any", false, false, false, 23) == "OBLIGATOIRE")) {
                    yield "<span class=\"badge rounded-pill alert-success\">Obligatoire</span>";
                }
                // line 24
                yield "                            </th>
                            <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "createdAt", [], "any", false, false, false, 25)), "html", null, true);
                yield "</td>
                            <td><a href=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">Details</a></td>
                        </tr> 
                        ";
            }
            // line 29
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                </tbody>
            </table><br>

            <h4>Cotisations effectuées</h4>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\">Titre</th>
                        <th scope=\"col\">Date de création</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "cotisations", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 45
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 45) == 1)) {
                // line 46
                yield "                        <tr>
                            <th scope=\"row\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "titre", [], "any", false, false, false, 47), "html", null, true);
                yield "</th>
                            <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "createdAt", [], "any", false, false, false, 48)), "html", null, true);
                yield "</td>
                            <td><a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">Details</a></td>
                        </tr>
                        ";
            }
            // line 52
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                </tbody>
            </table><br>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 61
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
        return "cotisation/membre.cotisation.html.twig";
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
        return array (  188 => 61,  178 => 53,  172 => 52,  166 => 49,  162 => 48,  158 => 47,  155 => 46,  152 => 45,  148 => 44,  133 => 31,  126 => 29,  120 => 26,  116 => 25,  113 => 24,  107 => 23,  104 => 22,  101 => 21,  97 => 20,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cotisation/membre.cotisation.html.twig", "/workspace/deploy/amemba-site-dev/templates/cotisation/membre.cotisation.html.twig");
    }
}
