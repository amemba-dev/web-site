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

/* register/index.html.twig */
class __TwigTemplate_3f462c25c0238e90050d6e98901e7b4b extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "register/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
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
        yield "<!-- REGISTER SECTION START -->
<section class=\"login-register\">
    <div class=\"container d-flex\">
        <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
            <div>
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/join_vector.svg"), "html", null, true);
        yield "\" alt=\"\">
                <h2 class=\"mt-5 mb-3\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["txtRegister"] ?? null), "html", null, true);
        yield "</h2>
                <h2 class=\"mt-5 mb-3\">Ou créez un compte client <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_client");
        yield "\">ici</a> pour effectuer des achats</h2>
            </div>
        </div>
        <div class=\"login-right login-card\">
            <div class=\"container\">
                <form method = \"post\" action= \"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_demande");
        yield "\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                    <h2>Demande d'adhésion</h2>\t
                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Prenom</label>
                            <input type=\"text\" class=\"form-control\" name=\"prenom\" required placeholder=\"Prenom\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nom\" required placeholder=\"Nom\">
                        </div> 
                    </div>
                    <div class=\"mb-3\">
                         <label class=\"form-label\">Email</label>
                         <input class=\"form-control\" name=\"email\" placeholder=\"Adresse email\" type=\"email\" required>
                    </div> 
                    
                    <div class=\"mb-3\">
                        <label class=\"form-label col-12\">Téléphone</label>
                        <input class=\"form-control\" id='phone' name=\"telTest\" type=\"tel\" required>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"row gx-2\">
                        
                             <label class=\"form-label mt-2\">Promotion </label>
                             <input class=\"form-control\" name=\"promotion\" placeholder=\"Année d'obtention du BAC\" type=\"number\" min=\"1983\" max=\"2022\" required>
                         </div>
                    </div> 
                    
                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Pays</label>
                            <input class=\"form-control\" name=\"pays\" placeholder=\"Pays de résidence\" type=\"text\" required onChange=\"javascript:this.value=this.value.toUpperCase();\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Ville</label>
                            <input type=\"text\" class=\"form-control\" required name=\"ville\" placeholder=\"Ville de résidence\" onChange=\"javascript:this.value=this.value.toUpperCase();\">
                        </div> 
                    </div>
                    <div class=\"my-4\">
                      <button type=\"submit\" class=\"btn btn-primary w-100\"> Soumettre  </button>
                    </div> 
            
                   
                    <span>Vous avez deja un compte ? <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a></span> 
                </form>
            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->
";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/intlTelInput.js"), "html", null, true);
        yield "\"></script>
<script>
    var input = document.querySelector(\"#phone\");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: \"off\",
        // dropdownContainer: document.body,
        // excludeCountries: [\"us\"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : \"\";
        //     callback(countryCode);
        //   });
        // },
        hiddenInput: \"full_number\",
        // initialCountry: \"auto\",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        placeholderNumberType: \"MOBILE\",
        preferredCountries: ['sn'],
        separateDialCode: true,
        utilsScript: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/utils.js"), "html", null, true);
        yield "\",
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
        return "register/index.html.twig";
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
        return array (  221 => 107,  194 => 83,  191 => 82,  184 => 81,  174 => 79,  161 => 69,  115 => 25,  105 => 21,  102 => 20,  98 => 19,  94 => 18,  86 => 13,  82 => 12,  78 => 11,  71 => 6,  64 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "register/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/register/index.html.twig");
    }
}
