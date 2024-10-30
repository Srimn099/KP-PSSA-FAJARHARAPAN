(function($) {
    $.fn.dynamicMultiplier = function(options) {
        // Default settings
        const settings = $.extend({
            inputSelectors: [], // Array of input selectors
            resultSelector: '#result', // Selector untuk hasil
            formatCurrency: true // Opsi untuk format mata uang
        }, options);

        function formatCurrency(value) {
            return parseFloat(value).toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0,
            });
        }

        function calculateTotal() {
            if (settings.inputSelectors.length < 2) {
                console.warn("Minimal dua input harus diberikan untuk perkalian.");
                return;
            }

            const aValue = $(settings.inputSelectors[0]).val().replace(/[^0-9.-]+/g, '');
            const bValue = $(settings.inputSelectors[1]).val().replace(/[^0-9.-]+/g, '');

            const a = parseFloat(aValue) || 0;
            const b = parseFloat(bValue) || 0;

            const total = a * b; // Hitung perkalian
            $(settings.resultSelector).val(settings.formatCurrency ? formatCurrency(total) : total);
        }

        // Event listeners
        settings.inputSelectors.forEach(selector => {
            $(selector).on('change', calculateTotal);
        });

        return this; // Return this for chainability
    };
}(jQuery));
