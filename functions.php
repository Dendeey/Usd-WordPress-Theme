<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Supprimer les styles css des galeries d'images de WordPress
add_filter('use_default_gallery_style', '__return_false');

// Déclarer les scripts et styles avec un Hook
function usdomagne_register_assets()
{

    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script(
        'usdomagne',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'usdomagne',
        get_template_directory_uri() . '/assets/styles/css/main.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'usdomagne_register_assets');

// Déclarer emplacements de menu
register_nav_menus(array(
    'main' => 'Menu Principal',
    'burger-club_dropdown' => 'Menu Club deroulant ',
    'burger-equipes_dropdown' => 'Menu Equipes deroulant',
    'burger-licences_dropdown' => 'Menu Licences deroulant',
    'burger-menu' => 'Menu Burger',
    'footer-menu' => 'Menu bas de page',
    'footer' => 'Bas de page',
));

// Déclarer une sidebar
register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
));

// Récupérer les données des champs ACF
function getClubPageData()
{
    $data = [];
    $data['club'] = [];
    $data['club']['image-illustration1'] = get_field('image');
    $data['club']['image-illustration2'] = get_field('image_illustration2');
    $data['club']['image-illustration3'] = get_field('image_illustration3');
    $data['club']['image-illustration4'] = get_field('image_illustration4');
    $data['club']['titre'] = get_field('titre_principal', false, false);
    $data['club']['navigation'] = get_field('menu_de_navigation', false, false);
    $data['club']['image1'] = get_field('image_1');
    $data['club']['image2'] = get_field('image_2');
    $data['club']['contenu-principal'] = get_field('contenu_principal');
    $data['club']['carrousel'] = get_field('carrousel_images', false, false);
    $data['club']['contenu-secondaire'] = get_field('contenu_secondaire');
    $data['club']['contenu-embarque'] = get_field('contenu_embarque');

    return $data;
}

function getGarTeamsPageData()
{
    $dataGar = [];

    $dataGar['gar'] = [];

    $dataGar['gar']['gar1'] = get_field('gar_1');
    $dataGar['gar']['gar2'] = get_field('gar_2');
    $dataGar['gar']['gar3'] = get_field('gar_3');
    $dataGar['gar']['gar4'] = get_field('gar_4');
    $dataGar['gar']['gar5'] = get_field('gar_5');
    $dataGar['gar']['gar6'] = get_field('gar_6');
    $dataGar['gar']['gar7'] = get_field('gar_7');
    $dataGar['gar']['gar8'] = get_field('gar_8');

    return $dataGar;
}

function getDefTeamsPageData()
{
    $dataDef = [];

    $dataDef['def'] = [];

    $dataDef['def']['def1'] = get_field('def_1');
    $dataDef['def']['def2'] = get_field('def_2');
    $dataDef['def']['def3'] = get_field('def_3');
    $dataDef['def']['def4'] = get_field('def_4');
    $dataDef['def']['def5'] = get_field('def_5');
    $dataDef['def']['def6'] = get_field('def_6');
    $dataDef['def']['def7'] = get_field('def_7');
    $dataDef['def']['def8'] = get_field('def_8');
    $dataDef['def']['def9'] = get_field('def_9');
    $dataDef['def']['def10'] = get_field('def_10');
    $dataDef['def']['def11'] = get_field('def_11');
    $dataDef['def']['def12'] = get_field('def_12');
    $dataDef['def']['def13'] = get_field('def_13');
    $dataDef['def']['def14'] = get_field('def_14');
    $dataDef['def']['def15'] = get_field('def_15');
    $dataDef['def']['def16'] = get_field('def_16');
    $dataDef['def']['def17'] = get_field('def_17');
    $dataDef['def']['def18'] = get_field('def_18');
    $dataDef['def']['def19'] = get_field('def_19');
    $dataDef['def']['def20'] = get_field('def_20');

    return $dataDef;
}

