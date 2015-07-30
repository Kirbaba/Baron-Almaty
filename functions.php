<?php

function add_style()
{
    wp_enqueue_style('my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style('fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
}



function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'jq', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_enqueue_script( 'reviews', get_template_directory_uri() . '/js/mail.js', array(), '1');
    wp_localize_script( 'jquery', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        ));

}

add_action('wp_ajax_get_mail', 'get_mail_function');
add_action('wp_ajax_nopriv_get_mail', 'get_mail_function');


define('ADD_BARON_DIR', plugin_dir_path(__FILE__));
define('ADD_BARON_URL', plugin_dir_url(__FILE__));

require_once(ADD_BARON_DIR . "/lib/parser_baron.php");
require_once(ADD_BARON_DIR . "/lib/Baron.php");


add_action('wp_enqueue_scripts', 'add_style');
add_action('wp_enqueue_scripts', 'add_script');

function get_mail_function(){
    $name = $_POST['name'];
    $from_mail = $_POST['mail'];
    $text = $_POST['text'];

    $massage = "Имя: $name <br /> e-mail: $from_mail <br /> $text";

    mail('korol_dima@list.ru', 'Сообщение с вашего сайта', $massage, "Content-type: text/html; charset=UTF-8\r\n");
}


function prn($content)
{
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r($content);
    echo '</pre>';
}

function my_pagenavi()
{
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big))
    , 'format' => ''
    , 'current' => max(1, get_query_var('paged'))
    , 'total' => $wp_query->max_num_pages
    );

    $result = paginate_links($args);

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace('/page/1/', '', $result);

    echo $result;
}

function excerpt_readmore($more)
{
    return '... <br><a href="' . get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}

add_filter('excerpt_more', 'excerpt_readmore');


if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');


