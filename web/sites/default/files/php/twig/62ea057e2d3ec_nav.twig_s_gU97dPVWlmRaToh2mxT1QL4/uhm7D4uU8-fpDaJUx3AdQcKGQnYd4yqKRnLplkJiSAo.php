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

/* @radix/nav/nav.twig */
class __TwigTemplate_9267884c2690f38c20df2e97b32388536dd449353604cedbbc420099a9f64ad6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 14, "if" => 16, "set" => 17, "block" => 34, "for" => 35, "include" => 50];
        $filters = ["merge" => 30, "escape" => 33];
        $functions = ["link" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'block', 'for', 'include'],
                ['merge', 'escape'],
                ['link']
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
        // line 14
        $context["menus"] = $this;
        // line 15
        echo "
";
        // line 16
        if ((($context["alignment"] ?? null) == "right")) {
            // line 17
            echo "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 18
($context["alignment"] ?? null) == "center")) {
            // line 19
            echo "  ";
            $context["alignment"] = "justify-content-center";
        } elseif ((        // line 20
($context["alignment"] ?? null) == "vertical")) {
            // line 21
            echo "  ";
            $context["alignment"] = "flex-column";
        } else {
            // line 23
            echo "  ";
            $context["alignment"] = "";
        }
        // line 25
        echo "
";
        // line 26
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null)))) : (""));
        // line 27
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null)))) : (""));
        // line 28
        $context["is_dropdown"] = (((null === ($context["is_dropdown"] ?? null))) ? (true) : (""));
        // line 29
        echo "
";
        // line 30
        $context["nav_classes"] = twig_array_merge([0 => "nav", 1 => ($context["style"] ?? null), 2 => ($context["alignment"] ?? null), 3 => ($context["fill"] ?? null)], ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 31
        echo "
";
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  <ul";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["nav_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 34
            $this->displayBlock('items', $context, $blocks);
            // line 65
            echo "  </ul>
";
        }
    }

    // line 34
    public function block_items($context, array $blocks = [])
    {
        // line 35
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "        ";
            $context["nav_item_classes"] = [0 => "nav-item", 1 => (($this->getAttribute(            // line 38
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 2 => ((            // line 39
($context["is_dropdown"] ?? null)) ? ("dropdown") : (""))];
            // line 41
            echo "        ";
            $context["nav_link_classes"] = [0 => "nav-link"];
            // line 42
            echo "        ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", []))) {
                // line 43
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])));
                // line 44
                echo "        ";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])) {
                // line 45
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "options", []), "attributes", []), "class", [])]);
                // line 46
                echo "        ";
            }
            // line 47
            echo "        <li";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["nav_item_classes"] ?? null)], "method")), "html", null, true);
            echo ">
          ";
            // line 48
            if ((($this->getAttribute($context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", [])) && ($context["is_dropdown"] ?? null))) {
                // line 49
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null)), [0 => "dropdown-toggle"]), "data-toggle" => "dropdown"]), "html", null, true);
                echo "
            ";
                // line 50
                $this->loadTemplate("@radix/dropdown/dropdown-menu.twig", "@radix/nav/nav.twig", 50)->display(twig_array_merge($context, ["items" => $this->getAttribute(                // line 51
$context["item"], "below", [])]));
                // line 53
                echo "          ";
            } else {
                // line 54
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                echo "
            ";
                // line 55
                if ((($this->getAttribute($context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", [])) &&  !($context["is_dropdown"] ?? null))) {
                    // line 56
                    echo "              ";
                    $this->loadTemplate("@evo_radix/nav/nav.twig", "@radix/nav/nav.twig", 56)->display(twig_array_merge($context, ["items" => $this->getAttribute(                    // line 57
$context["item"], "below", []), "is_dropdown" => false]));
                    // line 60
                    echo "            ";
                }
                // line 61
                echo "          ";
            }
            // line 62
            echo "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@radix/nav/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 64,  192 => 62,  189 => 61,  186 => 60,  184 => 57,  182 => 56,  180 => 55,  175 => 54,  172 => 53,  170 => 51,  169 => 50,  164 => 49,  162 => 48,  157 => 47,  154 => 46,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  137 => 39,  136 => 38,  134 => 36,  116 => 35,  113 => 34,  107 => 65,  105 => 34,  100 => 33,  98 => 32,  95 => 31,  93 => 30,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  81 => 25,  77 => 23,  73 => 21,  71 => 20,  68 => 19,  66 => 18,  63 => 17,  61 => 16,  58 => 15,  56 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@radix/nav/nav.twig", "C:\\xampp\\htdocs\\apigee_upgrade_poc_3_august\\web\\themes\\contrib\\radix\\src\\components\\nav\\nav.twig");
    }
}
