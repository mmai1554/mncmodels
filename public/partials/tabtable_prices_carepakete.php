<?php $arrHaveAll = [
	'Premium Hosting auf physikalischen Server',
	'Optimiert auf Performance',
	'Nächtliches Backup',
	'Monitoring & Recovery',
	'Sicherheitsupdates',
    'DSGVO-Check',
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

$price_1 = '<span>€</span> 50';
$price_2 = '<span>€</span> 60';
$price_3 = 'Auf Anfrage';

$img_1 = '/wp-content/uploads/2019/06/blumentopf.svg';
$img_2 = '/wp-content/uploads/2019/06/pflanze_target.svg';
$img_3 = '/wp-content/uploads/2019/06/gartenschaufel.svg';

$more = '/managed-premium-hosting';

$order = 0;

?>
<div class="mi-pricetable mi-pricetable--3cols mi-pricetable--collapse js-mi-pricetableTabs">

    <div class="Tablist" role="tablist">
        <button class="Tab" role="tab" aria-selected="true"><?= $title_1 ?></button>
        <button class="Tab" role="tab" aria-selected="false"><?= $title_2 ?></button>
        <button class="Tab" role="tab" aria-selected="false"><?= $title_3 ?></button>
    </div>

    <!--Col 1-->
    <div style="order:<?= $order ++ ?>;display:flex;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_1 ?>" class="aligncenter align-bottom" src="<?= $img_1 ?>" width="40">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_1 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <span>€</span><strong>50,-</strong><br>
        <small>monatlich pro Website<br>
            Einmalige Einrichtung: € 80,-</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Managed Premium Hosting inklusvive technischer Wartung der Website und Website-Pflege nach Aufwand.
            Geeignet wenn Sie Ihre Website mit contao, Drupal oder statisch betreiben</p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( $arrHaveAll ) ) ?>
        </div>
        <p><a href="<?= $more ?>" title="Mehr Informationen über Managed Hosting"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=Premium-Hosting" class="ast-button d-inline-block">Anfrage Managed Premium</a>
    </div>

	<?php $order = 0; ?>
    <!--Col 2-->
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_2 ?>" class="aligncenter align-bottom" src="<?= $img_2 ?>" width="60">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_2 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <span>€</span><strong>60,-</strong><br>
        <small>monatlich pro Website<br>
        Einmalige Einrichtung: € 80,-</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Wordpress optimiertes Hosting inklusive technischer Wartung. Website-Pflege nach Aufwand.
            Geeignet für alle Wordpress Websites, insbesondere Marketing-Websites und kleinere Shop-Lösungen
        </p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( $arrHaveAll ) ) ?>
			<?= $ticklist( $li( [
				'Wordpress-Sicherheitspaket',
				'Getestete Feature- und Plugin-Updates',
                'Archivierungsoption'
			] ) ) ?>
        </div>
        <p><a href="<?= $more ?>" title="Mehr Informationen über Managed Hosting"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=Wordpress-Hosting" class="ast-button d-inline-block">Anfrage Managed WordPress</a>
    </div>

	<?php $order = 0; ?>
    <!--Col 3-->
    <div style="order:<?= $order ++ ?>;display:flex;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_3 ?>" class="aligncenter align-bottom" src="<?= $img_3 ?>" width="50">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3><?= $title_3 ?></h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price"><p>Abhängig von Anforderungen der Anwendung</p></div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p class="mi-price-desc">Optimiertes Hosting für Ihre Anwendung inklusiver technischer Wartung. Website-Pflege nach Aufwand.
            Geeignet für Online-Shops und mittelgroße E-Commerce Anwendungen sowie
            Applikationen, die individuell gehostet werden sollten.
        </p>
        <div class="mi-price-leistungen">
            <h4>Leistungen:</h4>
			<?= $ticklist( $li( [
				'Das Premium-Hosting wird speziell für Ihre Anforderungen erstellt',
				'Individuelle Datenbank- und Servereinstellungen für optimale Performanz',
			] ) ) ?>
        </div>
        <p><a href="<?= $more ?>" title="Mehr Informationen über Managed Hosting"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=E-Commerce%20und%20Application%20Hosting" class="ast-button d-inline-block">Anfrage E-Commerce</a>
    </div>

</div>
