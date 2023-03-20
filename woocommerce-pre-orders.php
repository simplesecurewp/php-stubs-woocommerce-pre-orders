<?php

namespace {
    /**
     * Pre-Orders "Pay Later" Payment Gateway class
     *
     * Extends the WC_Payment_Gateway class to provide a generic "Pay Later" payment gateway for pre-orders
     *
     * @since 1.0
     * @extends \WC_Payment_Gateway
     */
    class WC_Pre_Orders_Gateway_Pay_Later extends \WC_Payment_Gateway
    {
        /**
         * Loads settings and hooks for saving
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Gateway_Pay_Later
         */
        public function __construct()
        {
        }
        /**
         * Disables the gateway under any of these conditions:
         * 1) If the cart does not contain a pre-order
         * 2) If the pre-order amount is charged upfront
         * 3) On the pay page
         *
         * @since 1.0
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Setup gateway form fields
         *
         * @since 1.0
         */
        public function init_form_fields()
        {
        }
        /**
         * Process the payment and return the result
         *
         * @since  1.0
         *
         * @param  int $order_id
         *
         * @return array
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Receipt page.
         *
         * @param  WC_Order $order
         *
         * @return string
         */
        public function receipt_page($order)
        {
        }
    }
    /**
     * My Pre-Orders class
     *
     * @since 1.4.4
     */
    class WC_Pre_Orders_My_Pre_Orders
    {
        /**
         * Adds needed hooks / filters
         */
        public function __construct()
        {
        }
        /**
         * Register new endpoint to use inside My Account page.
         *
         * @since 1.4.7
         *
         * @see https://developer.wordpress.org/reference/functions/add_rewrite_endpoint/
         */
        public function add_endpoint()
        {
        }
        /**
         * Add pre-orders query var.
         *
         * @since 1.4.7
         *
         * @param array $vars Query vars
         *
         * @return array altered query vars
         */
        public function add_query_vars($vars)
        {
        }
        /**
         * Change title for pre-orders endpoint.
         *
         * @since 1.4.7
         *
         * @param string $title Page title
         *
         * @return string Page title
         */
        public function endpoint_title($title)
        {
        }
        /**
         * Checks if current page is pre-orders endpoint.
         *
         * @since 1.4.7
         *
         * @return bool Returns true if current page is pre-orders endpoint
         */
        public function is_pre_orders_endpoint()
        {
        }
        /**
         * Insert Pre-Ordres menu into My Account menus.
         *
         * @since 1.4.7
         *
         * @param array $items Menu items
         *
         * @return array Menu items
         */
        public function menu_items($items)
        {
        }
        /**
         * Helper to add new items into an array after a selected item.
         *
         * @since 1.4.7
         *
         * @param array  $items     Menu items
         * @param array  $new_items New menu items
         * @param string $after     Key in items
         *
         * @return array Menu items
         */
        protected function _insert_new_items_after($items, $new_items, $after)
        {
        }
        /**
         * Output "My Pre-Orders" table in the user's My Account page
         */
        public function my_pre_orders()
        {
        }
    }
    /**
     * Countdown Shortcode
     *
     * Displays a JavaScript-enabled countdown timer
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Shortcode_Countdown
    {
        /**
         * Get the shortcode content.
         *
         * @param array $atts associative array of shortcode parameters
         * @return string shortcode content
         */
        public static function get($atts)
        {
        }
        /**
         * Output the countdown timer.  This defaults to the following format, where
         * elments in [ ] are not shown if zero:
         *
         * [y Years] [o Months] [d Days] h Hours m Minutes s Seconds
         *
         * The following shortcode arguments are optional:
         *
         * * product_id/product_sku - id or sku of pre-order product to countdown to.
         *     Defaults to current product, if any
         * * until - date/time to count down to, overrides product release date
         *     if set.  Example values: "15 March 2015", "+1 month".
         *     More examples: http://php.net/manual/en/function.strtotime.php
         * * before - text to show before the countdown.  Only available if 'layout' is not ''
         * * after - text to show after the countdown.  Only available if 'layout' is not ''
         * * layout - The countdown layout, defaults to y Years o Months d Days h Hours m Minutes s Seconds
         *     See http://keith-wood.name/countdownRef.html#layout for all possible options
         * * format - The format for the countdown display.  Example: 'yodhms'
         *     to display the year, month, day and time.  See http://keith-wood.name/countdownRef.html#format for all options
         * * compact - If 'true' displays the date/time labels in compact form, ie
         *     'd' rather than 'days'.  Defaults to 'false'
         *
         * When the countdown date/time is reached the page will refresh.
         *
         * To test different time periods you can create shortcodes like the following samples:
         *
         * [woocommerce_pre_order_countdown until="+10 year"]
         * [woocommerce_pre_order_countdown until="+10 month"]
         * [woocommerce_pre_order_countdown until="+10 day"]
         * [woocommerce_pre_order_countdown until="+10 second"]
         *
         * @param array $atts associative array of shortcode parameters
         */
        public static function output($atts)
        {
        }
    }
    /**
     * Pre-Orders Admin class.
     */
    class WC_Pre_Orders_Admin_Ajax
    {
        public function __construct()
        {
        }
        /**
         * Adds validation to make sure only one pre-order product is added to an order
         * @param WP_Error $validation_error
         * @param WC_Product $product
         * @param WC_Order $order
         * @param int $qty
         *
         * @return WP_Error
         */
        public function can_add_product_to_order($validation_error, $product, $order, $qty)
        {
        }
        /**
         * Add pre-order fee when a pre-order product is added
         *
         * @param WC_Order_Item[] $added_items
         * @param WC_Order $order
         *
         * @since 1.6.0
         */
        public function maybe_add_pre_order_fee_admin($added_items, $order)
        {
        }
        /**
         * Removes pre-order fees from the order when the pre-order product is removed
         *
         * @param int $item_id
         *
         * @since 1.6.0
         */
        public function maybe_remove_pre_order_fee_admin($item_id)
        {
        }
        /**
         * Adjusts pre-order fees when product quantity changes
         *
         * @param bool $and_taxes
         * @param WC_Order $order
         */
        public function maybe_adjust_pre_order_fee_admin($and_taxes, $order)
        {
        }
    }
    /**
     * Pre-Orders Admin Orders class.
     */
    class WC_Pre_Orders_Admin_Orders
    {
        /**
         * Initialize the admin order actions.
         */
        public function __construct()
        {
        }
        /**
         * Add pre-order emails to the list of order emails that can be resent, based on the pre-order status.
         *
         * @param  array $available_emails Simple array of WC_Email class IDs that can be resent.
         *
         * @return array
         */
        public function maybe_allow_resend_of_pre_order_emails($available_emails)
        {
        }
        /**
         * Marks the order as being a pre order if it contains pre order products in
         * case an order gets added manually from the administration panel.
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.4.10
         * @version 1.5.3
         */
        public function check_manual_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Marks the order as being a pre order if it contains pre order products in
         * case an order gets added manually from the administration panel. (for HPOS only)
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.9.0
         */
        public function hpos_check_manual_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Set Manual order as pre-order if it contains pre-order products.
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.9.0
         */
        public function maybe_set_pre_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Adds Pre-Order Only and Non Pre-Order to the WooCommerce Subscriptions Order Subtype select
         * Or create a new select if WooCommerce Subscriptions is not active
         * @since 1.6.0
         */
        public function add_order_page_filters()
        {
        }
        /**
         * Add an admin dropdown for order types to Woocommerce -> Orders screen
         * @since 1.6.0
         */
        public function restrict_manage_pre_order()
        {
        }
        /**
         * Includes the Non Pre-Orders and Pre-Orders Only Filter to the WooCommerce Subscriptions Order Subtype Select
         * @since 1.6.0
         * @param $order_types
         * @return array
         */
        public function add_pre_order_filter($order_types)
        {
        }
        /**
         * Add request filter for order types to Woocommerce -> Orders screen
         *
         * Orders that have _wc_pre_orders_is_pre_order meta are considered a pre order
         * Orders that DO NOT have _wc_pre_orders_is_pre_order meta are NOT considered a pre order
         *
         * @since 1.6.0
         * @param $vars array wp_query args
         * @return array wp_query args
         */
        public function orders_by_type_query($vars)
        {
        }
    }
    /**
     * Pre-Orders Admin Settings class.
     */
    class WC_Pre_Orders_Admin_Settings
    {
        /**
         * Initialize the admin settings actions.
         */
        public function __construct()
        {
        }
        /**
         * Add 'Pre-Orders' tab to WooCommerce Settings tabs
         *
         * @param  array $settings_tabs Tabs array sans 'Pre-Orders' tab.
         *
         * @return array $settings_tabs Now with 100% more 'Pre-Orders' tab!
         */
        public function add_settings_tab($settings_tabs)
        {
        }
        /**
         * Show the 'Pre-Orders' settings page.
         */
        public function show_settings()
        {
        }
        /**
         * Save the 'Pre-Orders' settings page.
         */
        public function save_settings()
        {
        }
        /**
         * Returns settings array for use by output/save functions.
         *
         * @return array Settings.
         */
        public function get_settings()
        {
        }
    }
    /**
     * Pre-Orders Admin Pre Orders class.
     */
    class WC_Pre_Orders_Admin_Pre_Orders
    {
        /**
         * Initialize the admin settings actions.
         */
        public function __construct()
        {
        }
        /**
         * Get pre-orders tabs.
         *
         * @return array
         */
        protected function get_tabs()
        {
        }
        /**
         * Add 'Pre-Orders' sub-menu link under 'WooCommerce' top level menu.
         */
        public function add_menu_link()
        {
        }
        /**
         * Show Pre-Orders Manage/Actions page content.
         */
        public function show_sub_menu_page()
        {
        }
        /**
         * Add the Pre-Orders list table Screen Options.
         */
        public function add_pre_orders_list_options()
        {
        }
        /**
         * Processes the cancelling of individual pre-order.
         *
         * @since 1.4.6
         * @version 1.4.7
         * @return bool
         */
        public function process_cancel_pre_order_action()
        {
        }
        /**
         * Process the actions from the 'Actions' tab.
         */
        public function process_actions_tab()
        {
        }
        /**
         * Process the actions from the 'Manage' tab.
         */
        public function process_manage_tab()
        {
        }
        /**
         * Get the current action selected from the bulk actions dropdown, verifying
         * that it's a valid action to perform.
         *
         * @see WP_List_Table::current_action()
         *
         * @return string|bool The action name or False if no action was selected.
         */
        public function current_action()
        {
        }
        /**
         * Dispatch actions from Manage tab and Actions tab.
         *
         * @since 1.0
         */
        public function process_actions()
        {
        }
        /**
         * Gets the bulk actions available for pre-orders: complete, cancel or message.
         *
         * @see WP_List_Table::get_bulk_actions()
         *
         * @return array associative array of action_slug => action_title.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Gets the current customer message which is used for bulk actions.
         *
         * @return string the current customer message.
         */
        public function get_current_customer_message()
        {
        }
        /**
         * Loads the pre-orders list table so the columns can be hidden/shown from
         * the page Screen Options dropdown (this must be done prior to Screen Options
         * being rendered).
         */
        public function load_pre_orders_list_table()
        {
        }
        /**
         * Generate a submit button, called via a do_action() inside woocommerce_admin_fields() for non-default field types.
         *
         * @param array $field The field info.
         */
        public function generate_submit_button($field)
        {
        }
        /**
         * Save our list option.
         *
         * @param  string $status unknown.
         * @param  string $option the option name.
         * @param  string $value the option value.
         *
         * @return string
         */
        public function set_pre_orders_list_option($status, $option, $value)
        {
        }
        /**
         * Redirect with message notice.
         *
         * @since 1.4.7
         *
         * @param string $message Message to display
         */
        protected function _redirect_with_notice($message)
        {
        }
    }
    /**
     * Pre-Orders Admin Products class.
     */
    class WC_Pre_Orders_Admin_Products
    {
        /**
         * Initialize the admin products actions.
         */
        public function __construct()
        {
        }
        /**
         * Add 'Pre-Orders' tab to product writepanel.
         */
        public function add_product_tab()
        {
        }
        /**
         * Add 'Pre-Orders' tab to product writepanel.
         *
         * @param  array $tabs
         * @return array
         */
        public static function product_data_tab($tabs)
        {
        }
        /**
         * Add pre-orders options to product writepanel.
         */
        public function add_product_tab_options()
        {
        }
        /**
         * Save pre-order options.
         *
         * @param int $post_id The ID of the product being saved.
         */
        public function save_product_tab_options($post_id)
        {
        }
    }
    /**
     * Pre-Orders Admin class.
     */
    class WC_Pre_Orders_Admin
    {
        /**
         * Setup admin class.
         */
        public function __construct()
        {
        }
        /**
         * Includes.
         */
        protected function includes()
        {
        }
        /**
         * Set installed option and default settings / terms.
         */
        public function maybe_install()
        {
        }
        /**
         * Add Pre-orders screen to woocommerce_screen_ids.
         *
         * @param  array $ids
         *
         * @return array
         */
        public function screen_ids($ids)
        {
        }
        /**
         * Load admin styles & scripts only on needed pages.
         *
         * @param string $hook_suffix the menu/page identifier
         */
        public function load_styles_scripts($hook_suffix)
        {
        }
    }
    class WC_Pre_Orders_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         *
         */
        public function __construct()
        {
        }
        /**
         * Gets the message of the privacy to display.
         *
         */
        public function get_privacy_message()
        {
        }
    }
    /**
     * Pre-Orders Checkout class
     *
     * Override some functionality of the WC checkout process in order to support pre-orders
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Checkout
    {
        /**
         * Add hooks / filters
         *
         * @since 1.0.0
         * @version 1.5.4
         * @return \WC_Pre_Orders_Checkout
         */
        public function __construct()
        {
        }
        /**
         * Adds release date message to thank you page.
         * Only shows for charge upon release.
         *
         * @since 1.5.4
         * @version 1.5.4
         * @param string $message Original message
         * @param object $order
         * @return string
         */
        public function add_release_date_message($message, $order)
        {
        }
        /**
         * Check if is a pre-order and charged upon release
         *
         * @return bool
         */
        protected function is_pre_order_and_charged_upon_release()
        {
        }
        /**
         * Conditionally remove any gateways that don't support pre-orders on the checkout page when the pre-order is charged
         * upon release. This is done because payment info is not required in this case so displaying gateways/payment fields
         * is not needed.
         *
         * @since 1.0
         *
         * @param array $available_gateways
         *
         * @return array
         */
        public function maybe_remove_unsupported_gateways($available_gateways)
        {
        }
        /**
         * Modifies the 'Place Order' button text on the checkout page
         *
         * @since 1.0
         * @param string $default_text default place order button text
         * @return string
         */
        public function modify_place_order_button_text($default_text)
        {
        }
        /**
         * Adds order meta needed for pre-order functionality,
         * when coming from an order using WooCommerce Blocks.
         *
         * @param WC_Order $order
         */
        public function add_order_meta_by_order($order)
        {
        }
        /**
         * Add order meta needed for pre-order functionality
         *
         * @since 1.0
         * @param int $order_id
         */
        public function add_order_meta($order_id)
        {
        }
        /**
         * Update payment complete order status to pre-ordered for orders that are charged upfront. This handles gateways
         * that call payment_complete() and prevents an awkward status change from pending->processing->pre-ordered, instead
         * just showing a nice, clean pending->pre-ordered.
         *
         * @since 1.0.0
         * @version 1.5.1
         * @param string $new_status the status to change the order to.
         * @param int $order_id the post ID of the order.
         * @return string
         */
        public function update_payment_complete_order_status($new_status, $order_id)
        {
        }
        /**
         * updates order status to pre-ordered for orders that are charged upfront. This handles gateways that don't call
         * payment_complete(). Unfortunately status changes show like pending->processing/completed->pre-ordered
         *
         * @since 1.9.0 Check whether the order item was pre-ordered to process failed pre-ordered order.
         * @since 1.0
         * @param int $order_id the post ID of the order
         * @return string
         */
        public function update_manual_payment_complete_order_status($order_id)
        {
        }
        /**
         * Removes the "_wc_pre_orders_is_pre_order" flag when charged ufront and the payment fails.
         *
         * This prevents the pre-order from showing up under the Pre-Orders
         * table when the payment must be done upfront but fails.
         *
         * @since 1.5.31
         * @param int $order_id the post ID of the order.
         * @return void
         */
        public function remove_is_pre_order_on_failure($order_id)
        {
        }
    }
    /**
     * Pre-Orders Cart class
     *
     * Customizes the cart
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Cart
    {
        /**
         * Add hooks / filters
         *
         * @since 1.0
         * @return WC_Pre_Orders_Cart
         */
        public function __construct()
        {
        }
        /**
         * Get the order total formatted to show when the order will be charged
         *
         * @since 1.0
         * @param string $total price string ( note: this is already formatted by woocommerce_price() )
         * @return string the formatted order total price string
         */
        public function get_formatted_cart_total($total)
        {
        }
        /**
         * Get item data to display on cart/checkout pages that shows the availability date of the pre-order
         *
         * @since 1.0
         * @param array $item_data any existing item data
         * @param array $cart_item the cart item
         * @return array
         */
        public function get_item_data($item_data, $cart_item)
        {
        }
        /**
         * Redirect to the cart
         */
        public function redirect_to_cart()
        {
        }
        /**
         * When a pre-order is added to the cart, remove any other products
         *
         * @since 1.0
         * @param bool $valid
         * @param $product_id
         * @return bool
         */
        public function validate_cart($valid, $product_id)
        {
        }
        /**
         * Add any applicable pre-order fees when calculating totals
         *
         * @since 1.0
         */
        public function maybe_add_pre_order_fee()
        {
        }
        /**
         * Generates fee
         *
         * @since 1.6.0
         * @param WC_Product|int $product
         * @return array|null
         */
        public function generate_fee($product)
        {
        }
        /**
         * Checks if the current cart contains a product with pre-orders enabled
         *
         * @since 1.0
         * @return bool true if the cart contains a pre-order, false otherwise
         */
        public static function cart_contains_pre_order()
        {
        }
        /**
         * Checks if the current cart contains a pre-order fee
         *
         * @since 1.0
         * @return bool true if the cart contains a pre-order fee, false otherwise
         */
        public static function cart_contains_pre_order_fee()
        {
        }
        /**
         * Since a cart may only contain a single pre-ordered product, this returns the pre-ordered product object or
         * null if the cart does not contain a pre-order
         *
         * @since 1.0
         * @return object|null the pre-ordered product object, or null if the cart does not contain a pre-order
         */
        public static function get_pre_order_product()
        {
        }
    }
    /**
     * Pre-Orders Cron class
     *
     * Adds custom wp-cron schedule and handles pre-order completion checks
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Cron
    {
        /**
         * Adds hooks and filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Cron
         */
        public function __construct()
        {
        }
        /**
         * Adds custom wp-cron schedule named 'wc_pre_orders_completion_check' with custom 5 minute interval
         *
         * @since 1.0
         * @param array $schedules existing WP recurring schedules
         * @return array
         */
        public function add_custom_schedules($schedules)
        {
        }
        /**
         * Add scheduled events to wp-cron if not already added
         *
         * @since 1.0
         * @return array
         */
        public function add_scheduled_events()
        {
        }
    }
    /**
     * Main Plugin Class
     *
     * @since 1.0
     */
    class WC_Pre_Orders
    {
        /**
         * The single instance of the class.
         *
         * @var $_instance
         * @since 1.13.0
         */
        protected static $_instance = \null;
        /**
         * Setup main plugin class
         *
         * @return \WC_Pre_Orders
         * @since  1.0
         */
        public function __construct($base_file)
        {
        }
        /**
         * Main Instance.
         *
         * Ensures only one instance is loaded or can be loaded.
         *
         * @return WC_Pre_Orders
         * @since 1.5.25
         */
        public static function instance()
        {
        }
        /**
         * This function will send email based on action name.
         *
         * @param string $email Action name
         * @param WC_Order $order
         */
        public function sendmail($email, $order)
        {
        }
        /**
         * Load core classes
         *
         * @since 1.0
         */
        public function load_classes()
        {
        }
        /**
         * Loads the classes for the integration with WooCommerce Blocks.
         */
        public static function load_block_classes()
        {
        }
        /**
         * Load actions and filters that require WC to be loaded
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Add the 'pay later' gateway, which replaces gateways that do not support pre-orders when the pre-order is charged
         * upon release
         *
         * @since 1.0
         */
        public function add_pay_later_gateway($gateways)
        {
        }
        /**
         * Pre-order countdown shortcode
         *
         * @param array $atts associative array of shortcode parameters
         *
         * @return string shortcode content
         */
        public function pre_order_countdown_shortcode($atts)
        {
        }
        /**
         * Adds Pre-Order email classes
         *
         * @since 1.0
         */
        public function add_email_classes($email_classes)
        {
        }
        /**
         * Sends transactional email by hooking into pre-order status changes
         *
         * @since 1.0
         */
        public function send_transactional_email($args = array(), $message = '')
        {
        }
        /**
         * Remove terms and scheduled events on plugin deactivation
         *
         * @since 1.0
         */
        public function deactivate()
        {
        }
        /**
         * Return the plugin action links.
         *
         * @param array $actions Associative array of action names to anchor tags.
         *
         * @return array          Associative array of plugin action links.
         */
        public function plugin_action_links($actions)
        {
        }
        /**
         * Returns the plugin's path without a trailing slash
         *
         * @return string the plugin path
         * @since  1.0
         *
         */
        public function get_plugin_path()
        {
        }
        /**
         * Returns the plugin's url without a trailing slash
         *
         * @return string the plugin url
         * @since  1.0
         *
         */
        public function get_plugin_url()
        {
        }
        /**
         * Log errors to WooCommerce log
         *
         * @param string $message message to log
         *
         * @since 1.0
         *
         */
        public function log($message)
        {
        }
        /**
         * Get supported product types.
         *
         * @return array
         */
        public static function get_supported_product_types()
        {
        }
        /**
         * Declare compatibility with High-Performance Order Storage.
         *
         * @since x.x.x
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Check if High-performance Order Storage ("HPOS") enable
         *
         * @return bool Whether enabled or not
         */
        public static function is_hpos_enabled()
        {
        }
    }
    /**
     * Pre-Orders Manager class
     *
     * Provides an API for managing pre-orders and their associated actions
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Manager
    {
        /**
         * Adds hooks / filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Manager
         */
        public function __construct()
        {
        }
        /**
         * Schedules individual background actions to process pre-order products passed their release date.
         *
         * @since 2.0.0
         */
        public function maybe_schedule_batch_processor()
        {
        }
        /**
         * Finds pre-orders for a batch of given products and schedules a background job to process them.
         *
         * @since 2.0.0
         *
         * @param int[]  $product_ids The product IDs to schedule pre-order completion for.
         * @param string $product_ids The unique batch ID for this set of products.
         */
        public function schedule_actions_to_complete_pre_orders($product_ids, $batch_id)
        {
        }
        /**
         * Prevent completed pre-orders from being cancelled - Any new pre-orders that have not been processed yet
         * (e.g. by checking out via PayPal but not completing purchase) should respect the default order cancel settings
         *
         * @since 1.0
         * @param bool $cancel_order whether to cancel the pending order or not
         * @param object $order the \WC_Order object
         * @return bool true if the order should be cancelled, false otherwise
         */
        public function maybe_prevent_pending_order_cancel($cancel_order, $order)
        {
        }
        /**
         * Prevent order stock reduction when WC_Order::payment_complete() is called for a pre-order charged upon release.
         * Because order stock for pre-orders charged upon release is reduced during initial checkout, this prevents stock from
         * being reduced twice.
         *
         * @since 1.0
         * @param bool $reduce_stock whether to reduce stock for the order or not
         * @param int $order_id the post ID of the order
         * @return bool true if the order stock should be reduced, false otherwise
         */
        public function maybe_prevent_payment_complete_order_stock_reduction($reduce_stock, $order_id)
        {
        }
        /**
         * Reduce the stock level for an order and record the stock reduction in data store
         *
         * @since 1.5.31
         * @param object $order the \WC_Order object
         */
        public static function reduce_stock_level($order)
        {
        }
        /**
         * Gets all pre-orders
         *
         * @since 1.0
         * @return array
         */
        public static function get_all_pre_orders()
        {
        }
        /**
         * Gets all pre-orders for a given product
         *
         * @since 1.0
         * @param object|int $product
         * @return array
         */
        public static function get_all_pre_orders_by_product($product)
        {
        }
        /**
         * Gets all pre-orders for the currently logged in user, or the user identified by $user_id
         *
         * @since 1.0
         * @param int $user_id optional user id to return pre-orders for. Defaults to the currently logged in user.
         * @return array of WC_Order objects
         */
        public static function get_users_pre_orders($user_id = \null)
        {
        }
        /**
         * Returns true if the pre-order identified by $order/$item can be changed to
         * $new_status
         *
         * @since 1.0
         * @param string $new_status the new status
         * @param WC_Order $order the order object
         * @return boolean true if the status can be changed, false otherwise
         */
        public static function can_pre_order_be_changed_to($new_status, $order)
        {
        }
        /**
         * Return a link for customers to change the status of their pre-order to $status
         *
         * @since 1.0
         * @param string $new_status the new status
         * @param WC_Order $order the order object
         * @return string
         */
        public static function get_users_change_status_link($new_status, $order)
        {
        }
        /**
         * Gets all products that are currently pre-order enabled
         *
         * @since 1.9.0 Return private and published pre-order products.
         * @since 1.0
         * @return array of WC_Product objects
         */
        public static function get_all_pre_order_enabled_products()
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email
         * template) to all customers associated with the supplied $orders with an active pre-order
         *
         * @since 1.0
         * @param int|WC_Order $order order object or identifier
         * @param string $message required message to include in notification email to customer
         */
        public static function email_pre_order_customer($order, $message)
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email
         * template) to all customers associated with the supplied $orders with an active pre-order
         *
         * @since 1.0
         * @param array $orders array of post ID or WC_Order objects
         * @param string $message required message to include in notification email to customer
         */
        public static function email_pre_order_customers($orders, $message)
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email template) to all customers who have pre-ordered
         * the given product
         *
         * @since 1.0
         * @param object|int $product the product to email all pre-ordered customers for
         * @param string $message required message to include in notification email to customer
         */
        public static function email_all_pre_order_customers($product, $message)
        {
        }
        /**
         * Change the release date for  pre-orders by updating the availability date for the pre-ordered product to a new date in the future
         *
         * @since 1.0
         * @param object|int $product the product to change the release date for all pre-orders for
         * @param string $new_availability_date the new availability date
         * @param string $message an optional message to include in communications to the customer
         */
        public static function change_release_date_for_all_pre_orders($product, $new_availability_date, $message = '')
        {
        }
        /**
         * Checks to see if order is zero cost.
         *
         * @version 1.5.1
         * @since 1.5.1
         * @param object $order
         * @return bool
         */
        public static function is_zero_cost_order($order = \null)
        {
        }
        /**
         * Checks to see if order is initially using pay later gateway.
         * This is needed because payment method will change later in the process
         * when customer goes to pay when product is available. But we need to
         * preserve what the order was originally used so we can know if we need
         * to reduce stock or not based on that.
         *
         * @version 1.5.1
         * @since 1.5.1
         * @param object $order
         * @return bool
         */
        public static function is_order_pay_later($order_id = \null)
        {
        }
        /**
         * Completes the pre-order by updating the pre-order status to 'completed' and following this process for handling payment :
         *
         * - for a pre-order charged upon release AND containing a payment token, an action is fired for the supported gateway
         *   to hook into an charge the total payment amount. Note that the supported gateway will then call WC_Order::payment_complete()
         *   upon successful charge
         *
         * - for a pre-order charged upon release with no payment token, the order status is changed to 'pending' and an email
         *   is sent containing a link for the customer to come back to and pay for their order
         *
         * - for a pre-order charged upfront, the order status is changed to 'completed' or 'processing' based on the same rules
         *   from WC_Order::payment_complete() -- this is because payment_complete() has already occurred for these order
         *
         * @since 1.0
         * @param int|WC_Order $order post IDs or order object to complete the pre-order for
         * @param string $message optional message to include in 'pre-order completed' email to customer
         */
        public static function complete_pre_order($order, $message = '')
        {
        }
        /**
         * Completes the provided pre-orders
         *
         * @since 1.0
         * @param array $orders an array of orders containing a pre-order to complete
         * @param string $message optional message to include in 'pre-order completed' email to customer
         */
        public static function complete_pre_orders($orders, $message = '')
        {
        }
        /**
         * Helper function to complete all the pre-orders for a given product
         *
         * @since 1.0
         * @param object|int $product the product to complete all pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function complete_all_pre_orders($product, $message)
        {
        }
        /**
         * Cancel a pre-orders by changing its order status / pre-order status to 'cancelled'
         *
         * @since 1.0
         * @param int|WC_Order $order post IDs or order object to cancel the pre-order for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_pre_order($order, $message = '')
        {
        }
        /**
         * Cancels pre-orders by changing their order status / pre-order status to 'cancelled'
         *
         * @since 1.0
         * @param array $orders array of post IDs or order objects to cancel pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_pre_orders($orders, $message = '')
        {
        }
        /**
         * Helper function to cancel all pre-orders for a given product
         *
         * @see WC_Pre_Orders_Manager::cancel_pre_orders()
         *
         * @since 1.0
         * @param object|int $product the product to complete all pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_all_pre_orders($product, $message)
        {
        }
        /**
         * Helper function to return a formatted pre-order order total, e.g. '$99 charged on Dec 1, 2014'
         *
         * @since 1.0
         * @param string $total formatted order total to modify
         * @param object|int $product the product that the pre-order contains
         * @return string the new formatted order total
         */
        public static function get_formatted_pre_order_total($total, $product)
        {
        }
        /**
         * Checks for action to cancel an existing pre order and if needed it gets executed
         *
         * @since 1.0.3
         */
        public function check_cancel_pre_order()
        {
        }
        /**
         * When the setting is enabled makes out of stock products into pre-order products
         *
         * @param int $product_id
         * @param string $stock_status
         * @param WC_Product $product
         */
        public function maybe_activate_preorder($product_id, $stock_status, $product)
        {
        }
    }
    /**
     * Pre-Orders Product class
     *
     * Customizes the functionality and display of simple/variable products to support Pre-Orders
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Product
    {
        /**
         * Adds needed hooks / filters
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Add 'Available XX/XX/XXXX' message to product lists in woocommerce blocks.
         *
         * @param string $html Upstream html.
         * @param stdClass $data Data to render.
         * @param WC_Product $product Current Product.
         *
         * @return string
         */
        public function update_blocks_product_grid($html, $data, $product)
        {
        }
        /**
         * Add a customizable message to product's on the shop loop page and / or on the single product page immediately
         * after the price
         *
         * @since 1.0
         */
        public function add_pre_order_product_message()
        {
        }
        /**
         * Modifies the add to cart button text on product loop page & single product page
         *
         * @since 1.0
         * @param string $default_text default add to cart button text
         * @param WC_Product $product
         * @return string
         */
        public function modify_add_to_cart_button_text($default_text, $product)
        {
        }
        /**
         * Modify availability text
         *
         * @param  array      $data
         * @param  WC_Product $product
         *
         * @return array
         */
        public function modify_availability_text($data, $product)
        {
        }
        /**
         * Checks if a given product can be pre-ordered by verifying pre-orders are enabled for it
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if product can be pre-ordered, false otherwise
         */
        public static function product_can_be_pre_ordered($product)
        {
        }
        /**
         * Checks if a given product has active pre-orders
         *
         * @since 1.0.0
         * @version 1.5.1
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if product can be pre-ordered, false otherwise
         */
        public static function product_has_active_pre_orders($product)
        {
        }
        /**
         * Checks if a given pre-order-enabled product is charged upon release
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if pre-order is charged upon release, false otherwise
         */
        public static function product_is_charged_upon_release($product)
        {
        }
        /**
         * Checks if a given pre-order-enabled product is charged upfront
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if pre-order is charged upfront, false otherwise
         */
        public static function product_is_charged_upfront($product)
        {
        }
        /**
         * Gets the pre-order fee for a given product
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return string the pre-order fee amount
         */
        public static function get_pre_order_fee($product)
        {
        }
        /**
         * Gets the tax status of a pre-order fee by checking the tax status of the product
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if the pre-order fee is taxable, false otherwise
         */
        public static function get_pre_order_fee_tax_status($product)
        {
        }
        /**
         * Gets the availability date of the product localized to the site's date format
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @param string $none_text optional text to return if there is no availability datetime set
         * @return string the formatted availability date
         */
        public static function get_localized_availability_date($product, $none_text = '')
        {
        }
        /**
         * Gets the availability time of the product formatted according to the site's time format and timezone
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return string the formatted availability time
         */
        public static function get_localized_availability_time($product)
        {
        }
        /**
         * Gets the availability timestamp of the product localized to the configured
         * timezone
         *
         * @param WC_Product|int $product the product object or post identifier
         * @return int the timestamp, localized to the current timezone
         */
        public static function get_localized_availability_datetime_timestamp($product)
        {
        }
        /**
         * Returns the timezone string for a site, even if it's set to a UTC offset
         *
         * Adapted from http://www.php.net/manual/en/function.timezone-name-from-abbr.php#89155
         *
         * @since 1.0
         * @return string valid PHP timezone string
         */
        public static function get_wp_timezone_string()
        {
        }
        /**
         * Maybe cancel pre order when product is trashed
         *
         * @param int $product_id Product ID
         * @return void
         */
        public function maybe_cancel_pre_order_product_trashed($product_id)
        {
        }
        /**
         * Gets the list of products with an availability date in the past.
         *
         * @return array An array of products IDs which have passed their scheduled availability date.
         */
        public static function get_products_passed_release_date()
        {
        }
    }
    /**
     * Admin Pre-Order Cancelled Email
     *
     * An email sent to the admin when a pre-order is cancelled.
     */
    class WC_Pre_Orders_Email_Admin_Pre_Order_Cancelled extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         */
        public function trigger($order_id, $message)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Ordered Email
     *
     * An email sent to the customer when a pre-order is initially placed.  This can
     * require payment (for an upfront payment with a deferred gateway like bacs).
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Ordered extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Order Date Changed Email
     *
     * An email sent to the customer when a pre-order release date is changed
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Date_Changed extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($args)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * New Pre-Order Email
     *
     * An email sent to the admin when a new pre-order is received
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_New_Pre_Order extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @since 1.0
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Customer Pre-Order Cancelled Email
     *
     * An email sent to the customer when a pre-order is cancelled.
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Cancelled extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id, $message)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Order Available Email
     *
     * An email sent to the customer when a pre-order is available.
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Available extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id, $message = '')
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
}
namespace WooCommerce\Pre_Orders\Blocks {
    /**
     * This class is responsible for integrating a new payment method when using WooCommerce Blocks.
     */
    class WC_Pre_Orders_Blocks_Integration
    {
        public function __construct()
        {
        }
        /**
         * Add payment method block support.
         */
        public function add_woocommerce_block_support()
        {
        }
        /**
         * Register payment method.
         *
         * @return WC_Pre_Orders_Blocks_Gateway $instance pre-orders gateway instance.
         */
        protected function register_payment_methods()
        {
        }
        /**
         * Register the payment requirements for blocks.
         *
         * @return void
         */
        public function blocks_loaded()
        {
        }
        /**
         * Check if is a pre-order and charged upon release.
         *
         * @return bool
         */
        public static function is_pre_order_and_charged_upon_release()
        {
        }
        /**
         * Adds pre_order availability payment requirement for carts that contain a product that requires it.
         *
         * @return array
         */
        public function add_pre_order_availability_payment_requirement()
        {
        }
        /**
         * Register payment method integration.
         *
         * @param PaymentMethodRegistry $payment_method_registry Payment method registry object.
         */
        public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
        {
        }
        /**
         * Include class that represents the gateway.
         */
        public function includes()
        {
        }
    }
    /**
     * Pre-orders Gateway method integration.
    */
    final class WC_Pre_Orders_Blocks_Gateway extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Gets payment method supported features.
         *
         * @return array
         */
        public function get_supported_features()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    class WC_Pre_Orders_Extend_Store_API
    {
        /**
         * Plugin Identifier, unique to each plugin.
         *
         * @var string
         */
        const IDENTIFIER = 'preorders';
        /**
         * Bootstraps the class and hooks required data.
         *
         * @since 3.1.0
         */
        public static function init()
        {
        }
        /**
         * Registers the actual data into each endpoint.
         */
        public static function extend_store()
        {
        }
        /**
         * Register pre-order product type data into cart/items endpoint.
         *
         * @param array $cart_item Current cart item data.
         *
         * @return array $item_data Registered data or empty array if condition is not satisfied.
         */
        public static function extend_cart_item_data($cart_item)
        {
        }
        /**
         * Register pre-order product type schema into cart/items endpoint.
         *
         * @return array Registered schema.
         */
        public static function extend_cart_item_schema()
        {
        }
    }
}
namespace {
    /**
     * Pre-Orders Order class
     *
     * Mirrors the  WC_Order class to provide pre-orders specific functionality
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Order
    {
        /**
         * Add hooks / filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Order
         */
        public function __construct()
        {
        }
        /**
         * Add support for coupons and pre-ordered status
         *
         * @return void
         */
        public function register_order_status_change_coupons_support()
        {
        }
        /**
         * New order status for WooCommerce 2.2 or later
         *
         * @return void
         */
        public function register_order_status()
        {
        }
        /**
         * Set wc-pre-ordered in WooCommerce order statuses.
         *
         * @param  array $order_statuses
         * @return array
         */
        public function order_statuses($order_statuses)
        {
        }
        /**
         * Add "pre-ordered" order status to WC Reports for tracking order revenue.
         *
         * @param array|bool $order_statuses
         * @return array
         */
        public function add_pre_orders_to_report_statuses($order_statuses)
        {
        }
        /**
         * Get the order total formatted to show when the order will be (or was) charged
         *
         * @since 1.0
         * @param string $formatted_total price string ( note: this is already formatted by woocommerce_price() )
         * @param object $order the WC_Order object
         * @return string the formatted order total price string
         */
        public function get_formatted_order_total($formatted_total, $order)
        {
        }
        /**
         * Checks if an order contains a pre-order
         *
         * @since 1.0
         * @param object|int $order Preferably the order object, or order ID if
         *                          object is inconvenient to provide.
         * @return bool true if the order contains a pre-order, false otherwise
         */
        public static function order_contains_pre_order($order)
        {
        }
        /**
         * Checks if an order will be charged upon release
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order will be charged upon , false otherwise
         */
        public static function order_will_be_charged_upon_release($order)
        {
        }
        /**
         * Checks if an order requires payment tokenization. For a pre-order charged upon release, a customer has the option
         * to use the 'pay later' gateway, and then return and pay for the pre-order with a supported gateway. Because the
         * pre-order is still marked as being charged upon release, this helps the supported gateway know how to process the
         * payment.
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order requires payment tokenization , false otherwise
         */
        public static function order_requires_payment_tokenization($order)
        {
        }
        /**
         * Checks if an order has an existing payment token that can be used by the original gateway to charge the pre-order
         * upon release
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order contains a payment token , false otherwise
         */
        public static function order_has_payment_token($order)
        {
        }
        /**
         * Changes the status for an unpaid, but payment-tokenized order to pre-ordered and adds meta to indicate the order
         * has a payment token. Should be used by supported gateways when processing a pre-order charged upon release, instead of calling
         * $order->payment_complete(), this will be used. Note that if the order used pay later, this does not apply.
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         */
        public static function mark_order_as_pre_ordered($order)
        {
        }
        /**
         * Since an order may only contain a single pre-ordered item, this returns
         * the pre-ordered item array.  This method assumes that $order is a pre-order
         *
         * @since    1.0
         * @version  1.5.3
         * @param    object|int $order the order object or order ID
         * @return   object|bool the pre-ordered order item array
         */
        public static function get_pre_order_item($order)
        {
        }
        /**
         * Since an order may only contain a single pre-ordered product, this returns the pre-ordered product object
         *
         * @since    1.0
         * @version  1.5.3
         * @param    object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return   object|bool the pre-ordered product object, or false if the cart does not contain a pre-order
         */
        public static function get_pre_order_product($order)
        {
        }
        /**
         * Get the pre-order status for an order
         * - Active = awaiting release
         * - Completed = availability date was reached or admin manually completed
         * - Cancelled = order and/or pre-order was cancelled
         *
         * @since 1.0
         * @param object|int $order Preferably the order object, or order ID if
         *                          object is inconvenient to provide.
         * @return bool|string The pre-order status or false if order is not valid.
         */
        public static function get_pre_order_status($order)
        {
        }
        /**
         * Returns a pre-order status to display
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return string the pre-order status for display
         */
        public static function get_pre_order_status_to_display($order)
        {
        }
        /**
         * Automatically change the pre-order status when the order status changes.
         *
         * @since 1.0
         * @param int    $order_id post ID of the order
         * @param string $old_order_status the prior order status
         * @param string $new_order_status the new order status
         */
        public function auto_update_pre_order_status($order_id, $old_order_status, $new_order_status)
        {
        }
        /**
         * Update the pre-order status for an order
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @param string     $new_status the new pre-order status
         * @param string     $message an optional message to include in the email to customer
         */
        public static function update_pre_order_status($order, $new_status, $message = '')
        {
        }
        /**
         * Automatically cancel a pre-order if it's parent order is moved to the trash. Note that un-trashing the order does
         * not change the pre-order back to it's original status
         *
         * @since 1.0
         * @param int $order_id the order post ID.
         */
        public function maybe_cancel_trashed_pre_order($order_id)
        {
        }
        /**
         * Product is in stock for orders which are pre-orders (stock reduced during pre-order)
         *
         * @param bool       $in_stock
         * @param WC_Product $product
         * @param WC_Order   $order
         *
         * @return bool
         */
        public static function product_in_stock($in_stock, $product, $order)
        {
        }
    }
    /**
     * Pre-Orders List Table class
     *
     * Extends WP_List_Table to display pre-orders and related information
     *
     * @since 1.0
     * @extends \WP_List_Table
     */
    class WC_Pre_Orders_List_Table extends \WP_List_Table
    {
        /**
         * Setup list table
         *
         * @see WP_List_Table::__construct()
         * @since 1.0
         * @return \WC_Pre_Orders_List_Table
         */
        public function __construct()
        {
        }
        /**
         * Gets the bulk actions available for pre-orders: complete, cancel
         * or message.
         *
         * @see WP_List_Table::get_bulk_actions()
         * @since 1.0
         * @return array associative array of action_slug => action_title
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Get list of views available (one per available pre-order status) plus
         * default of 'all', with counts for each
         *
         * @see WP_List_Table::get_views()
         * @since 1.0
         * @return array
         */
        public function get_views()
        {
        }
        /**
         * Gest the currently selected pre-order status (the current view) if any.
         * Defaults to 'all'.  Status is verified to exist in $available_status if
         * provided
         *
         * @since 1.0
         * @param array $available_status optional array of status => count used for validation
         * @return string the current pre-order status
         */
        public function get_current_pre_order_status($available_status = \null)
        {
        }
        /**
         * Returns the column slugs and titles
         *
         * @see WP_List_Table::get_columns()
         * @since 1.0
         * @return array of column slug => title
         */
        public function get_columns()
        {
        }
        /**
         * Returns the sortable columns.  We make order_date and order sortable
         * because they're available right in the posts table, and they make sense
         * to order over.
         *
         * @see WP_List_Table::get_sortable_columns()
         * @since 1.0
         * @return array of sortable column slug => array( 'orderby', boolean )
         *         where true indicates the initial sort is descending
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Get content for the special checkbox column
         *
         * @see WP_List_Table::single_row_columns()
         * @since 1.0
         * @param WC_Order $order one row (item) in the table
         * @return string the checkbox column content
         */
        public function column_cb($order)
        {
        }
        /**
         * Get column content, this is called once per column, per row item ($order)
         * returns the content to be rendered within that cell.
         *
         * @see WP_List_Table::single_row_columns()
         * @since 1.0
         * @param WC_Order $order one row (item) in the table
         * @param string $column_name the column slug
         * @return string the column content
         */
        public function column_default($order, $column_name)
        {
        }
        /**
         * Output any messages from the bulk action handling
         *
         * @since 1.0
         */
        public function render_messages()
        {
        }
        /**
         * Prepare the list of pre-order items for display
         *
         * @see WP_List_Table::prepare_items()
         * @since 1.0
         */
        public function prepare_items()
        {
        }
        /**
         * The text to display when there are no pre-orders
         *
         * @see WP_List_Table::no_items()
         * @since 1.0
         */
        public function no_items()
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination, which
         * includes our Filters: Customers, Products, Availability Dates
         *
         * @see WP_List_Table::extra_tablenav();
         * @since 1.0
         * @param string $which the placement, one of 'top' or 'bottom'
         */
        public function extra_tablenav($which)
        {
        }
    }
}
namespace {
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.5.25
     */
    function woocommerce_pre_orders_missing_wc_notice()
    {
    }
    /**
     * Actions to perform when plugin is activated.
     *
     * @since 1.4.7
     */
    function woocommerce_pre_orders_activate()
    {
    }
    \define('WC_PRE_ORDERS_VERSION', '1.9.0');
    // WRCS: DEFINED_VERSION.
    \define('WC_PRE_ORDERS_PLUGIN_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
    \define('WC_PRE_ORDERS_PLUGIN_URL', \untrailingslashit(\plugins_url(\basename(\plugin_dir_path(__FILE__), \basename(__FILE__)))));
    \define('WC_PRE_ORDERS_GUTENBERG_EXISTS', \function_exists('register_block_type') ? \true : \false);
    /**
     * Initializes the extension.
     *
     * @return Object Instance of the extension.
     * @since 1.5.25
     */
    function woocommerce_pre_orders_init()
    {
    }
    /**
     * Loads the classes for the integration with WooCommerce Blocks.
     */
    function woocommerce_pre_orders_load_block_classes()
    {
    }
}