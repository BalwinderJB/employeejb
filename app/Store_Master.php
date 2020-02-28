<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Master extends Model
{
    public $timestamps = false;

    protected $fillable = ['country_id', 'state_id', 'city_id', 'area_id', 'category_id', 'private_store_name', 'private_person_name',
        'private_person_email', 'private_number_1', 'private_number_1', 'private_address_line_1', 'private_address_line_2', 'private_address_line_3',
        'private_pincode', 'public_store_name', 'public_person_name', 'public_person_email', 'public_number_1', 'public_number_2', 'public_address_line_1',
        'public_address_line_2', 'public_address_line_3', 'public_pincode', 'passcode', 'valid_type', 'from_date', 'to_date', 'till_date', 'status',
        'store_type', 'business_type', 'about_us', 'why_us', 'term_condition', 'contact_person_name', 'contact_person_email', 'contact_number_1',
        'contact_number_2', 'contact_address_line_1', 'contact_address_line_2', 'contact_address_line_3', 'contact_pincode', 'latitude', 'longitude',
        'store_menu_1', 'store_menu_2', 'store_menu_3', 'is_top_picks', 'top_picks_valid_type', 'top_picks_from_date', 'top_picks_to_date',
        'top_picks_valid_till', 'is_preffered', 'preffered_valid_type', 'preffered_from_date', 'preffered_to_date', 'preffered_valid_till',
        'is_trusted', 'trusted_valid_type', 'trusted_from_date', 'trusted_to_date', 'trusted_valid_till', 'is_membership_type', 'membership_type',
        'rating', 'web_banner_1', 'web_banner_2', 'web_banner_3', 'web_logo', 'app_banner_1', 'app_banner_2', 'app_banner_3', 'app_logo', 'opening_time',
        'closing_time', 'days_type', 'opening_days', 'website_url', 'website_type', 'created_at', 'deleted_at', 'updated_at', 'location_type',

        'is_food_on_demand', 'is_approved_by_designer', 'is_approved_by_content_writer', 'is_approved_by_manager', 'designer_approved_date',

        'logo', 'banner', 'physical_agreement', 'is_paid', 'is_design_picked', 'design_picked_by', 'design_picked_on', 'is_design_uploaded',
        'design_uploaded_on', 'is_content_picked', 'content_picked_by', 'content_picked_on', 'is_content_uploaded', 'content_uploaded_on',
        'is_design_approved', 'is_content_approved', 'is_all_approved', 'all_approved_on', 'content_issue_comments', 'design_issue_comments',

        'is_food_on_demand', 'is_approved_by_designer', 'is_approved_by_content_writer', 'is_approved_by_manager',
        'designer_approved_date','employee_id'


    ];

    protected $table = 'store_master2';
}

