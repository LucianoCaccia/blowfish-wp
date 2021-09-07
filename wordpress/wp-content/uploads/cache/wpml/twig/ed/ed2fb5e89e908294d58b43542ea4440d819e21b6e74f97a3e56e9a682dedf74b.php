<?php

/* template.twig */
class __TwigTemplate_37e6470fe17b934adf4275fe4b3a971891ddc5aec6d123b2528e46f5742a1bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["current_language"] = $this->getAttribute((isset($context["languages"]) ? $context["languages"] : null), (isset($context["current_language_code"]) ? $context["current_language_code"] : null), array(), "array");
        // line 2
        $context["css_classes_flag"] = trim(("wpml-ls-flag " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_flag", array())));
        // line 3
        $context["css_classes_native"] = trim(("wpml-ls-native " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_native", array())));
        // line 4
        $context["css_classes_display"] = trim(("wpml-ls-display " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_display", array())));
        // line 5
        $context["css_classes_bracket"] = trim(("wpml-ls-bracket " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_bracket", array())));
        // line 6
        echo "
<div onclick=\"WPMLLanguageSwitcherDropdownClick.toggle(this);\"
\t class=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["css_classes"]) ? $context["css_classes"] : null), "html", null, true);
        echo " wpml-ls-legacy-dropdown-click js-wpml-ls-legacy-dropdown-click\"";
        if ($this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>

\t\t<li class=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "css_classes", array()), "html", null, true);
        echo " wpml-ls-item-legacy-dropdown-click\">

\t\t\t<a href=\"#\" class=\"";
        // line 13
        echo twig_escape_filter($this->env, trim(("wpml-ls-item-toggle " . $this->getAttribute($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "backward_compatibility", array()), "css_classes_a", array()))), "html", null, true);
        echo "\">";
        // line 14
        if ($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "flag_url", array())) {
            // line 15
            echo "<img class=\"";
            echo twig_escape_filter($this->env, (isset($context["css_classes_flag"]) ? $context["css_classes_flag"] : null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "flag_url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["current_language_code"]) ? $context["current_language_code"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "flag_title", array()), "html", null, true);
            echo "\">";
        }
        // line 18
        if (($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array()) || $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array()))) {
            // line 19
            $context["current_language_name"] = (($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "display_name", array()), $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array()))) : ($this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "native_name", array())));
            // line 20
            echo "<span class=\"";
            echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["current_language_name"]) ? $context["current_language_name"] : null), "html", null, true);
            echo "</span>";
        }
        // line 22
        echo "</a>

\t\t\t<ul class=\"wpml-ls-sub-menu\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if ( !$this->getAttribute($context["language"], "is_current", array())) {
                // line 26
                echo "
\t\t\t\t\t<li class=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", array()), "html", null, true);
                echo "\">";
                // line 29
                if ($this->getAttribute($context["language"], "flag_url", array())) {
                    // line 30
                    echo "<img class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_flag"]) ? $context["css_classes_flag"] : null), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_title", array()), "html", null, true);
                    echo "\">";
                }
                // line 33
                if ($this->getAttribute($context["language"], "native_name", array())) {
                    // line 34
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 36
                if ($this->getAttribute($context["language"], "display_name", array())) {
                    // line 37
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, (isset($context["css_classes_display"]) ? $context["css_classes_display"] : null), "html", null, true);
                    echo "\">";
                    // line 38
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", array()), "html", null, true);
                    // line 40
                    if ($this->getAttribute($context["language"], "native_name", array())) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 41
                    echo "</span>";
                }
                // line 43
                echo "</a>
\t\t\t\t\t</li>

\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</ul>

\t\t</li>

\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  142 => 43,  139 => 41,  133 => 40,  131 => 39,  125 => 38,  121 => 37,  119 => 36,  112 => 34,  110 => 33,  99 => 30,  97 => 29,  94 => 28,  90 => 27,  87 => 26,  82 => 25,  77 => 22,  70 => 20,  68 => 19,  66 => 18,  55 => 15,  53 => 14,  50 => 13,  45 => 11,  33 => 8,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/html/wp-content/plugins/sitepress-multilingual-cms-3.6.2/templates/language-switchers/legacy-dropdown-click/template.twig");
    }
}
