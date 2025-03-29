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

/* forum/admin.forum.html.twig */
class __TwigTemplate_4d5d32ba0383b4f3fb57cbaff10a36e6 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "forum/admin.forum.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
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
                                <th>Thematique</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sujets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 23
            yield "                            <tr>
                                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["su"], "contenu", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "createdAt", [], "any", false, false, false, 25), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["su"], "commentaires", [], "any", false, false, false, 26)), "html", null, true);
            yield " Réponses</td>
                                <td>
                                    ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["su"], "thematique", [], "any", false, false, false, 28), "libelle", [], "any", false, false, false, 28), "html", null, true);
            yield "
                                </td>
                                <td><a name=\"\" id=\"\" class=\"btn btn-primary\" href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_admin_sujet_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["su"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" role=\"button\">Details</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['su'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    <!-- Basic Tables end -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forum/admin.forum.html.twig";
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
        return array (  112 => 33,  103 => 30,  98 => 28,  93 => 26,  89 => 25,  85 => 24,  82 => 23,  78 => 22,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "forum/admin.forum.html.twig", "/workspace/deploy/amemba-site-dev/templates/forum/admin.forum.html.twig");
    }
}