function kama_breadcrumbs($sep = 0, $l10n = array(), $args = array())
{
    global $post, $wp_query, $wp_post_types;

    // Локализация
    $default_l10n = array(
        'home' => 'Главная',
        'paged' => 'Страница %s',
        '_404' => 'Ошибка 404',
        'search' => 'Результаты поиска по запросу - <b>%s</b>',
        'author' => 'Архив автора: <b>%s</b>',
        'year' => 'Архив за <b>%s</b> год',
        'month' => 'Архив за: <b>%s</b>',
        'day' => '',
        'attachment' => 'Медиа: %s',
        'tag' => 'Записи по метке: <b>%s</b>',
        'tax_tag' => '%s из "%s" по тегу: <b>%s</b>',
    );

    // Параметры по умолчанию
    $default_args = array(
        'on_front_page' => true, // выводить крошки на главной странице
        'show_post_title' => true, // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'sep' => ' » ', // разделитель
    );

    // Фильтрует аргументы по умолчанию.
    $default_args = apply_filters('kama_breadcrumbs_default_args', $default_args);

    $loc = (object)array_merge($default_l10n, $l10n);
    $args = (object)array_merge($default_args, $args);

    if ($sep === 0) $sep = $args->sep;

    $w1 = '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">';
    $w2 = '</div>';
    $patt1 = '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">';
    $sep .= '</span>'; // закрываем span после разделителя!
    $linkpatt = $patt1 . '%s</a>';


    // Вывод
    $pg_end = '';
    if ($paged = $wp_query->query_vars['paged']) {
        $pg_patt = $patt1;
        $pg_end = '</a>' . $sep . sprintf($loc->paged, $paged);
    }

    $out = '';
    if (is_front_page()) {
        return $args->on_front_page ? (print $w1 . ($paged ? sprintf($pg_patt, home_url()) : '') . $loc->home . $pg_end . $w2) : '';
    } elseif (is_404()) {
        $out = $loc->_404;
    } elseif (is_search()) {
        $out = sprintf($loc->search, strip_tags($GLOBALS['s']));
    } elseif (is_author()) {
        $q_obj = &$wp_query->queried_object;
        $out = ($paged ? sprintf($pg_patt, get_author_posts_url($q_obj->ID, $q_obj->user_nicename)) : '') . sprintf($loc->author, $q_obj->display_name) . $pg_end;
    } elseif (is_year() || is_month() || is_day()) {
        $y_url = get_year_link($year = get_the_time('Y'));
        $m_url = get_month_link($year, get_the_time('m'));
        $y_link = sprintf($linkpatt, $y_url, $year);
        $m_link = sprintf($linkpatt, $m_url, get_the_time('F'));
        if (is_year())
            $out = ($paged ? sprintf($pg_patt, $y_url) : '') . sprintf($loc->year, $year) . $pg_end;
        elseif (is_month())
            $out = $y_link . $sep . ($paged ? sprintf($pg_patt, $m_url) : '') . sprintf($loc->month, get_the_time('F')) . $pg_end;
        elseif (is_day())
            $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
    } // Страницы и древовидные типы записей
    elseif (is_singular() && $wp_post_types[$post->post_type]->hierarchical) {
        $parent = $post->post_parent;
        $crumbs = array();
        while ($parent) {
            $page = &get_post($parent);
            $crumbs[] = sprintf($linkpatt, get_permalink($page->ID), $page->post_title);
            $parent = $page->post_parent;
        }
        $crumbs = array_reverse($crumbs);

        foreach ($crumbs as $crumb) $out .= $crumb . $sep;

        $out = $out . ($args->show_post_title ? $post->post_title : '');
    } // Таксономии, вложения и не древовидные типы записей
    else {
        // Определяем термины
        if (is_singular()) {
            $taxonomies = get_taxonomies(array('hierarchical' => true, 'public' => true));
            if (count($taxonomies) == 1) $taxonomies = 'category';

            if ($term = get_the_terms($post->post_parent ? $post->post_parent : $post->ID, $taxonomies)) {
                $term = array_shift($term);
            }
        } else
            $term = $wp_query->get_queried_object();


        //if( ! $term && ! is_attachment() ) return print "Error: Taxonomy is not defined!"; 

        if ($term) {
            $term = apply_filters('kama_breadcrumbs_term', $term);

            $pg_term_start = ($paged && $term->term_id) ? sprintf($pg_patt, get_term_link((int)$term->term_id, $term->taxonomy)) : '';

            if (is_attachment()) {
                if (!$post->post_parent)
                    $out = sprintf($loc->attachment, $post->post_title);
                else
                    $out = __crumbs_tax($term->term_id, $term->taxonomy, $sep, $linkpatt) . sprintf($linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent)) . $sep . ($args->show_post_title ? $post->post_title : '');
            } elseif (is_single()) {
                $out = __crumbs_tax($term->parent, $term->taxonomy, $sep, $linkpatt) . sprintf($linkpatt, get_term_link((int)$term->term_id, $term->taxonomy), $term->name) . $sep . ($args->show_post_title ? $post->post_title : '');
                // Метки, архивная страница типа записи, произвольные одноуровневые таксономии
            } elseif (!is_taxonomy_hierarchical($term->taxonomy)) {
                // метка
                if (is_tag())
                    $out = $pg_term_start . sprintf($loc->tag, $term->name) . $pg_end;
                // таксономия
                elseif (is_tax()) {
                    $post_label = $wp_post_types[$post->post_type]->labels->name;
                    $tax_label = $GLOBALS['wp_taxonomies'][$term->taxonomy]->labels->name;
                    $out = $pg_term_start . sprintf($loc->tax_tag, $post_label, $tax_label, $term->name) . $pg_end;
                }
            } // Рубрики и таксономии
            else
                $out = __crumbs_tax($term->parent, $term->taxonomy, $sep, $linkpatt) . $pg_term_start . $term->name . $pg_end;
        }
    }

    // замена ссылки на архивную страницу для типа записи 
    $home_after = apply_filters('kama_breadcrumbs_home_after', false, $linkpatt, $sep);

    // ссылка на архивную страницу произвольно типа поста. Ссылку можно заменить с помощью хука 'kama_breadcrumbs_home_after'
    if (!$home_after && isset($post->post_type) && !in_array($post->post_type, array('post', 'page', 'attachment'))) {
        $pt_name = $wp_post_types[$post->post_type]->labels->name;
        $pt_url = get_post_type_archive_link($post->post_type);
        $home_after = (is_post_type_archive() && !$paged) ? $pt_name : (sprintf($linkpatt, $pt_url, $pt_name) . ($pg_end ? $pg_end : $sep));
    }


    $home = sprintf($linkpatt, home_url(), $loc->home) . $sep . $home_after;

    $out = $w1 . $home . $out . $w2;

    return print apply_filters('kama_breadcrumbs', $out, $sep);
}

