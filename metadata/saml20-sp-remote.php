<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

// $metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
//     'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
//     'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
// );

$metadata['urn:mace:umu.se:saml:ckan:sp'] = array(
    'AssertionConsumerService' => 'http://172.16.99.172/acs',
    'SingleLogoutService' => 'http://172.16.99.170/sso/logout',
);
