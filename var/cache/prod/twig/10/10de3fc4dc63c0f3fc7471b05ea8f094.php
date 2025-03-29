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

/* wallet/index.html.twig */
class __TwigTemplate_0a5ad21f7ef14fb76d9090eab4cc0f88 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "wallet/index.html.twig", 1);
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
        yield " 
<!-- Utils Start -->
    <div class=\"top\" id=\"top\"></div>
    <div id=\"scroll-to-top\"><a href=\"#top\"><i class=\"fa-2x fa-solid fa-angle-up\"></i></a></div>
    <!-- Utils End -->

    <!-- SECOND SECTION START -->
    <div class = \"mb-5\">
        <section class=\"second\">
            <div class=\"container\">
                <h2> Bienvenue dans  votre Portefeuille AMEMBA </h2>
                <p class=\"mt-3\">
                    Recharger votre portefeuille AMEMBA et utiliser le pour payer votre cotisation, participer aux collectes, acheter vos goodies préférés dans la boutique.
                </p>
                <div class=\"row mt-5\">
                    <div class=\"col-4\">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    Details du compte
                                    </button>
                                </h2>
                                <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        <div class=\"\">
                                            <div class=\"card card-body mb-4\">
                                                <article class=\"icontext d-flex\">
                                                    <span class=\"icon-recharge\"><i class=\"fa-solid fa-scale-balanced\"></i></span>
                                                    <div class=\"text\">
                                                        <h6 class=\"mb-1\">Solde</h6> <span>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solde"] ?? null), "html", null, true);
        yield " XOF</span>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class=\"recharge-form my-3\">
                                            <h4>Recharger mon compte</h4>
                                            <form action=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_recharge");
        yield "\" method=\"POST\">
                                                <div class=\"row mb-3\">
                                                    <div class = \"card \">
                                                        <div class=\"my-3\">
                                                            <input type=\"number\" min=\"100\" class=\"form-control\"  placeholder=\"Montant\" name=\"montant\" required>
                                                            <br>
                                                            <input type=\"text\" min=\"100\" class=\"form-control\"  placeholder=\"numero\" name=\"numero\" required>
                                                            <br>
                                                            <div class=\"form-check\">
                                                                <input class=\"form-check-input\" type=\"radio\" name=\"moyen\" id=\"flexRadioDefault1\" value=\"Orange Money\" required>
                                                                <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                                                    Orange Money
                                                                    <br>
                                                                    <br>
                                                                    <div id=\"bloc1\" style=\"display:none\">
                                                                    <p>Code marchand : 473191 <br>
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/wave.png"), "html", null, true);
        yield "\" height=\"250px\" width=\"250px\">
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <button type=\"submit\" class=\"btn btn-outline-success mt-2\">Recharger</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          </div>
                        
                    </div>
    
                    <div class=\"col-8\">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                              <h2 class=\"accordion-header\" id=\"headingTwo\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-controls=\"collapseTwo\">
                                  Liste des transactions
                                </button>
                              </h2>
                              <div id=\"collapseTwo\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                                <div class=\"accordion-body\">
                                    <table class=\"table table-striped table-hover\">
                                        <thead>
                                          <tr>
                                            <th scope=\"col\">Date</th>
                                            <th scope=\"col\">Montant</th>
                                           
                                            <th scope=\"col\">Type de transaction</th>
                                             <th scope=\"col\">Etat</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 110
            yield "                                          <tr>
                                            <th> ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "date", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
            yield " </th>
                                            <td scope=\"row\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "montant", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                            ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "type", [], "any", false, false, false, 113) == "Achat")) {
                // line 114
                yield "                                            <td>
                                                <div class=\"row\">
                                                    <div class = \"col-6\">  ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "type", [], "any", false, false, false, 116), "html", null, true);
                yield " </div>
                                                    <div class = \"col-6\">  <a href=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_commande_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "commande", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\" class=\"btn btn-light\">Detail</a> </div>
                                                </div>
                                            </td>
                                            ";
            } else {
                // line 121
                yield "                                            <td> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "type", [], "any", false, false, false, 121), "html", null, true);
                yield "</td>
                                            ";
            }
            // line 123
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "type", [], "any", false, false, false, 123) == "Depôt")) {
                // line 124
                yield "                                            <td scope=\"row\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trans"], "etat", [], "any", false, false, false, 124), "html", null, true);
                yield "</td>
                                            ";
            }
            // line 126
            yield "                                            
                                          </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trans'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "                                        </tbody>
                                      </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
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
        return "wallet/index.html.twig";
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
        return array (  276 => 147,  269 => 146,  259 => 144,  242 => 129,  234 => 126,  228 => 124,  225 => 123,  219 => 121,  212 => 117,  208 => 116,  204 => 114,  202 => 113,  198 => 112,  194 => 111,  191 => 110,  187 => 109,  145 => 70,  112 => 40,  102 => 33,  64 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "wallet/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/wallet/index.html.twig");
    }
}
