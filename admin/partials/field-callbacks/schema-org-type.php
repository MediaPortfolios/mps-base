<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Media_Portfolios
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Media Portfolios <dev@mediaportfolios.com>
 */

namespace CC_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'mps-text' ),
	'Airline'     => __( 'Airline', 'mps-text' ),
	'Corporation' => __( 'Corporation', 'mps-text' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'mps-text' ),
		'CollegeOrUniversity' => __( '— College or University', 'mps-text' ),
		'ElementarySchool'    => __( '— Elementary School', 'mps-text' ),
		'HighSchool'          => __( '— High School', 'mps-text' ),
		'MiddleSchool'        => __( '— Middle School', 'mps-text' ),
		'Preschool'           => __( '— Preschool', 'mps-text' ),
		'School'              => __( '— School', 'mps-text' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'mps-text' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'mps-text' ),
		'AnimalShelter' => __( '— Animal Shelter', 'mps-text' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'mps-text' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'mps-text' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'mps-text' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'mps-text' ),
			'AutoRental'       => __( '—— Auto Rental', 'mps-text' ),
			'AutoRepair'       => __( '—— Auto Repair', 'mps-text' ),
			'AutoWash'         => __( '—— Auto Wash', 'mps-text' ),
			'GasStation'       => __( '—— Gas Station', 'mps-text' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'mps-text' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'mps-text' ),

		'ChildCare'            => __( '— Child Care', 'mps-text' ),
		'Dentist'              => __( '— Dentist', 'mps-text' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'mps-text' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'mps-text' ),
			'FireStation'   => __( '—— Fire Station', 'mps-text' ),
			'Hospital'      => __( '—— Hospital', 'mps-text' ),
			'PoliceStation' => __( '—— Police Station', 'mps-text' ),

		'EmploymentAgency' => __( '— Employment Agency', 'mps-text' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'mps-text' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'mps-text' ),
			'AmusementPark'      => __( '—— Amusement Park', 'mps-text' ),
			'ArtGallery'         => __( '—— Art Gallery', 'mps-text' ),
			'Casino'             => __( '—— Casino', 'mps-text' ),
			'ComedyClub'         => __( '—— Comedy Club', 'mps-text' ),
			'MovieTheater'       => __( '—— Movie Theater', 'mps-text' ),
			'NightClub'          => __( '—— Night Club', 'mps-text' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'mps-text' ),
			'AccountingService' => __( '—— Accounting Service', 'mps-text' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'mps-text' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'mps-text' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'mps-text' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'mps-text' ),
			'Bakery'             => __( '—— Bakery', 'mps-text' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'mps-text' ),
			'Brewery'            => __( '—— Brewery', 'mps-text' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'mps-text' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'mps-text' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'mps-text' ),
			'Restaurant'         => __( '—— Restaurant', 'mps-text' ),
			'Winery'             => __( '—— Winery', 'mps-text' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'mps-text' ),
			'PostOffice' => __( '—— Post Office', 'mps-text' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'mps-text' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'mps-text' ),
			'DaySpa'       => __( '—— Day Spa', 'mps-text' ),
			'HairSalon'    => __( '—— Hair Salon', 'mps-text' ),
			'HealthClub'   => __( '—— Health Club', 'mps-text' ),
			'NailSalon'    => __( '—— Nail Salon', 'mps-text' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'mps-text' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'mps-text' ),
			'Electrician'       => __( '—— Electrician', 'mps-text' ),
			'GeneralContractor' => __( '—— General Contractor', 'mps-text' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'mps-text' ),
			'HousePainter'      => __( '—— House Painter', 'mps-text' ),
			'Locksmith'         => __( '—— Locksmith', 'mps-text' ),
			'MovingCompany'     => __( '—— MovingCompany', 'mps-text' ),
			'Plumber'           => __( '—— Plumber', 'mps-text' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'mps-text' ),

		'InternetCafe' => __( '— Internet Cafe', 'mps-text' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'mps-text' ),
			'Attorney' => __( '—— Attorney', 'mps-text' ),
			'Notary'   => __( '—— Notary', 'mps-text' ),

		'Library' => __( '— Library', 'mps-text' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'mps-text' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'mps-text' ),
			'Campground'      => __( '—— Campground', 'mps-text' ),
			'Hostel'          => __( '—— Hostel', 'mps-text' ),
			'Hotel'           => __( '—— Hotel', 'mps-text' ),
			'Motel'           => __( '—— Motel', 'mps-text' ),
			'Resort'          => __( '—— Resort', 'mps-text' ),

		'ProfessionalService' => __( '— Professional Service', 'mps-text' ),
		'RadioStation'        => __( '— Radio Station', 'mps-text' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'mps-text' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'mps-text' ),
		'SelfStorage'         => __( '— Self Storage', 'mps-text' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'mps-text' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'mps-text' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'mps-text' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'mps-text' ),
			'GolfCourse'         => __( '—— Golf Course', 'mps-text' ),
			'HealthClub'         => __( '—— Health Club', 'mps-text' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'mps-text' ),
			'SkiResort'          => __( '—— Ski Resort', 'mps-text' ),
			'SportsClub'         => __( '—— Sports Club', 'mps-text' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'mps-text' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'mps-text' ),

		// Store types.
		'Store' => __( '— Store', 'mps-text' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'mps-text' ),
			'BikeStore'           => __( '—— Bike Store', 'mps-text' ),
			'BookStore'           => __( '—— Book Store', 'mps-text' ),
			'ClothingStore'       => __( '—— Clothing Store', 'mps-text' ),
			'ComputerStore'       => __( '—— Computer Store', 'mps-text' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'mps-text' ),
			'DepartmentStore'     => __( '—— Department Store', 'mps-text' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'mps-text' ),
			'Florist'             => __( '—— Florist', 'mps-text' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'mps-text' ),
			'GardenStore'         => __( '—— Garden Store', 'mps-text' ),
			'GroceryStore'        => __( '—— Grocery Store', 'mps-text' ),
			'HardwareStore'       => __( '—— Hardware Store', 'mps-text' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'mps-text' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'mps-text' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'mps-text' ),
			'LiquorStore'         => __( '—— Liquor Store', 'mps-text' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'mps-text' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'mps-text' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'mps-text' ),
			'MusicStore'          => __( '—— Music Store', 'mps-text' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'mps-text' ),
			'OutletStore'         => __( '—— Outlet Store', 'mps-text' ),
			'PawnShop'            => __( '—— Pawn Shop', 'mps-text' ),
			'PetStore'            => __( '—— Pet Store', 'mps-text' ),
			'ShoeStore'           => __( '—— Shoe Store', 'mps-text' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'mps-text' ),
			'TireShop'            => __( '—— Tire Shop', 'mps-text' ),
			'ToyStore'            => __( '—— Toy Store', 'mps-text' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'mps-text' ),

		'TelevisionStation'        => __( '— Television Station', 'mps-text' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'mps-text' ),
		'TravelAgency'             => __( '— Travel Agency', 'mps-text' ),

	'MedicalOrganization' => __( 'Medical Organization', 'mps-text' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'mps-text' ),
	'PerformingGroup'     => __( 'Performing Group', 'mps-text' ),
	'SportsOrganization'  => __( 'Sports Organization', 'mps-text' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'mps-text' ) )
);
$html .= '</p>';

echo $html;