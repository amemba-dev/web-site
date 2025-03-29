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

/* admin/admin_page_about/index.html.twig */
class __TwigTemplate_4cc65dc1121ad93df781efd5288d8ff8 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_page_about/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Contenu de la page About ";
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
        yield "<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSix\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSix\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSix\">
                                <strong> Section 1 : Mission </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSix\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_about_section1");
        yield "\">
                                        <figure class=\"card card-product-grid\" >
                                            <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                            <img src=\"/pages/";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionPath", [], "any", false, false, false, 22), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                            </div>
                                            <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                            <p class=\"title mb-2\"></p>
                                            <div class=\"form-group\">
                                                <input type=\"file\" class=\"form-control-file\" name=\"img1\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                            </div>
                                        </figcaption>
                                        </figure>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"membreTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"missionTitre\" id=\"membreTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionTitre", [], "any", false, false, false, 36), "html", null, true);
        yield "\">                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                          <label for=\"my_editor\">Texte</label>
                                          <textarea class=\"form-control\" name=\"missionTexte\" id=\"my_editor\" rows=\"4\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionText", [], "any", false, false, false, 42), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                                <strong> Section 2 : Realisations </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                                <div class=\"accordion-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <h4 class=\"mt-3\">Ajouter une réalisation</h4>
                                            <form class=\"form form-horizontal mb-3\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 65
        if (array_key_exists("real", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisation_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["real"] ?? null), "id", [], "any", false, false, false, 65)]), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_about_section2");
        }
        yield "\">
                                                <div class=\"row\">
                                                    <div class=\"col-6\">
                                                        <div class=\"form-group\">
                                                            <label for=\"membreTitre\">Titre</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"titre\" id=\"membreTitre\" aria-describedby=\"helpId\" placeholder=\"\" 
                                                            value=\"";
        // line 71
        if (array_key_exists("real", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["real"] ?? null), "titre", [], "any", false, false, false, 71), "html", null, true);
        } else {
        }
        yield "\" required>                                               
                                                        </div>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"form-group\">
                                                            <label for=\"membreTitre\">Image</label>
                                                            <input type=\"file\" class=\"form-control\" name=\"img\" id=\"membreTitre\"  accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\" ";
        // line 77
        if (array_key_exists("real", $context)) {
        } else {
            yield "required";
        }
        yield ">                                               
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label for=\"my_editor1\">Mini Description</label>
                                                    <textarea class=\"form-control\" name=\"min-description\" rows=\"2\" maxlength=\"125\">";
        // line 84
        if (array_key_exists("real", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["real"] ?? null), "miniDescription", [], "any", false, false, false, 84), "html", null, true);
        } else {
        }
        yield "</textarea>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label for=\"my_editor1\">Description</label>
                                                    <textarea class=\"form-control\" name=\"description\" id=\"my_editor3\" rows=\"6\">";
        // line 89
        if (array_key_exists("real", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["real"] ?? null), "description", [], "any", false, false, false, 89), "html", null, true);
        } else {
        }
        yield "</textarea>
                                                </div>
                                                
                                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter une realisation\">    
                                            </form>
                                        </div>
                                        <div class=\"col\">
                                            <h4 class=\"mt-3\">Liste des réalisations </h4>
                                            <table class=\"table table-striped table-hover\">
                                                <thead>
                                                    <tr>
                                                    <th scope=\"col\">Titre</th>
                                                    <th scope=\"col\"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 106
            yield "                                                    <tr>
                                                    <th scope=\"row\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "titre", [], "any", false, false, false, 107), "html", null, true);
            yield "</th>
                                                    <td> <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_about_section2_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"btn btn-warning mb-2\"> ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 108) == "ARCHIVE")) {
                yield " Afficher";
            } else {
                yield " Archiver";
            }
            yield " </a> </td>
                                                    <td><a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisation_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\"><i class=\"bi bi-pencil-square\"></i></a>
                                                    <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_realisation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\"><i class=\"bi bi-trash\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" ></i></a>
                                                    
                                                    </td>
                                                    </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-heading3\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse3\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapse3\">
                                <strong> Section 3 : Mot de la presidente </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapse3\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-heading3\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_about_section3");
        yield "\">
                                        <figure class=\"card card-product-grid\" >
                                            <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                            <img src=\"/pages/";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motPath", [], "any", false, false, false, 139), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                            </div>
                                            <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                            <p class=\"title mb-2\"></p>
                                            <div class=\"form-group\">
                                                <input type=\"file\" class=\"form-control-file\" name=\"img2\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                            </div>
                                        </figcaption>
                                        </figure>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"motTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"motTitre\" id=\"motTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motTitre", [], "any", false, false, false, 153), "html", null, true);
        yield "\">                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                          <label for=\"my_editor2\">Texte</label>
                                          <textarea class=\"form-control\" name=\"motContenue\" id=\"my_editor2\" rows=\"3\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motContenu", [], "any", false, false, false, 159), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                

            </div>
        </div>
    </section>    
</div>
";
        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 178
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/form-edit/ckeditor.js"), "html", null, true);
        yield "\"></script>
    <script>
        ClassicEditor.create(document.getElementById('my_editor'));
        ClassicEditor.create(document.getElementById('my_editor1'));
        ClassicEditor.create(document.getElementById('my_editor2'));
        ClassicEditor.create(document.getElementById('my_editor3'));
        ClassicEditor.create(document.getElementById('my_editor4'))
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_page_about/index.html.twig";
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
        return array (  337 => 178,  330 => 177,  308 => 159,  299 => 153,  282 => 139,  276 => 136,  253 => 115,  242 => 110,  238 => 109,  228 => 108,  224 => 107,  221 => 106,  217 => 105,  195 => 89,  184 => 84,  171 => 77,  159 => 71,  146 => 65,  120 => 42,  111 => 36,  94 => 22,  88 => 19,  71 => 4,  64 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_page_about/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_page_about/index.html.twig");
    }
}
