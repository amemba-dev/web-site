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

/* forum/sujet.details.html.twig */
class __TwigTemplate_e22efe40664402031deffbfdd7472877 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "forum/sujet.details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Forum";
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
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container py-4\">
            <div class=\"forum-post mb-4\">
                <hr>
                <h3>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "contenu", [], "any", false, false, false, 11), "html", null, true);
        yield "</h3>
                
                <div class=\"forums-post-infos d-flex justify-content-between\">
                    <span class=\"badge text-bg-secondary\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "commentaires", [], "any", false, false, false, 14)), "html", null, true);
        yield " reponse(s)</span>
                    <div class=\"right\">Par
                        <span class=\"name\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "auteur", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "auteur", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>, publie le
                        <span class=\"name\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "createdAt", [], "any", false, false, false, 17), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>
            <div class=\"container mt-5 \">
                <h4>Réponses</h4>
                <div class=\"row \">
                    <div class=\"col-12 \">
                        <div class=\"container p-0\">
                            <div class=\"row d-flex justify-content-center\">
                                <div class=\"col-md-12 col-lg-10 col-xl-8 w-100\">
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 29
            yield "                                    <div class=\"card mb-3\">
                                    
                                    <div class=\"card-body\">
                                        ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["com"], "isVisible", [], "any", false, false, false, 32)) {
                // line 33
                yield "                                        
                                        <div class=\"d-flex flex-start align-items-center\">
                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            <div>
                                                <h6 class=\"fw-bold text-primary mb-1\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
                yield "</h6>
                                                <p class=\"text-muted small mb-0\">
                                                    ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 39), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
                yield "
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"mt-3 mb-4 pb-2\">
                                            ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 45), "html", null, true);
                yield "
                                        </p>
                                        ";
            } else {
                // line 48
                yield "                                            <b>Réponse supprimée par l'administrateur</b>
                                        ";
            }
            // line 50
            yield "                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                                <div class=\"card\"> 
                                    <div class=\"card-footer py-3 border-0\" style=\"background-color: #f8f9fa;\">
                                        <h6>Votre reponse</h6>
                                        <form method=\"POST\" action=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujet_comment");
        yield "\">
                                        <div class=\"d-flex flex-start w-100\">
                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"40\" height=\"40\" />
                                            <div class=\"form-outline w-100\">
                                                <textarea name=\"content\" class=\"form-control\" id=\"textAreaExample\" rows=\"4\" style=\"background: #fff;\"></textarea>
                                            </div>
                                            <input type=\"text\" name=\"slug\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "slug", [], "any", false, false, false, 62), "html", null, true);
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
        </div>
    </section>
    <!-- SECOND SECTION END -->

";
        yield from [];
    }

    // line 84
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
        return "forum/sujet.details.html.twig";
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
        return array (  210 => 84,  185 => 62,  176 => 56,  171 => 53,  163 => 50,  159 => 48,  153 => 45,  144 => 39,  137 => 37,  131 => 33,  129 => 32,  124 => 29,  120 => 28,  106 => 17,  100 => 16,  95 => 14,  89 => 11,  82 => 6,  75 => 5,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forum/sujet.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/forum/sujet.details.html.twig");
    }
}
