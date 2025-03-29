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

/* emplois/index.html.twig */
class __TwigTemplate_37db075bd16ec57770115dbbc4f0de5a extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "emplois/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Offres d'emplois";
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

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second mt-3\">
        <div class=\"container py-4 mt-3\">

            
           
            <form class=\"d-flex mb-3\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emplois_search");
        yield "\" method=\"POST\">
                <input type=\"text\" class=\"form-control\" id=\"search\" aria-describedby=\"search\" placeholder=\"Rechercher des mots clés...\" name=\"key\" ";
        // line 15
        if (array_key_exists("key", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
                <button type=\"submit\" class=\"btn btn-primary d-flex mx-3\"> Rechercher </button>
            </form>
            ";
        // line 18
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["emplois"] ?? null)) > 0)) {
            // line 19
            yield "            <h6 class=\"mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["emplois"] ?? null)), "html", null, true);
            yield " emplois</h6>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["emplois"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                // line 21
                yield "            <div class=\"forum-post mb-4\">
                <a href=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emplois_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\">
                    <hr>
                    <h3>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "titre", [], "any", false, false, false, 24), "html", null, true);
                yield "</h3>
                    
                </a>
                <div class=\"forums-post-infos d-flex justify-content-between\">
                    <span class=\"badge text-bg-secondary\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "domaine", [], "any", false, false, false, 28), "html", null, true);
                yield "</span>
                    <div class=\"right\">Par
                        <span class=\"name\">";
                // line 30
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "membre", [], "any", false, false, false, 30))) {
                    yield " Amemba ";
                } else {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "membre", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "membre", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                    yield " ";
                }
                yield "</span>, Expire le : 
                        <span class=\"name\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "endAt", [], "any", false, false, false, 31), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
                yield " </span>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "
            ";
        } else {
            // line 38
            yield "            <div style=\"height:170px\">
            ";
        }
        // line 40
        yield "            
            
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 48
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
        return "emplois/index.html.twig";
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
        return array (  176 => 48,  166 => 40,  162 => 38,  158 => 36,  147 => 31,  135 => 30,  130 => 28,  123 => 24,  118 => 22,  115 => 21,  111 => 20,  106 => 19,  104 => 18,  94 => 15,  90 => 14,  82 => 8,  75 => 7,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emplois/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/emplois/index.html.twig");
    }
}
