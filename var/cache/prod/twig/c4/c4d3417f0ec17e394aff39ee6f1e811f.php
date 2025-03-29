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

/* paginator.html.twig */
class __TwigTemplate_7a1c8858189f39938c0555ae8ecb8b6b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            yield "<div class=\"pagination\">
    <ul>

    ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                yield "        <li>
            <a rel=\"prev\" href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        </li>
    ";
            } else {
                // line 10
                yield "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
        </li>
    ";
            }
            // line 14
            yield "
    ";
            // line 15
            if ((($context["startPage"] ?? null) > 1)) {
                // line 16
                yield "        <li>
            <a href=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                yield "\">1</a>
        </li>
        ";
                // line 19
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 20
                    yield "            <li>
                <a href=\"";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    yield "\">2</a>
            </li>
        ";
                } elseif ((                // line 23
($context["startPage"] ?? null) != 2)) {
                    // line 24
                    yield "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 28
                yield "    ";
            }
            // line 29
            yield "
    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                yield "        ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 32
                    yield "            <li>
                <a href=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
            </li>
        ";
                } else {
                    // line 36
                    yield "            <li class=\"active\">
                <span>";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
            </li>
        ";
                }
                // line 40
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "
    ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                yield "        ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    yield "            ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        yield "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 50
                        yield "                <li>
                    <a href=\"";
                        // line 51
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "</a>
                </li>
            ";
                    }
                    // line 54
                    yield "        ";
                }
                // line 55
                yield "        <li>
            <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
        </li>
    ";
            }
            // line 59
            yield "
    ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                yield "        <li>
            <a rel=\"next\" href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), Twig\Extension\CoreExtension::merge(($context["query"] ?? null), [ (string)($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 65
                yield "        <li class=\"disabled\">
            <span>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 69
            yield "    </ul>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "paginator.html.twig";
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
        return array (  209 => 69,  203 => 66,  200 => 65,  192 => 62,  189 => 61,  187 => 60,  184 => 59,  176 => 56,  173 => 55,  170 => 54,  162 => 51,  159 => 50,  153 => 46,  150 => 45,  147 => 44,  145 => 43,  142 => 42,  135 => 40,  129 => 37,  126 => 36,  118 => 33,  115 => 32,  112 => 31,  108 => 30,  105 => 29,  102 => 28,  96 => 24,  94 => 23,  89 => 21,  86 => 20,  84 => 19,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  65 => 11,  62 => 10,  54 => 7,  51 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "paginator.html.twig", "/workspace/deploy/amemba-site-dev/templates/paginator.html.twig");
    }
}
