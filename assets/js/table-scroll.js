(function () {
    function wrapTablesForMobileScroll() {
        var tables = document.querySelectorAll('table');

        tables.forEach(function (table) {
            if (table.closest('.table-responsive, .responsive-table-scroll')) {
                return;
            }

            var wrapper = document.createElement('div');
            wrapper.className = 'responsive-table-scroll';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', wrapTablesForMobileScroll);
    } else {
        wrapTablesForMobileScroll();
    }
})();
