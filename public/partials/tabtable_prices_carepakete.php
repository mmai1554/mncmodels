<?php $arrHaveAll = [
	'Premium Hosting auf physikalischen Server',
	'Optimiert auf Performance',
	'Nächtliches Backup',
	'Monitoring & Desaster-Recovery',
	'Sicherheitsupdates',
];
$li               = function ( $list ) {
	$html = [];
	foreach ( $list as $item ) {
		$html[] = '<li>' . $item . '</li>';
	}

	return implode( "\n", $html );
};
$ticklist         = function ( $inner ) {
	return '<ul class="mi-ticks mi-smaller">' . $inner . '</ul>';
};

$title_1 = 'Managed Premium';
$title_2 = 'Managed Wordpress';
$title_3 = 'Managed E-Commerce & Application';

$price_1 = '€ 50';
$price_2 = '€ 60';
$price_3 = 'Auf Anfrage';

$img_1 = '/wp-content/uploads/2019/06/blumentopf.svg';
$img_2 = '/wp-content/uploads/2019/06/pflanze_target.svg';
$img_3 = '/wp-content/uploads/2019/06/gartenschaufel.svg';

$order = 0;

?>
<div class="mi-pricetable mi-pricetable--3cols mi-pricetable--collapse js-mi-pricetableTabs">

    <div class="Tablist" role="tablist">
        <button class="Tab" role="tab" aria-selected="true"><?= $title_1 ?></button>
        <button class="Tab" role="tab" aria-selected="false"><?= $title_2 ?></button>
        <button class="Tab" role="tab" aria-selected="false"><?= $title_3 ?></button>
    </div>

    <!--Col 1-->
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_1 ?>" class="aligncenter align-bottom" src="<?= $img_1 ?>" width="40">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_1 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <strong><?= $price_1 ?></strong>
        <small>monatlich pro Website</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Managed Premium Hosting inklusvive technischer Wartung der Website und Website-Pflege nach Aufwand.
            Geeignet wenn Sie Ihre Website mit contao, Drupal oder statisch betreiben</p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( $arrHaveAll ) ) ?>
        </div>
        <h4>Website-Pflege:</h4>
		<?= $ticklist( $li( [ 'pro angef. 15 Min: € 18,50' ] ) ) ?>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <button>Anfrage stellen</button>
    </div>

	<?php $order = 0; ?>
    <!--Col 2-->
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_2 ?>" class="aligncenter align-bottom" src="<?= $img_2 ?>" width="40">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_2 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <strong><?= $price_2 ?></strong>
        <small>monatlich pro Website</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Wordpress optimiertes Hosting inklusive technischer Wartung. Website-Pflege nach Aufwand.
            Geeignet für alle Wordpress Websites
        </p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( $arrHaveAll ) ) ?>
			<?= $ticklist( $li( [
				'Wordpress-Sicherheitspaket',
				'Getestete Feature- und Plugin-Updates'
			] ) ) ?>
        </div>
		<?= $ticklist( $li( [

		] ) ) ?>
        <h4>Website-Pflege:</h4>
		<?= $ticklist( $li( [ 'pro angef. 15 Min: € 18,50' ] ) ) ?>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <button>Anfrage stellen</button>
    </div>

	<?php $order = 0; ?>
    <!--Col 3-->
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_3 ?>" class="aligncenter align-bottom" src="<?= $img_3 ?>" width="40">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_3 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price"><p>Auf Anfrage</p></div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Optimiertes Hosting für Ihre Anwendung inklusiver technischer Wartung. Website-Pflege nach Aufwand.
            Geeignet für Online-Shops und E-Commerce Anwendungen sowie
            Applikationen, die individuell gehostet werden sollten.
        </p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( [
				'Das Premium-Hosting wird speziell für Ihre Anforderungen erstellt',
				'Individuelle Datenbank- und Servereinstellungen für optimale Performanz',
			] ) ) ?>
        </div>
        <h4>Website-Pflege:</h4>
		<?= $ticklist( $li( [ 'pro angef. 15 Min: € 18,50' ] ) ) ?>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <button>Anfrage stellen</button>
    </div>

</div>
