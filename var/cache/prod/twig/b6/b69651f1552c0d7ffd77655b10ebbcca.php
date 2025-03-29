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

/* commande/client.commande.details.html.twig */
class __TwigTemplate_8a089585a4e6830198f3107bde42bac0 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "commande/client.commande.details.html.twig", 1);
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
        yield "<!-- SECOND SECTION START -->
    <section class=\"second py-5 bg-gray\">
        <div class=\"container\">
            <div class=\"card\">
                <header class=\"card-header\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-6 col-md-6\">
                            <span>
                        <i class=\"material-icons md-calendar_today\"></i> <b>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "date", [], "any", false, false, false, 12)), "html", null, true);
        yield "</b>  
                      </span> <br>
                            <small class=\"text-muted\">Reference: ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "reference", [], "any", false, false, false, 14), "html", null, true);
        yield "</small>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class=\"card-body\">
                    
                    <div class=\"row\">
                        
                            <div class=\"table-responsive\">
                                <table class=\"table border table-hover table-lg\">
                                    <thead>
                                        <tr>
                                            <th width=\"40%\">Produit</th>
                                            <th width=\"20%\">Prix unitaire</th>
                                            <th width=\"20%\">Quantite</th>
                                            <th width=\"20%\" class=\"text-end\">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "getDetailCommandes", [], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            yield "                                        <tr>
                                            <td>
                                                <a class=\"itemside\" href=\"#\">
                                                    
                                                    <div class=\"info\"> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 39), "libelle", [], "any", false, false, false, 39), "html", null, true);
            yield " </div>
                                                </a>
                                            </td>
                                            <td> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["i"], "produit", [], "any", false, false, false, 42), "getPrix", [], "method", false, false, false, 42), "html", null, true);
            yield " </td>
                                            <td> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "quantite", [], "any", false, false, false, 43), "html", null, true);
            yield " </td>
                                            <td class=\"text-end\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 44), "html", null, true);
            yield " FCFA</td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                                        <tr>
                                            <td colspan=\"4\">
                                                <article class=\"float-end\">
                                                    <dl class=\"dlist\">
                                                        <dt>Grand total:</dt>
                                                        <dd> <b class=\"h5\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "getPrixTotal", [], "method", false, false, false, 52), "html", null, true);
        yield " FCFA</b> </dd>
                                                    </dl>
                                                    <dl class=\"dlist\">
                                                        <dt class=\"text-muted\">Statut:</dt>
                                                        <dd>
                                                            <span class=\"badge rounded-pill alert-success text-success\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["commande"] ?? null), "etat", [], "any", false, false, false, 57), "html", null, true);
        yield "</span>
                                                        </dd>
                                                    </dl>
                                                </article>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive// -->
                       
                        <!-- col// -->
                        <!-- col// -->

                    </div>
                </div>
                <!-- card-body end// -->
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 81
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
        return "commande/client.commande.details.html.twig";
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
        return array (  183 => 81,  156 => 57,  148 => 52,  141 => 47,  132 => 44,  128 => 43,  124 => 42,  118 => 39,  112 => 35,  108 => 34,  85 => 14,  80 => 12,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "commande/client.commande.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/commande/client.commande.details.html.twig");
    }
}
