
 var config = {
    map: {
        '*': {
            // This code helps us to override the knockout HTML template file.
            'Magento_Checkout/template/minicart/item/default.html': 'PHPNeus_Qty/template/minicart/item/default.html',
            // The bellow codes help us to override the JS files
            'sidebar': 'PHPNeus_Qty/js/sidebar',
            'Magento_Checkout/js/view/minicart': 'PHPNeus_Qty/js/view/minicart'
        }
    }
};