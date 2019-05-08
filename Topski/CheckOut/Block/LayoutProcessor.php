<?php

 namespace Topski\CheckOut\Block;
 
 class LayoutProcessor {
   
 /**
 * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
 * @param array $jsLayout
 * @return array
 */

 public function afterProcess(
  \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
  array $jsLayout
 ){
   
   $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']['street'] = [
    'component' => 'Magento_Ui/js/form/components/group',
    'required' => false,
    'dataScope' => 'shippingAddress.street',
    'provider' => 'checkoutProvider',
    'sortOrder' => 60,
    'type' => 'group',
    'children' => [

     [
      'label' => __('Street Address 1'),
      'component' => 'Magento_Ui/js/form/element/abstract',
      'config' => [
       'customScope' => 'shippingAddress',
       'template' => 'ui/form/field',
       'elementTmpl' => 'ui/form/element/input'
      ],
      'dataScope' => '0',
      'provider' => 'checkoutProvider',
      'validation' => [
       'required-entry' => true,
       'min_text_len‌​gth' => 1,
       'max_text_length' => 32
      ]
     ],
   
     [
      'label' => __('Street Address 2'),
      'component' => 'Magento_Ui/js/form/element/abstract',
      'config' => [
       'customScope' => 'shippingAddress',
       'template' => 'ui/form/field',
       'elementTmpl' => 'ui/form/element/input'
      ],
      'dataScope' => '1',
      'provider' => 'checkoutProvider',
      'validation' => [
       'required-entry' => false,
       'min_text_len‌​gth' => 1,
       'max_text_length' => 32
      ],
     ],
  
    ]

   ];
 
   $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['afterMethods']['children']['billing-address-form']['children']['form-fields']['children']['street'] = [
    'component' => 'Magento_Ui/js/form/components/group',
    'required' => false,
    'dataScope' => 'billingAddressshared.street',
    'provider' => 'checkoutProvider',
    'sortOrder' => 60,
    'type' => 'group',
    'children' => [
    
     [
      'label' => __('Street Address 1'),
      'component' => 'Magento_Ui/js/form/element/abstract',
      'config' => [
       'customScope' => 'billingAddress',
       'template' => 'ui/form/field',
       'elementTmpl' => 'ui/form/element/input'
      ],
      'dataScope' => '0',
      'provider' => 'checkoutProvider',
      'validation' => [
       'required-entry' => true,
       'min_text_len‌​gth' => 1,
       'max_text_length' => 32
      ]
     ],
   
     [
      'label' => __('Street Address 2'),
      'component' => 'Magento_Ui/js/form/element/abstract',
      'config' => [
       'customScope' => 'billingAddress',
       'template' => 'ui/form/field',
       'elementTmpl' => 'ui/form/element/input'
      ],
      'dataScope' => '1',
      'provider' => 'checkoutProvider',
      'validation' => [
       'required-entry' => false,
       'min_text_len‌​gth' => 1,
       'max_text_length' => 32
      ]
     ],
  
    ]

   ];
 
   return $jsLayout;

  }

 }

?>