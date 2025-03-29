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

/* reset_password/index.html.twig */
class __TwigTemplate_f994cd994da31d8d82de6924f91d0758 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "reset_password/index.html.twig", 1);
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
                <h2 class=\"mt-5 mb-3\">Récupération de mot de passe</h2>
            </div>
        </div>
        <div class=\"login-right login-card\">
            <div class=\"container\">
                <form method = \"post\" action= \"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkData");
        yield "\">
                   
                    <h2>Formulaire de récupération de mot de passe</h2>\t
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["warning"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
                    ";
        // line 27
        if ((($context["titre"] ?? null) == "index")) {
            // line 28
            yield "                    <div class=\"mb-3\">
                         <label class=\"form-label\">Email</label>
                         <input class=\"form-control\" name=\"email\" placeholder=\"Adresse email\" type=\"email\" required >
                    </div> 

                    <div class=\"mb-3\">
                        <label class=\"form-label col-12\">Téléphone</label>
                        <input class=\"form-control\" id='phone' type=\"tel\" required>
                    </div>
                    ";
        }
        // line 37
        yield " 
                    
                    ";
        // line 39
        if (array_key_exists("reset", $context)) {
            // line 40
            yield "                    
                        <input class=\"form-control\" name=\"mail\" placeholder=\"Adresse email\" type=\"email\" required value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reset"] ?? null), "mail", [], "any", false, false, false, 41), "html", null, true);
            yield "\" hidden>
                  
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Code</label>
                        <input class=\"form-control\" name=\"code\" placeholder=\"Code de reinitialisation\" type=\"text\" required>
                   </div>
                    ";
        }
        // line 48
        yield "
                    ";
        // line 49
        if (array_key_exists("code", $context)) {
            // line 50
            yield "                    <input class=\"form-control\" name=\"mail\" placeholder=\"Adresse email\" type=\"email\" required value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["code"] ?? null), "mail", [], "any", false, false, false, 50), "html", null, true);
            yield "\" hidden>
                  
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Mot de passe</label>
                        <input class=\"form-control\" name=\"pwd1\" placeholder=\"Nouveau mot de passe\" type=\"password\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Confirmer votre mot de passe</label>
                        <input class=\"form-control\" name=\"pwd2\" placeholder=\"Confirmez votre mot de passe\" type=\"password\" required>
                   </div>
                    ";
        }
        // line 61
        yield "
                    
                    <div class=\"my-4\">
                      <button type=\"submit\" class=\"btn btn-primary w-100\" ";
        // line 64
        if ((($context["titre"] ?? null) == "")) {
            yield "disabled";
        }
        yield "> Valider  </button>
                    </div> 
            
                </form>
            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->
";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 80
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
        // line 104
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
        return "reset_password/index.html.twig";
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
        return array (  235 => 104,  208 => 80,  205 => 79,  198 => 78,  188 => 76,  171 => 64,  166 => 61,  151 => 50,  149 => 49,  146 => 48,  136 => 41,  133 => 40,  131 => 39,  127 => 37,  115 => 28,  113 => 27,  110 => 26,  100 => 22,  97 => 21,  93 => 20,  87 => 17,  78 => 11,  71 => 6,  64 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/reset_password/index.html.twig");
    }
}
