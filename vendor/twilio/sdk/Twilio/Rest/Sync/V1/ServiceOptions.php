<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Sync\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions {
    /**
     * @param string $friendlyName Human-readable name for this service instance
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @param bool $reachabilityWebhooksEnabled true or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     * @return CreateServiceOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        return new CreateServiceOptions($friendlyName, $webhookUrl, $reachabilityWebhooksEnabled, $aclEnabled, $reachabilityDebouncingEnabled, $reachabilityDebouncingWindow, $webhooksFromRestEnabled);
    }

    /**
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @param string $friendlyName Human-readable name for this service instance
     * @param bool $reachabilityWebhooksEnabled True or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     * @return UpdateServiceOptions Options builder
     */
    public static function update($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        return new UpdateServiceOptions($webhookUrl, $friendlyName, $reachabilityWebhooksEnabled, $aclEnabled, $reachabilityDebouncingEnabled, $reachabilityDebouncingWindow, $webhooksFromRestEnabled);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param string $friendlyName Human-readable name for this service instance
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @param bool $reachabilityWebhooksEnabled true or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     */
    public function __construct($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * Human-readable name for this service instance
     *
     * @param string $friendlyName Human-readable name for this service instance
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A URL that will receive event updates when objects are manipulated.
     *
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * `true` or `false` - controls whether this instance fires webhooks when client endpoints connect to Sync Defaults to false.
     *
     * @param bool $reachabilityWebhooksEnabled true or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * `true` or `false` - determines whether token identities must be granted access to Sync objects via the [Permissions API](https://www.twilio.com/docs/api/sync/rest/sync-rest-api-permissions) in this Service.
     *
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @return $this Fluent Builder
     */
    public function setAclEnabled($aclEnabled) {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * `true` or `false` - If false, every endpoint disconnection immediately yields a reachability webhook (if enabled). If true, then 'disconnection' webhook events will only be fired after a configurable delay. Intervening reconnections would effectively cancel that webhook. Defaults to false.
     *
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled($reachabilityDebouncingEnabled) {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * Reachability webhook delay period in milliseconds. Determines the delay after which a Sync identity is declared actually offline, measured from the moment the last running client disconnects. If all endpoints remain offline throughout this delay, then reachability webhooks will be fired (if enabled). A reconnection by any endpoint during this window — from the same identity — means no reachability webhook would be fired. Must be between 1000 and 30000. Defaults to 5000.
     *
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow($reachabilityDebouncingWindow) {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * `true` or `false` - controls whether this instance fires webhooks when Sync objects are updated through REST. Defaults to false.
     *
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled($webhooksFromRestEnabled) {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Sync.V1.CreateServiceOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @param string $friendlyName Human-readable name for this service instance
     * @param bool $reachabilityWebhooksEnabled True or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     */
    public function __construct($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * A URL that will receive event updates when objects are manipulated.
     *
     * @param string $webhookUrl A URL that will receive event updates when objects
     *                           are manipulated.
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * Human-readable name for this service instance
     *
     * @param string $friendlyName Human-readable name for this service instance
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * True or false - controls whether this instance fires webhooks when client endpoints connect to Sync Defaults to false.
     *
     * @param bool $reachabilityWebhooksEnabled True or false - controls whether
     *                                          this instance fires webhooks when
     *                                          client endpoints connect to Sync
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * `true` or `false` - determines whether token identities must be granted access to Sync objects via the [Permissions API](https://www.twilio.com/docs/api/sync/rest/sync-rest-api-permissions) in this Service.
     *
     * @param bool $aclEnabled true or false - determines whether token identities
     *                         must be granted access to Sync objects via the
     *                         Permissions API in this Service.
     * @return $this Fluent Builder
     */
    public function setAclEnabled($aclEnabled) {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * `true` or `false` - If false, every endpoint disconnection immediately yields a reachability webhook (if enabled). If true, then 'disconnection' webhook events will only be fired after a configurable delay. Intervening reconnections would effectively cancel that webhook. Defaults to false.
     *
     * @param bool $reachabilityDebouncingEnabled true or false - Determines
     *                                            whether transient disconnections
     *                                            (i.e. an immediate reconnect
     *                                            succeeds) cause reachability
     *                                            webhooks.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled($reachabilityDebouncingEnabled) {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * Reachability webhook delay period in milliseconds. Determines the delay after which a Sync identity is declared actually offline, measured from the moment the last running client disconnects. If all endpoints remain offline throughout this delay, then reachability webhooks will be fired (if enabled). A reconnection by any endpoint during this window — from the same identity — means no reachability webhook would be fired. Must be between 1000 and 30000. Defaults to 5000.
     *
     * @param int $reachabilityDebouncingWindow Determines how long an identity
     *                                          must be offline before reachability
     *                                          webhooks fire.
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow($reachabilityDebouncingWindow) {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * `true` or `false` - controls whether this instance fires webhooks when Sync objects are updated through REST. Defaults to false.
     *
     * @param bool $webhooksFromRestEnabled true or false - controls whether this
     *                                      instance fires webhooks when Sync
     *                                      objects are updated through REST
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled($webhooksFromRestEnabled) {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Sync.V1.UpdateServiceOptions ' . implode(' ', $options) . ']';
    }
}