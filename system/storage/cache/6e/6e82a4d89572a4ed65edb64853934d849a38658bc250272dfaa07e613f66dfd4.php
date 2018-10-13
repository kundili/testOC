<?php

/* sale/order_invoice.twig */
class __TwigTemplate_7ebfee05b2437f56a82d747e2c41b805892de803acdfdad9eb4b9ec07805ac79 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "  <div style=\"page-break-after: always;\">
    <h1>";
            // line 17
            echo (isset($context["text_invoice"]) ? $context["text_invoice"] : null);
            echo " #";
            echo $this->getAttribute($context["order"], "order_id", array());
            echo "</h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
            // line 21
            echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"width: 50%;\"><address>
            <strong>";
            // line 27
            echo $this->getAttribute($context["order"], "store_name", array());
            echo "</strong><br />
            ";
            // line 28
            echo $this->getAttribute($context["order"], "store_address", array());
            echo "
            </address>
            <b>";
            // line 30
            echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "store_telephone", array());
            echo "<br />
            ";
            // line 31
            if ($this->getAttribute($context["order"], "store_fax", array())) {
                // line 32
                echo "            <b>";
                echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                echo "</b> ";
                echo $this->getAttribute($context["order"], "store_fax", array());
                echo "<br />
            ";
            }
            // line 34
            echo "            <b>";
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "store_email", array());
            echo "<br />
            <b>";
            // line 35
            echo (isset($context["text_website"]) ? $context["text_website"] : null);
            echo "</b> <a href=\"";
            echo $this->getAttribute($context["order"], "store_url", array());
            echo "\">";
            echo $this->getAttribute($context["order"], "store_url", array());
            echo "</a></td>
          <td style=\"width: 50%;\"><b>";
            // line 36
            echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "date_added", array());
            echo "<br />
            ";
            // line 37
            if ($this->getAttribute($context["order"], "invoice_no", array())) {
                // line 38
                echo "            <b>";
                echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
                echo "</b> ";
                echo $this->getAttribute($context["order"], "invoice_no", array());
                echo "<br />
            ";
            }
            // line 40
            echo "            <b>";
            echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "order_id", array());
            echo "<br />
            <b>";
            // line 41
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</b> ";
            echo $this->getAttribute($context["order"], "payment_method", array());
            echo "<br />
            ";
            // line 42
            if ($this->getAttribute($context["order"], "shipping_method", array())) {
                // line 43
                echo "            <b>";
                echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
                echo "</b> ";
                echo $this->getAttribute($context["order"], "shipping_method", array());
                echo "<br />
            ";
            }
            // line 44
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 51
            echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 52
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 58
            echo $this->getAttribute($context["order"], "payment_address", array());
            echo "
            </address></td>
          <td><address>
            ";
            // line 61
            echo $this->getAttribute($context["order"], "shipping_address", array());
            echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 69
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</b></td>
          <td><b>";
            // line 70
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 71
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 72
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 73
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "product", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "        <tr>
          <td>";
                // line 79
                echo $this->getAttribute($context["product"], "name", array());
                echo "
            ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 81
                    echo "            <br />
            &nbsp;<small> - ";
                    // line 82
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "</td>
          <td>";
                // line 84
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 85
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 86
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 87
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "voucher", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 91
                echo "        <tr>
          <td>";
                // line 92
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 95
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 96
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "total", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 100
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 101
                echo $this->getAttribute($context["total"], "title", array());
                echo "</b></td>
          <td class=\"text-right\">";
                // line 102
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "      </tbody>
    </table>
    ";
            // line 107
            if ($this->getAttribute($context["order"], "comment", array())) {
                // line 108
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 111
                echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 116
                echo $this->getAttribute($context["order"], "comment", array());
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 121
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 123,  339 => 121,  331 => 116,  323 => 111,  318 => 108,  316 => 107,  312 => 105,  303 => 102,  299 => 101,  296 => 100,  291 => 99,  282 => 96,  278 => 95,  272 => 92,  269 => 91,  264 => 90,  255 => 87,  251 => 86,  247 => 85,  243 => 84,  240 => 83,  230 => 82,  227 => 81,  223 => 80,  219 => 79,  216 => 78,  212 => 77,  205 => 73,  201 => 72,  197 => 71,  193 => 70,  189 => 69,  178 => 61,  172 => 58,  163 => 52,  159 => 51,  150 => 44,  142 => 43,  140 => 42,  134 => 41,  127 => 40,  119 => 38,  117 => 37,  111 => 36,  103 => 35,  96 => 34,  88 => 32,  86 => 31,  80 => 30,  75 => 28,  71 => 27,  62 => 21,  53 => 17,  50 => 16,  46 => 15,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="all" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="all" />*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/*   {% for order in orders %}*/
/*   <div style="page-break-after: always;">*/
/*     <h1>{{ text_invoice }} #{{ order.order_id }}</h1>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td colspan="2">{{ text_order_detail }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td style="width: 50%;"><address>*/
/*             <strong>{{ order.store_name }}</strong><br />*/
/*             {{ order.store_address }}*/
/*             </address>*/
/*             <b>{{ text_telephone }}</b> {{ order.store_telephone }}<br />*/
/*             {% if order.store_fax %}*/
/*             <b>{{ text_fax }}</b> {{ order.store_fax }}<br />*/
/*             {% endif %}*/
/*             <b>{{ text_email }}</b> {{ order.store_email }}<br />*/
/*             <b>{{ text_website }}</b> <a href="{{ order.store_url }}">{{ order.store_url }}</a></td>*/
/*           <td style="width: 50%;"><b>{{ text_date_added }}</b> {{ order.date_added }}<br />*/
/*             {% if order.invoice_no %}*/
/*             <b>{{ text_invoice_no }}</b> {{ order.invoice_no }}<br />*/
/*             {% endif %}*/
/*             <b>{{ text_order_id }}</b> {{ order.order_id }}<br />*/
/*             <b>{{ text_payment_method }}</b> {{ order.payment_method }}<br />*/
/*             {% if order.shipping_method %}*/
/*             <b>{{ text_shipping_method }}</b> {{ order.shipping_method }}<br />*/
/*             {% endif %}</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td style="width: 50%;"><b>{{ text_payment_address }}</b></td>*/
/*           <td style="width: 50%;"><b>{{ text_shipping_address }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td><address>*/
/*             {{ order.payment_address }}*/
/*             </address></td>*/
/*           <td><address>*/
/*             {{ order.shipping_address }}*/
/*             </address></td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td><b>{{ column_product }}</b></td>*/
/*           <td><b>{{ column_model }}</b></td>*/
/*           <td class="text-right"><b>{{ column_quantity }}</b></td>*/
/*           <td class="text-right"><b>{{ column_price }}</b></td>*/
/*           <td class="text-right"><b>{{ column_total }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for product in order.product %}*/
/*         <tr>*/
/*           <td>{{ product.name }}*/
/*             {% for option in product.option %}*/
/*             <br />*/
/*             &nbsp;<small> - {{ option.name }}: {{ option.value }}</small>*/
/*             {% endfor %}</td>*/
/*           <td>{{ product.model }}</td>*/
/*           <td class="text-right">{{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.price }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in order.voucher %}*/
/*         <tr>*/
/*           <td>{{ voucher.description }}</td>*/
/*           <td></td>*/
/*           <td class="text-right">1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for total in order.total %}*/
/*         <tr>*/
/*           <td class="text-right" colspan="4"><b>{{ total.title }}</b></td>*/
/*           <td class="text-right">{{ total.text }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     {% if order.comment %}*/
/*     <table class="table table-bordered">*/
/*       <thead>*/
/*         <tr>*/
/*           <td><b>{{ text_comment }}</b></td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td>{{ order.comment }}</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     {% endif %}*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </body>*/
/* </html>*/
