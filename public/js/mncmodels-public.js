(function ($) {
    "use strict";
    $.fn.responsiveTable = function() {
        var toggleColumns = function($table) {
            var selectedControls = [];
            $table.find(".Tab").each( function() {
                selectedControls.push( $(this).attr("aria-selected") );
            });
            var cellCount = 0, colCount = 0;
            var setNum = $table.find(".mi-pricetable-cell").length / Math.max( $table.find(".Tab").length);
            $table.find(".mi-pricetable-cell").each( function() {
                $(this).addClass("hiddenSmall");
                if( selectedControls[colCount] === "true" ) $(this).removeClass("hiddenSmall");
                cellCount++;
                if( cellCount % setNum === 0 ) colCount++;
            });
        };
        $(this).each(function(){ toggleColumns($(this)); });

        $(this).find(".Tab").click( function() {
            $(this).attr("aria-selected","true").siblings().attr("aria-selected","false");
            toggleColumns( $(this).parents(".Rtable") );
        });

    };
    $( document ).ready(function() {
        $(".js-RtableTabs").responsiveTable();
        // begin
        var switched = false;
        var updateTables = function() {
            if (($(window).width() < 767) && !switched ){
                switched = true;
                $("table.responsive").each(function(i, element) {
                    splitTable($(element));
                });
                return true;
            }
            else if (switched && ($(window).width() > 767)) {
                switched = false;
                $("table.responsive").each(function(i, element) {
                    unsplitTable($(element));
                });
            }
        };

        $(window).load(updateTables);
        $(window).bind("resize", updateTables);


        function splitTable(original)
        {
            original.wrap("<div class='table-wrapper' />");

            var copy = original.clone();
            copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
            copy.removeClass("responsive");

            original.closest(".table-wrapper").append(copy);
            copy.wrap("<div class='pinned' />");
            original.wrap("<div class='scrollable' />");
        }

        function unsplitTable(original) {
            original.closest(".table-wrapper").find(".pinned").remove();
            original.unwrap();
            original.unwrap();
        }
        // end
    });

}(jQuery));
