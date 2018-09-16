<?php

namespace WPRedisearch;

class Checkbox extends Fields {
  
	/**
	 * @param object $name
	 */
  public static $name;

	/**
	 * @param object $label
	 */
  public static $label;

	/**
	 * @param object $description
	 */
  public static $description;

  /**
   * Initiate field.
   *
   * @since 0.1.0
   * @param string $name
   * @param string $label
   * @param string $description
   * @return function field_html()
   */
  public function __construct($name, $label, $description) {
    self::$name = $name;
    self::$label = $label;
    self::$description = $description;
    return $this->field_html();
  }

  /**
   * Get field value, so we can use it to show current value.
   *
   * @since 0.1.0
   * @param
   * @return boolean $field_value
   */
  public static function get_value() {
    $field_value = parent::get_field_value( self::$name );
    return $field_value;
  }

  /**
   * Set field name attr.
   *
   * @since 0.1.0
   * @param
   * @return string $input_name
   */
  public static function input_name() {
    $options_name = parent::$options_name;
    return $options_name . '[checkbox__' . self::$name . ']';
  }

  /**
   * And the actual output markup of the field.
   *
   * @since 0.1.0
   * @param
   * @return
   */
  public function field_html() {
    ?>
    <div class="wprds-field checkbox">
      <div class="label"><?php echo self::$label ?></div>
      <label>
        <input type="checkbox"
              name="<?php echo self::input_name() ?>"
              <?php checked( self::get_value(), 'on' ); ?> />
        <?php echo self::$description ?>
      </label>
    </div>
    <?php
  }
}