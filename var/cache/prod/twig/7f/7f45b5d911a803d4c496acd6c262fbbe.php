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

/* blog/index.html.twig */
class __TwigTemplate_444dbec42418c3fc2282a1574bddd85d extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "blog/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Blog";
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

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container\">               
                <div class=\"mb-4 mt-4\">
                    <form method=\"GET\">
                        <div class=\"input-group mb-2\">
                        <input type=\"search\" name=\"search\" class=\"form-control rounded\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"search-addon\" />
                        <button type=\"submit\" class=\"btn btn-outline-primary\">search</button>
                        </div>
                    </form>                            
                </div>
                              

                <div class=\"row\">
                    ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["articles"] ?? null)) > 0)) {
            // line 21
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                yield "                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" style=\"text-decoration:none;\">
                        <figure class=\"card card-product-grid\">
                            <div class=\"img-wrap\" style=\"background-image: url('/blog/";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "images", [], "any", false, false, false, 25)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 25), "html", null, true);
                yield "');\"></div>
                            <figcaption class=\"info-wrap border-top\">
                                <h3>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 27), "html", null, true);
                yield "</h3>
                                <p class=\"title mb-2\">Categorie : ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorieArticle", [], "any", false, false, false, 28), "libelle", [], "any", false, false, false, 28), "html", null, true);
                yield "</p>
                                <div class=\"article-infos\">
                                    <div class=\"article-date\"><i class=\"fa-solid fa-calendar-days pb-2 pb-2\"></i>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 30)), "html", null, true);
                yield "</div>
                                    <div class=\"article-auteur\"><i class=\"fa-solid fa-user\"></i>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 31), "prenom", [], "any", false, false, false, 31), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
                yield "</div>
                                </div>
                            </figcaption>
                        </figure></a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "                    ";
        } else {
            // line 38
            yield "                    ";
            if (array_key_exists("recherche", $context)) {
                // line 39
                yield "                    <p>Aucun article ne correspond à votre recherche</p>
                    ";
            } else {
                // line 41
                yield "                    <p>Aucun article publié dans le blog</p>
                    <div style=\"height:150px\">
                    </div>
                    ";
            }
            // line 45
            yield "                    ";
        }
        // line 46
        yield "                </div>
                <hr>
                <div class=\"d-flex justify-content-center\">
                    ";
        // line 49
        CoreExtension::getAttribute($this->env, $this->source, ($context["articles"] ?? null), "setPageRange", [2], "method", false, false, false, 49);
        // line 50
        yield "                    ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["articles"] ?? null));
        yield "
                </div>
            </main>
        </div>
    </section>
    <!-- SECOND SECTION END -->

";
        yield from [];
    }

    // line 60
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
        return "blog/index.html.twig";
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
        return array (  185 => 60,  171 => 50,  169 => 49,  164 => 46,  161 => 45,  155 => 41,  151 => 39,  148 => 38,  145 => 37,  131 => 31,  127 => 30,  122 => 28,  118 => 27,  113 => 25,  108 => 23,  105 => 22,  100 => 21,  98 => 20,  82 => 6,  75 => 5,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/index.html.twig");
    }
}
