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

/* blog/admin.article.details.html.twig */
class __TwigTemplate_7376980f0d539f72b0d0697b97681160 extends Template
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
            'page_content' => [$this, 'block_page_content'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "blog/admin.article.details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Details d'un article ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<h2 class=\"first-title text-center mb-4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</h2>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "

    <section class=\"second py-5\">
        <div class=\"container w-100\">
            <form method=\"POST\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_change_categorie");
        yield "\">
                <h4>Changer la categorie de l'article</h4>
                <div class=\"row\">
                    <div class=\"col-6\">
                    <select class=\"form-select\" aria-label=\"Default select example\" name=\"cat\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 18
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 18), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "                    </select>
                    <input type=\"text\" name=\"slug\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 21), "html", null, true);
        yield "\" hidden>
                    </div>   
                    <div class=\"col-6\">
                        <button type=\"submit\" class=\"btn btn-primary\">Changer</button>
                    </div>
                </div>
            </form>
            <div class=\"single-article py-5\">
                <div class=\"img-article\" style=\"background-image: url('/blog/";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "images", [], "any", false, false, false, 29)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 29), "html", null, true);
        yield "');\"></div>
                <h3>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 30), "html", null, true);
        yield "</h3>
                <div class=\"d-flex\">
                    <div class=\"author mx-2\">
                        <i class=\"fa-solid fa-user\"></i>
                        <span>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"day\">
                        <i class=\"fa-solid fa-calendar\"></i>
                        <span> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 38)), "html", null, true);
        yield " </span>
                    </div>
                </div>
                <hr>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paragraphes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 43
            yield "                <p class=\"my-4\">
                    ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "
                </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-6\">           
            
            ";
        // line 53
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "statut", [], "any", false, false, false, 53)) {
            // line 54
            yield "                <div class=\"row\">
                <div class=\"col-6\">
                <form method=\"POST\" action=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\">
                    <button type=\"submit\" name=\"valider\" value=\"val\" id=\"\" class=\"btn btn-primary\">Valider</button>
                </form>
                </div>
                <div class=\"col-6\">
                <form method=\"POST\" action=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\">
                    <button type=\"submit\" name=\"refuser\" value=\"val\" id=\"\" class=\"btn btn-primary\">Refuser</button>
                </form>
                </div>
                </div>
            ";
        }
        // line 67
        yield "            </div>
            <div class=\"col-6\">
                <form method=\"POST\" action=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 69)]), "html", null, true);
        yield "\">
                    ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "publishedAt", [], "any", false, false, false, 70)) {
            // line 71
            yield "                     <button type=\"submit\" name=\"visibility\" value=\"vis\" id=\"\" class=\"btn btn-primary\">";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "lisibilite", [], "any", false, false, false, 71) && CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "statut", [], "any", false, false, false, 71))) {
                yield "Afficher";
            } else {
                yield "Archiver";
            }
            yield "</button>";
        }
        // line 72
        yield "                </form>
            </div>
        </div>

        <div class=\"container \">
            <h3 class=\"mt-3\">Commentaires</h3>

            <div class=\"row \">
                <div class=\"col-12 \">
                    <div class=\"container p-0\">
                        <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-md-12 col-lg-10 col-xl-8 w-100\">
                                <div class=\"card mb-3\">
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "commentaires", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 86
            yield "                                    <div class=\"card-body\">
                                        <div class=\"d-flex flex-start align-items-center\">
                                            <div>
                                                <h6 class=\"fw-bold text-primary mb-1\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 89), "prenom", [], "any", false, false, false, 89), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            yield "</h6>
                                                <p class=\"text-muted small mb-0\">
                                                    ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 91), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"mt-3 mb-4 pb-2\">
                                            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 97), "html", null, true);
            yield "
                                        </p>
                                        ";
            // line 99
            if (CoreExtension::getAttribute($this->env, $this->source, $context["com"], "isVisible", [], "any", false, false, false, 99)) {
                // line 100
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_alter_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"bi bi-trash\"> Supprimer</i></button></a>
                                        ";
            } else {
                // line 102
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_alter_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield "\"><button type=\"button\" class=\"btn btn-primary\"><i class=\"bi bi-pencil-square\"> Afficher</i><button></a>
                                        ";
            }
            // line 104
            yield "                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/admin.article.details.html.twig";
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
        return array (  289 => 106,  282 => 104,  276 => 102,  270 => 100,  268 => 99,  263 => 97,  254 => 91,  247 => 89,  242 => 86,  238 => 85,  223 => 72,  214 => 71,  212 => 70,  208 => 69,  204 => 67,  195 => 61,  187 => 56,  183 => 54,  181 => 53,  172 => 46,  163 => 44,  160 => 43,  156 => 42,  149 => 38,  140 => 34,  133 => 30,  129 => 29,  118 => 21,  115 => 20,  104 => 18,  100 => 17,  92 => 12,  86 => 8,  79 => 7,  71 => 5,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/admin.article.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/admin.article.details.html.twig");
    }
}