function getMilTeamsPageData()
{
    $dataMil = [];

    $dataMil['mil'] = [];

    $dataMil['mil']['mil1'] = get_field('mil_1');
    $dataMil['mil']['mil2'] = get_field('mil_2');
    $dataMil['mil']['mil3'] = get_field('mil_3');
    $dataMil['mil']['mil4'] = get_field('mil_4');
    $dataMil['mil']['mil5'] = get_field('mil_5');
    $dataMil['mil']['mil6'] = get_field('mil_6');
    $dataMil['mil']['mil7'] = get_field('mil_7');
    $dataMil['mil']['mil8'] = get_field('mil_8');
    $dataMil['mil']['mil9'] = get_field('mil_9');
    $dataMil['mil']['mil10'] = get_field('mil_10');
    $dataMil['mil']['mil11'] = get_field('mil_11');
    $dataMil['mil']['mil12'] = get_field('mil_12');
    $dataMil['mil']['mil13'] = get_field('mil_13');
    $dataMil['mil']['mil14'] = get_field('mil_14');
    $dataMil['mil']['mil15'] = get_field('mil_15');
    $dataMil['mil']['mil16'] = get_field('mil_16');
    $dataMil['mil']['mil17'] = get_field('mil_17');
    $dataMil['mil']['mil18'] = get_field('mil_18');
    $dataMil['mil']['mil19'] = get_field('mil_19');
    $dataMil['mil']['mil20'] = get_field('mil_20');

    return $dataMil;
}

function getAttTeamsPageData()
{
    $dataAtt = [];

    $dataAtt['att'] = [];

    $dataAtt['att']['att1'] = get_field('att_1');
    $dataAtt['att']['att2'] = get_field('att_2');
    $dataAtt['att']['att3'] = get_field('att_3');
    $dataAtt['att']['att4'] = get_field('att_4');
    $dataAtt['att']['att5'] = get_field('att_5');
    $dataAtt['att']['att6'] = get_field('att_6');
    $dataAtt['att']['att7'] = get_field('att_7');
    $dataAtt['att']['att8'] = get_field('att_8');
    $dataAtt['att']['att9'] = get_field('att_9');
    $dataAtt['att']['att10'] = get_field('att_10');
    $dataAtt['att']['att11'] = get_field('att_11');
    $dataAtt['att']['att12'] = get_field('att_12');
    $dataAtt['att']['att13'] = get_field('att_13');
    $dataAtt['att']['att14'] = get_field('att_14');
    $dataAtt['att']['att15'] = get_field('att_15');
    $dataAtt['att']['att16'] = get_field('att_16');
    $dataAtt['att']['att17'] = get_field('att_17');
    $dataAtt['att']['att18'] = get_field('att_18');
    $dataAtt['att']['att19'] = get_field('att_19');
    $dataAtt['att']['att20'] = get_field('att_20');

    return $dataAtt;
}

function getStaffTeamsPageData()
{
    $dataStaff = [];

    $dataStaff['staff'] = [];

    $dataStaff['staff']['staff1'] = get_field('staff_1');
    $dataStaff['staff']['staff2'] = get_field('staff_2');
    $dataStaff['staff']['staff3'] = get_field('staff_3');
    $dataStaff['staff']['staff4'] = get_field('staff_4');
    $dataStaff['staff']['staff5'] = get_field('staff_5');
    $dataStaff['staff']['staff6'] = get_field('staff_6');
    $dataStaff['staff']['staff7'] = get_field('staff_7');
    $dataStaff['staff']['staff8'] = get_field('staff_8');

    return $dataStaff;
}

function getScorencoWidgetsTeamPage()
{
    $dataWidgets = [];

    $dataWidgets['widget'] = [];

    $dataWidgets['widget']['widget1'] = get_field('classement_teams_page');
    $dataWidgets['widget']['widget2'] = get_field('calendrier_resultats_teams_page');

    return $dataWidgets;
}

function getSinglePostData()
{
    $dataPost = [];

    $dataPost['post'] = [];

    $dataPost['post']['content'] = get_field('contenu_texte_image');
    $dataPost['post']['image1'] = get_field('actualite_image_1');
    $dataPost['post']['image2'] = get_field('actualite_image_2');
    $dataPost['post']['image3'] = get_field('actualite_image_3');
    $dataPost['post']['image4'] = get_field('actualite_image_4');
    $dataPost['post']['image5'] = get_field('actualite_image_5');
    $dataPost['post']['affiche'] = get_field('affiche_image');

    return $dataPost;
}

