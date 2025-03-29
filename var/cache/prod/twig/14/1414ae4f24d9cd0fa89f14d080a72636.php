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

/* blog/admin.article.list.html.twig */
class __TwigTemplate_4957157c1ade6f0d8133a3a650685fc4 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "blog/admin.article.list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Liste des articles ";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<!-- Basic Tables start -->
                <section class=\"section\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            Articles
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table\" id=\"table1\">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Categorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            yield "                                    <tr>
                                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 27)), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 29)) {
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "lisibilite", [], "any", false, false, false, 29)) {
                    yield "<span class=\"badge bg-success\">EN LIGNE</span>";
                } else {
                    yield "<span class=\"badge bg-warning\">ARCHIVE</span>";
                }
            } else {
                yield "<span class=\"badge bg-success\">En attente</span>";
            }
            // line 30
            yield "                                        </td>
                                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorieArticle", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                        <td>
                                            <a class=\"btn-btn-outline-primary btn-sm\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">Aperçu</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
                <!-- Basic Tables end -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/admin.article.list.html.twig";
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
        return array (  141 => 37,  131 => 33,  126 => 31,  123 => 30,  113 => 29,  108 => 27,  102 => 26,  98 => 25,  95 => 24,  91 => 23,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/admin.article.list.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/admin.article.list.html.twig");
    }
}
