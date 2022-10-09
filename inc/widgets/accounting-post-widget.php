<?php
if (!defined('ABSPATH')) {
	die;
}

// Adds widget: # Categories Slider
class Accounting_Post_Widget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'accounting_post_widget',
			esc_html__('# Kategori Slider', 'accounting'),
			array('description' => esc_html__('Kategori Slider', 'accounting'),)
		);
	}

	public function fields()
	{
		return array(
			array(
				'label'   => esc_html__('Post Sayısı', 'accounting'),
				'id'      => 'count',
				'default' => '5',
				'type'    => 'number',
			),

		);
	}

	public function widget($args, $instance)
	{
		echo $args['before_widget'];

		if (!empty($instance['title'])) {
			echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
		}

		// Output generated fields
		$count = !empty($instance['count']) ? $instance['count'] : 4;

		$widget_query_args = array(
			'orderby'   => 'rand',
			'order' => 'DESC',
			'posts_per_page' => $count,
		);

		$widget_query = new WP_Query($widget_query_args);

		if ($widget_query->have_posts()) {

			while ($widget_query->have_posts()) {
				$widget_query->the_post();
				get_template_part('template-parts/widget', 'post');
			}
		} else {
			if (current_user_can('manage_options')) {
?>

				<div class="alert alert-danger">
					<?php esc_html_e('Yazı Bulunamadı. ( Post Slider )', "accounting") ?>
				</div>

		<?php
			}
		}
		wp_reset_postdata();

		echo $args['after_widget'];
	}

	public function field_generator($instance)
	{
		$output = '';
		foreach ($this->fields() as $widget_field) {
			$default = '';
			if (isset($widget_field['default'])) {
				$default = $widget_field['default'];
			}
			$widget_value = !empty($instance[$widget_field['id']]) ? $instance[$widget_field['id']] : esc_html__($default, 'accounting');
			switch ($widget_field['type']) {
				default:
					$output .= '<p>';
					$output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'accounting') . ':</label> ';
					$output .= '<input class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" type="' . $widget_field['type'] . '" value="' . esc_attr($widget_value) . '">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form($instance)
	{
		$title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'accounting');
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
		</p>
<?php
		$this->field_generator($instance);
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		foreach ($this->fields() as $widget_field) {
			switch ($widget_field['type']) {
				default:
					$instance[$widget_field['id']] = (!empty($new_instance[$widget_field['id']])) ? strip_tags($new_instance[$widget_field['id']]) : '';
			}
		}
		return $instance;
	}
}

function bomajans_register_post_widget()
{
	register_widget('Accounting_Post_Widget');
}
add_action('widgets_init', 'bomajans_register_post_widget');
