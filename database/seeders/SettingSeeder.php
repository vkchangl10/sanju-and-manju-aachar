<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'brand_name',
                'value' => 'SANJUMANJU',
                'type' => 'string',
                'group' => 'brand',
                'label' => 'Brand Name',
                'description' => 'Displayed brand name',
            ],
            [
                'key' => 'brand_tagline',
                'value' => 'Traditional Indian Pickles',
                'type' => 'string',
                'group' => 'brand',
                'label' => 'Brand Tagline',
                'description' => 'Short brand descriptor',
            ],
            [
                'key' => 'brand_description',
                'value' => 'Hand-crafted traditional Indian pickles, made with care and family recipes.',
                'type' => 'text',
                'group' => 'brand',
                'label' => 'Brand Description',
                'description' => 'Long-form brand description',
            ],
            [
                'key' => 'whatsapp_number',
                'value' => env('WHATSAPP_NUMBER', '[PLACEHOLDER_WHATSAPP_NUMBER]'),
                'type' => 'string',
                'group' => 'contact',
                'label' => 'WhatsApp Number',
                'description' => 'International format without +',
            ],
            [
                'key' => 'brand_phone',
                'value' => env('BRAND_PHONE', '[PLACEHOLDER_PHONE]'),
                'type' => 'string',
                'group' => 'contact',
                'label' => 'Brand Phone',
                'description' => 'Customer support phone number',
            ],
            [
                'key' => 'brand_email',
                'value' => env('BRAND_EMAIL', '[PLACEHOLDER_EMAIL]'),
                'type' => 'string',
                'group' => 'contact',
                'label' => 'Brand Email',
                'description' => 'Primary support email address',
            ],
            [
                'key' => 'brand_address',
                'value' => env('BRAND_ADDRESS', '[PLACEHOLDER_ADDRESS]'),
                'type' => 'text',
                'group' => 'contact',
                'label' => 'Brand Address',
                'description' => 'Physical postal address',
            ],
            [
                'key' => 'instagram_url',
                'value' => env('INSTAGRAM_URL', '[PLACEHOLDER_INSTAGRAM]'),
                'type' => 'string',
                'group' => 'social',
                'label' => 'Instagram URL',
                'description' => 'Full Instagram profile URL',
            ],
            [
                'key' => 'facebook_url',
                'value' => env('FACEBOOK_URL', '[PLACEHOLDER_FACEBOOK]'),
                'type' => 'string',
                'group' => 'social',
                'label' => 'Facebook URL',
                'description' => 'Full Facebook page URL',
            ],
            [
                'key' => 'seo_default_title',
                'value' => 'SANJUMANJU — Traditional Indian Pickles',
                'type' => 'string',
                'group' => 'seo',
                'label' => 'Default SEO Title',
                'description' => 'Fallback page title',
            ],
            [
                'key' => 'seo_default_description',
                'value' => 'SANJUMANJU crafts traditional Indian pickles using family recipes, slow sun-maturing and the finest seasonal ingredients. Order for yourself or send as a gift.',
                'type' => 'text',
                'group' => 'seo',
                'label' => 'Default SEO Description',
                'description' => 'Fallback meta description',
            ],
            [
                'key' => 'whatsapp_general_message',
                'value' => 'Hello SANJUMANJU, I would like to know more about your pickles.',
                'type' => 'text',
                'group' => 'general',
                'label' => 'WhatsApp General Message',
                'description' => 'Default general WhatsApp enquiry message',
            ],
            [
                'key' => 'whatsapp_product_message',
                'value' => 'Hello SANJUMANJU, I am interested in [PRODUCT NAME].',
                'type' => 'text',
                'group' => 'general',
                'label' => 'WhatsApp Product Message Template',
                'description' => '[PRODUCT NAME] placeholder will be replaced',
            ],
            [
                'key' => 'whatsapp_gifting_message',
                'value' => 'Hello SANJUMANJU, I would like to know more about your gifting options.',
                'type' => 'text',
                'group' => 'general',
                'label' => 'WhatsApp Gifting Message',
                'description' => 'Default gifting WhatsApp enquiry message',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
