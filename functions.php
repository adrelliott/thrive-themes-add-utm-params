<?php


/**
 * Filter Add URL params (like UTM codes and dynamic content) to every form in TCB and Leads
 *
 * @param $lead_group     - (WP Post Object) Lead Group content type
 * @param $form_type      - (WP Post Object) Form Type content type
 * @param $form_variation - (Array) Form variation data
 *
 * @return string - additional dynamic code to appear before </form> tag
 */
function leads_add_utms_to_forms( $additional_content, $lead_group, $form_type, $form_variation ) {

	// Define & retrieve URL params here
	$url_params = [
		//utm name => custom field no in Active Campaign
		'utm_source' => 3, 
		'utm_medium' => 4, 
		'utm_campaign' => 5, 
		'utm_content' => 6, 
		'utm_term' => 7,

		// Other Active Campaign fields
		'city' => 1

	];
	$extra_fields = "";
	parse_str($_SERVER["QUERY_STRING"], $url_array);

	// Now create the extra hidden fields if the utm param exists
	foreach ( $url_params as $key => $custom_field) {
		if ( array_key_exists( $key, $url_array ) ) {
			$utm_value = $url_array[$key];
			$extra_fields .= "<input type='hidden' name='field[$custom_field]' value='$utm_value' ac-fieldname='$key' />";
		}
	}

	return $additional_content . $extra_fields;
}

add_filter( "tve_additional_fields", "leads_add_utms_to_forms", 10, 4 );
