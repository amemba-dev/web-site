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

/* commande/index.html.twig */
class __TwigTemplate_6d853099b20b593c5ef9fd76a3cb488c extends Template
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
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "commande/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "PAYEMENT";
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

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second py-5\">
        <div class=\"container\">
        <h1>Finalisation de la commande</h1>
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"card\">
                        <div class=\"content-body\">
                            <table class=\"table\">
                            <thead>
                                <tr>
                                <th scope=\"col\">Libelle</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\">Quantite</th>
                                <th scope=\"col\">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            yield "                                <tr>
                                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = $context["i"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["produit"] ?? null) : null), "libelle", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = $context["i"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["produit"] ?? null) : null), "prix", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["i"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["quantite"] ?? null) : null), "html", null, true);
            yield "</td>
                                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (($_v3 = $context["i"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["produit"] ?? null) : null), "prix", [], "any", false, false, false, 30) * (($_v4 = $context["i"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["quantite"] ?? null) : null)), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                            </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    Total : ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " FCFA
                </div>
                <aside class=\"col-lg-5\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <form method=\"POST\" action=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add");
        yield "\">
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Numero de transaction</label>
                                    <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"numero\" required>
                                </div>
                                <div class=\"mb-3 form-check\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"moyen\" id=\"flexRadioDefault1\" value=\"Orange Money\" required>
                                        <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                            Orange Money
                                            <br>
                                            <br>
                                            <div id=\"bloc1\" style=\"display:none\">
                                            <p>Code marchant : 473191 <br>
                                            Code à taper sur votre téléphone :
                                                #144#5*378604*Montant*CodeSecret#
                                                Paiement sans frais
                                            </p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"moyen\" id=\"flexRadioDefault2\" value=\"Wave\" required>
                                        <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                            Wave
                                            <br>
                                            <br>
                                            <div id=\"bloc2\" style=\"display:none\">
                                            <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/wave.png"), "html", null, true);
        yield "\" height=\"250px\" width=\"250px\">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Commander</button>
                            </form>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->


    
";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "<script>
    var radio1 = document.getElementById('flexRadioDefault1');
    var radio2 = document.getElementById('flexRadioDefault2');
    var bloc1 = document.getElementById('bloc1');
    var bloc2 = document.getElementById('bloc2');
    radio1.addEventListener('click', function(){
        //display block1 to the opposite of its current state
        if(bloc1.style.display == 'none')
            bloc1.style.display = 'block';
        else
            bloc1.style.display = 'none';
        bloc2.style.display = 'none';
    });
    radio2.addEventListener('click', function(){
        bloc1.style.display = 'none';
        if(bloc2.style.display == 'none')
            bloc2.style.display = 'block';
        else
            bloc2.style.display = 'none';
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/index.html.twig";
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
        return array (  218 => 95,  211 => 94,  201 => 92,  177 => 71,  146 => 43,  138 => 38,  131 => 33,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  107 => 26,  103 => 25,  83 => 7,  76 => 6,  66 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "commande/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/commande/index.html.twig");
    }
}
