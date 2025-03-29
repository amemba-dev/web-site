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

/* forum/admin.sujet.details.html.twig */
class __TwigTemplate_9bfefc26cd23aec97fddf491cf520ac2 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "forum/admin.sujet.details.html.twig", 1);
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
            <form method=\"POST\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujet_change_categorie");
        yield "\">
                <h4>Changer la thematique de la question</h4>
                <div class=\"row\">
                    <div class=\"col-6\">
                    <select class=\"form-select\" aria-label=\"Default select example\" name=\"cat\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 15
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 15), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                    </select>
                    <input type=\"text\" name=\"slug\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "slug", [], "any", false, false, false, 18), "html", null, true);
        yield "\" hidden>
                    </div>   
                    <div class=\"col-6\">
                        <button type=\"submit\" class=\"btn btn-primary\">Changer</button>
                    </div>
                </div>
            </form>
            <div class=\"forum-post mb-4\">
                <hr>
                <h3>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "contenu", [], "any", false, false, false, 27), "html", null, true);
        yield "</h3>
                
                <div class=\"forums-post-infos d-flex justify-content-between\">
                    <span class=\"badge text-bg-secondary\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "commentaires", [], "any", false, false, false, 30)), "html", null, true);
        yield " reponse(s)</span>
                    <div class=\"right\">Par
                        <span class=\"name\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "auteur", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "auteur", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>, publie le
                        <span class=\"name\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["sujet"] ?? null), "createdAt", [], "any", false, false, false, 33), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 45
            yield "                                    <div class=\"card mb-3\">
                                   
                                    <div class=\"card-body\">
                                        <div class=\"d-flex flex-start align-items-center\">
                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            <div>
                                                <h6 class=\"fw-bold text-primary mb-1\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
            yield "</h6>
                                                <p class=\"text-muted small mb-0\">
                                                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 53), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"mt-3 mb-4 pb-2\">
                                            ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 59), "html", null, true);
            yield "
                                        </p>

                                        ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, $context["com"], "isVisible", [], "any", false, false, false, 62)) {
                // line 63
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujet_alter_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"bi bi-trash\"> Supprimer</i></button></a>
                                        ";
            } else {
                // line 65
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujet_alter_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\"><button type=\"button\" class=\"btn btn-primary\"><i class=\"bi bi-pencil-square\"> Afficher</i><button></a>
                                        ";
            }
            // line 67
            yield "
                                    </div>
                                    
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                                </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forum/admin.sujet.details.html.twig";
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
        return array (  213 => 72,  203 => 67,  197 => 65,  191 => 63,  189 => 62,  183 => 59,  174 => 53,  167 => 51,  159 => 45,  155 => 44,  141 => 33,  135 => 32,  130 => 30,  124 => 27,  112 => 18,  109 => 17,  98 => 15,  94 => 14,  86 => 9,  81 => 6,  74 => 5,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forum/admin.sujet.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/forum/admin.sujet.details.html.twig");
    }
}
