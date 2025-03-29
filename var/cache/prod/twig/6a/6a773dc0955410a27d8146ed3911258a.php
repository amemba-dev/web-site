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

/* produit_admin/index.html.twig */
class __TwigTemplate_cb3b3f55a423a7d21e5048181ca668b9 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "produit_admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Produit Admin";
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
        yield "
<div class=\"container\">
  <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_add");
        yield "\"><button type=\"button\" class=\"btn btn-primary\">Nouveau Produit</button></a>
</div>
<br>
<div class=\"container\">
    <h2>Liste des produits</h2>
    <table class=\"table\">
        <thead>
            <tr>
            <th scope=\"col\">Libelle</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Qte Stock</th>
            <th scope=\"col\">Etat</th>
            <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            yield "            <tr>
            <th>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "libelle", [], "any", false, false, false, 26), "html", null, true);
            yield "</th>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "getQteStock", [], "method", false, false, false, 28), "html", null, true);
            yield "</td>
            <td>";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "etat", [], "any", false, false, false, 29)) {
                yield "Disponible";
            } else {
                yield "Archivé";
            }
            yield "</td>
            <td><a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"><i class=\"bi bi-pencil-square\"></i></a><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_archive", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"><i class=\"bi bi-trash\"></i></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </tbody>
    </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit_admin/index.html.twig";
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
        return array (  131 => 33,  120 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  97 => 25,  93 => 24,  74 => 8,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "produit_admin/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/produit_admin/index.html.twig");
    }
}
