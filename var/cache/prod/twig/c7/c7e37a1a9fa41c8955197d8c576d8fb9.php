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

/* forum/index.html.twig */
class __TwigTemplate_2a7d1920aca403eeab0df61b8c0a1482 extends Template
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
            'page_content' => [$this, 'block_page_content'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "forum/index.html.twig", 1);
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
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <h2 class=\"first-title text-center mb-4\">Forum</h2>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Forum";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "<!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container py-4\">
            <a type=\"button\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_auteur");
        yield "\" class=\"btn btn-primary position-relative my-3\">
                Liste de mes questions <span class=\"position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2\"><span class=\"visually-hidden\">unread messages</span></span>
            </a>
            <div class=\"mb-4\">            
                <form method=\"GET\">
                    <div class=\"input-group mb-2\">
                    <input type=\"search\" name=\"search\" class=\"form-control rounded\" placeholder=\"Search\" aria-label=\"Search\" aria-describedby=\"search-addon\" />
                    <button type=\"submit\" class=\"btn btn-outline-primary\">search</button>
                    </div>
                </form>           
            </div>

            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sujets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 25
            yield "            <div class=\"forum-post mb-4\">
                <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_sujet_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["su"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">
                    <hr>
                    <h3>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["su"], "contenu", [], "any", false, false, false, 28), "html", null, true);
            yield "</h3>
                    
                </a>
                <div class=\"forums-post-infos d-flex justify-content-between\">
                    <span class=\"badge text-bg-secondary\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["su"], "commentaires", [], "any", false, false, false, 32)), "html", null, true);
            yield " reponse(s)</span>
                    <div class=\"right\">Par
                        <span class=\"name\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "auteur", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "auteur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>, publie le
                        <span class=\"name\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "createdAt", [], "any", false, false, false, 35), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</span>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['su'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "            <div class=\"d-flex mt-4 d-flex justify-content-end\">
                ";
        // line 41
        CoreExtension::getAttribute($this->env, $this->source, ($context["sujets"] ?? null), "setPageRange", [2], "method", false, false, false, 41);
        // line 42
        yield "                ";
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["sujets"] ?? null));
        yield "
            </div>
        </div>

        <div class=\"container py-5\">
            <div>
            <h2>Poster une question</h2>
            </div>
            <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_add");
        yield "\">
                <div class=\"form-top d-flex\">
                    <div class=\"form-top-right form-top-side\">
                        <div class=\"form-group form-row\">
                            <label for=\"title\">Thematique<span class=\"require\">*</span></label>
                            <select name=\"thematique\" id=\"\" class=\"form-control mb-3\">
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["thematiques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "libelle", [], "any", false, false, false, 57), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                            </select>
                        </div>
                    </div>
                </div>
    \t\t    <div class=\"form-group mt-3\">
    \t\t        <label for=\"article\">Contenu de la question</label>
    \t\t        <textarea rows=\"3\" minlength=\"2\" class=\"form-control\" name=\"contenu\" required></textarea>
    \t\t    </div>
    \t\t    <div class=\"form-group\">
    \t\t        <p><span class=\"require\">*</span> - Champs obligatoires</p>
    \t\t    </div>
    \t\t    <div class=\"form-group\">
    \t\t        <button type=\"submit\" class=\"btn btn-primary\">
    \t\t            Poster
    \t\t        </button>
    \t\t    </div>
    \t\t</form>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 82
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
        return "forum/index.html.twig";
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
        return array (  223 => 82,  198 => 59,  187 => 57,  183 => 56,  174 => 50,  162 => 42,  160 => 41,  157 => 40,  146 => 35,  140 => 34,  135 => 32,  128 => 28,  123 => 26,  120 => 25,  116 => 24,  101 => 12,  96 => 9,  89 => 8,  78 => 7,  72 => 4,  65 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forum/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/forum/index.html.twig");
    }
}
