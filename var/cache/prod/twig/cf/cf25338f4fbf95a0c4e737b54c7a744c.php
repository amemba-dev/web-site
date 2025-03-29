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

/* produit_admin/admin.add.produit.html.twig */
class __TwigTemplate_b076b994312250e9de3e9b34c711d520 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "produit_admin/admin.add.produit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if (array_key_exists("produitSelected", $context)) {
            yield "Modifier produit";
        } else {
            yield "Nouveau produit";
        }
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
        yield "<div class=\"container\">
    ";
        // line 7
        if (array_key_exists("produitSelected", $context)) {
            // line 8
            yield "    <div class=\"container mb-4\">
        <img src=\"/produits/";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "images", [], "any", false, false, false, 9)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 9), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"...\">
    </div>
    ";
        }
        // line 12
        yield "    <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        if (array_key_exists("produitSelected", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_add");
            yield " ";
        }
        yield "\">
        <div class=\"mb-2\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Libelle</label>
            <input name=\"libelle\" type=\"text\"
             value=\"";
        // line 16
        if (array_key_exists("produitSelected", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "libelle", [], "any", false, false, false, 16), "html", null, true);
        }
        yield "\"
             class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"\">Categorie</label>
          <select class=\"form-control\" name=\"categorie\" id=\"\" required>
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 23
            yield "            <option value=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 23), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "          </select>
        </div>

        <div class=\"mb-2\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Description</label>
            <textarea name=\"description\" class=\"form-control\" required>";
        // line 30
        if (array_key_exists("produitSelected", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
        }
        yield "</textarea>
        </div>

        <div class=\"mb-2\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Prix</label>
            <input name=\"prix\" type=\"number\" 
             value=";
        // line 36
        if (array_key_exists("produitSelected", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "prix", [], "any", false, false, false, 36), "html", null, true);
        }
        // line 37
        yield "             class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required>
        </div>

        <div class=\"mb-2\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">Quantite en stock</label>
            <input name=\"qte_stock\" type=\"number\" class=\"form-control\" 
             value=";
        // line 43
        if (array_key_exists("produitSelected", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["produitSelected"] ?? null), "getQteStock", [], "method", false, false, false, 43), "html", null, true);
        }
        // line 44
        yield "             id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" required>
        </div>

        <div class=\"mb-4\">
            <label for=\"formFileLg\" class=\"form-label\">Image</label>
            <input name=\"image\" class=\"form-control form-control-lg\" id=\"formFileLg\" type=\"file\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\" required>
        </div>

        <button type=\"submit\" name=\"btnAdd\" class=\"btn btn-primary\">";
        // line 52
        if (array_key_exists("produitSelected", $context)) {
            yield "Modifier";
        } else {
            yield "Ajouter";
        }
        yield "</button>
    </form>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit_admin/admin.add.produit.html.twig";
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
        return array (  171 => 52,  161 => 44,  157 => 43,  149 => 37,  145 => 36,  134 => 30,  127 => 25,  116 => 23,  112 => 22,  101 => 16,  88 => 12,  82 => 9,  79 => 8,  77 => 7,  74 => 6,  67 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "produit_admin/admin.add.produit.html.twig", "/workspace/deploy/amemba-site-dev/templates/produit_admin/admin.add.produit.html.twig");
    }
}
