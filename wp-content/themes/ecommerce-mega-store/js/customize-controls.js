( function( api ) {

	// Extends our custom "ecommerce-mega-store" section.
	api.sectionConstructor['ecommerce-mega-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );