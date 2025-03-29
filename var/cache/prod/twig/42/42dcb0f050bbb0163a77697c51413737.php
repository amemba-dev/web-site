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

/* blog/article.details.html.twig */
class __TwigTemplate_b9ef9d694b96e370542fecfd0675ecde extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "blog/article.details.html.twig", 1);
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
        yield "
    <section class=\"second py-5\">
        <div class=\"container w-100\">
            <div class=\"single-article py-5\">
                <div class=\"img-article\" style=\"background-image: url('/blog/";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "images", [], "any", false, false, false, 10)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 10), "html", null, true);
        yield "');\"></div>
                <h3>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 11), "html", null, true);
        yield "</h3>
                <div class=\"d-flex\">
                    <div class=\"author mx-2\">
                        <i class=\"fa-solid fa-user\"></i>
                        <span>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "auteur", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"day\">
                        <i class=\"fa-solid fa-calendar\"></i>
                        <span> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 19)), "html", null, true);
        yield " </span>
                    </div>
                </div>
                <hr>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["paragraphes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            yield "                <p class=\"my-4\">
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "
                </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    
            </div>
        </div>
        <div class=\"container \">
            <h3 class=\"\">Commentaires</h3>

            <div class=\"row \">
                <div class=\"col-12 \">
                    <div class=\"container p-0\">
                        <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-md-12 col-lg-10 col-xl-8 w-100\">
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 39
            yield "                                <div class=\"card mb-3\">
                                    
                                    <div class=\"card-body\">
                                        ";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, $context["com"], "isVisible", [], "any", false, false, false, 42)) {
                // line 43
                yield "                                        
                                        <div class=\"d-flex flex-start align-items-center\">
                                            ";
                // line 45
                if (CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 45), "roles", [], "any", false, false, false, 45))) {
                    // line 46
                    yield "                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 46), "profile", [], "any", false, false, false, 46)) {
                        yield " /pp/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 46), "profile", [], "any", false, false, false, 46), "html", null, true);
                        yield " ";
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                        yield " ";
                    }
                    yield "\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            ";
                } else {
                    // line 48
                    yield "                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" width=\"60\" height=\"60\" />

                                            ";
                }
                // line 51
                yield "                                            <div>
                                                <h6 class=\"fw-bold text-primary mb-1\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
                yield "</h6>
                                                <p class=\"text-muted small mb-0\">
                                                    ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 54), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
                yield "
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"mt-3  pb-2\">
                                            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 60), "html", null, true);
                yield "
                                        </p>
                                        ";
            } else {
                // line 63
                yield "                                        <b>Commentaire supprimé par l'administrateur</b>
                                        ";
            }
            // line 65
            yield "                                    </div>
                                    
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                                <div class=\"card\">
                                    
                                    <div class=\"card-footer py-3 border-0\" style=\"background-color: #f8f9fa;\">
                                        <h6>Votre commentaire</h6>
                                        <form method=\"POST\" action=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_comment");
        yield "\">
                                        <div class=\"d-flex flex-start w-100\">
                                            ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75)) {
            // line 76
            yield "                                            ";
            if (CoreExtension::inFilter("ROLE_MEMBRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), "roles", [], "any", false, false, false, 76))) {
                // line 77
                yield "                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "profile", [], "any", false, false, false, 77)) {
                    yield " /pp/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "profile", [], "any", false, false, false, 77), "html", null, true);
                    yield " ";
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                    yield " ";
                }
                yield "\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            ";
            } else {
                // line 79
                yield "                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
                yield "\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            ";
            }
            // line 81
            yield "                                            ";
        }
        // line 82
        yield "                                            <div class=\"form-outline w-100\">
                                                <textarea name=\"content\" class=\"form-control\" id=\"textAreaExample\" rows=\"4\" style=\"background: #fff;\"></textarea>
                                            </div>
                                            
                                            <input type=\"text\" name=\"slug\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 86), "html", null, true);
        yield "\" hidden>
                                        </div>
                                        <div class=\"float-end mt-2 pt-1\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Poster</button>
                                        </div> 
                                        </form>
                                    </div>
                                </div>
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

    // line 107
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
        return "blog/article.details.html.twig";
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
        return array (  286 => 107,  263 => 86,  257 => 82,  254 => 81,  248 => 79,  235 => 77,  232 => 76,  230 => 75,  225 => 73,  219 => 69,  210 => 65,  206 => 63,  200 => 60,  191 => 54,  184 => 52,  181 => 51,  174 => 48,  161 => 46,  159 => 45,  155 => 43,  153 => 42,  148 => 39,  144 => 38,  131 => 27,  122 => 25,  119 => 24,  115 => 23,  108 => 19,  99 => 15,  92 => 11,  88 => 10,  82 => 6,  75 => 5,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/article.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/article.details.html.twig");
    }
}
