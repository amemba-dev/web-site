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

/* blog/membre.articles.html.twig */
class __TwigTemplate_e979b4b2eddf1b9c0c0ae616ed16dca6 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "blog/membre.articles.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield "    <!-- Basic Tables start -->
        <section class=\"section\">
            <div class=\"container mt-3\">
                
            
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2>Articles</h2>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\" id=\"table1\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de creation</th>
                                <th>Date de publication</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            yield "                            <tr>
                                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 28)), "html", null, true);
            yield "</td>
                                <td>";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 29)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 29)), "html", null, true);
            } else {
                yield "-";
            }
            yield "</td>
                                <td>
                                    <span class=\"badge bg-success\">";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 31)) {
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "lisibilite", [], "any", false, false, false, 31)) {
                    yield "EN LIGNE";
                } else {
                    yield "ARCHIVE";
                }
            } else {
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "refused", [], "any", false, false, false, 31)) {
                    yield "REJETE";
                } else {
                    yield "EN ATTENTE";
                }
            }
            yield "</span>
                                </td>
                                <td>
                                    ";
            // line 34
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["article"], "refused", [], "any", false, false, false, 34)) {
                // line 35
                yield "                                     <a class=\"btn-btn-outline-primary btn-sm\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\">Aperçu</a>
                                    ";
            }
            // line 37
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>
    <!-- Basic Tables end -->
";
        yield from [];
    }

    // line 50
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
        return "blog/membre.articles.html.twig";
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
        return array (  164 => 50,  152 => 40,  144 => 37,  138 => 35,  136 => 34,  117 => 31,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  93 => 25,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/membre.articles.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/membre.articles.html.twig");
    }
}
