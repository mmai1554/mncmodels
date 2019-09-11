<?php
$Hosting = [
	['', '', 'monatlich', 'monatlich', 'monatlich' ],
	['emph mi-nobreak', 'Hosting Haupt-Website', '40,- EUR', '50,- EUR', '70,- EUR' ],
	['', 'Jede weitere Website', '20,- EUR', '30,- EUR', '45,- EUR' ],
	['', 'DSGVO Aktualisierung nach Installation', '#', '#', '#' ],
	['', 'Nächtliches Backup', '#', '#', '#' ],
	['', 'Monitoring & Desaster-Recovery', '#', '#', '#' ],
	['', 'Sicherheitsupdates', '#', '#', '#' ],
	['', 'Wordpress- und Plugin-Updates', 'X', '#', '#' ],
	['', 'Wordpress Sicherheitspaket', 'X', '#', '#' ],
	['', 'MNC-Pagebuilder-Lizenz', 'X', 'X', '#' ],
	['', 'Astra-Pro-Theme', 'X', 'X', '#' ],
	['combine', 'Allgemeine Hosting-Features:' ],
	['', 'Domains enthalten', '1', '1', '1' ],
	['mi-nobreak', 'Zusätzliche de-Domain', '0,50 €', '0,50 €', '0,50 €' ],
	['mi-nobreak', 'Zusätzliche com-Domain', '1,- €', '1,- €', '1,- €' ],
	['combine', 'Fast alle weiteren Top-Level-Domains sind erhältlich - Sprechen Sie uns an für eine komplette Liste mit Preisen' ],
	['', 'SSL-Zertifikate für alle Domains<br>(Let\'s Encrypt)','#', '#', '#'],
	['', 'Traffic', 'unbegrenzt (Fair-Use)', 'unbegrenzt (Fair-Use)', 'unbegrenzt (Fair-Use)' ],
	['', 'E-Mail', '#', '#', '#' ],
];
$render_row = function($row) {
    $render_col = function($col) {
        if($col == '#') {
            return '<td><img src="/wp-content/themes/mainetcare-theme/assets/mi-tick.svg" alt="Ja, Leistung ist enthalten"></td>';
        }
        if($col == 'X') {
            return '<td><img class="cross" src="/wp-content/themes/mainetcare-theme/assets/mi-cross-grey.svg" alt="Nein, Leistung ist nicht enthalten"></td>';
        }
        return '<td>'.$col.'</td>';
    };
    $class = $row[0];
    if($class == 'combine') {
      return sprintf('<tr><td>&nbsp;</td><td colspan="3" class="mi-table-subtitle">%s</td></tr>', $row[1]);
    }
	$rowclass = $row[0] == '' ? '' : ' class="'.$row[0].'"';
    $html = [];
    $html[] = "<tr$rowclass>";
    for($i=1;$i<count($row);$i++) {
        $html[] = $render_col($row[$i]);
    }
    $html[] = '</tr>';
    return implode("\n", $html);
};
?>
<div class="hosting-prices pricetable">
    <table id="PricesHosting" class="mi-table-prices">
        <tr>
            <th class="emptycell">&nbsp;</th>
            <th>Managed Premium Hosting</th>
            <th>Managed Wordpress Hosting<br>(natürlich auch Premium)
                <span style="display:inline-block;width:15px;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.25 11.25"><defs><style>.a{fill:#ffdd67;}.b{fill:#664e27;}.c{fill:#917524;}</style></defs><title>emoticon_winking</title><circle class="a" cx="5.63" cy="5.63" r="5.63"/><circle class="b" cx="3.8" cy="5.55" r="0.94"/><path class="c" d="M9.23,4.79A2.7,2.7,0,0,0,7,4.2c-.11,0-.2-.38-.07-.4a3.09,3.09,0,0,1,2.53.68C9.59,4.56,9.31,4.86,9.23,4.79Z"/><path class="c" d="M4.22,3.15A2.69,2.69,0,0,0,2,3.74c-.08.07-.36-.23-.26-.31a3.06,3.06,0,0,1,2.53-.68C4.42,2.77,4.33,3.17,4.22,3.15Z"/><path class="b" d="M9,6.05a1.53,1.53,0,0,0-1.31-1,1.54,1.54,0,0,0-1.31,1c0,.06.14.18.22.12a1.72,1.72,0,0,1,1.09-.34,1.69,1.69,0,0,1,1.09.34C8.9,6.23,9.06,6.11,9,6.05Z"/><path class="b" d="M7.9,7.54a7.75,7.75,0,0,1-3.59.54c-.14,0-.22.06-.19.18.38,1.3,3.19,1.3,4-.51C8.17,7.54,8,7.48,7.9,7.54Z"/></svg>
                </span>
            </th>
            <th>Website-Builder Hosting</th>
        </tr>
        <?php foreach($Hosting as $row) {echo($render_row($row)); }; ?>
    </table>
</div>