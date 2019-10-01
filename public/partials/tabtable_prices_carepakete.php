<?php
//$arrHaveAll = [
//	'Regelmäßige Software-Aktualisierungen Ihres CMS inklusive Tests, ob alles noch einwandfrei funktioniert.',
//	'Betrieb Ihrer Website auf leistungsfähigen Internetserver zur Steigerung der Ladezeit. (Managed Hosting)',
//	'Nächtliche Datensicherung.',
//	'Überwachung auf Störungen und selbstständiges Eingreifen.',
//	'Verschlüsselung der Homepage mit Zertifikat.',
//	'DSGVO-Anpassung im Impressum.',
//	'Für Wordpress-Besitzer: Extra-Sicherheitspaket.',
//];
$arrHaveAll = [
	'Schnelle Seiten durch leistungsfähige Server',
	'Nie mehr Fragen zur Technik - Wir erledigen das',
	'Immer Aktueller Stand Ihrer Software',
	'Sicher im Netz',
];
$li         = function ( $list ) {
	$html = [];
	foreach ( $list as $item ) {
		$html[] = '<li>' . $item . '</li>';
	}

	return implode( "\n", $html );
};
$ticklist   = function ( $inner ) {
	return '<ul class="mi-ticks mi-smaller">' . $inner . '</ul>';
};

$title_1 = 'Fundament';
$title_2 = 'Wachstum';
$title_3 = 'Ernte';

$price_1 = '<span>€</span> 70';
$price_2 = '<span>€</span> 100';
$price_3 = 'Zum Festpreis auf Anfrage';

$img_1 = '/wp-content/uploads/2019/06/blumentopf.svg';
$img_2 = '/wp-content/uploads/2019/06/pflanze_target.svg';
$img_3 = '/wp-content/uploads/2019/06/gartenschaufel.svg';

$more1 = '/website-hosting-wartung-und-service';
$more2 = '/website-wartung-service-und-pflege';
$more3 = '/website-komplettbetreuung';

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
        <h3><small>Care-Paket<br></small>
			<?= $title_1 ?>
        </h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <span>€</span><strong>60,-</strong><br>
        <small>monatlich pro Website<br></small>
        <small>Einrichtung: Einmalig € 80,-</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p>Wir sorgen dafür, dass Ihre Website schnell, fehlerfrei und sicher im Netz steht.</p>
        <div class="mi-price-leistungen">
            <!--            <h4>Leistungen:</h4>-->
			<?= $ticklist( $li( $arrHaveAll ) ) ?>
			<?= $ticklist( $li( [
				'Inhaltliche Pflege? Kein Problem: Wird nach Aufwand erledigt<br><small>(75,- EUR pro Std, 15-Minuten Taktung)</small>',
			] ) ) ?>
        </div>
        <p>Perfekt geeignet für alle Besitzer üblicher Geschäfts- oder Vereins-Websites.</p>
        <p><a href="<?= $more1 ?>" title="Mehr Informationen über Wartung und Betreuung"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=Fundament" class="ast-button d-inline-block">Ja, <?= $title_1 ?> ist mein Paket ...</a>
    </div>

	<?php $order = 0; ?>
    <!--Col 2-->
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_2 ?>" class="aligncenter align-bottom" src="<?= $img_2 ?>" width="60">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3>
            <small>Care-Paket<br></small>
			<?= $title_2 ?>
        </h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <span>€</span><strong>95,-</strong><br>
        <small>monatlich pro Website<br></small>
        <small>Einrichtung: Einmalig € 80,-</small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p>Wir sorgen für die Technik und pflegen Ihre Website auch inhaltlich.</p>
        <div class="mi-price-leistungen">
            <!--            <h4>Leistungen:</h4>-->
			<?= $ticklist( $li( [
				'Wartung + Betrieb + Service wie bei Care Paket Fundament',
				'Zusätzlich jeden Monat 1/2&nbsp;Stunde Website-Pflege-Kontingent inklusive<br><small>Das reicht für ca. 2&nbsp;Standard-Aufträge</small>',
			] ) ) ?>
			<?= $ticklist( $li( [
				'Noch mehr Pflege? Kein Problem: Wird nach Aufwand erledigt<br><small>(75,- EUR pro Std, 15-Minuten Taktung)</small>',
			] ) ) ?>
        </div>
        <p>Geeignet für alle Besitzer von Geschäfts- oder Vereins-Websites, die ihre Website regelmäßig moderat aktualisieren.</p>
        <p><a href="<?= $more2 ?>" title="Mehr Informationen über Managed Hosting"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=Wachstum" class="ast-button d-inline-block">Ja, <?= $title_2 ?> ist mein Paket ...</a>
    </div>

	<?php $order = 0; ?>
    <!--Col 3-->
    <div style="order:<?= $order ++ ?>;display:flex;" class="mi-pricetable-cell mi-no-border">
        <img alt="<?= $title_3 ?>" class="aligncenter align-bottom" src="<?= $img_3 ?>" width="50">
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--head">
        <h3>
            <small>Care-Paket<br></small>
			<?= $title_3 ?>
        </h3>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-price">
        <span>ab €</span><strong>300,-</strong><br>
        <small>monatlich pro Website<br></small>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell">
        <p>Das Rundum-Sorglos-Paket für Marketing-Websites. Ihre Website wird in allen Bereichen betreut.
        </p>
        <div class="mi-price-leistungen">
            <!--            <h4>Leistungen:</h4>-->
			<?= $ticklist( $li( [
				'Technik, Wartung, Inhalt - alles inklusive',
				'Besucher-Analysen, Suchmaschinenoptimierung und Keyword-Recherche',
				'Managed-Hosting speziell für den Bedarf Ihrer Applikation',
                'Sie erhalten ein individuelles Angebot'
			] ) ) ?>
        </div>
        <p>Geeignet für Online-Shop Besitzer, größere Vereinsseiten oder Business-Websites mit kontinuierlichem Optimierungsbedarf.</p>
        <p><a href="<?= $more3 ?>" title="Mehr Informationen über Managed Hosting"><small>Mehr Informationen...</small></a></p>
    </div>
    <div style="order:<?= $order ++ ?>;" class="mi-pricetable-cell mi-pricetable-cell--foot mi-cta">
        <a href="/anfrage?mi-products=Ernte" class="ast-button d-inline-block">Ja, <?= $title_3 ?> ist mein Paket ...</a>
    </div>

</div>
