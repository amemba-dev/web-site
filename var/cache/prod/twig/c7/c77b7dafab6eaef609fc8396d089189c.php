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

/* emplois_details/index.html.twig */
class __TwigTemplate_90befacb3314eac159986a28a7a25981 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "emplois_details/index.html.twig", 1);
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
        yield " <!-- SECOND SECTION START -->
 <section class=\"second\">
    <div class=\"container py-4\">
        
        <div class=\"forum-post mb-4\">
            <hr>
            <h3>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</h3>
            <p>
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "description", [], "any", false, false, false, 16), "html", null, true);
        yield "
            </p>
            <div class=\"forums-post-infos d-flex justify-content-between\">
                <span class=\"badge text-bg-secondary\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "domaine", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
                <div class=\"right\">Par
                    <span class=\"name\">";
        // line 21
        if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "membre", [], "any", false, false, false, 21))) {
            yield " Amemba ";
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "membre", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "membre", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield " ";
        }
        yield "</span>, Expire le
                    <span class=\"name\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["emplois"] ?? null), "endAt", [], "any", false, false, false, 22), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
        yield " </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 32
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
        return "emplois_details/index.html.twig";
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
        return array (  131 => 32,  118 => 22,  106 => 21,  101 => 19,  95 => 16,  90 => 14,  82 => 8,  75 => 7,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emplois_details/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/emplois_details/index.html.twig");
    }
}
