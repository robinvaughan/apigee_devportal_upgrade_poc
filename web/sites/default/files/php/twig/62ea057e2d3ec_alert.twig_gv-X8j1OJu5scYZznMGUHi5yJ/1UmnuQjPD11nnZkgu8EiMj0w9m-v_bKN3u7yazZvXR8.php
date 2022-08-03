<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @apigee-kickstart/alert/alert.twig */
class __TwigTemplate_1b2e858a90410b67ba3697304ff42221986179c013ed402fb401ae7652d6e378 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 23, "block" => 27];
        $filters = ["merge" => 20, "escape" => 22, "join" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape', 'join'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["dismissible"] = (($context["dismissible"]) ?? (true));
        // line 14
        $context["classes"] = twig_array_merge([0 => "alert", 1 => ((        // line 16
($context["type"] ?? null)) ? (("alert-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)))) : ("")), 2 => "border-0", 3 => "rounded-sm", 4 => ((        // line 19
($context["dismissible"] ?? null)) ? ("alert-dismissible") : (""))], ((        // line 20
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 21
        echo "
<div class=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true);
        echo "\" role=\"alert\">
  ";
        // line 23
        if (($context["heading"] ?? null)) {
            // line 24
            echo "    <h4 class=\"alert-heading\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</h4>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
  ";
        // line 31
        if (($context["dismissible"] ?? null)) {
            // line 32
            echo "    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <svg width=\"14\" height=\"14\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M14 1.41L12.59 0 7 5.59 1.41 0 0 1.41 5.59 7 0 12.59 1.41 14 7 8.41 12.59 14 14 12.59 8.41 7z\" fill=\"currentColor\" fill-rule=\"nonzero\" />
      </svg>
    </button>
  ";
        }
        // line 38
        echo "</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@apigee-kickstart/alert/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  101 => 27,  96 => 38,  88 => 32,  86 => 31,  83 => 30,  81 => 27,  78 => 26,  72 => 24,  70 => 23,  66 => 22,  63 => 21,  61 => 20,  60 => 19,  59 => 16,  58 => 14,  56 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@apigee-kickstart/alert/alert.twig", "C:\\xampp\\htdocs\\apigee_upgrade_poc_3_august\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\src\\components\\alert\\alert.twig");
    }
}
