<?php

class I_Widget_Rubrics_Display extends WP_Widget{
    public function __construct()
    {
        parent::__construct('I_Widget_Rubrics_Display', 'Itkor - вижет вывода рубрик',
            [
                'name' => 'Itkor - Виджет с выбором рубрики, детей которой нужной показать',
                'description' => 'Выводит детей рубрики',
            ]
        );
    }

    public function form( $instance )
    {
        ?>
        <p>
            <?php
            $areas = get_categories( [
                'taxonomy'     => 'category',
                'type'         => 'post',
                'hide_empty'   => false,
            ] );
            ?>
            <select
                id="<?php echo $this->get_field_id('id-rub'); ?>"
                name="<?php echo $this->get_field_name('rub')?>"
                class="widefat"
            >
                <option disabled>Выберите рубрику</option>
                <?php
                foreach ($areas as $area) :
                    ?>
                    <option
                        value="<?php echo $area->term_id; ?>"
                        <?php selected( $instance['rub'], $area->term_id, true); ?>
                    >
                        <?php echo $area->name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php
    }

    public function widget($args, $instance)
    {
        $category = get_category($instance['rub']);
        $category_name = $category->name;
        $category_id = $instance['rub'];
        ?>
        <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <?php
                $terms = get_term_children(
                    $category_id,
                    'category'
                );
                foreach ($terms as $term) {
                    $term_name = get_term($term)->name;
                    $term_url = get_term_link($term);
                    ?>
                    <td width="200">
                        <h3 style="text-align: center;" align="center">
                            <a href="<?php echo $term_url; ?>"><?php echo $term_name; ?>
                            </a>
                        </h3>
                    </td>
                    <?
                }
                ?>
            </tr>
            </tbody>
        </table>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
}