function getTemplateDefaultBisData()
{
    $dataBis = [];

    $dataBis['bis'] = [];

    $dataBis['bis']['mainPicture'] = get_field('image_illustration_page');
    $dataBis['bis']['title1'] = get_field('titre_1');
    $dataBis['bis']['gallery1'] = get_field('galerie_1', false, false);
    $dataBis['bis']['title2'] = get_field('titre_2');
    $dataBis['bis']['gallery2'] = get_field('galerie_2', false, false);
    $dataBis['bis']['commonContent'] = get_field('contenu_general');
    $dataBis['bis']['convocs'] = get_field('convocations');

    return $dataBis;
}

// Fonction pour créer la section "Derniers articles" sur les pages d'articles (Single).

function derniers_articles()
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3, // Nombre d'articles récents à afficher
        'orderby'        => 'date', // Tri par date
        'order'          => 'DESC', // Dans l'ordre décroissant (du plus récent au plus ancien)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<section class="last__posts">';
        echo '<h3>Derniers articles</h3>';
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            echo '
            <li>
                <a href="' . get_permalink() . '" class="post__link">
                    <article class="post">
                        <figure>
                            ' . get_the_post_thumbnail() . '
                        </figure>
                        <div>
                            <p class="post__meta">
                                Publié le ' . get_the_time(get_option('date_format')) . '
                            </p>
                            <h2>' . get_the_title() . '</h2>
                        </div>
                        <span class="post__border__bottom"></span>
                    </article>
                </a>
            </li>
            ';
        }
        echo '</ul>';
        echo '</section>';
    }

    wp_reset_postdata();
}

function eventData()
{
    $eventData = [];
    $eventData["event"] = [];
    $eventData["event"]["imgEvent1"] = get_field("image_evenement_1");
    $eventData["event"]["titreEvent1"] = get_field("titre_evenement_1");
    $eventData["event"]["descriptionEvent1"] = get_field("description_evenement_1");
    $eventData["event"]["prixEvent1"] = get_field("prix_evenement_1");
    $eventData["event"]["imgEvent2"] = get_field("image_evenement_2");
    $eventData["event"]["titreEvent2"] = get_field("titre_evenement_2");
    $eventData["event"]["descriptionEvent2"] = get_field("description_evenement_2");
    $eventData["event"]["prixEvent2"] = get_field("prix_evenement_2");
    $eventData["event"]["imgEvent3"] = get_field("image_evenement_3");
    $eventData["event"]["titreEvent3"] = get_field("titre_evenement_3");
    $eventData["event"]["descriptionEvent3"] = get_field("description_evenement_3");
    $eventData["event"]["prixEvent3"] = get_field("prix_evenement_3");
    $eventData["event"]["imgEvent4"] = get_field("image_evenement_4");
    $eventData["event"]["titreEvent4"] = get_field("titre_evenement_4");
    $eventData["event"]["descriptionEvent4"] = get_field("description_evenement_4");
    $eventData["event"]["prixEvent4"] = get_field("prix_evenement_4");
    $eventData["event"]["imgEvent5"] = get_field("image_evenement_5");
    $eventData["event"]["titreEvent5"] = get_field("titre_evenement_5");
    $eventData["event"]["descriptionEvent5"] = get_field("description_evenement_5");
    $eventData["event"]["prixEvent5"] = get_field("prix_evenement_5");
    $eventData["event"]["imgEvent6"] = get_field("image_evenement_6");
    $eventData["event"]["titreEvent6"] = get_field("titre_evenement_6");
    $eventData["event"]["descriptionEvent6"] = get_field("description_evenement_6");
    $eventData["event"]["prixEvent6"] = get_field("prix_evenement_6");

    return $eventData;
}