function __crumbs_tax($term_id, $tax, $sep, $linkpatt)
{
    $termlink = array();
    while ((int)$term_id) {
        $term2 = get_term($term_id, $tax);
        $termlink[] = sprintf($linkpatt, get_term_link((int)$term2->term_id, $term2->taxonomy), $term2->name) . $sep;
        $term_id = (int)$term2->parent;
    }

    $termlinks = array_reverse($termlink);

    return implode('', $termlinks);
}

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('recipes',
        array(
            'labels' => array( // добавляем новые элементы в административную частьку
                'name' => __('Рецепты'),
                'has_archive' => true,
                'not_found' => 'Ничего не найдено',
                'not_found_in_trash' => 'В корзине рецептов не найдено'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'recipes'),
            'supports' => array( //добавляем элементы в редактор
                'title',
                'editor',
                'author',
                'trackbacks',
                'comments',
                'thumbnail',
                'page-attributes',
                'post-formats',
                'custom-fields'
            ),
            'taxonomies' => array('category', 'post_tag') //добавляем к записям необходимый набор таксономий
        ));
}

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query)
{
    if (is_category() || is_tag()) {
        $post_type = get_query_var('post_type');
        if ($post_type)
            $post_type = $post_type;
        else
            $post_type = array('post', 'recipes');
        $query->set('post_type', $post_type);
        return $query;
    }
}

function get_cat()
{
    $parser = new Parser_baron();
    $kat = 8;
    $dochernii_kategorii = get_categories('child_of=' . $kat . '&hide_empty=0');
    foreach ($dochernii_kategorii as $cat) :
        $category_link = get_category_link( $cat->term_id );
        $img = z_taxonomy_image_url($cat->term_id);
        $parser->parse(ADD_BARON_DIR . "/view/category/category_block_view.php", array('img'=>$img,'name'=>$cat->name,'link'=>$category_link), true);
    endforeach;
}

add_shortcode('cat', 'get_cat');


// подключаем функцию активации мета блока (my_extra_fields)
add_action('admin_init', 'my_extra_fields', 1);

function my_extra_fields() {
    add_meta_box( 'extra_fields', 'Дополнительная информация:', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
    ?>
    <p>
        <label>
            Время приготовления:
            <input type="text" name="extra[time]" value="<?php echo get_post_meta($post->ID, 'time', 1); ?>" style="width:50%" />
        </label></p>

    <p>
        <label>
            Рецепт на
            <input type="text" name="extra[kol]" value="<?php echo get_post_meta($post->ID, 'kol', 1); ?>" style="width:50%" />
        </label>

    </p>
    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <input type="hidden" name="extra[id]" value="<?php get_post_meta($post->ID, 'id', 1); ?>" />

   <!-- <input type="submit" name="add_ing" id="" value="Добавить ингридиент"/>-->
<?php
}

add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
    if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // выходим если это автосохранение
    if ( !current_user_can('edit_post', $post_id) ) return false; // выходим если юзер не имеет право редактировать запись

    if( !isset($_POST['extra']) ) return false;	// выходим если данных нет

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map('trim', $_POST['extra']); // чистим все данные от пробелов по краям
    foreach( $_POST['extra'] as $key=>$value ){
        if( empty($value) ){
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}


