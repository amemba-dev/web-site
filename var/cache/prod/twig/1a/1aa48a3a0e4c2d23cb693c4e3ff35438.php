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

/* forum/membre.sujets.html.twig */
class __TwigTemplate_3e59b693fa9979f5186b7794ca9bba1d extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "forum/membre.sujets.html.twig", 1);
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
        <section class=\"section container my-3 \">
            <h3 class=\"mt-3\">
                Liste des mes articles
            </h3>
            <div class=\"card\">
                <div class=\"card-header\">
                    Sujets
                </div>
                <div class=\"card-body\">
                    <table class=\"table\" id=\"table1\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date de creation</th>
                                <th>Reponses</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sujets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 25
            yield "                            <tr>
                                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["su"], "contenu", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "createdAt", [], "any", false, false, false, 27), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["su"], "commentaires", [], "any", false, false, false, 28)), "html", null, true);
            yield " Réponses</td>
                                <td>
                                    <a class=\"btn-btn-outline-primary btn-sm\" href=\"#\">Aperçu</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['su'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <!-- Basic Tables end -->
";
        yield from [];
    }

    // line 43
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
        return "forum/membre.sujets.html.twig";
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
        return array (  130 => 43,  119 => 34,  107 => 28,  103 => 27,  99 => 26,  96 => 25,  92 => 24,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forum/membre.sujets.html.twig", "/workspace/deploy/amemba-site-dev/templates/forum/membre.sujets.html.twig");
    }
}
