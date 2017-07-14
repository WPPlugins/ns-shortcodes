<div class="wrap" id="ns-shortcodes-settings">
<div id="icon-options-general" class="icon32"></div>
  <h2><?php _e($this->plugin_name, $this->plugin_slug); ?></h2>
  <div id="body-wrap" class="meta-box-sortables ui-sortable">
    <div id="metabox_desc" class="postbox">

      <div class="hndle">
        <h3><?php _e("Available Shortcodes", $this->plugin_slug); ?></h3>
      </div>
      <div class="group help inside">
        <ul>
          <li><code>[ns-site-title]</code> - <?php _e("Display site title", $this->plugin_slug); ?></li>
          <li><code>[ns-site-tagline]</code> - <?php _e("Display site tagline", $this->plugin_slug); ?></li>
          <li><code>[ns-site-url]</code> - <?php _e("Display site URL", $this->plugin_slug); ?></li>
          <li><code>[ns-home-url]</code> - <?php _e("Display home URL", $this->plugin_slug); ?></li>
          <li><code>[ns-current-year]</code> - <?php _e("Display current year", $this->plugin_slug); ?></li>
          <li><code>[ns-login-url]</code> - <?php _e("Display login URL", $this->plugin_slug); ?></li>
          <li><code>[ns-login-url redirect="current"]</code> - <?php _e("Display login URL with redirection to current page", $this->plugin_slug); ?></li>
          <li><code>[ns-login-url redirect="home"]</code> - <?php _e("Display login URL with redirection to home page", $this->plugin_slug); ?></li>
          <li><code>[ns-logout-url]</code> - <?php _e("Display logout URL", $this->plugin_slug); ?></li>
          <li><code>[ns-logout-url redirect="current"]</code> - <?php _e("Display logout URL with redirection to current page", $this->plugin_slug); ?></li>
          <li><code>[ns-logout-url redirect="home"]</code> - <?php _e("Display logout URL with redirection to home page", $this->plugin_slug); ?></li>
          <li><code>[ns-registration-url]</code> - <?php _e("Display registration URL", $this->plugin_slug); ?></li>
          <li><code>[ns-lost-password-url]</code> - <?php _e("Display lost password URL", $this->plugin_slug); ?></li>
          <li><code>[ns-lost-password-url redirect="current"]</code> - <?php _e("Display lost password URL with redirection to current page", $this->plugin_slug); ?></li>
          <li><code>[ns-lost-password-url redirect="home"]</code> - <?php _e("Display lost password URL with redirection to home page", $this->plugin_slug); ?></li>
          <li><code>[ns-theme-url]</code> - <?php _e("Display theme URL", $this->plugin_slug); ?></li>
          <li><code>[ns-theme-name]</code> - <?php _e("Display theme name", $this->plugin_slug); ?></li>
          <li><code>[ns-theme-author-url]</code> - <?php _e("Display theme author URL", $this->plugin_slug); ?></li>
          <li><code>[ns-theme-author-name]</code> - <?php _e("Display theme author name", $this->plugin_slug); ?></li>
          <li><code>[ns-theme-version]</code> - <?php _e("Display theme version", $this->plugin_slug); ?></li>
        </ul>
        <h2>
            <?php _e("FAQ", $this->plugin_slug); ?>
        </h2>
        <h4>
            <?php _e("How to enable shortcode support in Text Widget?", $this->plugin_slug); ?>
        </h4>
        <p class="description"><?php _e("Text Widget does not support shortcode by default. To enable shortcode in Text Widget, add following piece of code in your theme's functions.php file inside PHP tag.", $this->plugin_slug); ?></p>
        <pre><code>add_filter('widget_text', 'do_shortcode');</code></pre>
        <h2>
            <?php _e("Example", $this->plugin_slug); ?>
        </h2>
        <p class="description"><?php _e("Example code to put in your template file.", $this->plugin_slug); ?></p>
        <pre><code>&lt;?php echo do_shortcode('Copyright &amp;copy; [ns-current-year] [ns-site-title] All rights reserved'); ?&gt;</code></pre>
      </div>
    </div>
  </div>
  <div id="sidebar-wrap">
    <?php require_once( ( plugin_dir_path(__FILE__) ) . 'inc/right.php'); ?>
  </div>
</div>