function eventOne()
{
    $eventOne = eventData();

    $img = isset($eventOne["event"]["imgEvent1"]) && is_array($eventOne["event"]["imgEvent1"])
        ? esc_url($eventOne["event"]["imgEvent1"]["url"])
        : '';

    $titre = isset($eventOne["event"]["titreEvent1"]) ? esc_html($eventOne["event"]["titreEvent1"]) : '';
    $description = isset($eventOne["event"]["descriptionEvent1"]) ? esc_html($eventOne["event"]["descriptionEvent1"]) : '';
    $prix = isset($eventOne["event"]["prixEvent1"]) ? esc_html($eventOne["event"]["prixEvent1"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 1" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_1', 'eventOne');

function eventTwo()
{
    $eventTwo = eventData();

    $img = isset($eventTwo["event"]["imgEvent2"]) && is_array($eventTwo["event"]["imgEvent2"])
        ? esc_url($eventTwo["event"]["imgEvent2"]["url"])
        : '';

    $titre = isset($eventTwo["event"]["titreEvent2"]) ? esc_html($eventTwo["event"]["titreEvent2"]) : '';
    $description = isset($eventTwo["event"]["descriptionEvent2"]) ? esc_html($eventTwo["event"]["descriptionEvent2"]) : '';
    $prix = isset($eventTwo["event"]["prixEvent2"]) ? esc_html($eventTwo["event"]["prixEvent2"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 2" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_2', 'eventTwo');

function eventThree()
{
    $eventThree = eventData();

    $img = isset($eventThree["event"]["imgEvent3"]) && is_array($eventThree["event"]["imgEvent3"])
        ? esc_url($eventThree["event"]["imgEvent3"]["url"])
        : '';

    $titre = isset($eventThree["event"]["titreEvent3"]) ? esc_html($eventThree["event"]["titreEvent3"]) : '';
    $description = isset($eventThree["event"]["descriptionEvent3"]) ? esc_html($eventThree["event"]["descriptionEvent3"]) : '';
    $prix = isset($eventThree["event"]["prixEvent3"]) ? esc_html($eventThree["event"]["prixEvent3"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 3" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_3', 'eventThree');

function eventFour()
{
    $eventFour = eventData();

    $img = isset($eventFour["event"]["imgEvent4"]) && is_array($eventFour["event"]["imgEvent4"])
        ? esc_url($eventFour["event"]["imgEvent4"]["url"])
        : '';

    $titre = isset($eventFour["event"]["titreEvent4"]) ? esc_html($eventFour["event"]["titreEvent4"]) : '';
    $description = isset($eventFour["event"]["descriptionEvent4"]) ? esc_html($eventFour["event"]["descriptionEvent4"]) : '';
    $prix = isset($eventFour["event"]["prixEvent4"]) ? esc_html($eventFour["event"]["prixEvent4"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 4" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_4', 'eventFour');

function eventFive()
{
    $eventFive = eventData();

    $img = isset($eventFive["event"]["imgEvent5"]) && is_array($eventFive["event"]["imgEvent5"])
        ? esc_url($eventFive["event"]["imgEvent5"]["url"])
        : '';

    $titre = isset($eventFive["event"]["titreEvent5"]) ? esc_html($eventFive["event"]["titreEvent5"]) : '';
    $description = isset($eventFive["event"]["descriptionEvent5"]) ? esc_html($eventFive["event"]["descriptionEvent5"]) : '';
    $prix = isset($eventFive["event"]["prixEvent5"]) ? esc_html($eventFive["event"]["prixEvent5"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 5" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_5', 'eventFive');

function eventSix()
{
    $eventSix = eventData();

    $img = isset($eventSix["event"]["imgEvent6"]) && is_array($eventSix["event"]["imgEvent6"])
        ? esc_url($eventSix["event"]["imgEvent6"]["url"])
        : '';

    $titre = isset($eventSix["event"]["titreEvent6"]) ? esc_html($eventSix["event"]["titreEvent6"]) : '';
    $description = isset($eventSix["event"]["descriptionEvent6"]) ? esc_html($eventSix["event"]["descriptionEvent6"]) : '';
    $prix = isset($eventSix["event"]["prixEvent6"]) ? esc_html($eventSix["event"]["prixEvent6"]) : '';

    if ($img || $titre || $description || $prix) {
        return ' 
        <section class="event">
        <figure class="event-img-container">
            <img class="event-img" src="' . esc_url($img) . '" alt="Événement 6" />
        </figure>
        <section class="event-text">
            <h2>' . esc_html($titre) . '</h2>
            <p>' . esc_html($description) . '</p>
            <span class="price">' . esc_html($prix) . '</span>
        </section>
    </section>
      ';
    } else {
        return '';
    }
}
add_shortcode('evenement_6', 'eventSix');
